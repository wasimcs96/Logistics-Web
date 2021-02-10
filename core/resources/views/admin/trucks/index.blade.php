@extends('admin.layout')

@section('content')
<div class="page-header">
  <h4 class="page-title">Truck</h4>
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
      <a href="#">Truck</a>
    </li>
  </ul>
</div>
<div class="row">
  <div class="col-md-12">

    <div class="card">
      <div class="card-header">
        <div class="card-title d-inline-block">Truck</div>
        <a href="{{ route('admin.truck.create') }}" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Add
          Truck</a>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-lg-12">
            <div class="table-responsive">
              <table class="table table-striped mt-3">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Truck Number</th>
                    <th scope="col">Company Name</th>
                    <th scope="col">Load Weight</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach($trucks as $truck)
                  <tr>
                    <td>{{ $truck->id }}</td>
                    <td>{{ $truck->truck_number }}</td>
                    <td>{{ $truck->company_name }}</td>
                    <td>{{ $truck->load_weight }}</td>
                    <td>{{ $truck->created_at }}</td>
                    <td>{{ $truck->updated_at }}</td>
                    <td>
                      <!-- <a href="{{ route('admin.truck.edit',['id'=>$truck->id]) }}" class="btn btn-warning" style="    background: #6861CE !important;
                          border-color: #6861CE !important;"><i class="fa fa-edit"></i></a> -->
                      <a class="btn btn-secondary btn-sm" href="{{ route('admin.truck.edit',['id'=>$truck->id]) }}"
                        style="background: #6861CE !important;
                          border-color: #6861CE !important;">
                        <span class="btn-label">
                          <i class="fas fa-edit"></i>
                        </span>
                        Edit
                      </a>
                      <!-- <a href="{{ route('admin.truck.destroy',['id'=>$truck->id]) }}" class="btn btn-danger"><i
                          class="fa fa-trash"></i></a> -->
                      <a class="btn btn-danger btn-sm"
                        href="{{ route('admin.truck.destroy',['id'=>$truck->id]) }}" style="    background: #F25961 !important;
                          border-color: #F25961 !important;">
                        <span class="btn-label">
                          <i class="fas fa-trash"></i>
                        </span>
                        Delete
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


<!-- Create Users Modal -->
@includeif('admin.truck.create')

@endsection