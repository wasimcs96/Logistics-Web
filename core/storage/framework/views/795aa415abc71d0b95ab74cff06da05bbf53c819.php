    <!-- Start logistics_banner section -->
    <section class="logistics_banner banner_v1">
        <div class="hero_slide_v1">
            <?php if(!empty($sliders)): ?>
                <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="single_slider bg_image" style="background-image: url('<?php echo e(asset('assets/front/img/sliders/'.$slider->image)); ?>');">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="banner_content">
                                        <span style="font-size: <?php echo e($slider->title_font_size); ?>px" data-animation="fadeInUp" data-delay=".3s"><?php echo e($slider->title); ?></span>
                                        <h1 data-animation="fadeInUp" data-delay=".3s" style="font-size: <?php echo e($slider->text_font_size); ?>px"><?php echo e($slider->text); ?></h1>
                                        <?php if(!empty($slider->button_url) && !empty($slider->button_text)): ?>
                                            <a href="<?php echo e($slider->button_url); ?>" class="logistics_btn" data-animation="fadeInUp" data-delay=".3s" style="font-size: <?php echo e($slider->button_text_font_size); ?>px"><?php echo e($slider->button_text); ?></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
    </section>
    <!-- End logistics_banner section -->
<?php /**PATH C:\xampp\htdocs\logistics\core\resources\views/front/logistic/partials/slider.blade.php ENDPATH**/ ?>