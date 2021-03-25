<?php $__env->startSection('pagename'); ?>
 - <?php echo e(__('Contact Us')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta-keywords', "$be->contact_meta_keywords"); ?>
<?php $__env->startSection('meta-description', "$be->contact_meta_description"); ?>

<?php $__env->startSection('content'); ?>
  <!--   breadcrumb area start   -->
  <div class="breadcrumb-area" style="background-image: url('<?php echo e(asset('assets/front/img/' . $bs->breadcrumb)); ?>');background-size:cover;">
     <div class="container">
        <div class="breadcrumb-txt"style="
        padding: 5px;
    ">
           <div class="row">
              <div class="col-xl-7 col-lg-8 col-sm-10">
                 
                 <ul class="breadcumb"style="
                 padding: 10px;
                 margin-top: 0;
             ">
                    <li><a href="<?php echo e(route('front.index')); ?>"><?php echo e(__('Home')); ?></a></li>
                    <li><?php echo e(__('Contact Us')); ?></li>
                 </ul>
              </div>
           </div>
        </div>
     </div>
     <div class="breadcrumb-area-overlay" style="background-color: #<?php echo e($be->breadcrumb_overlay_color); ?>;opacity: <?php echo e($be->breadcrumb_overlay_opacity); ?>;"></div>
  </div>
  <!--   breadcrumb area end    -->


  <!--    contact form and map start   -->
  <div class="contact-form-section">
     <div class="container">
        <div class="row">
           <div class="col-lg-6">
              <span class="section-title"><?php echo e(convertUtf8($bs->contact_form_title)); ?></span>
              <h2 class="section-summary"><?php echo e(convertUtf8($bs->contact_form_subtitle)); ?></h2>
              <form action="<?php echo e(route('front.contact')); ?>" class="contact-form" method="POST">
                 <?php echo csrf_field(); ?>
                 <div class="row">
                    <div class="col-md-6">
                       <div class="form-element">
                     <label for="">Name</label>
                          <input name="name" type="text" placeholder="<?php echo e(__('Name')); ?>" required>
                       </div>
                       <?php if($errors->has('name')): ?>
                         <p class="text-danger mb-0"><?php echo e($errors->first('name')); ?></p>
                       <?php endif; ?>
                    </div>
                    <div class="col-md-6">
                       <div class="form-element">
                     <label for="">Email</label>
                          <input name="email" type="email" placeholder="<?php echo e(__('Email')); ?>" required>
                       </div>
                       <?php if($errors->has('email')): ?>
                         <p class="text-danger mb-0"><?php echo e($errors->first('email')); ?></p>
                       <?php endif; ?>
                    </div>
                    <div class="col-md-12">
                     <div class="form-element">
                      <label for="">Phone Number</label>
                        <input name="number" type="number" placeholder="<?php echo e(__('Phone Number')); ?>" required>
                     </div>
                     <?php if($errors->has('number')): ?>
                       <p class="text-danger mb-0"><?php echo e($errors->first('number')); ?></p>
                     <?php endif; ?>
                  </div>
                  <div class="col-md-12">
                     <div class="form-element">
                      <label for="">Moving From</label>
                      <input name="moving_from" type="text" placeholder="<?php echo e(__('Moving From')); ?>" required>
                     </div>
                     <?php if($errors->has('moving_from')): ?>
                       <p class="text-danger mb-0"><?php echo e($errors->first('moving_from')); ?></p>
                     <?php endif; ?>
                  </div>
                  <div class="col-md-12">
                   <div class="form-element">
                      <label for="">Moving To</label>
                      <input name="moving_to" type="text" placeholder="<?php echo e(__('Moving To')); ?>" required>
                   </div>
                   <?php if($errors->has('moving_to')): ?>
                     <p class="text-danger mb-0"><?php echo e($errors->first('moving_to')); ?></p>
                   <?php endif; ?>
                </div>
                <div class="col-md-12">
                  <div class="form-element">
                     <label for="">Moving To</label>
                     <input name="moving_date" type="datetime-local" placeholder="<?php echo e(__('Moving Date')); ?>" required>
                  </div>
                  <?php if($errors->has('moving_date')): ?>
                    <p class="text-danger mb-0"><?php echo e($errors->first('moving_date')); ?></p>
                  <?php endif; ?>
               </div>
                
                    
                    <?php if($bs->is_recaptcha == 1): ?>
                        <div class="col-lg-12 mb-4">
                            <?php echo NoCaptcha::renderJs(); ?>

                            <?php echo NoCaptcha::display(); ?>

                            <?php if($errors->has('g-recaptcha-response')): ?>
                            <?php
                                $errmsg = $errors->first('g-recaptcha-response');
                            ?>
                            <p class="text-danger mb-0"><?php echo e(__("$errmsg")); ?></p>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                    <div class="col-md-12">
                       <div class="form-element no-margin">
                          <input type="submit" value="<?php echo e(__('Submit')); ?>">
                       </div>
                    </div>
                 </div>
              </form>
           </div>
           <div class="col-lg-6">
              <div class="map-wrapper">
                 <div id="map"></div>
                 <div class="contact-infos">
                    <div class="single-contact-info">
                       <div class="icon-wrapper">
                          <i class="fa fa-home"></i>
                       </div>
                       <p><?php echo e(convertUtf8($bs->contact_address)); ?></p>
                    </div>
                    <div class="single-contact-info">
                       <div class="icon-wrapper">
                          <i class="fa fa-phone"></i>
                       </div>
                       <p><?php echo e(convertUtf8($bs->contact_number)); ?></p>
                    </div>
                    <div class="single-contact-info">
                       <div class="icon-wrapper">
                          <i class="fa fa-envelope"></i>
                       </div>
                       <p><?php echo e(convertUtf8($be->to_mail)); ?></p>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
  </div>
  <!--    contact form and map end   -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make("front.$version.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\logistics\core\resources\views/front/contact.blade.php ENDPATH**/ ?>