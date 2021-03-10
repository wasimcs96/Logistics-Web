<?php $__env->startSection('pagename'); ?>
 -
 <?php if(empty($category)): ?>
 <?php echo e(__('All')); ?>

 <?php else: ?>
 <?php echo e($category->name); ?>

 <?php endif; ?>
 <?php echo e(__('Services')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta-keywords', "$be->services_meta_keywords"); ?>
<?php $__env->startSection('meta-description', "$be->services_meta_description"); ?>

<?php $__env->startSection('content'); ?>
  <!--   breadcrumb area start   -->
  <div class="breadcrumb-area" style="background-image: url('<?php echo e(asset('assets/front/img/' . $bs->breadcrumb)); ?>');background-size:cover;">
     <div class="container">
        <div class="breadcrumb-txt">
           <div class="row">
              <div class="col-xl-7 col-lg-8 col-sm-10">
                 <span><?php echo e(convertUtf8($bs->service_title)); ?></span>
                 <h1><?php echo e(convertUtf8($bs->service_subtitle)); ?></h1>
                 <ul class="breadcumb">
                    <li><a href="<?php echo e(route('front.index')); ?>"><?php echo e(__('Home')); ?></a></li>
                    <li><?php echo e(__('Services')); ?></li>
                 </ul>
              </div>
           </div>
        </div>
     </div>
     <div class="breadcrumb-area-overlay" style="background-color: #<?php echo e($be->breadcrumb_overlay_color); ?>;opacity: <?php echo e($be->breadcrumb_overlay_opacity); ?>;"></div>
  </div>
  <!--   breadcrumb area end    -->


  <!--    services section start   -->
  <div class="service-section">
     <div class="container">
        <div class="row">
           <div class="col-lg-8">
                <section class="logistics_service service_v1 pt-115 pb-80">
                    <div class="container">
                        <div class="service_slide">
                            <div class="row">
                                <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-md-6 mb-5">
                                        <div class="grid_item mx-0">
                                            <div class="grid_inner_item">
                                                <?php if(!empty($service->main_image)): ?>
                                                    <div class="logistics_icon">
                                                        <img src="<?php echo e(asset('assets/front/img/services/' . $service->main_image)); ?>" alt="service" />
                                                    </div>
                                                <?php endif; ?>
                                                <div class="logistics_content">
                                                    <h4><?php echo e(convertUtf8($service->title)); ?></h4>
                                                    <p>
                                                        <?php if(strlen(convertUtf8($service->summary)) > 120): ?>
                                                           <?php echo e(substr(convertUtf8($service->summary), 0, 120)); ?><span style="display: none;"><?php echo e(substr(convertUtf8($service->summary), 120)); ?></span>
                                                           <a href="#" class="see-more">see more...</a>
                                                        <?php else: ?>
                                                           <?php echo e(convertUtf8($service->summary)); ?>

                                                        <?php endif; ?>
                                                    </p>
                                                    <?php if($service->details_page_status == 1): ?>
                                                        <a href="<?php echo e(route('front.servicedetails', [$service->slug, $service->id])); ?>" class="btn_link"><?php echo e(__('Read More')); ?></a>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                            <nav class="pagination-nav">
                                <?php echo e($services->appends(['category' => request()->input('category'), 'term' => request()->input('term')])->links()); ?>

                            </nav>
                            </div>
                        </div>
                    </div>
                </section>
           </div>
           <!--    service sidebar start   -->
           <div class="col-lg-4 pt-115 pb-120">
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
                       <li class="single-category <?php echo e($scat->id == request()->input('category') ? 'active' : ''); ?>"><a href="<?php echo e(route('front.services', ['category' => $scat->id, 'term'=>request()->input('term')])); ?>"><?php echo e(convertUtf8($scat->name)); ?></a></li>
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
           </div>
           <!--    service sidebar end   -->
        </div>
     </div>
  </div>
  <!--    services section end   -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.logistic.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\logistics\core\resources\views/front/logistic/services.blade.php ENDPATH**/ ?>