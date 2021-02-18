<?php $__env->startSection('pagename'); ?>
 -
 <?php if(empty($category)): ?>
 <?php echo e(__('All')); ?>

 <?php else: ?>
 <?php echo e(convertUtf8($category->name)); ?>

 <?php endif; ?>
 <?php echo e(__('Portfolios')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta-keywords', "$be->portfolios_meta_keywords"); ?>
<?php $__env->startSection('meta-description', "$be->portfolios_meta_description"); ?>

<?php $__env->startSection('content'); ?>
  <!--   breadcrumb area start   -->
  <div class="breadcrumb-area" style="background-image: url('<?php echo e(asset('assets/front/img/' . $bs->breadcrumb)); ?>');background-size:cover;">
     <div class="container">
        <div class="breadcrumb-txt">
           <div class="row">
              <div class="col-xl-7 col-lg-8 col-sm-10">
                 <span><?php echo e(convertUtf8($bs->portfolio_title)); ?></span>
                 <h1><?php echo e(convertUtf8($bs->portfolio_subtitle)); ?></h1>
                 <ul class="breadcumb">
                    <li><a href="<?php echo e(route('front.index')); ?>"><?php echo e(__('Home')); ?></a></li>
                    <li><?php echo e(__('Portfolios')); ?></li>
                 </ul>
              </div>
           </div>
        </div>
     </div>
     <div class="breadcrumb-area-overlay" style="background-color: #<?php echo e($be->breadcrumb_overlay_color); ?>;opacity: <?php echo e($be->breadcrumb_overlay_opacity); ?>;"></div>
  </div>
  <!--   breadcrumb area end    -->


  <!--    case lists start   -->
  <div class="logistics_project project_v1 pt-115 pb-85">
     <div class="container">
        <?php if(hasCategory($be->theme_version)): ?>
            <div class="row">
            <div class="col-xl-12">
                <div class="case-types">
                    <ul class="text-center">
                        <li class="<?php if(empty(request()->input('category'))): ?> active <?php endif; ?>"><a href="<?php echo e(route('front.portfolios')); ?>"><?php echo e(__('All')); ?></a></li>

                        <?php $__currentLoopData = $scats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $scat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="<?php if(request()->input('category') == $scat->id): ?> active <?php endif; ?>"><a href="<?php echo e(route('front.portfolios', ['category'=>$scat->id])); ?>"><?php echo e(convertUtf8($scat->name)); ?></a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
            </div>
        <?php endif; ?>
        <div class="project_slide">
           <div class="row">
             <?php if(count($portfolios) == 0): ?>
               <div class="col-lg-12 py-5 bg-light text-center mb-4">
                 <h3><?php echo e(__('NO PORTFOLIO FOUND')); ?></h3>
               </div>
             <?php else: ?>
                <?php $__currentLoopData = $portfolios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $portfolio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="grid_item mx-0">
                            <div class="grid_inner_item">
                                <div class="logistics_img">
                                    <img src="<?php echo e(asset('assets/front/img/portfolios/featured/'.$portfolio->featured_image)); ?>" class="img-fluid" alt="">
                                    <div class="overlay_img"></div>
                                    <div class="overlay_content">
                                        <div class="button_box">
                                            <a href="<?php echo e(route('front.portfoliodetails', [$portfolio->slug, $portfolio->id])); ?>" class="logistics_btn"><?php echo e(__('View More')); ?></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="logistics_content">
                                    <h4><?php echo e(convertUtf8(strlen($portfolio->title)) > 25 ? convertUtf8(substr($portfolio->title, 0, 25)) . '...' : convertUtf8($portfolio->title)); ?></h4>

                                    <?php if(!empty($portfolio->service)): ?>
                                        <p><?php echo e(convertUtf8($portfolio->service->title)); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             <?php endif; ?>
           </div>
        </div>
        <?php if($portfolios->total() > 6): ?>
          <div class="row">
             <div class="col-md-12">
                <nav class="pagination-nav <?php echo e($portfolios->total() > 6 ? 'mb-4 mt-4' : ''); ?>">
                  <?php echo e($portfolios->appends(['category' => request()->input('category')])->links()); ?>

                </nav>
             </div>
          </div>
        <?php endif; ?>
     </div>
  </div>
  <!--    case lists end   -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.logistic.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\logistics\core\resources\views/front/logistic/portfolios.blade.php ENDPATH**/ ?>