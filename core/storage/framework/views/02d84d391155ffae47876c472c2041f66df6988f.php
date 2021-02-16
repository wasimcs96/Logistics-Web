<?php $__env->startSection('content'); ?>
<div class="page-header">
  <h4 class="page-title">Truck</h4>
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
      <a href="#">Truck</a>
    </li>
  </ul>
</div>
<div class="row">
  <div class="col-md-12">

    <div class="card">
      <div class="card-header">
        <div class="card-title d-inline-block">Truck</div>
        <a href="<?php echo e(route('admin.truck.create')); ?>" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Add
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

                  <?php $__currentLoopData = $trucks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $truck): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($truck->id); ?></td>
                    <td><?php echo e($truck->truck_number); ?></td>
                    <td><?php echo e($truck->company_name); ?></td>
                    <td><?php echo e($truck->load_weight); ?></td>
                    <td><?php echo e($truck->created_at); ?></td>
                    <td><?php echo e($truck->updated_at); ?></td>
                    <td>
                      <!-- <a href="<?php echo e(route('admin.truck.edit',['id'=>$truck->id])); ?>" class="btn btn-warning" style="    background: #6861CE !important;
                          border-color: #6861CE !important;"><i class="fa fa-edit"></i></a> -->
                      <a class="btn btn-secondary btn-sm" href="<?php echo e(route('admin.truck.edit',['id'=>$truck->id])); ?>"
                        style="background: #6861CE !important;
                          border-color: #6861CE !important;">
                        <span class="btn-label">
                          <i class="fas fa-edit"></i>
                        </span>
                        Edit
                      </a>
                      <!-- <a href="<?php echo e(route('admin.truck.destroy',['id'=>$truck->id])); ?>" class="btn btn-danger"><i
                          class="fa fa-trash"></i></a> -->
                      <a class="btn btn-danger btn-sm"
                        href="<?php echo e(route('admin.truck.destroy',['id'=>$truck->id])); ?>" style="    background: #F25961 !important;
                          border-color: #F25961 !important;">
                        <span class="btn-label">
                          <i class="fas fa-trash"></i>
                        </span>
                        Delete
                      </a>
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


<!-- Create Users Modal -->
<?php if ($__env->exists('admin.truck.create')) echo $__env->make('admin.truck.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\logistics\core\resources\views/admin/trucks/index.blade.php ENDPATH**/ ?>