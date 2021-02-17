<?php $__env->startSection('content'); ?>
  <div class="page-header">
    <h4 class="page-title">
        Customers
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
        <a href="#">Customers</a>
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
                        Customers
                    </div>
                </div>
                <div class="col-lg-6">
                    <button class="btn btn-danger float-right btn-sm mr-2 d-none bulk-delete" data-href="<?php echo e(route('admin.order.bulk.delete')); ?>"><i class="flaticon-interface-5"></i> Delete</button>
                </div>
            </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-12">
              <?php if(count($users) == 0): ?>
                <h3 class="text-center">NO User FOUND</h3>
              <?php else: ?>
                <div class="table-responsive">
                  <table class="table table-striped mt-3">
                    <thead>
                      <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Number</th>
                        <th scope="col">Address</th>
                        <th scope="col">View</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>

                          <td><img src="<?php echo e(!empty($user->photo) ? asset('assets/front/img/user/'.$user->photo) : ''); ?>" alt="" width="60"></td>
                          <td><?php echo e(convertUtf8($user->username)); ?></td>
                          <td><?php echo e(convertUtf8($user->email)); ?></td>
                          <td>
                             <?php echo e($user->number); ?>

                          </td>

                          <td>
                             <?php echo e($user->address); ?>

                          </td>

                          <td>
                            <a  href="<?php echo e(route('register.user.view',$user->id)); ?>" class="btn btn-primary btn-sm editbtn"><i class="fas fa-eye"></i> View</a>
                          </td>
                          <td>
                          <form id="userFrom<?php echo e($user->id); ?>" class="d-inline-block" action="<?php echo e(route('register.user.ban')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <select class="form-control <?php echo e($user->status == 1 ? 'bg-success' : 'bg-danger'); ?>" name="status" onchange="document.getElementById('userFrom<?php echo e($user->id); ?>').submit();">
                                <option value="1" <?php echo e($user->status == 1 ? 'selected' : ''); ?>>Active</option>
                                <option value="0" <?php echo e($user->status == 0 ? 'selected' : ''); ?>>Deactive</option>
                            </select>
                            <input type="hidden" name="user_id" value="<?php echo e($user->id); ?>">
                            </form>
                          </td>
                        </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                </div>

              <?php endif; ?>
            </div>
          </div>
        </div>
        <div class="card-footer">
          <div class="row">
            <div class="d-inline-block mx-auto">
              <?php echo e($users->links()); ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\logistics\core\resources\views/admin/register_user/index.blade.php ENDPATH**/ ?>