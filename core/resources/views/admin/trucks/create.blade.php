@extends('admin.layout')

@section('content')
<h1>Add Truck</h1>
<form  class="" action="{{route('admin.truck.store')}}" method="POST">
  @csrf
  <div class="row" style="justify-content: center;">
  <div class="mb-3 col-lg-6">
    <div class="form-group">
      <label for="">Truck Number **</label>
      <input type="string" class="form-control" name="truck_number" placeholder="Enter truck number" value="">
      <p id="errusername" class="mb-0 text-danger em"></p>
    </div>
  </div>
</div>

  <div class="row" style="justify-content: center;">
  <div class="mb-3 col-lg-6">
    <div class="form-group">
      <label for="">Company Name **</label>
      <input type="text" class="form-control" name="company_name" placeholder="Enter company name" value="">
      <p id="errcompanyname" class="mb-0 text-danger em"></p>
    </div>
  </div>
</div>

<div class="row" style="justify-content: center;">
  <div class="mb-3 col-lg-6">
    <div class="form-group">
      <label for="">Truck Company **</label>
      <input type="text" class="form-control" name="truck_company" placeholder="Enter Truck company name" value="">
      <p id="errtruckcompany" class="mb-0 text-danger em"></p>
    </div>
  </div>
</div>

  <div class="row" style="justify-content: center;">
  <div class="mb-3 col-lg-6">
    <div class="form-group">
      <label for="">Load Weight **</label>
      <input type="text" class="form-control" name="load_weight" placeholder="Enter load weight" value="">
      <p id="errloadweight" class="mb-0 text-danger em"></p>
    </div>
  </div>
</div>

  <div class="row" style="justify-content: center;">
    <button  type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
@endsection