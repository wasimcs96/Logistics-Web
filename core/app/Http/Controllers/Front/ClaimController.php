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
        return view('front.claim.index');
    }

    public function store(Request $request)
    {  
    //    dd($request->all());

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


   foreach($request->item as $key => $value)

        // $rt=$key+1;
        // dd();
        FileItem::create([
            'claims_id'=>$claim->id,
            'description'=>$value["description"],
            'photo'=>$value["photo"],
            'damage_desc'=>$value["damage_desc"],

        ]);
      
   

        // Session::flash('success', 'Truck created successfully!');
        return redirect()->route('claim.index');
    }
}
