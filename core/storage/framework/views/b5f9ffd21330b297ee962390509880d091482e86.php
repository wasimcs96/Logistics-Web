<?php $__env->startSection('content'); ?>
<div class="page-header">
    <h4 class="page-title">
        <?php if(request()->path()=='admin/product/pending/orders'): ?>
        Pending
        <?php elseif(request()->path()=='admin/product/all/orders'): ?>
        All
        <?php elseif(request()->path()=='admin/product/processing/orders'): ?>
        Processing
        <?php elseif(request()->path()=='admin/product/completed/orders'): ?>
        Completed
        <?php elseif(request()->path()=='admin/product/rejected/orders'): ?>
        Rejcted
        <?php endif; ?>
        Orders
    </h4>
    <ul class="breadcrumbs">
        <li class="nav-home">
            <a href="<?php echo e(route('admin.dashboard')); ?>">
                <i class="flaticon-home"></i>
            </a>
        </li>
        <li class="separator">
            <i class="flaticon-right-arrow"></i>
        </li>
        <li class="nav-item">
            <a href="#">Product Management</a>
        </li>
        <li class="separator">
            <i class="flaticon-right-arrow"></i>
        </li>
        <li class="nav-item">
            <a href="#">
                <?php if(request()->path()=='admin/product/pending/orders'): ?>
                Pending
                <?php elseif(request()->path()=='admin/product/all/orders'): ?>
                All
                <?php elseif(request()->path()=='admin/product/processing/orders'): ?>
                Processing
                <?php elseif(request()->path()=='admin/product/completed/orders'): ?>
                Completed
                <?php elseif(request()->path()=='admin/product/rejected/orders'): ?>
                Rejcted
                <?php elseif(request()->path()=='admin/product/search/orders'): ?>
                Search
                <?php endif; ?>
                Orders
            </a>
        </li>
    </ul>
</div>
<div class="row">
    <div class="col-md-12">

        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card-title">
                            <?php if(request()->path()=='admin/product/pending/orders'): ?>
                            Pending
                            <?php elseif(request()->path()=='admin/product/all/orders'): ?>
                            All
                            <?php elseif(request()->path()=='admin/product/processing/orders'): ?>
                            Processing
                            <?php elseif(request()->path()=='admin/product/completed/orders'): ?>
                            Completed
                            <?php elseif(request()->path()=='admin/product/rejected/orders'): ?>
                            Rejcted
                            <?php elseif(request()->path()=='admin/product/search/orders'): ?>
                            Search
                            <?php endif; ?>
                            Orders
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <button class="btn btn-danger float-right btn-md ml-4 d-none bulk-delete"
                            data-href="<?php echo e(route('admin.product.order.bulk.delete')); ?>"><i
                                class="flaticon-interface-5"></i> Delete</button>
                        <form action="<?php echo e(url()->current()); ?>" class="d-inline-block float-right">
                            <input class="form-control" type="text" name="search" placeholder="Search by Order Number"
                                value="<?php echo e(request()->input('search') ? request()->input('search') : ''); ?>">
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <?php if(count($orders) == 0): ?>
                        <h3 class="text-center">NO ORDER FOUND</h3>
                        <?php else: ?>
                        <div class="table-responsive">
                            <table class="table table-striped mt-3">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <input type="checkbox" class="bulk-check" data-val="all">
                                        </th>

                                        <th scope="col">Order Number</th>
                                        <th scope="col" width="15%">Gateway</th>
                                        <th scope="col">Total</th>
                                        <th scope="col"> Driver</th>
                                        <th scope="col">Order Status</th>
                                        <th scope="col">Receipt</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $increase = 0 ?>
                                    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="bulk-check" data-val="<?php echo e($order->id); ?>">
                                        </td>
                                        <td>#<?php echo e($order->order_number); ?></td>
                                        <td><?php echo e($order->method); ?></td>
                                        <td><?php echo e($bex->base_currency_symbol_position == 'left' ? $bex->base_currency_symbol : ''); ?>

                                            <?php echo e(round($order->total,2)); ?>

                                            <?php echo e($bex->base_currency_symbol_position == 'right' ? $bex->base_currency_symbol : ''); ?>

                                        </td>
                                        <td> <?php if($order->order_status != 'rejected'): ?>
                                            <button class="btn btn-success" type="button" custom1="<?php echo e($order->id); ?>"
                                                data-toggle="modal" data-target="#processModal"
                                                id="assignDriver"
                                                >Assign</button>
                                                <?php else: ?>
                                                <button class="btn btn-success" type="button"
                                                disabled
                                                >Assign</button>
                                                <?php endif; ?>
                                        </td>
                                        <td>
                                            <form id="statusForm<?php echo e($order->id); ?>" class="d-inline-block"
                                                action="<?php echo e(route('admin.product.orders.status')); ?>" method="post">
                                                <?php echo csrf_field(); ?>
                                                <input type="hidden" name="order_id" value="<?php echo e($order->id); ?>">
                                                <select class="form-control form-control-sm
                              <?php if($order->order_status == 'pending'): ?>
                                bg-warning
                              <?php elseif($order->order_status == 'processing'): ?>
                                bg-primary
                              <?php elseif($order->order_status == 'completed'): ?>
                                bg-success
                              <?php elseif($order->order_status == 'rejected'): ?>
                                bg-danger
                              <?php endif; ?>
                              " name="order_status"
                                                    onchange="document.getElementById('statusForm<?php echo e($order->id); ?>').submit();">
                                                    <!-- .submit() -->
                                                    <option value="pending"
                                                        <?php echo e($order->order_status == 'pending' ? 'selected' : ''); ?>>Pending
                                                    </option>
                                                    <option value="processing"
                                                        <?php echo e($order->order_status == 'processing' ? 'selected' : ''); ?>

                                                        data-toggle="modal" data-target="#processModal">Processing
                                                    </option>
                                                    <option value="rejected"
                                                        <?php echo e($order->order_status == 'rejected' ? 'selected' : ''); ?>>
                                                        Rejected</option>
                                                </select>
                                            </form>
                                        </td>

                                        <td>
                                            <?php if(!empty($order->receipt)): ?>
                                            <a class="btn btn-sm btn-info" href="#" data-toggle="modal"
                                                data-target="#receiptModal<?php echo e($order->id); ?>">Show</a>
                                            <?php else: ?>
                                            -
                                            <?php endif; ?>
                                        </td>

                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-info btn-sm dropdown-toggle" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    Actions
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item"
                                                        href="<?php echo e(route('admin.product.details', $order->id)); ?>"
                                                        target="_blank">Details</a>
                                                    <a class="dropdown-item"
                                                        href="<?php echo e(asset('assets/front/invoices/product/'.$order->invoice_number)); ?>"
                                                        target="_blank">Invoice</a>
                                                    <form class="deleteform d-block"
                                                        action="<?php echo e(route('admin.product.order.delete')); ?>" method="post">
                                                        <?php echo csrf_field(); ?>
                                                        <input type="hidden" name="order_id" value="<?php echo e($order->id); ?>">
                                                        <button type="submit" class="deletebtn">
                                                            Delete
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>


                                    
                                    <div class="modal fade" id="receiptModal<?php echo e($order->id); ?>" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Receipt Image</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="<?php echo e(asset('assets/front/receipt/' . $order->receipt)); ?>"
                                                        alt="Receipt" width="100%">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php $increase++ ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                        
                        <div class="modal fade" id="processModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Order Information</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- <select>
                                          <?php $__currentLoopData = $trucks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $truck): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($truck->id); ?>" name="truck">$item->name</option>
                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select> -->
                                        <form id="processModalForm">
                                            <label>Truck Information **</label>
                                            <select name="truck" class="form-control ltr" id="truck">
                                                <?php $__currentLoopData = $trucks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $truck): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($truck->id); ?>"><?php echo e($truck->company_name); ?> (Truck
                                                    Number:<?php echo e($truck->truck_number); ?>)</option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <div id="truckError"></div>
                                            <label>Driver Information **</label>
                                            <select name="user" class="form-control ltr" id="driver">
                                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($user->role_id == 6): ?>
                                                <option value="<?php echo e($user->id); ?>"><?php echo e($user->first_name); ?>

                                                    <?php echo e($user->last_name); ?>

                                                </option>
                                                <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <div id="driverError"></div>
                                            <div class="form-group">
                                                <label for="">Date **</label>
                                                <input id="date" type="datetime-local"  class="form-control" name="date" value="">
                                                <p id="eerremail" class="mb-0 text-danger em"></p>
                                            </div>
                                            <div id="dateError"></div>
                                            <div class="form-group">
                                                <label for="">Pick Address **</label>
                                                <input id="paddress" type="text" class="form-control" name="paddress"
                                                    value="" placeholder="Pick Address">
                                                <p id="eerremail" class="mb-0 text-danger em"></p>
                                            </div>
                                            <div id="paddressError"></div>
                                            <div class="form-group">
                                                <label for="">Drop Address **</label>
                                                <input id="daddress" type="text" class="form-control" name="daddress"
                                                    value="" placeholder="Drop Address">
                                                <p id="eerremail" class="mb-0 text-danger em"></p>
                                            </div>
                                            <div id="daddressError"></div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary" id="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Send Mail Modal -->
                        <div class="modal fade" id="mailModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Send Mail</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="ajaxEditForm" class="" action="<?php echo e(route('admin.orders.mail')); ?>"
                                            method="POST">
                                            <?php echo csrf_field(); ?>
                                            <div class="form-group">
                                                <label for="">Client Mail **</label>
                                                <input id="inemail" type="text" class="form-control" name="email"
                                                    value="" placeholder="Enter email">
                                                <p id="eerremail" class="mb-0 text-danger em"></p>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Subject **</label>
                                                <input id="insubject" type="text" class="form-control" name="subject"
                                                    value="" placeholder="Enter subject">
                                                <p id="eerrsubject" class="mb-0 text-danger em"></p>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Message **</label>
                                                <textarea id="inmessage" class="form-control summernote" name="message"
                                                    placeholder="Enter message" data-height="150"></textarea>
                                                <p id="eerrmessage" class="mb-0 text-danger em"></p>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button id="updateBtn" type="button" class="btn btn-primary">Send Mail</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="d-inline-block mx-auto">
                        <?php echo e($orders->appends(['search' => request()->input('search')])->links()); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
var order_id = '';
var truck_id = '';
var user_id = '';
var date = '';
var pick_address = '';
var drop_address = '';
var inc = '';
inc = <?php echo e($increase); ?>;

$(document).on('click', '#assignDriver', function() {
    var order_id = $(this).attr('custom1');
    // console.log(order_id);


    $(document).on('click', '#submit', function() {
        // console.log('fsdvsdvdfddfdfd');
        truck_id = $('#truck').val();
        user_id = $('#driver').val();
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
                url: "<?php echo e(route('admin.assign.driver')); ?>",
                data: {
                    order_id: order_id,
                    truck_id: truck_id,
                    user_id: user_id,
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
</script>
<!-- <script>
$("p").click(function () {
  $("#date").datetimepicker({
  format: 'Y-m-d H:i
});
}
</script> -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\logistics\core\resources\views/admin/product/order/index.blade.php ENDPATH**/ ?>