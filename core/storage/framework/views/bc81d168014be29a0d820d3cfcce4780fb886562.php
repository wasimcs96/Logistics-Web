<?php $__env->startSection('pagename'); ?>
 - <?php echo e(__('Team Members')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta-keywords', "$be->team_meta_keywords"); ?>
<?php $__env->startSection('meta-description', "$be->team_meta_description"); ?>

<?php $__env->startSection('content'); ?>
  <!--   breadcrumb area start   -->
  <div class="breadcrumb-area" style="background-image: url('<?php echo e(asset('assets/front/img/' . $bs->breadcrumb)); ?>');background-size:cover;">
     <div class="container">
        <div class="breadcrumb-txt" style="
        padding: 5px;
    ">
           <div class="row">
              <div class="col-xl-7 col-lg-8 col-sm-10">
                 
                 <ul class="breadcumb" style="
                 padding: 10px;
                 margin-top: 0;
             ">
                    <li><a href="<?php echo e(route('front.index')); ?>"><?php echo e(__('Home')); ?></a></li>
                    <li><?php echo e(__('Team Members')); ?></li>
                 </ul>
              </div>
           </div>
        </div>
     </div>
     <div class="breadcrumb-area-overlay" style="background-color: #<?php echo e($be->breadcrumb_overlay_color); ?>;opacity: <?php echo e($be->breadcrumb_overlay_opacity); ?>;"></div>
  </div>
  <!--   breadcrumb area end    -->


		<!-- Start finlance_team section -->
		<section class="logistics_team team_v1 pt-115 pb-80">
			<div class="container">
				<div class="team_slide">
                    <div class="row">
                        <?php $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-3 col-md-6 mb-2">
                                <div class="grid_item mx-0">
                                    <div class="grid_inner_item">
                                        <div class="logistics_img">
                                            <img src="<?php echo e(asset('assets/front/img/members/'.$member->image)); ?>" class="img-fluid" alt="">
                                            <div class="overlay_content">
                                                <div class="social_box">
                                                    <ul>
                                                        <?php if(!empty($member->facebook)): ?>
                                                            <li><a href="<?php echo e($member->facebook); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                                        <?php endif; ?>
                                                        <?php if(!empty($member->twitter)): ?>
                                                            <li><a href="<?php echo e($member->twitter); ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                        <?php endif; ?>
                                                        <?php if(!empty($member->linkedin)): ?>
                                                            <li><a href="<?php echo e($member->linkedin); ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                                        <?php endif; ?>
                                                        <?php if(!empty($member->instagram)): ?>
                                                            <li><a href="<?php echo e($member->instagram); ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                                        <?php endif; ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="logistics_content text-center">
                                            <h4><?php echo e(convertUtf8($member->name)); ?></h4>
                                            <p><?php echo e(convertUtf8($member->rank)); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
				</div>
			</div>
		</section>
		<!-- End finlance_team section -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.logistic.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\logistics\core\resources\views/front/logistic/team.blade.php ENDPATH**/ ?>