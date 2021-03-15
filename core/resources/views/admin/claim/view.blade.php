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
      <a href="#">File Item</a>
    </li>
  </ul>
</div>
<div class="row">
  <div class="col-md-12">

    <div class="card">
      <div class="card-header">
        <div class="card-title d-inline-block">File Item</div>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-lg-12">
            <div class="table-responsive">
              <table class="table table-striped mt-3">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Claim Id</th>
                    <th scope="col">Description</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Damage Description</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach($items as $key=>$item)
                  <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $item->claims_id ?? '' }}</td>
                    <td>{{ $item->description ?? '' }}</td>
                    <!-- <td>{{ $item->photo ?? '' }}</td> -->
                    <!-- <td>@if(isset($item->photo))<a href="{{asset($item->photo)}}" target="_blank" ><img src="{{ asset($item->photo)}}" style="width: 100px;" target="_blank" >@else N/A @endif</a></td> -->
                    <td>@if(isset($item->photo))<a href="{{asset($item->photo)}}" target="_blank" ><img src="{{ asset($item->photo)}}" style="width: 100px;" target="_blank" ></a>@else <img src="{{ asset('admin/img/no-image.png')}}" style="width: 100px;"> @endif</td>
                    <td>{{ $item->damage_desc ?? '' }}</td>
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