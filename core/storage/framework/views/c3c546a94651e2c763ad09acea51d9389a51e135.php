<?php $__env->startSection('pagename'); ?>
 - <?php echo e(__('Service')); ?> - <?php echo e(convertUtf8($service->title)); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta-keywords', "$service->meta_keywords"); ?>
<?php $__env->startSection('meta-description', "$service->meta_description"); ?>

<?php $__env->startSection('content'); ?>
  <!--   breadcrumb area start   -->
  <div class="breadcrumb-area" style="background-image: url('<?php echo e(asset('assets/front/img/' . $bs->breadcrumb)); ?>');background-size:cover;">
     <div class="container">
        <div class="breadcrumb-txt">
           <div class="row">
              <div class="col-xl-7 col-lg-8 col-sm-10">
                 <span><?php echo e(convertUtf8($bs->service_details_title)); ?></span>
                 <h1><?php echo e(convertUtf8($service->title)); ?></h1>
                 <ul class="breadcumb">
                    <li><a href="<?php echo e(route('front.index')); ?>"><?php echo e(__('Home')); ?></a></li>
                    <li><?php echo e(__('Service Details')); ?></li>
                 </ul>
              </div>
           </div>
        </div>
     </div>
     <div class="breadcrumb-area-overlay" style="background-color: #<?php echo e($be->breadcrumb_overlay_color); ?>;opacity: <?php echo e($be->breadcrumb_overlay_opacity); ?>;"></div>
  </div>
  <!--   breadcrumb area end    -->


  <!--    services details section start   -->
  <div class="pt-115 pb-110 service-details-section">
     <div class="container">
        <div class="row">
           <div class="col-lg-7">
              <div class="service-details">
                <?php echo replaceBaseUrl(convertUtf8($service->content)); ?>

              </div>
           </div>
           <!--    service sidebar start   -->
           <!-- <div class="col-lg-4">
             <div class="blog-sidebar-widgets">
                <div class="searchbar-form-section">
                   <form action="<?php echo e(route('front.services')); ?>">
                      <div class="searchbar">
                         <input name="category" type="hidden" value="<?php echo e(request()->input('category')); ?>">
                         <input name="term" type="text" placeholder="<?php echo e(__('Search Services')); ?>" value="<?php echo e(request()->input('term')); ?>">
                         <button type="submit"><i class="fa fa-search"></i></button>
                      </div>
                   </form>
                </div>
             </div>
             <?php if(hasCategory($be->theme_version)): ?>
             <div class="blog-sidebar-widgets category-widget">
                <div class="category-lists job">
                   <h4><?php echo e(__('Categories')); ?></h4>
                   <ul>
                      <?php $__currentLoopData = $scats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $scat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="single-category <?php echo e((!empty($service->scategory) && $service->scategory->id == $scat->id) ? 'active' : ''); ?>"><a href="<?php echo e(route('front.services', ['category' => $scat->id, 'term'=>request()->input('term')])); ?>"><?php echo e(convertUtf8($scat->name)); ?></a></li>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   </ul>
                </div>
             </div>
             <?php endif; ?>
             <div class="subscribe-section">
                <span><?php echo e(__('SUBSCRIBE')); ?></span>
                <h3><?php echo e(__('SUBSCRIBE FOR NEWSLETTER')); ?></h3>
                <form id="subscribeForm" class="subscribe-form" action="<?php echo e(route('front.subscribe')); ?>" method="POST">
                   <?php echo csrf_field(); ?>
                   <div class="form-element"><input name="email" type="email" placeholder="<?php echo e(__('Email')); ?>"></div>
                   <p id="erremail" class="text-danger mb-3 err-email"></p>
                   <div class="form-element"><input type="submit" value="<?php echo e(__('Subscribe')); ?>"></div>
                </form>
             </div>
           </div> -->
           <!--    service sidebar end   -->
        </div>
     </div>
  </div>
  <!--    services details section end   -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make("front.$version.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\logistics\core\resources\views/front/service-details.blade.php ENDPATH**/ ?>