<?php $__env->startSection('pagename'); ?>
 - <?php echo e(__('Order Confirmation')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('no-breadcrumb', 'no-breadcrumb'); ?>

<?php $__env->startSection('content'); ?>

<div class="order-comfirmation pt-80 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="confirmation-message">
                    <h2 class="text-center"><?php echo e(__('Thank you for your purchase')); ?> !</h2>
                    <p class="text-center">
                        <a href="<?php echo e(route('front.index')); ?>"><?php echo e(__('Get Back To Our Homepage')); ?></a>
                    </p>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <table class="table">
                            <thead class="thead-dark">
                              <tr>
                                <th scope="col" colspan="2"><?php echo e(__('Order Details')); ?></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row"><?php echo e(__('Order Number')); ?>:</th>
                                <td>#<?php echo e($packageOrder->order_number); ?></td>
                              </tr>
                              <tr>
                                <th scope="row"><?php echo e(__('Order Date')); ?>:</th>
                                <td><?php echo e($packageOrder->created_at); ?></td>
                              </tr>
                              <tr>
                                <th scope="row"><?php echo e(__('Payment Method')); ?>:</th>
                                <td class="text-capitalize">
                                    <?php if(!empty($packageOrder->method)): ?>
                                        <?php echo e($packageOrder->method); ?>

                                    <?php else: ?>
                                    -
                                    <?php endif; ?>
                                </td>
                              </tr>
                            </tbody>
                        </table>

                        <table class="table">
                            <thead class="thead-dark">
                              <tr>
                                <th scope="col" colspan="2"><?php echo e(__('Package Details')); ?></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row"><?php echo e(__('Title')); ?>:</th>
                                <td><?php echo e($packageOrder->package_title); ?></td>
                              </tr>
                              <tr>
                                <th scope="row"><?php echo e(__('Price')); ?>:</th>
                                <td><?php echo e($bex->base_currency_text_position == 'left' ? $bex->base_currency_text : ''); ?> <?php echo e($packageOrder->package_price); ?> <?php echo e($bex->base_currency_text_position == 'right' ? $bex->base_currency_text : ''); ?></td>
                              </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-6">
                        <table class="table">
                            <thead class="thead-dark">
                              <tr>
                                <th scope="col" colspan="2"><?php echo e(__('Client Details')); ?></th>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"><?php echo e(__('Client Name')); ?>:</th>
                                    <td><?php echo e($packageOrder->name); ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?php echo e(__('Client Email')); ?>:</th>
                                    <td><?php echo e($packageOrder->email); ?></td>
                                </tr>
                                <?php $__currentLoopData = $fields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                    if (is_array($field)) {
                                        $str = implode(", ", $field);
                                        $value = $str;
                                    } else {
                                        $value = $field;
                                    }
                                    ?>

                                    <tr>
                                        <th scope="row" class="text-capitalize"><?php echo e(str_replace("_"," ",$key)); ?>:</th>
                                        <td><?php echo e($value); ?></td>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make("front.$version.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\logistics\core\resources\views/front/order-confirmation.blade.php ENDPATH**/ ?>