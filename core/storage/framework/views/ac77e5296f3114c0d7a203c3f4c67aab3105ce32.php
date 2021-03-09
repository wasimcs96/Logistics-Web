<?php $__env->startSection('pagename'); ?>
- <?php echo e(__('Packages')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta-keywords', "$be->packages_meta_keywords"); ?>
<?php $__env->startSection('meta-description', "$be->packages_meta_description"); ?>

<?php $__env->startSection('content'); ?>
<!--   breadcrumb area start   -->
<div class="breadcrumb-area"
    style="background-image: url('<?php echo e(asset('assets/front/img/' . $bs->breadcrumb)); ?>');background-size:cover;">
    <div class="container">
        <div class="breadcrumb-txt">
            <div class="row">
                <div class="col-xl-7 col-lg-8 col-sm-10">
                    <span><?php echo e(convertUtf8($be->pricing_title)); ?></span>
                    <h1><?php echo e(convertUtf8($be->pricing_subtitle)); ?></h1>
                    <ul class="breadcumb">
                        <li><a href="<?php echo e(route('front.index')); ?>"><?php echo e(__('Home')); ?></a></li>
                        <li><?php echo e(__('Packages')); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb-area-overlay"
        style="background-color: #<?php echo e($be->breadcrumb_overlay_color); ?>;opacity: <?php echo e($be->breadcrumb_overlay_opacity); ?>;">
    </div>
</div>
<!--   breadcrumb area end    -->


<!-- Start finlance_pricing section -->


<section class="logistics_pricing pricing_v1 pt-115 pb-80">

    <div class="container">
        <div class="pricing_slide">
            <div class="row">
                <?php $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 mb-5">
                    <div class="pricing_box text-center mx-0">
                        <div class="pricing_title">
                            <h3><?php echo e(convertUtf8($package->title)); ?></h3>
                            <?php if($package->feature == 1): ?>
                            <p><?php echo e(__('Featured Package')); ?></p>
                            <?php else: ?>
                            <p><?php echo e(__('Package')); ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="pricing_price">
                            <h3><?php echo e($bex->base_currency_symbol_position == 'left' ? $bex->base_currency_symbol : ''); ?>

                                <?php echo e($package->price); ?>

                                <?php echo e($bex->base_currency_symbol_position == 'right' ? $bex->base_currency_symbol : ''); ?>

                            </h3>
                        </div>
                        <div class="pricing_body">
                            <?php echo replaceBaseUrl(convertUtf8($package->description)); ?>

                        </div>
                        <div class="pricing_button">
                            <?php if($package->order_status == 1): ?>
                            <a href="<?php echo e(route('front.packageorder.index', $package->id)); ?>"
                                class="logistics_btn"><?php echo e(__('Place Order')); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>

</section>

<!-- End finlance_pricing section -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make("front.logistic.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\logistics\core\resources\views/front/logistic/packages.blade.php ENDPATH**/ ?>