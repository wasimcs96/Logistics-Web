<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Lead;
use Session;

class LeadController extends Controller
{
    public function index() {
        $leads = Lead::all();
        return view('admin.leads.index', compact('leads'));
    }

    public function create()
    {
        return view('admin.leads.create');
    }

    public function store(Request $request)
    {  
        Lead::create([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'phone_number'=>$request->phone_number,
            'client_email'=>$request->client_email,
            'move_data'=>$request->move_data,
            'moving_from'=>$request->moving_from,
            'moving_to'=>$request->moving_to,
        ]);
      
   

        Session::flash('success', 'Leads created successfully!');
        return redirect()->route('admin.lead.index');
    }

    public function edit($id)
    {
        $lead = Lead::find($id);
        return view('admin.leads.edit',compact('lead'));
    }

    public function update(Request $request, $id)
    {
        $lead= Lead::find($id);
        $lead->first_name = $request->first_name;
        $lead->last_name = $request->last_name;
        $lead->phone_number = $request->phone_number;
        $lead->client_email = $request->client_email;
        $lead->move_data = $request->move_data;
        $lead->moving_from = $request->moving_from;
        $lead->moving_to = $request->moving_to;
        $lead->save();

        Session::flash('success', 'Leads updated successfully!');
        $lead = Lead::all();
        return redirect()->route('admin.lead.index');
    }

    public function destroy($id)
    {
        $lead = Lead::find($id);
        $lead->delete();
        Session::flash('success', 'Leads Deleted successfully!');
        return redirect()->route('admin.lead.index');
    }
}
