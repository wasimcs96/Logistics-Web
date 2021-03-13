@extends("front.$version.layout")

@section('pagename')
- {{__('Request A Quote')}}
@endsection

@section('meta-keywords', "$be->quote_meta_keywords")
@section('meta-description', "$be->quote_meta_description")

@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!--   breadcrumb area start   -->
<div class="breadcrumb-area"
    style="background-image: url('{{asset('assets/front/img/' . $bs->breadcrumb)}}');background-size:cover;">
    <div class="container">
        <div class="breadcrumb-txt">
            <div class="row">
                <div class="col-xl-7 col-lg-8 col-sm-10">
                    <span>{{convertUtf8($bs->quote_title)}}</span>
                    <h1>{{convertUtf8($bs->quote_subtitle)}}</h1>
                    <ul class="breadcumb">
                        <li><a href="{{route('front.index')}}">{{__('Home')}}</a></li>
                        <li>{{__('Quote Page')}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb-area-overlay"
        style="background-color: #{{$be->breadcrumb_overlay_color}};opacity: {{$be->breadcrumb_overlay_opacity}};">
    </div>
</div>
<!--   breadcrumb area end    -->


<!--   quote area start   -->
<div class="quote-area pt-115 pb-115">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <form action="{{route('front.sendquote')}}" enctype="multipart/form-data" method="POST">
                    @csrf

                    <div class="panel panel-default">
                        <div class="panel-heading">REQUEST A MOVING QUOTE</div>
                        <div class="panel-body">


                            <div class="col-lg-6">
                                <div class="form-element mb-4">
                                    <label>{{__('Name')}} <span>**</span></label>
                                    <input name="name" type="text" value="{{old("name")}}"
                                        placeholder="{{__('Enter Name')}}" required="required">

                                    @if ($errors->has("name"))
                                    <p class="text-danger mb-0">{{$errors->first("name")}}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-element mb-4">
                                    <label>{{__('Email')}} <span>**</span></label>
                                    <input name="email" type="text" value="{{old("email")}}"
                                        placeholder="{{__('Enter Email Address')}}" required="required">

                                    @if ($errors->has("email"))
                                    <p class="text-danger mb-0">{{$errors->first("email")}}</p>
                                    @endif
                                </div>
                            </div>

                            {{-- <div class="col-lg-6">
                                <div class="form-element mb-4">
                                    <label>{{__('Phone Number')}} <span>**</span></label>
                                    <input name="phone" type="number" value="{{old("phone")}}"
                                        placeholder="{{__('Enter Phone Number')}}" required="required">

                                    @if ($errors->has("phone"))
                                    <p class="text-danger mb-0">{{$errors->first("phone")}}</p>
                                    @endif
                                </div>
                            </div> --}}

                            {{-- <div class="col-lg-6">
                                <div class="form-element mb-4">
                                    <label>{{__('Moving From')}} <span>**</span></label>
                                    <input name="moving_from" type="text" value="{{old("moving_from")}}"
                                        placeholder="{{__('Enter Moving From')}}" required="required">

                                    @if ($errors->has("moving_from"))
                                    <p class="text-danger mb-0">{{$errors->first("moving_from")}}</p>
                                    @endif
                                </div>
                            </div> --}}

                            {{-- <div class="col-lg-6">
                                <div class="form-element mb-4">
                                    <label>{{__('Moving To')}} <span>**</span></label>
                                    <input name="moving_to" type="text" value="{{old("moving_to")}}"
                                        placeholder="{{__('Enter Moving To')}}" required="required">

                                    @if ($errors->has("moving_to"))
                                    <p class="text-danger mb-0">{{$errors->first("moving_to")}}</p>
                                    @endif
                                </div>
                            </div> --}}

                            {{-- <div class="col-lg-6">
                                <div class="form-element mb-4">
                                    <label>{{__('Moving Date')}} <span>**</span></label>
                                    <input name="moving_date" type="date" value="{{old("moving_to")}}"
                                        placeholder="{{__('Enter Moving Date')}}" required="required">

                                    @if ($errors->has("moving_date"))
                                    <p class="text-danger mb-0">{{$errors->first("moving_date")}}</p>
                                    @endif
                                </div>
                            </div> --}}


                            <div class="row">
                <div class="col-lg-6">
                  <div class="form-element mb-4"><label>{{__('Job Type')}} <span>**</span></label>
                    <select name="job_type" id="job_type" required="required">
                      <option value="local">Local</option>
                      <option value="longdistance">Long Distance</option>
                      <option value="manpower">Manpower</option>
                      <option value="junkremoval">Junk Removal</option>
                      <option value="logistics">Logistics</option>
                      <option value="packingservice">Packing Service</option>
                      <option value="delivery">Delivery</option>
                    </select>
                  </div>
                </div> 

                             <div class="col-lg-6">
                  <div class="form-element mb-4"><label>{{__('Price Type')}} <span>**</span></label>
                    <select name="price_type" id="price_type" required="required">
                      <option value="hourly">Hourly</option>
                      <option value="flatrate">Flat Rate</option>
                    </select>
                  </div>
                </div>
              </div> 

                             <div class="row"> 
                                 <div class="col-lg-6">
                  <div class="form-element mb-4"><label>{{__('Phone Number')}} <span>**</span></label>
                    <select class="col-lg-3" for="inlineFormInput" name="primary_phone" id="primary_phone"
                      required="required">
                      <option value="select">Select</option>
                      <option value="business">Business</option>
                      <option value="fax">Fax</option>
                      <option value="home">Home</option>
                      <option value="mobile">Mobile</option>
                    </select>
                    <input class="col-lg-3" type="text" name="primary_number" value="{{old("contact_number")}}"
                      required="required">
                  </div> 


                                 <div class="col-lg-6">
                                    <div class="form-element mb-4"><label>{{__('Secondary Phone')}}
                                            <span></span></label>
                                        <select class="col-lg-3" for="inlineFormInput" name="secondary_phone"
                                            id="secondary_phone" required="required">
                                            <option value="select">Select</option>
                                            <option value="business">Business</option>
                                            <option value="fax">Fax</option>
                                            <option value="home">Home</option>
                                            <option value="mobile">Mobile</option>
                                        </select>
                                        <input class="col-lg-3" type="text" name="secondary_number"
                                            value="{{old("contact_number")}}" required="required">
                                    </div>
                                </div>
                            </div> 

                             <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-element mb-4"><label>{{__('Media')}} <span>**</span></label>
                                        <select name="media" id="media" required="required">
                                            <option value="select">Select</option>
                                            <option value="call">Call</option>
                                            <option value="email">EMail</option>
                                            <option value="chat">Chat</option>
                                            <option value="leads">Leads</option>
                                            <option value="offline">Offline</option>
                                            <option value="online">Online</option>
                                            <option value="online booking">Online Booking</option>
                                            <option value="PPCall">PPCall</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-element mb-4"><label>{{__('Payment Method')}}
                                            <span>**</span></label>
                                        <select name="payment_method" id="payment_method" required="required">
                                            <option value="credit">Credit Card</option>
                                            <option value="pending">Pending CC</option>
                                            <option value="cash">Cash</option>
                                            <option value="invoice">Invoice</option>
                                            <option value="c$c">Cash & Credit</option>
                                        </select>
                                    </div>
                                </div>
                            </div> 

                             <div class="row">
                                <div class="col-lg-6" for="inlineFormInput">
                                    <div class="form-element mb-4"><label>{{__('Move date')}} <span>**</span></label>
                                        <input type="date" name="mdate" class="form-control" id="mdate"
                                            required="required">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-element mb-4"><label>{{__('Follow Up date')}}
                                            <span>**</span></label>
                                        <input type="date" name="fdate" class="form-control" id="fdate"
                                            required="required">
                                    </div>
                                </div>
                            </div> 

                             <div class="row">
                                <div class="col-lg-6" for="inlineFormInput">
                                    <select name="add_on" id="add_on" required="required">
                                        <option selected>Choose Add On's...</option>
                                        <option value="1">Packing Service</option>
                                        <option value="2">Supplies</option>
                                        <option value="3">Storage</option>
                                        <option value="4">Junk Removal</option>
                                        <option value="5">Frog Box</option>
                                    </select>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-element mb-4"><label>{{__('Client Notes')}} <span>**</span></label>
                                        <textarea class="form-control" name="client_notes" id="client_notes" rows="3"
                                            required="required"></textarea>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">Address</div>
                        <div class="panel-body">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <h4><b>Current Address</b></h4>
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <input type="search" name="addsearch" id="inputCity"
                                                    placeholder="Address Search">
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="c_inputbuild">Building Type</label>
                                                <select name="c_inputbuild" id="c_inputbuild" class="form-control"
                                                    required="required">
                                                    <option selected>select</option>
                                                    <option>Apartment</option>
                                                    <option>Basement</option>
                                                    <option>Condominium</option>
                                                    <option>House</option>
                                                    <option>Office</option>
                                                    <option>Storage</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="c_inputCountry">Country</label>
                                                <select name="c_inputCountry" id="c_inputCountry" class="form-control"
                                                    required="required">
                                                    <option selected>Choose Country</option>
                                                    <option>Canada</option>
                                                    <option>USA</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-3">
                                                <label for="c_inputStreet">Street</label>
                                                <input type="textbox" class="form-control" name="c_inputStreet"
                                                    id="c_inputStreet" required="required">
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label for="c_inputState">State</label>
                                                <input type="textbox" class="form-control" name="c_inputState"
                                                    id="c_inputState" required="required">
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label for="c_inputCity">City</label>
                                                <input type="textbox" class="form-control" name="c_inputCity"
                                                    id="c_inputCity" required="required">
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label for="c_inputZip">Zip</label>
                                                <input type="textbox" class="form-control" name="c_inputZip"
                                                    id="c_inputZip" required="required">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-1">
                                                <label for="c_inputFloor">Floor(s)</label>
                                                <input type="textbox" class="form-control" name="c_inputFloor"
                                                    id="c_inputFloor" required="required">
                                            </div>

                                            <div class="form-group col-md-1">
                                                <label for="c_inputSqft">SQFT</label>
                                                <input type="textbox" data-val="true" class="form-control"
                                                    name="c_inputSqft" id="c_inputSqft" value="0">
                                            </div>

                                            <div class="form-group col-md-1">
                                                <label for="c_inputBedroom">Bedroom(s)</label>
                                                <input type="textbox" class="form-control" name="c_inputBedroom"
                                                    id="c_inputBedroom" required="required">
                                            </div>

                                            <div class="form-group col-md-1">
                                                <label for="c_inputMovers">Movers</label>
                                                <input type="textbox" class="form-control" name="c_inputMovers"
                                                    id="c_inputMovers">
                                            </div>

                                            <div class="form-group col-md-1">
                                                <label for="c_inputTruck">Trucks</label>
                                                <input type="textbox" class="form-control" name="c_inputTruck"
                                                    id="c_inputTruck">
                                            </div>
                                        </div>
                                    </tr>

                                    <tr>
                                        <h4><b>Permanent Address</b></h4>
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <input type="search" name="addsearch" id="inputCity"
                                                    placeholder="Address Search">
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="p_inputbuild">Building Type</label>
                                                <select name="p_inputbuild" id="p_inputbuild" class="form-control"
                                                    required="required">
                                                    <option selected>select</option>
                                                    <option>Apartment</option>
                                                    <option>Basement</option>
                                                    <option>Condominium</option>
                                                    <option>House</option>
                                                    <option>Office</option>
                                                    <option>Storage</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="p_inputCountry">Country</label>
                                                <select name="p_inputCountry" id="p_inputCountry" class="form-control"
                                                    required="required">
                                                    <option selected>Choose Country</option>
                                                    <option>Canada</option>
                                                    <option>USA</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-3">
                                                <label for="p_inputStreet">Street</label>
                                                <input type="textbox" class="form-control" name="p_inputStreet"
                                                    id="p_inputStreet" required="required">
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label for="p_inputState">State</label>
                                                <input type="textbox" class="form-control" name="p_inputState"
                                                    id="p_inputState" required="required">
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label for="p_inputCity">City</label>
                                                <input type="textbox" class="form-control" name="p_inputCity"
                                                    id="p_inputCity" required="required">
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label for="p_inputZip">Zip</label>
                                                <input type="textbox" class="form-control" name="p_inputZip"
                                                    id="p_inputZip" required="required">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-1">
                                                <label for="p_inputFloor">Floor(s)</label>
                                                <input type="textbox" class="form-control" name="p_inputFloor"
                                                    id="p_inputFloor" required="required">
                                            </div>

                                            <div class="form-group col-md-1">
                                                <label for="p_inputSqft">SQFT</label>
                                                <input type="textbox" data-val="true" class="form-control"
                                                    name="p_inputSqft" id="p_inputSqft" value="0">
                                            </div>

                                            <div class="form-group col-md-1">
                                                <label for="p_inputBedroom">Bedroom(s)</label>
                                                <input type="textbox" class="form-control" name="p_inputBedroom"
                                                    id="p_inputBedroom" required="required">
                                            </div>

                                            <div class="form-group col-md-1">
                                                <label for="p_inputMovers">Movers</label>
                                                <input type="textbox" class="form-control" name="p_inputMovers"
                                                    id="p_inputMovers">
                                            </div>

                                            <div class="form-group col-md-1">
                                                <label for="p_inputTruck">Trucks</label>
                                                <input type="textbox" class="form-control" name="p_inputTruck"
                                                    id="p_inputTruck" required="required">
                                            </div>
                                        </div>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                     <div class="panel panel-default">
                        <div class="panel-heading">Select Base Location</div>
                        <div class="panel-body">
                            <div style="width:50%; padding:0px 5px;float:left;" id="bases" onchange="fillBaseFields()">
                                <select id="closestLocations" name="closestLocations" class="form-control"
                                    style="width:100%"></select>
                                <label style="color:red;"></label>
                            </div>
                            <div style="width:20%; padding:0px 5px;float:left;">
                                <button type="button" class="btn btn-secondary" id="open-price-list" onclick=""><span
                                        class="ui-button-text">View/Hide Price List</span></button>
                            </div>
                        </div>
                    </div> 

                     <div class="panel panel-default">
                        <div class="panel-heading">Franchisee Notes</div>
                        <div class="panel-body">
                            <div class="form-element mb-4">
                                <textarea class="form-control" name="franchisee_notes" id="franchisee_notes" rows="5"
                                    required="required"></textarea>
                            </div>
                        </div>
                    </div> 


                     <div class="panel panel-default">
                        <div class="panel-heading">Source</div>
                        <div class="panel-body">
                            <div class="form-group col-md-4">
                                <select name="source" id="source" class="form-control" required="required">
                                    <option selected>select</option>
                                    <option>Google</option>
                                    <option>Kijiji</option>
                                    <option>Referral</option>
                                    <option>Repeat Client</option>
                                    <option>Yelp</option>
                                    <option>Homestars</option>
                                    <option>Networking</option>
                                    <option>Max Tv</option>
                                    <option>BNI</option>
                                    <option>Bought Leads</option>
                                    <option>BNI</option>
                                    <option>Saw Moving Truck</option>
                                    <option>Move Snap</option>
                                    <option>Moving SOS</option>
                                    <option>Key Person</option>
                                    <option>Facebook</option>
                                    <option>Door Knocking</option>
                                    <option>Flyers Campaign</option>
                                    <option>Canada - moving</option>
                                    <option>Move It</option>
                                    <option>Other</option>
                                    <option>Third Party</option>
                                    <option>AdWords</option>
                                    <option>Erik</option>
                                    <option>Bing</option>
                                    <option>Top Moving</option>
                                    <option>People on the Move</option>
                                    <option>Equate Media</option>
                                    <option>Move me Away</option>
                                </select>
                            </div>
                        </div>
                    </div> 


                     <div class="panel panel-default">
                        <div class="panel-heading">Getting an Estimate</div>
                        <div class="panel-body">
                            <table class="border-0">
                                <tr>
                                    <div class="row">
                                        <div class="form-group col-md-2">
                                            <button type="button" class="btn btn-secondary" name="GetEstimate"
                                                id="getEstimate">Get
                                                Estimate</button>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="truck_fee">TruckFee/FlatRate</label>
                                            <input type="textbox" data-val="true" class="form-control" name="truck_fee"
                                                id="truck_fee" value="0">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="hourly_rate">HourlyRate</label>
                                            <input type="textbox" data-val="true" class="form-control"
                                                name="hourly_rate" id="hourly_rate" value="0">
                                        </div>
                                    </div>
                                </tr>
                            </table>
                        </div>
                    </div> 

                    <button type="submit" class="btn btn-primary btn-sm" value="CreateNewQuote">Create Quote</button>
                </form>

            </div>
        </div>
    </div>
</div>
<!--   quote area end   -->
@endsection