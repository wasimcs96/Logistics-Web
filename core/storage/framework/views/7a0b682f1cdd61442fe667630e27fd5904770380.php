<?php $__env->startSection('content'); ?>
<div class="page-header">
    <h4 class="page-title">Driver</h4>
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
            <a href="#">Driver</a>
        </li>
    </ul>
</div>
<div class="row">
    <div class="col-md-12">

        <div class="card">
            <div class="card-header">
                <div class="card-title d-inline-block">Driver</div>
                    <!-- <a href="<?php echo e(route('admin.truck.create')); ?>" class="btn btn-primary float-right"><i
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

                                    <?php $__currentLoopData = $drivers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $driver): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php $truck = DB::table('trucks')->where('id',$driver->truck_id)->first(); ?>
                                    <tr>
                                        <td><?php echo e($driver->id ?? ''); ?></td>
                                        <td><?php echo e($truck->truck_number ?? ''); ?></td>
                                        <td><?php echo e($driver->user_id ?? ''); ?></td>
                                        <td><?php echo e($driver->order_id ?? ''); ?></td>
                                        <td><?php echo e($driver->pick_address ?? ''); ?></td>
                                        <td><?php echo e($driver->drop_address ?? ''); ?></td>
                                        <td><?php echo e($driver->date ?? ''); ?></td>
                                        <td>
                                        <?php $order = DB::table('product_orders')->where('id',$driver->order_id)->first(); ?>
                                        <form id="statusForm<?php echo e($order->id); ?>" class="d-inline-block" action="<?php echo e(route('admin.driver.product.orders.status')); ?>" method="post">
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
                              <?php endif; ?>"
                               name="order_status"
                                                    onchange="document.getElementById('statusForm<?php echo e($order->id); ?>').submit();">
                                                    <!-- <option value="pending"
                                                        <?php echo e($driver->order_status == 'pending' ? 'selected' : ''); ?>>Pending
                                                    </option> -->
                                                  
                                                    <option value="processing"
                                                        <?php echo e($order->order_status == 'processing' ? 'selected' : ''); ?>

                                                        >Processing
                                                    </option>
                                                    <option value="completed"
                                                        <?php echo e($order->order_status == 'completed' ? 'selected' : ''); ?>>Completed
                                                    </option>
                                                    <!-- <option value="rejected"
                                                        <?php echo e($driver->order_status == 'rejected' ? 'selected' : ''); ?>>
                                                        Rejected</option> -->
                                                </select>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\logistics\core\resources\views/admin/driver/index.blade.php ENDPATH**/ ?>