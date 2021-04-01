@extends('admin.layout')

@section('content')
  <div class="page-header">
    <h4 class="page-title">Quotes</h4>
    <ul class="breadcrumbs">
      <li class="nav-home">
        <a href="{{route('admin.dashboard')}}">
          <i class="flaticon-home"></i>
        </a>
      </li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">
        <a href="#">Quote Management</a>
      </li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">
        <a href="#">Quotes</a>
      </li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">

      <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-title d-inline-block">Quotes</div>
                    <a href="{{ route('admin.quote.addQuote') }}" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Add
                      Quote</a>
                </div>
                <div class="col-lg-6">
                    <button class="btn btn-danger float-right btn-sm mr-2 d-none bulk-delete" data-href="{{route('admin.quote.bulk.delete')}}"><i class="flaticon-interface-5"></i> Delete</button>
                </div>
            </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-12">
              @if (count($quotes) == 0)
                <h3 class="text-center">NO QUOTE REQUEST FOUND</h3>
              @else
                <div class="table-responsive">
                  <table class="table table-striped mt-3">
                    <thead>
                      <tr>
                        <th scope="col">
                            <input type="checkbox" class="bulk-check" data-val="all">
                        </th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col"> Driver</th>
                        <th scope="col">Deatails</th>
                        <th scope="col">Status</th>
                        <!--<th scope="col">Add Invoice</th>-->
                        <th scope="col">Mail</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($quotes as $key => $quote)
                        <tr>
                          <td>
                            <input type="checkbox" class="bulk-check" data-val="{{$quote->id}}">
                          </td>
                          <td>{{convertUtf8($quote->name)}}</td>
                          <td>{{convertUtf8($quote->email)}}</td>
                          <td> @if($quote->status == 3)
                            <button class="btn btn-success" type="button"
                            disabled
                            >Assign</button>
                                @else
                                <button class="btn btn-success" type="button" custom1="{{$quote->id}}"
                                  data-toggle="modal" data-target="#processModal-{{$quote->id}}"
                                  class="assignDriver"
                                  >Assign</button>
                                @endif
                        </td>
                          <td>
                            <button class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#detailsModal{{$quote->id}}"><i class="fas fa-eye"></i> View</button>
                          </td>
                          <td>
                            <form id="statusForm{{$quote->id}}" class="d-inline-block" action="{{route('admin.quotes.status')}}" method="post">
                              @csrf
                              <input type="hidden" name="quote_id" value="{{$quote->id}}">
                              <select class="form-control
                              @if ($quote->status == 0)
                                bg-warning
                              @elseif ($quote->status == 1)
                                bg-primary
                              @elseif ($quote->status == 2)
                                bg-success
                              @elseif ($quote->status == 3)
                                bg-danger
                              @endif
                              " name="status" onchange="document.getElementById('statusForm{{$quote->id}}').submit();">
                                <option value="0" {{$quote->status == 0 ? 'selected' : ''}}>Pending</option>
                                <option value="1" {{$quote->status == 1 ? 'selected' : ''}}>Processing</option>
                                <option value="2" {{$quote->status == 2 ? 'selected' : ''}}>Completed</option>
                                <option value="3" {{$quote->status == 3 ? 'selected' : ''}}>Rejected</option>
                              </select>
                            </form>
                          </td>

                          <td>
                            <a href="#" class="btn btn-primary btn-sm editbtn" data-target="#mailModal" data-toggle="modal" data-email="{{$quote->email}}"><i class="far fa-envelope"></i> Send</a>
                          </td>
                          <td>
                            <form class="deleteform d-inline-block" action="{{route('admin.quote.delete')}}" method="post">
                              @csrf
                              <input type="hidden" name="quote_id" value="{{$quote->id}}">
                              <button type="submit" class="btn btn-danger btn-sm deletebtn">
                                <span class="btn-label">
                                  <i class="fas fa-trash"></i>
                                </span>
                                Delete
                              </button>
                            </form>
                          </td>
                        </tr>

                        @includeif('admin.quote.quote-details')

  {{-- processModal --}}

  <div class="modal fade" id="processModal-{{$quote->id}}" tabindex="-1" role="dialog"
  aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Quote Information</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">

              <form action="{{route('admin.assign.driver')}}" method="POST">
                @csrf
                  <label>Truck Information **</label>
                  <select name="truck" class="form-control ltr" id="truck" required>
                      @foreach($trucks as $truck)
                      <option value="{{ $truck->id }}">{{ $truck->company_name }} (Truck
                          Number:{{ $truck->truck_number }})</option>
                      @endforeach
                  </select>
                  <input type="text" id="driverQuote" name="quote_id" value="{{ $quote->id ?? '' }}" hidden>
                  {{-- <div id="truckError"></div>
                  <label>Driver Information **</label>
                  <select name="user" class="form-control ltr" id="driver">
                      @foreach($users as $user)
                      @if($user->role_id == 6)
                      <option value="{{ $user->id }}">{{ $user->first_name }}
                          {{ $user->last_name }}
                      </option>
                      @endif
                      @endforeach
                  </select>
                  <div id="driverError"></div> --}}
                  <div class="form-group">
                      <label for="">Date **</label>
                      <input id="date" type="datetime-local"  class="form-control" name="date" value="" required>
                      <p id="eerremail" class="mb-0 text-danger em"></p>
                  </div>
                  <div id="dateError"></div>
                  <div class="form-group">
                      <label for="">Pick Address **</label>
                      <input id="paddress" type="text" class="form-control" name="paddress"
                          value="" placeholder="Pick Address" required>
                      <p id="eerremail" class="mb-0 text-danger em"></p>
                  </div>
                  <div id="paddressError"></div>
                  <div class="form-group">
                      <label for="">Drop Address **</label>
                      <input id="daddress" type="text" class="form-control" name="daddress"
                          value="" placeholder="Drop Address" required>
                      <p id="eerremail" class="mb-0 text-danger em"></p>
                  </div>
                  <div id="daddressError"></div>

          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary"
                  data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" class="submit">Submit</button>
          </div>
        </form>
      </div>
  </div>
</div>

                      @endforeach
                    </tbody>
                  </table>
                </div>
              @endif
            </div>
          </div>
        </div>
        <div class="card-footer">
          <div class="row">
            <div class="d-inline-block mx-auto">
              {{$quotes->links()}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Send Mail Modal -->
  <div class="modal fade" id="mailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Send Mail</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="ajaxEditForm" class="" action="{{route('admin.quotes.mail')}}" method="POST">
            @csrf
            <div class="form-group">
              <label for="">Client Mail **</label>
              <input id="inemail" type="text" class="form-control" name="email" value="" placeholder="Enter email">
              <p id="eerremail" class="mb-0 text-danger em"></p>
            </div>
            <div class="form-group">
              <label for="">Subject **</label>
              <input id="insubject" type="text" class="form-control" name="subject" value="" placeholder="Enter subject">
              <p id="eerrsubject" class="mb-0 text-danger em"></p>
            </div>
            <div class="form-group">
              <label for="">Email Template **</label>
            <select name="email_type" class="form-control" id="email_type" required>
              {{-- @foreach($trucks as $truck)
              <option value="{{ $truck->id }}">{{ $truck->company_name }} (Truck
                  Number:{{ $truck->truck_number }})</option>
              @endforeach --}}
              <option value="">Select Email Template</option>
              <option value="1">Email Template 1</option>
              <option value="2">Email Template 2</option>
              <option value="3">Email Template 3</option>
              <option value="4">Email Template 4</option>
          </select>
        </div>
        <div class="form-group" id="message">
            <label for="">PDF **</label>
            <input id="pdf" type="file" class="form-control" name="pdf" value="" placeholder="Choose PDF">
            <p id="eerrmessage" class="mb-0 text-danger em"></p>
          </div>
            <div class="form-group" id="message">
              <label for="">Message **</label>
              <textarea id="inmessage" class="form-control summernote" name="message" data-height="150" placeholder="Enter message"></textarea>
              <p id="eerrmessage" class="mb-0 text-danger em"></p>
            </div>

          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button id="updateBtn" type="button" class="btn btn-primary">Send Mail</button>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
<script>

$( document ).ready(function() {


// var order_id = '';
var truck_id = '';
var quote_id = '';
var date = '';
var pick_address = '';
var drop_address = '';
var inc = '';

$('.assignDriver').on('click', function() {
    var order_id = $(this).attr('custom1');
    console.log(order_id);


    $('.submit').on('click', function() {
        console.log('fsdvsdvdfddfdfd');
        truck_id = $('#truck').val();
        quote_id = $('#driverQuote').val();
        date = $('#date').val();
        pick_address = $('#paddress').val();
        drop_address = $('#daddress').val();
        if (truck_id == '') {
            $('#truckError').html('<span style="color:red">*This field is required</span></strong>')
        } else if (user_id == '') {
            $('#driverError').html('<span style="color:red">*This field is required</span></strong>')
        } else if (date == '') {
            $('#dateError').html('<span style="color:red">*This field is required</span></strong>')
        } else if (pick_address == '') {
            $('#paddressError').html('<span style="color:red">*This field is required</span></strong>')
        } else if (drop_address == '') {
            $('#daddressError').html('<span style="color:red">*This field is required</span></strong>')
        } else {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "post",
                url: "{{route('admin.assign.driver')}}",
                data: {
                    quote_id: quote_id,
                    truck_id: truck_id,
                    // user_id: user_id,
                    pick_address: pick_address,
                    drop_address: drop_address,
                    date: date
                },
                success: function(result) {
                    // console.log('success');
                    // alert('Follow Up created Successfully');
                    // window.location.reload();
                    $('#processModal').modal('hide');
                    document.getElementById('processModalForm').reset();
                }
            });
            inc++;
        }

    });
});
});
</script>
<script>
  $('#email_type').on('click', function() {
    var email_type = $(this).val();
    if(email_type == 1)
    {
      console.log(email_type);
    }
    if(email_type == 2)
    {
$('.card-block').find('p').html(`<!DOCTYPE html PUBLIC "><html xmlns="http://www.w3.org/1999/xhtml" lang="en-GB"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /><title>Demystifying Email Design</title><meta name="viewport" content="width=device-width, initial-scale=1.0"/><style type="text/css">a[x-apple-data-detectors] {color: inherit !important;}</style></head><body style="margin: 0; padding: 0;"><table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%"><tr><td style="padding: 20px 0 30px 0;"><table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse; border: 1px solid #cccccc;"><tr><td align="center" bgcolor="#70bbd9" style="padding: 40px 0 30px 0;"><img src="https://assets.codepen.io/210284/h1_1.gif" alt="Creating Email Magic." width="300" height="230" style="display: block;" /></td></tr><tr><td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;"><table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;"><tr><td><table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;"><tr><td width="260" valign="top"><table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;"><tr><td style="color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 25px 0 0 0;"><p style="margin: 0;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tempus adipiscing felis, sit amet blandit ipsum volutpat sed. Morbi porttitor, eget accumsan dictum, nisi libero ultricies ipsum, in posuere mauris neque at erat.</p></td></tr></table></td></tr></table></td></tr></table></td></tr><tr><td bgcolor="#ee4c50" style="padding: 30px 30px;"><table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;"><tr><td style="color: #ffffff; font-family: Arial, sans-serif; font-size: 14px;"><p style="margin: 0;">&reg; Someone, somewhere 2025<br/><a href="#" style="color: #ffffff;">Unsubscribe</a> to this newsletter instantly</p></td><td align="right"><table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;"><tr><td><a href="http://www.twitter.com/"><img src="https://assets.codepen.io/210284/tw.gif" alt="Twitter." width="38" height="38" style="display: block;" border="0" /></a></td><td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td><td><a href="http://www.twitter.com/"><img src="https://assets.codepen.io/210284/fb.gif" alt="Facebook." width="38" height="38" style="display: block;" border="0" /></a></td></tr></table></td></tr></table></td></tr></table></td></tr></table></body></html>`);

    }
    if(email_type == 3)
    {
      $('.card-block').find('p').html("hi M IN 3");
    }
    if(email_type == 4)
    {

    }


  });
</script>
@endsection
