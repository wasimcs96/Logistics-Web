@extends('front.logistic.layout')

@section('content')
  <!--   breadcrumb area start   -->
  <div class="breadcrumb-area" style="background-image: url('{{asset('assets/front/img/' . $bs->breadcrumb)}}');background-size:cover;">
     <div class="container">
        <div class="breadcrumb-txt">
           <div class="row">
              <div class="col-xl-7 col-lg-8 col-sm-10">
                 <h1>File A Claim</h1>
                 <ul class="breadcumb">
                    <li><a href="{{route('front.index')}}">{{__('Home')}}</a></li>
                    <li><a href="{{route('claim.index')}}"></a>{{__('Claim')}}</li>
                 </ul>
              </div>
           </div>
        </div>
     </div>
     <div class="breadcrumb-area-overlay" style="background-color: #{{$be->breadcrumb_overlay_color}};opacity: {{$be->breadcrumb_overlay_opacity}};"></div>
  </div>
  <div class="container mt-4">
    <form>
    <div class="col-lg-6">
    <label for="exampleInputPassword1" class="form-label">First Name</label>
    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Enter First Name">
  </div>
  <div class="col-lg-6">
    <label for="exampleInputPassword1" class="form-label">Last Name</label>
    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter Last Name">
  </div>
  <div class="col-lg-6">
    <label for="exampleInputPassword1" class="form-label">Home Phone</label>
    <input type="number" class="form-control" name="home_phone" id="home_phone">
  </div>
  <div class="col-lg-6">
    <label for="exampleInputPassword1" class="form-label">Mobile Phone</label>
    <input type="number" class="form-control" name="mobile_phone" id="mobile_phone">
  </div>
  <div class="col-lg-6">
    <label for="exampleInputPassword1" class="form-label">Other Phone</label>
    <input type="number" class="form-control" name="other_phone" id="other_phone">
  </div>
  <div class="col-lg-6">
    <label for="exampleInputPassword1" class="form-label">Address</label>
    <input type="text" class="form-control" name="address" id="address">
  </div>
  <div class="col-lg-6">
    <label for="exampleInputPassword1" class="form-label">City</label>
    <input type="text" class="form-control" name="city" id="city">
  </div>
  <div class="col-lg-6">
    <label for="exampleInputPassword1" class="form-label">Province</label>
    <input type="text" class="form-control" name="province" id="province">
  </div>
  <div class="col-lg-6">
    <label for="exampleInputPassword1" class="form-label">Postal Code</label>
    <input type="text" class="form-control" name="postal_code" id="postal_code">
  </div>
  <div class="col-lg-6">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
  </div>
  <div class="col-lg-6">
    <label for="exampleInputPassword1" class="form-label">Move date</label>
    <input type="date" class="form-control" name="move_date" id="move_date">
  </div>
  <div class="col-lg-6">
    <label for="exampleInputPassword1" class="form-label">Order Number</label>
    <input type="number" class="form-control" name="order_number" id="order_number">
  </div>
  <p class="my-2"><b>ITEM #1</b></p>
  <div class="col-lg-6">
    <label for="exampleInputPassword1" class="form-label">Description</label>
    <input type="text" class="form-control" name="description" id="description">
  </div>
  <div class="col-lg-6">
  <label for="formFile" class="form-label">Photo</label>
  <input class="form-control" type="file" name="photo" id="photo">
</div>
<div class="col-lg-6">
  <label for="exampleFormControlTextarea1" class="form-label">Description of Damage</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" name="damage_desc" rows="3"></textarea>
</div>
<p class="my-2"><b>ITEM #2</b></p>
  <div class="col-lg-6">
    <label for="exampleInputPassword1" class="form-label">Description</label>
    <input type="text" class="form-control" name="description" id="description">
  </div>
  <div class="col-lg-6">
  <label for="formFile" class="form-label">Photo</label>
  <input class="form-control" type="file" name="photo" id="photo">
</div>
<div class="col-lg-6">
  <label for="exampleFormControlTextarea1" class="form-label">Description of Damage</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" name="damage_desc" rows="3"></textarea>
</div>
<p class="my-2"><b>ITEM #3</b></p>
  <div class="col-lg-6">
    <label for="exampleInputPassword1" class="form-label">Description</label>
    <input type="text" class="form-control" name="description" id="description">
  </div>
  <div class="col-lg-6">
  <label for="formFile" class="form-label">Photo</label>
  <input class="form-control" type="file" name="photo" id="photo">
</div>
<div class="col-lg-6">
  <label for="exampleFormControlTextarea1" class="form-label">Description of Damage</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" name="damage_desc" rows="3"></textarea>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Additional Information</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" name="info" rows="3"></textarea>
</div>
  <button type="submit" class="btn btn" style="margin-bottom: 10px;margin: 20px;">Submit</button>
</form>
  </div>

  @endsection