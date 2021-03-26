<?php $__env->startSection('pagename'); ?>
- <?php echo e(__('Request A Quote')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta-keywords', "$be->quote_meta_keywords"); ?>
<?php $__env->startSection('meta-description', "$be->quote_meta_description"); ?>

<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!--   breadcrumb area start   -->
<div class="breadcrumb-area"
    style="background-image: url('<?php echo e(asset('assets/front/img/' . $bs->breadcrumb)); ?>');background-size:cover;">
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
                        <li><?php echo e(__('Quote Page')); ?></li>
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


<!--   quote area start   -->
<div class="quote-area pt-115">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <form action="<?php echo e(route('front.sendquote')); ?>" enctype="multipart/form-data" method="POST">
                    <?php echo csrf_field(); ?>

                    <div class="panel panel-default">
                        <div class="panel-heading">REQUEST A MOVING QUOTE</div>
                        <div class="panel-body">


                           <div class="row">
                           <div class="col-lg-6">
                                <div class="form-element mb-4">
                                    <label><?php echo e(__('Name')); ?> <span>**</span></label>
                                    <input name="name" type="text" value="<?php echo e(old("name")); ?>"
                                        placeholder="<?php echo e(__('Enter Name')); ?>" required="required">

                                    <?php if($errors->has("name")): ?>
                                    <p class="text-danger mb-0"><?php echo e($errors->first("name")); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-element mb-4">
                                    <label><?php echo e(__('Email')); ?> <span>**</span></label>
                                    <input name="email" type="email" value="<?php echo e(old("email")); ?>"
                                        placeholder="<?php echo e(__('Enter Email Address')); ?>" required="required">

                                    <?php if($errors->has("email")): ?>
                                    <p class="text-danger mb-0"><?php echo e($errors->first("email")); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                           </div>

                            <div class="col-lg-6">
                                <div class="form-element mb-4">
                                    <label><?php echo e(__('Phone Number')); ?> <span>**</span></label>
                                    <input name="phone" type="number" value="<?php echo e(old("phone")); ?>"
                                        placeholder="<?php echo e(__('Enter Phone Number')); ?>" required="required">

                                    <?php if($errors->has("phone")): ?>
                                    <p class="text-danger mb-0"><?php echo e($errors->first("phone")); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-element mb-4">
                                    <label><?php echo e(__('Moving From')); ?> <span>**</span></label>
                                    <input name="moving_from" type="text" value="<?php echo e(old("moving_from")); ?>"
                                        placeholder="<?php echo e(__('Enter Moving From')); ?>" required="required">

                                    <?php if($errors->has("moving_from")): ?>
                                    <p class="text-danger mb-0"><?php echo e($errors->first("moving_from")); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-element mb-4">
                                    <label><?php echo e(__('Moving To')); ?> <span>**</span></label>
                                    <input name="moving_to" type="text" value="<?php echo e(old("moving_to")); ?>"
                                        placeholder="<?php echo e(__('Enter Moving To')); ?>" required="required">

                                    <?php if($errors->has("moving_to")): ?>
                                    <p class="text-danger mb-0"><?php echo e($errors->first("moving_to")); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-element mb-4">
                                    <label><?php echo e(__('Moving Date')); ?> <span>**</span></label>
                                    <input name="moving_date" type="date" value="<?php echo e(old("moving_to")); ?>"
                                        placeholder="<?php echo e(__('Enter Moving Date')); ?>" required="required">

                                    <?php if($errors->has("moving_date")): ?>
                                    <p class="text-danger mb-0"><?php echo e($errors->first("moving_date")); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>


                            

                             

                             

                

                             

                             

                             
                        </div>
                    </div>

                    

                     

                     


                     


                     

                    <button type="submit" class="btn btn-primary btn-sm mb-4" value="CreateNewQuote">Create Quote</button>
                </form>

            </div>
        </div>
    </div>
</div>
<!--   quote area end   -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make("front.$version.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\logistics\core\resources\views/front/quote.blade.php ENDPATH**/ ?>