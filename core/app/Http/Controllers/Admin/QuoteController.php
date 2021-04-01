<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Quote;
use App\BasicSetting as BS;
use App\BasicSetting;
use App\Language;
use App\Mail\ContactMail;
use App\QuoteInput;
use App\Truck;
use App\TruckDriver;
use App\QuoteInputOption;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Validator;
use Session;

class QuoteController extends Controller
{
    public function visibility()
    {
        $data['abs'] = BasicSetting::first();
        return view('admin.quote.visibility', $data)->with('trucks',Truck::all());
    }

    public function updateVisibility(Request $request) {
        $bss = BasicSetting::all();
        foreach ($bss as $key => $bs) {
            $bs->is_quote = $request->is_quote;
            $bs->save();
        }

        $request->session()->flash('success', 'Page status updated successfully!')->with('trucks',Truck::all());
        return back();
    }


    public function form(Request $request)
    {
        $lang = Language::where('code', $request->language)->firstOrFail();
        $data['lang_id'] = $lang->id;
        $data['abs'] = $lang->basic_setting;
        $data['inputs'] = QuoteInput::where('language_id', $data['lang_id'])->get();

        $data['ndaIn'] = QuoteInput::find(10);
        return view('admin.quote.form', $data);
    }

    public function formstore(Request $request)
    {

        $inname = make_input_name($request->label);
        $inputs = QuoteInput::where('language_id', $request->language_id)->get();

        $messages = [
            'options.*.required_if' => 'Options are required if field type is select dropdown/checkbox',
            'placeholder.required_unless' => 'The placeholder field is required unless field type is Checkbox'
        ];

        $rules = [
            'label' => [
                'required',
                function ($attribute, $value, $fail) use ($inname, $inputs) {
                    foreach ($inputs as $key => $input) {
                        if ($input->name == $inname) {
                            $fail("Input field already exists.");
                        }
                    }
                },
            ],
            'placeholder' => 'required_unless:type,3',
            'type' => 'required',
            'options.*' => 'required_if:type,2,3'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            $errmsgs = $validator->getMessageBag()->add('error', 'true');
            return response()->json($validator->errors());
        }

        $input = new QuoteInput;
        $input->language_id = $request->language_id;
        $input->type = $request->type;
        $input->label = $request->label;
        $input->name = $inname;
        $input->placeholder = $request->placeholder;
        $input->required = $request->required;
        $input->save();

        if ($request->type == 2 || $request->type == 3) {
            $options = $request->options;
            foreach ($options as $key => $option) {
                $op = new QuoteInputOption;
                $op->quote_input_id = $input->id;
                $op->name = $option;
                $op->save();
            }
        }

        Session::flash('success', 'Input field added successfully!');
        return "success";
    }

    public function inputDelete(Request $request)
    {
        $input = QuoteInput::find($request->input_id);
        $input->quote_input_options()->delete();
        $input->delete();
        Session::flash('success', 'Input field deleted successfully!');
        return back();
    }

    public function inputEdit($id)
    {
        $data['input'] = QuoteInput::find($id);
        if (!empty($data['input']->quote_input_options)) {
            $options = $data['input']->quote_input_options;
            $data['options'] = $options;
            $data['counter'] = count($options);
        }
        return view('admin.quote.form-edit', $data);
    }

    public function inputUpdate(Request $request)
    {
        $inname = make_input_name($request->label);
        $input = QuoteInput::find($request->input_id);
        $inputs = QuoteInput::where('language_id', $input->language_id)->get();

        // return $request->options;
        $messages = [
            'options.required_if' => 'Options are required',
            'placeholder.required_unless' => 'Placeholder is required',
            'label.required_unless' => 'Label is required',
        ];

        $rules = [
            'label' => [
                'required_unless:type,5',
                function ($attribute, $value, $fail) use ($inname, $inputs, $input) {
                    foreach ($inputs as $key => $in) {
                        if ($in->name == $inname && $inname != $input->name) {
                            $fail("Input field already exists.");
                        }
                    }
                },
            ],
            'placeholder' => 'required_unless:type,3,5',
            'options' => [
                'required_if:type,2,3',
                function ($attribute, $value, $fail) use ($request) {
                    if ($request->type == 2 || $request->type == 3) {
                        foreach ($request->options as $option) {
                            if (empty($option)) {
                                $fail('All option fields are required.');
                            }
                        }
                    }
                },
            ]
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            $errmsgs = $validator->getMessageBag()->add('error', 'true');
            return response()->json($validator->errors());
        }


        if ($request->type != 5) {
            $input->label = $request->label;
            $input->name = $inname;
        }

        // if input is checkbox then placeholder is not required
        if ($request->type != 3 && $request->type != 5) {
            $input->placeholder = $request->placeholder;
        }
        $input->required = $request->required;
        if ($request->type == 5) {
            $input->active = $request->active;
        }
        $input->save();

        if ($request->type == 2 || $request->type == 3) {
            $input->quote_input_options()->delete();
            $options = $request->options;
            foreach ($options as $key => $option) {
                $op = new QuoteInputOption;
                $op->quote_input_id = $input->id;
                $op->name = $option;
                $op->save();
            }
        }

        Session::flash('success', 'Input field updated successfully!');
        return "success";
    }

    public function options($id)
    {
        $options = QuoteInputOption::where('quote_input_id', $id)->get();
        return $options;
    }

    public function all()
    {
        $data['quotes'] = Quote::orderBy('id', 'DESC')->paginate(10);
        return view('admin.quote.quote', $data)->with('trucks',Truck::all());
    }

    public function pending()
    {
        $data['quotes'] = Quote::where('status', 0)->orderBy('id', 'DESC')->paginate(10);
        return view('admin.quote.quote', $data)->with('trucks',Truck::all());
    }

    public function processing()
    {
        $data['quotes'] = Quote::where('status', 1)->orderBy('id', 'DESC')->paginate(10);
        return view('admin.quote.quote', $data)->with('trucks',Truck::all());
    }

    public function completed()
    {
        $data['quotes'] = Quote::where('status', 2)->orderBy('id', 'DESC')->paginate(10);
        return view('admin.quote.quote', $data)->with('trucks',Truck::all());
    }

    public function rejected()
    {
        $data['quotes'] = Quote::where('status', 3)->orderBy('id', 'DESC')->paginate(10);
        return view('admin.quote.quote', $data)->with('trucks',Truck::all());
    }

    public function status(Request $request)
    {
        $quote = Quote::find($request->quote_id);
        $quote->status = $request->status;
        $quote->save();

        Session::flash('success', 'Status changed successfully!');
        return back();
    }

    public function mail(Request $request)
    {

        $rules = [
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            $errmsgs = $validator->getMessageBag()->add('error', 'true');
            return response()->json($validator->errors());
        }


        $settings = BS::first();
        $from = $settings->contact_mail;

        $sub = $request->subject;
        $msg = $request->message;
        $to = $request->email;
        $file = '';
        if($request->hasFile('pdf'))
        {
             $featured = $request->pdf;
             $featured_new_name = time().$featured->getClientOriginalName();
             $featured->move('assets/admin/img',$featured_new_name);
             $file = 'assets/admin/img/'.$featured_new_name;
            // $post->featured = 'uploads/posts/'.$featured_new_name;
            // $msg->attachData($file, [
            //         'as' => $request->pdf,
            //         'mime' => 'application/pdf',
            //     ]);

        }
        Mail::to($to)->send(new ContactMail($from, $sub, $msg, $file));




        Session::flash('success', 'Mail sent successfully!');
        return "success";
    }

    public function delete(Request $request)
    {

        $quote = Quote::findOrFail($request->quote_id);
        @unlink('assets/front/ndas/'.$quote->nda);
        $quote->delete();

        Session::flash('success', 'Quote request deleted successfully!');
        return back();
    }

    public function bulkDelete(Request $request)
    {
        $ids = $request->ids;

        foreach ($ids as $id) {
            $quote = Quote::findOrFail($id);
            @unlink('assets/front/ndas/'.$quote->nda);
            $quote->delete();
        }

        Session::flash('success', 'Quote requests deleted successfully!');
        return "success";
    }
    public function addQuote()
    {
        return view('admin.quote.create');
    }

    public function assignDriver(Request $request)
    {

        $this->validate($request,[
            'truck' => 'required',
            // 'user_id' => 'required',
            'quote_id' => 'required',
            'paddress' => 'required',
            'daddress' => 'required',
            'date' => 'required',
        ]);
        // dd($request->all());
        TruckDriver::create([
            'truck_id'=>$request->truck,
            // 'user_id'=>$request->user_id,
            'quote_id'=>$request->quote_id,
            'pick_address'=>$request->paddress,
            'drop_address'=>$request->daddress,
            'date'=>$request->date,
            'status'=>1,
        ]);


        Session::flash('success', 'Driver assigned successfully!');
return redirect()->back();
        // return response('success');
    }

    public function indexDriver()
    {
        $drivers = TruckDriver::where('user_id',Auth::guard('admin')->user()->id)->get();
        return view('admin.driver.index')->with('drivers',$drivers);
        Session::flash('success', 'Driver created successfully!');
    }

    public function driverStatus(Request $request)
    {

        // dd($request->all());
        $po = Quote::find($request->quote_id);
        $po->status = $request->status;
        $po->save();

        $user = User::findOrFail($po->user_id);
        $be = BasicExtended::first();
        $sub = 'Order Status Update';

        $to = $user->email;
         // Send Mail to Buyer
         $mail = new PHPMailer(true);
         if ($be->is_smtp == 1) {
             try {
                 $mail->isSMTP();
                 $mail->Host       = $be->smtp_host;
                 $mail->SMTPAuth   = true;
                 $mail->Username   = $be->smtp_username;
                 $mail->Password   = $be->smtp_password;
                 $mail->SMTPSecure = $be->encryption;
                 $mail->Port       = $be->smtp_port;

                 //Recipients
                 $mail->setFrom($be->from_mail, $be->from_name);
                 $mail->addAddress($user->email, $user->fname);

                 // Content
                 $mail->isHTML(true);
                 $mail->Subject = $sub;
                 $mail->Body    = 'Hello <strong>' . $user->fname . '</strong>,<br/>Your order status is '.$request->order_status.'.<br/>Thank you.';
                 $mail->send();
             } catch (Exception $e) {
                 // die($e->getMessage());
             }
         } else {
             try {

                 //Recipients
                 $mail->setFrom($be->from_mail, $be->from_name);
                 $mail->addAddress($user->email, $user->fname);


                 // Content
                 $mail->isHTML(true);
                 $mail->Subject = $sub ;
                 $mail->Body    = 'Hello <strong>' . $user->fname . '</strong>,<br/>Your order status is '.$request->order_status.'.<br/>Thank you.';

                 $mail->send();
             } catch (Exception $e) {
                 // die($e->getMessage());
             }
         }


        Session::flash('success', 'Order status changed successfully!');
        return back();
    }

    public function indexInvoice()
    {
        return view('admin.quote.invoice');
    }
}
