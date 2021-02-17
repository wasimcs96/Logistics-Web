<?php $__env->startSection('pagename'); ?>
 - <?php echo e(__('Request A Quote')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta-keywords', "$be->quote_meta_keywords"); ?>
<?php $__env->startSection('meta-description', "$be->quote_meta_description"); ?>

<?php $__env->startSection('content'); ?>
  <!--   breadcrumb area start   -->
  <div class="breadcrumb-area" style="background-image: url('<?php echo e(asset('assets/front/img/' . $bs->breadcrumb)); ?>');background-size:cover;">
     <div class="container">
        <div class="breadcrumb-txt">
           <div class="row">
              <div class="col-xl-7 col-lg-8 col-sm-10">
                 <span><?php echo e(convertUtf8($bs->quote_title)); ?></span>
                 <h1><?php echo e(convertUtf8($bs->quote_subtitle)); ?></h1>
                 <ul class="breadcumb">
                    <li><a href="<?php echo e(route('front.index')); ?>"><?php echo e(__('Home')); ?></a></li>
                    <li><?php echo e(__('Quote Page')); ?></li>
                 </ul>
              </div>
           </div>
        </div>
     </div>
     <div class="breadcrumb-area-overlay" style="background-color: #<?php echo e($be->breadcrumb_overlay_color); ?>;opacity: <?php echo e($be->breadcrumb_overlay_opacity); ?>;"></div>
  </div>
  <!--   breadcrumb area end    -->


  <!--   quote area start   -->
  <div class="quote-area pt-115 pb-115">
    <div class="container">
      <div class="row">

        <div class="col-lg-12">
          <form action="<?php echo e(route('front.sendquote')); ?>" enctype="multipart/form-data" method="POST">
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-element mb-4">
                        <label><?php echo e(__('Name')); ?> <span>**</span></label>
                        <input name="name" type="text" value="<?php echo e(old("name")); ?>" placeholder="<?php echo e(__('Enter Name')); ?>">

                        <?php if($errors->has("name")): ?>
                        <p class="text-danger mb-0"><?php echo e($errors->first("name")); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-element mb-4">
                        <label><?php echo e(__('Email')); ?> <span>**</span></label>
                        <input name="email" type="text" value="<?php echo e(old("email")); ?>" placeholder="<?php echo e(__('Enter Email Address')); ?>">

                        <?php if($errors->has("email")): ?>
                        <p class="text-danger mb-0"><?php echo e($errors->first("email")); ?></p>
                        <?php endif; ?>
                    </div>
                </div>

                <?php $__currentLoopData = $inputs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $input): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="<?php echo e($input->type == 4 || $input->type == 3 ? 'col-lg-12' : 'col-lg-6'); ?>">
                        <div class="form-element mb-4">
                            <?php if($input->type == 1): ?>
                                <label><?php echo e(convertUtf8($input->label)); ?> <?php if($input->required == 1): ?> <span>**</span> <?php endif; ?></label>
                                <input name="<?php echo e($input->name); ?>" type="text" value="<?php echo e(old("$input->name")); ?>" placeholder="<?php echo e(convertUtf8($input->placeholder)); ?>">
                            <?php endif; ?>

                            <?php if($input->type == 2): ?>
                                <label><?php echo e(convertUtf8($input->label)); ?> <?php if($input->required == 1): ?> <span>**</span> <?php endif; ?></label>
                                <select name="<?php echo e($input->name); ?>">
                                    <option value="" selected disabled><?php echo e(convertUtf8($input->placeholder)); ?></option>
                                    <?php $__currentLoopData = $input->quote_input_options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e(convertUtf8($option->name)); ?>" <?php echo e(old("$input->name") == convertUtf8($option->name) ? 'selected' : ''); ?>><?php echo e(convertUtf8($option->name)); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            <?php endif; ?>

                            <?php if($input->type == 3): ?>
                                <label><?php echo e(convertUtf8($input->label)); ?> <?php if($input->required == 1): ?> <span>**</span> <?php endif; ?></label>
                                <?php $__currentLoopData = $input->quote_input_options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                        <input type="checkbox" id="customCheckboxInline<?php echo e($option->id); ?>" name="<?php echo e($input->name); ?>[]" class="custom-control-input" value="<?php echo e(convertUtf8($option->name)); ?>" <?php echo e(is_array(old("$input->name")) && in_array(convertUtf8($option->name), old("$input->name")) ? 'checked' : ''); ?>>
                                        <label class="custom-control-label" for="customCheckboxInline<?php echo e($option->id); ?>"><?php echo e(convertUtf8($option->name)); ?></label>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>

                            <?php if($input->type == 4): ?>
                                <label><?php echo e(convertUtf8($input->label)); ?> <?php if($input->required == 1): ?> <span>**</span> <?php endif; ?></label>
                                <textarea name="<?php echo e($input->name); ?>" id="" cols="30" rows="10" placeholder="<?php echo e(convertUtf8($input->placeholder)); ?>"><?php echo e(old("$input->name")); ?></textarea>
                            <?php endif; ?>

                            <?php if($errors->has("$input->name")): ?>
                            <p class="text-danger mb-0"><?php echo e($errors->first("$input->name")); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <?php if($ndaIn->active == 1): ?>
            <div class="row mb-4">
              <div class="col-lg-12">
                <div class="form-element mb-2">
                  <label><?php echo e(__('NDA File')); ?> <?php if($ndaIn->required == 1): ?> <span>**</span> <?php endif; ?></label>
                  <input type="file" name="nda" value="">
                </div>
                <p class="text-warning mb-0">** <?php echo e(__('Only doc, docx, pdf, rtf, txt, zip, rar files are allowed')); ?></p>
                <?php if($errors->has('nda')): ?>
                  <p class="text-danger mb-0"><?php echo e($errors->first('nda')); ?></p>
                <?php endif; ?>
              </div>
            </div>
            <?php endif; ?>

            <?php if($bs->is_recaptcha == 1): ?>
              <div class="row mb-4">
                <div class="col-lg-12">
                  <?php echo NoCaptcha::renderJs(); ?>

                  <?php echo NoCaptcha::display(); ?>

                  <?php if($errors->has('g-recaptcha-response')): ?>
                    <?php
                        $errmsg = $errors->first('g-recaptcha-response');
                    ?>
                    <p class="text-danger mb-0"><?php echo e(__("$errmsg")); ?></p>
                  <?php endif; ?>
                </div>
              </div>
            <?php endif; ?>

            <div class="row">
              <div class="col-lg-12 text-center">
                <button type="submit" name="button"><?php echo e(__('Submit')); ?></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--   quote area end   -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make("front.$version.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\logistics\core\resources\views/front/quote.blade.php ENDPATH**/ ?>