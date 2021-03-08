<?php $__env->startSection('pagename'); ?>
 -
 <?php echo e(__('Register')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta-keywords', "$be->register_meta_keywords"); ?>
<?php $__env->startSection('meta-description', "$be->register_meta_description"); ?>

<?php $__env->startSection('content'); ?>
    <!--   hero area start   -->
    <div class="breadcrumb-area services service-bg" style="background-image: url('<?php echo e(asset('assets/front/img/' . $bs->breadcrumb)); ?>');background-size:cover;">
        <div class="container">
            <div class="breadcrumb-txt">
                <div class="row">
                    <div class="col-xl-7 col-lg-8 col-sm-10">
                        <h1><?php echo e(__('Sign Up')); ?></h1>
                        <ul class="breadcumb">
                            <li><a href="<?php echo e(route('front.index')); ?>"><?php echo e(__('Home')); ?></a></li>
                            <li><?php echo e(__('Sign Up')); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-area-overlay"></div>
    </div>
    <!--   hero area end    -->


    <!--   hero area start    -->
    <div class="login-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="login-content">
                        <?php if(Session::has('sendmail')): ?>
                        <div class="alert alert-success mb-4">
                            <p style="line-height: 24px;"><?php echo e(Session::get('sendmail')); ?></p>
                        </div>
                        <?php endif; ?>
                        <div class="login-title">
                            <h3 class="title"><?php echo e(__('Register')); ?></h3>
                        </div>

                        <form action="<?php echo e(route('user-register-submit')); ?>" method="POST"><?php echo csrf_field(); ?>
                            <div class="input-box">
                                <span><?php echo e(__('Username')); ?> *</span>
                                <input type="text" name="username" value="<?php echo e(Request::old('username')); ?>">
                                <?php if($errors->has('username')): ?>
                                <p class="text-danger mb-0 mt-2"><?php echo e($errors->first('username')); ?></p>
                                <?php endif; ?>
                            </div>
                            <div class="input-box">
                                <span><?php echo e(__('Email')); ?> *</span>
                                <input type="email" name="email" value="<?php echo e(Request::old('email')); ?>">
                                <?php if($errors->has('email')): ?>
                                <p class="text-danger mb-0 mt-2"><?php echo e($errors->first('email')); ?></p>
                                <?php endif; ?>
                            </div>
                            <div class="input-box">
                                <span><?php echo e(__('Password')); ?> *</span>
                                <input type="password" name="password" value="<?php echo e(Request::old('password')); ?>">
                                <?php if($errors->has('password')): ?>
                                <p class="text-danger mb-0 mt-2"><?php echo e($errors->first('password')); ?></p>
                                <?php endif; ?>
                            </div>
                            <div class="input-box mb-4">
                                <span><?php echo e(__('Confirmation Password')); ?> *</span>
                                <input type="password" name="password_confirmation" value="<?php echo e(Request::old('password_confirmation')); ?>">
                                <?php if($errors->has('password_confirmation')): ?>
                                <p class="text-danger mb-0 mt-2"><?php echo e($errors->first('password_confirmation')); ?></p>
                                <?php endif; ?>
                            </div>

                        <?php if($bs->is_recaptcha == 1): ?>
                        <div class="d-block mb-4">
                            <?php echo NoCaptcha::renderJs(); ?>

                            <?php echo NoCaptcha::display(); ?>

                            <?php if($errors->has('g-recaptcha-response')): ?>
                            <?php
                                $errmsg = $errors->first('g-recaptcha-response');
                            ?>
                            <p class="text-danger mb-0 mt-2"><?php echo e(__("$errmsg")); ?></p>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                            <div class="input-btn">
                                <button type="submit"><?php echo e(__('Register')); ?></button>
                                <p><?php echo e(__('Already have an account ?')); ?> <a class="mr-3" href="<?php echo e(route('user.login')); ?>"><?php echo e(__('Click Here')); ?></a> <?php echo e(__('to login')); ?>.</p>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--   hero area end    -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make("front.$version.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\logistics\core\resources\views/front/register.blade.php ENDPATH**/ ?>