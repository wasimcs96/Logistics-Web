@extends('admin.layout')

@section('content')
<form  class="" action="{{route('front.sendquote')}}" method="POST">
  @csrf
  <div class="row" style="justify-content: center;">
  <div class="mb-3 col-lg-6">
    <div class="form-group">
      <label for="">Name **</label>
      <input type="text" class="form-control" name="name" placeholder="Enter Name" value="">
      <p id="errusername" class="mb-0 text-danger em"></p>
    </div>
  </div>
</div>

  <div class="row" style="justify-content: center;">
  <div class="mb-3 col-lg-6">
    <div class="form-group">
      <label for="">Email **</label>
      <input type="email" class="form-control" name="email" placeholder="Enter Email" value="">
      <p id="erremail" class="mb-0 text-danger em"></p>
    </div>
  </div>
</div>

  <div class="row" style="justify-content: center;">
  <div class="mb-3 col-lg-6">
    <div class="form-group">
      <label for="">Phone Number **</label>
      <input type="number" class="form-control" name="phone" placeholder="Enter Phone Number" value="">
      <p id="erremail" class="mb-0 text-danger em"></p>
    </div>
  </div>
</div>

<div class="row" style="justify-content: center;">
    <div class="mb-3 col-lg-6">
      <div class="form-group">
        <label for="">Moving From **</label>
        <input type="text" class="form-control" name="moving_from" placeholder="Moving From" value="">
        <p id="erremail" class="mb-0 text-danger em"></p>
      </div>
    </div>
  </div>

  <div class="row" style="justify-content: center;">
    <div class="mb-3 col-lg-6">
      <div class="form-group">
        <label for="">Moving To **</label>
        <input type="text" class="form-control" name="moving_to" placeholder="Moving To" value="">
        <p id="erremail" class="mb-0 text-danger em"></p>
      </div>
    </div>
  </div>

  <div class="row" style="justify-content: center;">
    <div class="mb-3 col-lg-6">
      <div class="form-group">
        <label for="">Moving Date **</label>
        <input type="date" class="form-control" name="moving_date" placeholder="Moving Date" value="">
        <p id="erremail" class="mb-0 text-danger em"></p>
      </div>
    </div>
  </div>

  <div class="row" style="justify-content: center;">
    <button  type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
@endsection