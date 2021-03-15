<?php $__env->startSection('content'); ?>
<div class="page-header">
   <h4 class="page-title">Customer Details</h4>
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
         <a href="<?php echo e(url()->previous()); ?>">Customers</a>
      </li>
      <li class="separator">
         <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">
         <a href="#">Customer Details</a>
      </li>
   </ul>

   <a href="<?php echo e(url()->previous()); ?>" class="btn-md btn btn-primary" style="margin-left: auto;">Back</a>
</div>
<div class="row">
   <div class="col-md-12">
            <div class="row">
               <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"><?php echo e(__('Customer Details')); ?></h4>
                    </div>
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-lg-6">
                                <strong><?php echo e(__('First Name:')); ?></strong>
                            </div>
                            <div class="col-lg-6">
                                <?php echo e($user->fname); ?>

                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-6">
                                <strong><?php echo e(__('Last Name:')); ?></strong>
                            </div>
                            <div class="col-lg-6">
                                <?php echo e($user->lname); ?>

                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-6">
                                <strong><?php echo e(__('Username:')); ?></strong>
                            </div>
                            <div class="col-lg-6">
                                <?php echo e($user->username); ?>

                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-lg-6">
                                <strong><?php echo e(__('Email:')); ?></strong>
                            </div>
                            <div class="col-lg-6">
                                <?php echo e($user->email); ?>

                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-6">
                                <strong><?php echo e(__('Number:')); ?></strong>
                            </div>
                            <div class="col-lg-6">
                                <?php echo e($user->number); ?>

                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-6">
                                <strong><?php echo e(__('Country:')); ?></strong>
                            </div>
                            <div class="col-lg-6">
                                <?php echo e($user->country); ?>

                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-6">
                                <strong><?php echo e(__('City:')); ?></strong>
                            </div>
                            <div class="col-lg-6">
                                <?php echo e($user->city); ?>

                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-6">
                                <strong><?php echo e(__('Address:')); ?></strong>
                            </div>
                            <div class="col-lg-6">
                                <?php echo e($user->address); ?>

                            </div>
                        </div>

                    </div>
                </div>

               </div>



               <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"><?php echo e(__('Shipping Details')); ?></h4>
                    </div>
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-lg-6">
                                <strong><?php echo e(__('Email:')); ?></strong>
                            </div>
                            <div class="col-lg-6">
                                <?php echo e($user->billing_email); ?>

                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-6">
                                <strong><?php echo e(__('Phone:')); ?></strong>
                            </div>
                            <div class="col-lg-6">
                                <?php echo e($user->billing_number); ?>

                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-6">
                                <strong><?php echo e(__('City:')); ?></strong>
                            </div>
                            <div class="col-lg-6">
                                <?php echo e($user->billing_city); ?>

                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-6">
                                <strong><?php echo e(__('Address:')); ?></strong>
                            </div>
                            <div class="col-lg-6">
                                <?php echo e($user->billing_address); ?>

                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-6">
                                <strong><?php echo e(__('Country:')); ?></strong>
                            </div>
                            <div class="col-lg-6">
                                <?php echo e($user->billing_country); ?>

                            </div>
                        </div>

                    </div>
                </div>

               </div>



               <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"><?php echo e(__('Billing Details')); ?></h4>
                    </div>
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-lg-6">
                                <strong><?php echo e(__('Email:')); ?></strong>
                            </div>
                            <div class="col-lg-6">
                                <?php echo e($user->billing_email); ?>

                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-6">
                                <strong><?php echo e(__('Phone:')); ?></strong>
                            </div>
                            <div class="col-lg-6">
                                <?php echo e($user->billing_number); ?>

                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-6">
                                <strong><?php echo e(__('City:')); ?></strong>
                            </div>
                            <div class="col-lg-6">
                                <?php echo e($user->billing_city); ?>

                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-6">
                                <strong><?php echo e(__('Address:')); ?></strong>
                            </div>
                            <div class="col-lg-6">
                                <?php echo e($user->billing_address); ?>

                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-6">
                                <strong><?php echo e(__('Country:')); ?></strong>
                            </div>
                            <div class="col-lg-6">
                                <?php echo e($user->billing_country); ?>

                            </div>
                        </div>

                    </div>
                </div>

               </div>
            </div>


      <div class="card">
        <div class="card-header">
            <h4 class="card-title">Orders of [<?php echo e($user->username); ?>]</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive product-list">
                <h5></h5>
                <table class="table table-striped mt-3">
                   <thead>
                      <tr>
                         <th scope="col">Date</th>
                         <th scope="col">Total</th>
                         <th scope="col">Payment Status</th>
                         <th scope="col">Order Status</th>
                         <th scope="col">Details</th>
                      </tr>
                   </thead>
                   <tbody>
                      <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                         <td><?php echo e(convertUtf8($order->created_at->format('d-m-Y'))); ?></td>
                         <td>$ <?php echo e(round($order->total,2)); ?></td>
                         <td>
                            <?php if($order->payment_status == 'Pending' || $order->payment_status == 'pending'): ?>
                            <p class="badge badge-danger"><?php echo e($order->payment_status); ?></p>
                            <?php else: ?>
                            <p class="badge badge-success"><?php echo e($order->payment_status); ?></p>
                            <?php endif; ?>
                         </td>
                         <td>
                            <form id="statusForm<?php echo e($order->id); ?>" class="d-inline-block" action="<?php echo e(route('admin.product.orders.status')); ?>" method="post">
                               <?php echo csrf_field(); ?>
                               <input type="hidden" name="order_id" value="<?php echo e($order->id); ?>">
                               <select class="form-control
                                  <?php if($order->order_status == 'pending'): ?>
                                  bg-warning
                                  <?php elseif($order->order_status == 'processing'): ?>
                                  bg-primary
                                  <?php elseif($order->order_status == 'completed'): ?>
                                  bg-success
                                  <?php elseif($order->order_status == 'reject'): ?>
                                  bg-danger
                                  <?php endif; ?>
                                  " name="order_status" onchange="document.getElementById('statusForm<?php echo e($order->id); ?>').submit();">
                               <option value="pending" <?php echo e($order->order_status == 'pending' ? 'selected' : ''); ?>>Pending</option>
                               <option value="processing" <?php echo e($order->order_status == 'processing' ? 'selected' : ''); ?>>Processing</option>
                               <option value="completed" <?php echo e($order->order_status == 'completed' ? 'selected' : ''); ?>>Completed</option>
                               <option value="reject" <?php echo e($order->order_status == 'reject' ? 'selected' : ''); ?>>Rejected</option>
                               </select>
                            </form>
                         </td>
                         <td>
                            <a href="<?php echo e(route('admin.product.details',$order->id)); ?>" class="btn btn-primary btn-sm editbtn"><i class="fas fa-eye"></i> View</a>
                         </td>
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   </tbody>
                </table>
             </div>

             <div class="text-center d-block">
                 <?php echo e($orders->links()); ?>

             </div>
        </div>
    </div>
   </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\logistics\core\resources\views/admin/register_user/details.blade.php ENDPATH**/ ?>