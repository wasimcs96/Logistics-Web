<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Truck;
use Illuminate\Validation\Rule;
use App\Admin;
use App\Role;
use Validator;
use Session;

class TruckController extends Controller
{
    public function index() {
        $trucks = Truck::all();
        return view('admin.trucks.index', compact('trucks'));
    }

    public function create()
    {
        return view('admin.trucks.create');
    }

    public function store(Request $request)
    {  
        $this->validate($request,[
            'truck_number' => 'required',
            'company_name' => 'required',
            'load_weight' => 'required',
        ]);

        Truck::create([
            'load_weight'=>$request->load_weight,
            'truck_number'=>$request->truck_number,
            'company_name'=>$request->company_name,
        ]);
      
   

        Session::flash('success', 'Truck created successfully!');
        // $truck = Truck::all();
        return redirect()->route('admin.truck.index');
    }

    public function edit($id)
    {
        $truck = Truck::find($id);
        return view('admin.trucks.edit',compact('truck'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'truck_number' => 'required',
            'company_name' => 'required',
            'load_weight' => 'required',
        ]);

        $truck= Truck::find($id);
        $truck->truck_number = $request->truck_number;
        $truck->company_name = $request->company_name;
        $truck->load_weight = $request->load_weight;
        $truck->save();

        Session::flash('success', 'Truck updated successfully!');
        $truck = Truck::all();
        return redirect()->route('admin.truck.index');
    }

    public function destroy($id)
    {
        $truck = Truck::find($id);
        $truck->delete();
        Session::flash('success', 'Truck updated successfully!');
        return redirect()->route('admin.truck.index');
    }


}