<?php $__env->startSection('content'); ?>
<div class="page-header">
  <h4 class="page-title">Lead</h4>
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
      <a href="#">Lead</a>
    </li>
  </ul>
</div>
<div class="row">
  <div class="col-md-12">

    <div class="card">
      <div class="card-header">
        <div class="card-title d-inline-block">Lead</div>
        <a href="<?php echo e(route('admin.lead.create')); ?>" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Add
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

                  <?php $__currentLoopData = $leads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$lead): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($key+1); ?></td>
                    <td><?php echo e($lead->first_name); ?></td>
                    <td><?php echo e($lead->last_name); ?></td>
                    <td><?php echo e($lead->phone_number); ?></td>
                    <td><?php echo e($lead->client_email); ?></td>
                    <td><?php echo e($lead->move_data); ?></td>
                    <td><?php echo e($lead->moving_from); ?></td>
                    <td><?php echo e($lead->moving_to); ?></td>
                    <td><?php echo e($lead->created_at); ?></td>
                    <td><?php echo e($lead->updated_at); ?></td>
                    <td>
                      <a class="btn btn-secondary btn-sm" href="<?php echo e(route('admin.lead.edit',['id'=>$lead->id])); ?>"
                        style="background: #6861CE !important;
                          border-color: #6861CE !important;">
                        <span class="btn-label">
                          <i class="fas fa-edit"></i>
                        </span>
                        Edit
                      </a>
                      <a class="btn btn-danger btn-sm"
                        href="<?php echo e(route('admin.lead.destroy',['id'=>$lead->id])); ?>" style="    background: #F25961 !important;
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
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\logistics\core\resources\views/admin/leads/index.blade.php ENDPATH**/ ?>