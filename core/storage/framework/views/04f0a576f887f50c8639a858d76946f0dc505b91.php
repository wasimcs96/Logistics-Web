
    <section class="logistics_pricing pricing_v1">
        <div class="pricing_slide">
            <div class="pricing_box text-center">
                <div class="pricing_title">
                    <h3><?php echo e(convertUtf8($package->title)); ?></h3>
                    <?php if($package->feature == 1): ?>
                        <p><?php echo e(__('Featured Package')); ?></p>
                    <?php else: ?>
                        <p><?php echo e(__('Package')); ?></p>
                    <?php endif; ?>
                </div>
                <div class="pricing_price">
                    <h3><?php echo e($bex->base_currency_symbol_position == 'left' ? $bex->base_currency_symbol : ''); ?> <?php echo e($package->price); ?> <?php echo e($bex->base_currency_symbol_position == 'right' ? $bex->base_currency_symbol : ''); ?></h3>
                </div>
                <div class="pricing_body pb-0">
                    <?php echo replaceBaseUrl(convertUtf8($package->description)); ?>

                </div>
            </div>
        </div>
    </section>
<?php /**PATH D:\xampp\htdocs\logistics\core\resources\views/front/logistic/package-order.blade.php ENDPATH**/ ?>