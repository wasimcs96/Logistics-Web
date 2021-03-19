<?php $__env->startSection('content'); ?>
<div class="page-header">
   <h4 class="page-title">Order Details</h4>
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
         <a href="<?php echo e(url()->previous()); ?>">Order</a>
      </li>
      <li class="separator">
         <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">
         <a href="#"><?php echo e(__('Order Details')); ?></a>
      </li>
   </ul>
</div>
<div class="row">
    <div class="col-md-4">
       <div class="card">
          <div class="card-header">
             <div class="card-title d-inline-block">Order  [ <?php echo e($order->order_number); ?> ]</div>

          </div>
          <div class="card-body pt-5 pb-5">
             <div class="payment-information">
                 <div class="row mb-2">
                     <div class="col-lg-6">
                         <strong><?php echo e(__('Payment Status')); ?> :</strong>
                     </div>
                     <div class="col-lg-6">
                         <?php if($order->payment_status =='Pending' || $order->payment_status == 'pending'): ?>
                         <span class="badge badge-danger"><?php echo e(convertUtf8($order->payment_status)); ?>  </span>
                         <?php else: ?>
                         <span class="badge badge-success"><?php echo e(convertUtf8($order->payment_status)); ?>  </span>
                         <?php endif; ?>
                     </div>
                 </div>

                 <div class="row mb-2">
                     <div class="col-lg-6">
                         <strong><?php echo e(__('Order Status')); ?> :</strong>
                     </div>
                     <div class="col-lg-6">
                         <?php if($order->order_status == 'pending'): ?>
                         <span class="badge badge-warning"><?php echo e(convertUtf8($order->order_status)); ?>  </span>
                         <?php elseif($order->order_status == 'processing'): ?>
                         <span class="badge badge-primary"><?php echo e(convertUtf8($order->order_status)); ?>  </span>
                         <?php elseif($order->order_status == 'completed'): ?>
                         <span class="badge badge-success"><?php echo e(convertUtf8($order->order_status)); ?>  </span>
                         <?php elseif($order->order_status == 'reject'): ?>
                         <span class="badge badge-danger"><?php echo e(convertUtf8($order->order_status)); ?>  </span>
                         <?php endif; ?>
                     </div>
                 </div>

                 <div class="row mb-2">
                     <div class="col-lg-6">
                         <strong><?php echo e(__('Paid amount')); ?> :</strong>
                     </div>
                     <div class="col-lg-6">
                        <?php echo e($bex->base_currency_symbol_position == 'left' ? $bex->base_currency_symbol : ''); ?> <?php echo e($order->total); ?> <?php echo e($bex->base_currency_symbol_position == 'right' ? $bex->base_currency_symbol : ''); ?>

                     </div>
                 </div>

                 <div class="row mb-2">
                     <div class="col-lg-6">
                         <strong><?php echo e(__('Shipping Charge')); ?> :</strong>
                     </div>
                     <div class="col-lg-6">
                        <?php echo e($bex->base_currency_symbol_position == 'left' ? $bex->base_currency_symbol : ''); ?> <?php echo e($order->shipping_charge); ?> <?php echo e($bex->base_currency_symbol_position == 'right' ? $bex->base_currency_symbol : ''); ?>

                     </div>
                 </div>

                 <div class="row mb-2">
                     <div class="col-lg-6">
                         <strong><?php echo e(__('Payment Method')); ?> :</strong>
                     </div>
                     <div class="col-lg-6">
                         <?php echo e(convertUtf8($order->method)); ?>

                     </div>
                 </div>


                 <div class="row mb-0">
                     <div class="col-lg-6">
                         <strong><?php echo e(__('Order Date')); ?> :</strong>
                     </div>
                     <div class="col-lg-6">
                        <?php echo e(convertUtf8($order->created_at->format('d-m-Y'))); ?>

                     </div>
                 </div>

             </div>
          </div>
       </div>

    </div>

    <div class="col-md-4">
       <div class="card">
          <div class="card-header">
             <div class="card-title d-inline-block">Shipping Details</div>

          </div>
          <div class="card-body pt-5 pb-5">
             <div class="payment-information">
                 <div class="row mb-2">
                     <div class="col-lg-6">
                         <strong><?php echo e(__('Email')); ?> :</strong>
                     </div>
                     <div class="col-lg-6">
                        <?php echo e(convertUtf8($order->shpping_email)); ?>

                     </div>
                 </div>

                 <div class="row mb-2">
                     <div class="col-lg-6">
                         <strong><?php echo e(__('Phone')); ?> :</strong>
                     </div>
                     <div class="col-lg-6">
                        <?php echo e($order->shpping_number); ?>

                     </div>
                 </div>

                 <div class="row mb-2">
                     <div class="col-lg-6">
                         <strong><?php echo e(__('City')); ?> :</strong>
                     </div>
                     <div class="col-lg-6">
                        <?php echo e(convertUtf8($order->shpping_city)); ?>

                     </div>
                 </div>

                 <div class="row mb-2">
                     <div class="col-lg-6">
                         <strong><?php echo e(__('Address')); ?> :</strong>
                     </div>
                     <div class="col-lg-6">
                        <?php echo e(convertUtf8($order->shpping_address)); ?>

                     </div>
                 </div>

                 <div class="row mb-0">
                     <div class="col-lg-6">
                         <strong><?php echo e(__('Country')); ?> :</strong>
                     </div>
                     <div class="col-lg-6">
                         <?php echo e(convertUtf8($order->billing_country)); ?>

                     </div>
                 </div>


             </div>
          </div>
       </div>

    </div>

    <div class="col-md-4">
       <div class="card">
          <div class="card-header">
             <div class="card-title d-inline-block">Billing Details</div>

          </div>
          <div class="card-body pt-5 pb-5">
             <div class="payment-information">
                 <div class="row mb-2">
                     <div class="col-lg-6">
                         <strong><?php echo e(__('Email')); ?> :</strong>
                     </div>
                     <div class="col-lg-6">
                        <?php echo e(convertUtf8($order->billing_email)); ?>

                     </div>
                 </div>

                 <div class="row mb-2">
                     <div class="col-lg-6">
                         <strong><?php echo e(__('Phone')); ?> :</strong>
                     </div>
                     <div class="col-lg-6">
                        <?php echo e($order->billing_number); ?>

                     </div>
                 </div>

                 <div class="row mb-2">
                     <div class="col-lg-6">
                         <strong><?php echo e(__('City')); ?> :</strong>
                     </div>
                     <div class="col-lg-6">
                        <?php echo e(convertUtf8($order->billing_city)); ?>

                     </div>
                 </div>

                 <div class="row mb-2">
                     <div class="col-lg-6">
                         <strong><?php echo e(__('Address')); ?> :</strong>
                     </div>
                     <div class="col-lg-6">
                        <?php echo e(convertUtf8($order->billing_address)); ?>

                     </div>
                 </div>

                 <div class="row mb-0">
                     <div class="col-lg-6">
                         <strong><?php echo e(__('Country')); ?> :</strong>
                     </div>
                     <div class="col-lg-6">
                         <?php echo e(convertUtf8($order->billing_country)); ?>

                     </div>
                 </div>


             </div>
          </div>
       </div>

    </div>

   <div class="col-lg-12">
    <div class="card">
       <div class="card-header">
          <h4 class="card-title">Order Product</h4>
       </div>
       <div class="card-body">
          <div class="table-responsive product-list">
             <table class="table table-bordered">
                <thead>
                   <tr>
                      <th>#</th>
                      <th><?php echo e(__('Image')); ?></th>
                      <th><?php echo e(__('Name')); ?></th>
                      <th><?php echo e(__('Details')); ?></th>
                      <th><?php echo e(__('Price')); ?></th>
                      <th><?php echo e(__('Total')); ?></th>
                   </tr>
                </thead>
                <tbody>
                   <?php $__currentLoopData = $order->orderitems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <tr>
                      <td><?php echo e($key+1); ?></td>
                      <td><img src="<?php echo e(asset('assets/front/img/product/featured/'.$item->image)); ?>" alt="product" width="100"></td>
                      <td><?php echo e(convertUtf8($item->title)); ?></td>
                      <td>
                         <b><?php echo e(__('Quantity')); ?>:</b> <span><?php echo e($item->qty); ?></span><br>
                      </td>
                      <td><?php echo e($bex->base_currency_symbol_position == 'left' ? $bex->base_currency_symbol : ''); ?><?php echo e($item->price); ?><?php echo e($bex->base_currency_symbol_position == 'right' ? $bex->base_currency_symbol : ''); ?></td>
                      <td><?php echo e($bex->base_currency_symbol_position == 'left' ? $bex->base_currency_symbol : ''); ?><?php echo e($item->price * $item->qty); ?><?php echo e($bex->base_currency_symbol_position == 'right' ? $bex->base_currency_symbol : ''); ?></td>
                   </tr>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
             </table>
          </div>
       </div>
    </div>
 </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\logistics\core\resources\views/admin/product/order/details.blade.php ENDPATH**/ ?>