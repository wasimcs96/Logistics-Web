<!-- Details Modal -->
<div class="modal fade" id="detailsModal{{$quote->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <strong style="text-transform: capitalize;">Name:</strong>
                </div>
                <div class="col-lg-8">{{convertUtf8($quote->name)}}</div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-4">
                    <strong style="text-transform: capitalize;">Email:</strong>
                </div>
                <div class="col-lg-8">{{convertUtf8($quote->email)}}</div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-4">
                    <strong style="text-transform: capitalize;">Phone Number:</strong>
                </div>
                <div class="col-lg-8">{{convertUtf8($quote->phone_number)}}</div>
            </div>
            <hr>
            <div class="row">
              <div class="col-lg-4">
                  <strong style="text-transform: capitalize;">Moving From:</strong>
              </div>
              <div class="col-lg-8">{{convertUtf8($quote->move_from)}}</div>
          </div>
          <hr>
          <div class="row">
            <div class="col-lg-4">
                <strong style="text-transform: capitalize;">Moving To:</strong>
            </div>
            <div class="col-lg-8">{{convertUtf8($quote->move_to)}}</div>
        </div>
        <hr>
        <div class="row">
          <div class="col-lg-4">
              <strong style="text-transform: capitalize;">Moving Date:</strong>
          </div>
          <div class="col-lg-8">{{convertUtf8($quote->move_date)}}</div>
      </div>
      <hr>
            {{-- <div class="row">
                <div class="col-lg-4">
                    <strong style="text-transform: capitalize;">Primary Conatct:</strong>
                </div>
                <div class="col-lg-8">{{convertUtf8($quote->primary_number)}}</div>
            </div>
            <hr> --}}
            {{-- <div class="row">
                <div class="col-lg-4">
                    <strong style="text-transform: capitalize;">Client Notes:</strong>
                </div>
                <div class="col-lg-8">{{convertUtf8($quote->client_notes)}}</div>
            </div>
            <hr> --}}
            {{-- <div class="row">
                <div class="col-lg-4">
                    <strong style="text-transform: capitalize;">Media:</strong>
                </div>
                <div class="col-lg-8">{{convertUtf8($quote->media)}}</div>
            </div>
            <hr> --}}
            {{-- <div class="row">
                <div class="col-lg-4">
                    <strong style="text-transform: capitalize;">Job Type:</strong>
                </div>
                <div class="col-lg-8">{{convertUtf8($quote->job_type)}}</div>
            </div>
            <hr> --}}
            {{-- <div class="row">
                <div class="col-lg-4">
                    <strong style="text-transform: capitalize;">Price Type:</strong>
                </div>
                <div class="col-lg-8">{{convertUtf8($quote->price_type)}}</div>
            </div>
            <hr> --}}
            {{-- <div class="row">
                <div class="col-lg-4">
                    <strong style="text-transform: capitalize;">Payment Method:</strong>
                </div>
                <div class="col-lg-8">{{convertUtf8($quote->payment_method)}}</div>
            </div>
            <hr> --}}
            {{-- <div class="row">
                <div class="col-lg-4">
                    <strong style="text-transform: capitalize;">Move Date:</strong>
                </div>
                <div class="col-lg-8">{{convertUtf8($quote->mdate)}}</div>
            </div>
            <hr> --}}
            {{-- <div class="row">
                <div class="col-lg-4">
                    <strong style="text-transform: capitalize;">Follow Up Date:</strong>
                </div>
                <div class="col-lg-8">{{convertUtf8($quote->fdate)}}</div>
            </div>
            <hr> --}}
            {{-- <div class="row">
                <div class="col-lg-4">
                    <strong style="text-transform: capitalize;">Building Type:</strong>
                </div>
                <div class="col-lg-8">{{convertUtf8($quote->c_building_type)}}</div>
            </div>
            <hr> --}}
            {{-- <div class="row">
                <div class="col-lg-4">
                    <strong style="text-transform: capitalize;">Country:</strong>
                </div>
                <div class="col-lg-8">{{convertUtf8($quote->c_country)}}</div>
            </div>
            <hr> --}}
            {{-- <div class="row">
                <div class="col-lg-4">
                    <strong style="text-transform: capitalize;">State:</strong>
                </div>
                <div class="col-lg-8">{{convertUtf8($quote->c_state)}}</div>
            </div>
            <hr> --}}
            {{-- <div class="row">
                <div class="col-lg-4">
                    <strong style="text-transform: capitalize;">City:</strong>
                </div>
                <div class="col-lg-8">{{convertUtf8($quote->c_city)}}</div>
            </div>
            <hr> --}}
            {{-- <div class="row">
                <div class="col-lg-4">
                    <strong style="text-transform: capitalize;">Franchisee Notes:</strong>
                </div>
                <div class="col-lg-8">{{convertUtf8($quote->franchisee_notes)}}</div>
            </div>
            <hr> --}}
            {{-- <div class="row">
                <div class="col-lg-4">
                    <strong style="text-transform: capitalize;">Truck Fee:</strong>
                </div>
                <div class="col-lg-8">{{convertUtf8($quote->truck_fee)}}</div>
            </div>
            <hr> --}}
            {{-- <div class="row">
                <div class="col-lg-4">
                    <strong style="text-transform: capitalize;">Hourly Rate:</strong>
                </div>
                <div class="col-lg-8">{{convertUtf8($quote->hourly_rate)}}</div>
            </div>
            <hr> --}}

          @php
            $fields = json_decode($quote->fields, true);
          @endphp

          {{-- @foreach ($fields as $key=>$field)
          <div class="row">
            <div class="col-lg-4">
              <strong style="text-transform: capitalize;">{{str_replace("_"," ",$key)}}:</strong>
            </div>
            <div class="col-lg-8">
                @if (is_array($field))
                    @php
                        $str = implode(", ", $field);
                    @endphp
                    {{convertUtf8($str)}}
                @else
                    {{convertUtf8($field)}}
                @endif
            </div>
          </div>
          <hr>
          @endforeach --}}

          <div class="row">
            <div class="col-lg-4">
              <strong>Status:</strong>
            </div>
            <div class="col-lg-8">
              @if ($quote->status == 0)
                <span class="badge badge-warning">Pending</span>
              @elseif ($quote->status == 1)
                <span class="badge badge-secondary">Processing</span>
              @elseif ($quote->status == 2)
                <span class="badge badge-success">Completed</span>
              @elseif ($quote->status == 3)
                <span class="badge badge-danger">Rejected</span>
              @endif
            </div>
          </div>
          <hr>

          @if (!empty($quote->nda))
          <div class="row">
            <div class="col-lg-4">
              <strong>NDA File:</strong>
            </div>
            <div class="col-lg-8">
              <a class="btn btn-secondary btn-sm" href="{{asset('assets/front/ndas/'.$quote->nda)}}" target="_blank">
                <span class="btn-label">
                  <i class="fa fa-eye"></i>
                </span>
                View
              </a>
            </div>
          </div>
          <hr>
          @endif

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
