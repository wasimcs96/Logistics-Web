<?php $__env->startSection('pagename'); ?>
 - <?php echo e(convertUtf8($page->name)); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta-keywords', "$page->meta_keywords"); ?>
<?php $__env->startSection('meta-description', "$page->meta_description"); ?>

<?php $__env->startSection('content'); ?>
  <!--   breadcrumb area start   -->
  <div class="breadcrumb-area" style="background-image: url('<?php echo e(asset('assets/front/img/' . $bs->breadcrumb)); ?>');background-size:cover;">
     <div class="container">
        <div class="breadcrumb-txt">
           <div class="row">
              <div class="col-xl-7 col-lg-8 col-sm-10">
                 <span><?php echo e(convertUtf8($page->title)); ?></span>
                 <h1><?php echo e(convertUtf8($page->subtitle)); ?></h1>
                 <ul class="breadcumb">
                    <li><a href="<?php echo e(route('front.index')); ?>"><?php echo e(__('Home')); ?></a></li>
                    <li><?php echo e(convertUtf8($page->name)); ?></li>
                 </ul>
              </div>
           </div>
        </div>
     </div>
     <div class="breadcrumb-area-overlay" style="background-color: #<?php echo e($be->breadcrumb_overlay_color); ?>;opacity: <?php echo e($be->breadcrumb_overlay_opacity); ?>;"></div>
  </div>
  <!--   breadcrumb area end    -->


  <!--   about company section start   -->
  <div class="about-company-section pt-115 pb-80">
     <div class="container">
        <div class="row">
           <div class="col-lg-12">
             <?php echo replaceBaseUrl(convertUtf8($page->body)); ?>

           </div>
        </div>
     </div>
  </div>
  <!--   about company section end   -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make("front.$version.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\logistics\core\resources\views/front/dynamic.blade.php ENDPATH**/ ?>