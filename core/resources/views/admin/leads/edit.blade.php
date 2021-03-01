@extends('admin.layout')

@section('content')
<form  class="" action="{{route('admin.lead.update',['id'=>$lead->id])}}" method="POST">
  @csrf
  @method('PUT')
  <div class="row" style="justify-content: center;">
        <div class="mb-3 col-lg-6">
            <div class="form-group">
                <label for="">First Name **</label>
                <input type="string" class="form-control" name="first_name" placeholder="First name" value="{{ $lead->first_name }}" required>
                <p id="errusername" class="mb-0 text-danger em"></p>
            </div>
        </div>
    </div>

    <div class="row" style="justify-content: center;">
        <div class="mb-3 col-lg-6">
            <div class="form-group">
                <label for="">Last Name **</label>
                <input type="text" class="form-control" name="last_name" placeholder="Last name" value="{{ $lead->last_name }}" required>
                <p id="erremail" class="mb-0 text-danger em"></p>
            </div>
        </div>
    </div>

    <div class="row" style="justify-content: center;">
        <div class="mb-3 col-lg-6">
            <div class="form-group">
                <label for="">Phone Number **</label>
                <input type="number" class="form-control" name="phone_number" placeholder="Phone number" value="{{ $lead->phone_number }}" required>
                <p id="erremail" class="mb-0 text-danger em"></p>
            </div>
        </div>
    </div>

    <div class="row" style="justify-content: center;">
        <div class="mb-3 col-lg-6">
            <div class="form-group">
                <label for="">Client Email **</label>
                <input type="email" class="form-control" name="client_email" placeholder="lient email" value="{{ $lead->client_email }}" required>
                <p id="erremail" class="mb-0 text-danger em"></p>
            </div>
        </div>
    </div>

    <div class="row" style="justify-content: center;">
        <div class="mb-3 col-lg-6">
            <div class="form-group">
                <label for="">Move Data **</label>
                <input type="text" class="form-control" name="move_data" placeholder="Move data" value="{{ $lead->move_data }}" required>
                <p id="erremail" class="mb-0 text-danger em"></p>
            </div>
        </div>
    </div>

    <div class="row" style="justify-content: center;">
        <div class="mb-3 col-lg-6">
            <div class="form-group">
                <label for="">Moving From **</label>
                <input type="text" class="form-control" name="moving_from" placeholder="Moving from" value="{{ $lead->moving_from }}" required>
                <p id="erremail" class="mb-0 text-danger em"></p>
            </div>
        </div>
    </div>
    <div class="row" style="justify-content: center;">
        <div class="mb-3 col-lg-6">
            <div class="form-group">
                <label for="">Moving To **</label>
                <input type="text" class="form-control" name="moving_to" placeholder="Moving to" value="{{ $lead->moving_to }}" required>
                <p id="erremail" class="mb-0 text-danger em"></p>
            </div>
        </div>
    </div>

  <div class="row" style="justify-content: center;">
    <button  type="submit" class="btn btn-primary">Update</button>
  </div>
</form>
@endsection