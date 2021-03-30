<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\FileItem;
use App\Claim;

class ClaimController extends Controller
{
    public function index()
    {
        $claims = Claim::all();
        return view('front.claim.index',compact('claims'));
    }

    public function store(Request $request)
    {  
    //    dd($request->item);

        $claim = Claim::create([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'home_phone'=>$request->home_phone,
            'mobile_phone'=>$request->mobile_phone,
            'other_phone'=>$request->other_phone,
            'address'=>$request->address,
            'city'=>$request->city,
            'province'=>$request->province,
            'postal_code'=>$request->postal_code,
            'email'=>$request->email,
            'move_date'=>$request->move_date,
            'additional_information'=>$request->information,
            'order_number'=>$request->order_number,
        ]);


   foreach($request->item as $key =>$value)
{
        $image = $value["photo"];
        $image_new_name = time().$image->getClientOriginalName();
        $image->move('assets/front/img/', $image_new_name);


        FileItem::create([
            'claims_id'=>$claim->id,
            'description'=>$value["description"],
            'photo'=>'assets/front/img/'.$image_new_name ?? '',
            'damage_desc'=>$value["damage_desc"],

        ]);
      
}

        // Session::flash('success', 'Truck created successfully!');
        return redirect()->route('claim.index');
    }

    public function show()
    {
        $claims = Claim::all();
        return view('admin.claim.show', compact('claims'));
    }

    public function view(Request $request,$id)
    {
        $items = FileItem::where('claims_id',$id)->get();
        return view('admin.claim.view', compact('items'));
    }
}
