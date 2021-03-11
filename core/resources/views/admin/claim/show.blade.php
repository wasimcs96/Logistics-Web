@extends('admin.layout')

@section('content')
<div class="page-header">
  <h4 class="page-title">Claim</h4>
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
      <a href="#">Claims</a>
    </li>
  </ul>
</div>
<div class="row">
  <div class="col-md-12">

    <div class="card">
      <div class="card-header">
        <div class="card-title d-inline-block">Claims</div>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-lg-12">
            <div class="table-responsive">
              <table class="table table-striped mt-3">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Home Phone</th>
                    <th scope="col">Mobile Phone</th>
                    <th scope="col">Other Phone</th>
                    <th scope="col">Address</th>
                    <th scope="col">City</th>
                    <th scope="col">Province</th>
                    <th scope="col">Postal Code</th>
                    <th scope="col">Move Date</th>
                    <th scope="col">Additional Information</th>
                    <th scope="col">Order Number</th>
                    <th scope="col">More</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach($claims as $key=>$claim)
                  <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $claim->first_name ?? '' }}</td>
                    <td>{{ $claim->last_name ?? '' }}</td>
                    <td>{{ $claim->email ?? '' }}</td>
                    <td>{{ $claim->home_phone ?? '' }}</td>
                    <td>{{ $claim->mobile_phone ?? '' }}</td>
                    <td>{{ $claim->other_phone ?? '' }}</td>
                    <td>{{ $claim->address ?? '' }}</td>
                    <td>{{ $claim->city ?? '' }}</td>
                    <td>{{ $claim->province ?? '' }}</td>
                    <td>{{ $claim->postal_code ?? '' }}</td>
                    <td>{{ $claim->move_date ?? '' }}</td>
                    <!-- <td>{{ $claim->additional_information ?? '' }}</td> -->
                    <td class="col-lg-3">
                                    <div class="comment more">
                                        <?php $aRoom= $claim->additional_information ?>
                                        @if(strlen($aRoom) > 20)
                                        {{substr($aRoom,0,20)}}
                                        <span class="read-more-show hide_content"><span
                                                class="btn btn-warning btn-sm">More<i
                                                    class="fa fa-angle-down"></i></span></span>
                                        <span class="read-more-content">
                                            <?php $reamm = substr($aRoom,100,strlen($aRoom)) ?> {!! $reamm!!}
                                            <span class="read-more-hide hide_content"><span
                                                    class="btn btn-warning btn-sm">Less <i
                                                        class="fa fa-angle-up"></i></span></span> </span>
                                        @else
                                        {!!$aRoom !!}
                                        @endif
                                </td>
                    <td>{{ $claim->order_number ?? '' }}</td>
                    <td>
                    <a class="btn btn-secondary btn-sm" href="{{ route('admin.claim.view',['id'=>$claim->id]) }}"
                        style="background: #6861CE !important;
                            border-color: #6861CE !important;">
                        <span class="btn-label">
                        <i class="fas fa-angle-double-right"></i>
                        </span>
                        View More
                      </a>
                    </td>



                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('page-script')
<script type="text/javascript">
// Hide the extra content initially, using JS so that if JS is disabled, no problemo:
            $('.read-more-content').addClass('hide_content')
            $('.read-more-show, .read-more-hide').removeClass('hide_content')

            // Set up the toggle effect:
            $('.read-more-show').on('click', function(e) {
              $(this).next('.read-more-content').removeClass('hide_content');
              $(this).addClass('hide_content');
              e.preventDefault();
            });

            // Changes contributed by @diego-rzg
            $('.read-more-hide').on('click', function(e) {
              var p = $(this).parent('.read-more-content');
              p.addClass('hide_content');
              p.prev('.read-more-show').removeClass('hide_content'); // Hide only the preceding "Read More"
              e.preventDefault();
            });
</script>
@stop