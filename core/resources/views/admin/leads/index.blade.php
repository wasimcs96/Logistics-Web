@extends('admin.layout')

@section('content')
<div class="page-header">
  <h4 class="page-title">Lead</h4>
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
      <a href="#">Lead</a>
    </li>
  </ul>
</div>
<div class="row">
  <div class="col-md-12">

    <div class="card">
      <div class="card-header">
        <div class="card-title d-inline-block">Lead</div>
        <a href="{{ route('admin.lead.create') }}" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Add
          Lead</a>
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
                    <th scope="col">Phone Number</th>
                    <th scope="col">Client Email</th>
                    <th scope="col">Move Data</th>
                    <th scope="col">Moving From</th>
                    <th scope="col">Moving To</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach($leads as $key=>$lead)
                  <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $lead->first_name }}</td>
                    <td>{{ $lead->last_name }}</td>
                    <td>{{ $lead->phone_number }}</td>
                    <td>{{ $lead->client_email }}</td>
                    <td>{{ $lead->move_data }}</td>
                    <td>{{ $lead->moving_from }}</td>
                    <td>{{ $lead->moving_to }}</td>
                    <td>{{ $lead->created_at }}</td>
                    <td>{{ $lead->updated_at }}</td>
                    <td>
                      <a class="btn btn-secondary btn-sm" href="{{ route('admin.lead.edit',['id'=>$lead->id]) }}"
                        style="background: #6861CE !important;
                          border-color: #6861CE !important;">
                        <span class="btn-label">
                          <i class="fas fa-edit"></i>
                        </span>
                        Edit
                      </a>
                      <a class="btn btn-danger btn-sm"
                        href="{{ route('admin.lead.destroy',['id'=>$lead->id]) }}" style="    background: #F25961 !important;
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