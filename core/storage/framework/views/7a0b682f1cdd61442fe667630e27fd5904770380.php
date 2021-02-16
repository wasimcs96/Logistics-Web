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
                                        <th scope="col">Truck Id</th>
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
                                    <tr>
                                        <td><?php echo e($driver->id ?? ''); ?></td>
                                        <td><?php echo e($driver->truck_id ?? ''); ?></td>
                                        <td><?php echo e($driver->user_id ?? ''); ?></td>
                                        <td><?php echo e($driver->order_id ?? ''); ?></td>
                                        <td><?php echo e($driver->pick_address ?? ''); ?></td>
                                        <td><?php echo e($driver->drop_address ?? ''); ?></td>
                                        <td><?php echo e($driver->date ?? ''); ?></td>
                                        <td>
                                            <!-- <a class="btn btn-secondary btn-sm"
                                                href="<?php echo e(route('admin.truck.edit',['id'=>$driver->id])); ?>" style="background: #6861CE !important;
                          border-color: #6861CE !important;">
                                                <span class="btn-label">
                                                    <i class="fas fa-edit"></i>
                                                </span>
                                                Edit
                                            </a> -->
                                            <!-- <a class="btn btn-danger btn-sm"
                                                href="<?php echo e(route('admin.truck.destroy',['id'=>$driver->id])); ?>" style="    background: #F25961 !important;
                          border-color: #F25961 !important;">
                                                <span class="btn-label">
                                                    <i class="fas fa-trash"></i>
                                                </span>
                                                Delete
                                            </a> -->
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