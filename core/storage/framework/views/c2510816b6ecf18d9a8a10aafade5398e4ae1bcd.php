<?php
    $version = getVersion($be->theme_version);

    if ($version == 'dark') {
        $version = 'default';
    }
?>




<?php $__env->startSection('content'); ?>
  <!--   breadcrumb area start   -->
  <div class="breadcrumb-area">
     <div class="container">
        <div class="breadcrumb-txt">
           <div class="row">
              <div class="col-xl-7 col-lg-8 col-sm-10">
                 <span><?php echo e($bs->error_title); ?></span>
                 <h1><?php echo e($bs->error_subtitle); ?></h1>
                 <ul class="breadcumb">
                    <li><a href="<?php echo e(route('front.index')); ?>">Home</a></li>
                    <li>404 Page</li>
                 </ul>
              </div>
           </div>
        </div>
     </div>
     <div class="breadcrumb-area-overlay"></div>
  </div>
  <!--   breadcrumb area end    -->


  <!--    Error section start   -->
  <div class="error-section">
     <div class="container">
        <div class="row">
           <div class="col-lg-6">
              <div class="not-found">
                 <img src="<?php echo e(asset('assets/front/img/404.png')); ?>" alt="">
              </div>
           </div>
           <div class="col-lg-6">
              <div class="error-txt">
                 <div class="oops">
                    <img src="<?php echo e(asset('assets/front/img/oops.png')); ?>" alt="">
                 </div>
                 <h2>You're lost...</h2>
                 <p>The page you are looking for might have been moved, renamed, or might never existed.</p>
                 <a href="<?php echo e(route('front.index')); ?>" class="go-home-btn">Back Home</a>
              </div>
           </div>
        </div>
     </div>
  </div>
  <!--    Error section end   -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make("front.$version.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\logistics\core\resources\views/errors/404.blade.php ENDPATH**/ ?>