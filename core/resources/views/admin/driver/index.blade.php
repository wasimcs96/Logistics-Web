@extends('admin.layout')

@section('content')
<div class="page-header">
    <h4 class="page-title">Driver</h4>
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
            <a href="#">Driver</a>
        </li>
    </ul>
</div>
<div class="row">
    <div class="col-md-12">

        <div class="card">
            <div class="card-header">
                <div class="card-title d-inline-block">Driver</div>
                    <!-- <a href="{{ route('admin.truck.create') }}" class="btn btn-primary float-right"><i
                            class="fas fa-plus"></i> Add
                        Truck
                    </a> -->
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
                                        <th scope="col">User Id</th>
                                        <th scope="col">Order Id</th>
                                        <th scope="col">Pick Address</th>
                                        <th scope="col">Drop Address</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach($drivers as $driver)
                                    <?php $truck = DB::table('trucks')->where('id',$driver->truck_id)->first(); ?>
                                    <tr>
                                        <td>{{ $driver->id ?? '' }}</td>
                                        <td>{{ $truck->truck_number ?? '' }}</td>
                                        <td>{{ $driver->user_id ?? '' }}</td>
                                        <td>{{ $driver->order_id ?? '' }}</td>
                                        <td>{{ $driver->pick_address ?? '' }}</td>
                                        <td>{{ $driver->drop_address ?? '' }}</td>
                                        <td>{{ $driver->date ?? '' }}</td>
                                        <td>
                                        <?php $order = DB::table('product_orders')->where('id',$driver->order_id)->first(); ?>
                                        <form id="statusForm{{$order->id}}" class="d-inline-block" action="{{route('admin.driver.product.orders.status')}}" method="post">
                                                @csrf
                                                <input type="hidden" name="order_id" value="{{$order->id}}">
                                                <select class="form-control form-control-sm
                              @if ($order->order_status == 'pending')
                                bg-warning
                              @elseif ($order->order_status == 'processing')
                                bg-primary
                              @elseif ($order->order_status == 'completed')
                                bg-success
                              @elseif ($order->order_status == 'rejected')
                                bg-danger
                              @endif"
                               name="order_status"
                                                    onchange="document.getElementById('statusForm{{$order->id}}').submit();">
                                                    <!-- <option value="pending"
                                                        {{$driver->order_status == 'pending' ? 'selected' : ''}}>Pending
                                                    </option> -->
                                                  
                                                    <option value="processing"
                                                        {{$order->order_status == 'processing' ? 'selected' : ''}}
                                                        >Processing
                                                    </option>
                                                    <option value="completed"
                                                        {{$order->order_status == 'completed' ? 'selected' : ''}}>Completed
                                                    </option>
                                                    <!-- <option value="rejected"
                                                        {{$driver->order_status == 'rejected' ? 'selected' : ''}}>
                                                        Rejected</option> -->
                                                </select>
                                            </form>
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