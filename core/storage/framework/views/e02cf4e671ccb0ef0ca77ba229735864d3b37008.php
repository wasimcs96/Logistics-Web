<?php $__env->startSection('pagename'); ?>
 -
 <?php echo e(__('Login')); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('meta-keywords', "$be->login_meta_keywords"); ?>
<?php $__env->startSection('meta-description', "$be->login_meta_description"); ?>


<?php $__env->startSection('content'); ?>
   <!--   hero area start   -->
   <div class="breadcrumb-area services service-bg" style="background-image: url('<?php echo e(asset('assets/front/img/' . $bs->breadcrumb)); ?>');background-size:cover;">
    <div class="container">
        <div class="breadcrumb-txt">
            <div class="row">
                <div class="col-xl-7 col-lg-8 col-sm-10">
                    <h1><?php echo e(__('Sign In')); ?></h1>
                    <ul class="breadcumb">
                        <li><a href="<?php echo e(route('front.index')); ?>"><?php echo e(__('Home')); ?></a></li>
                        <li><?php echo e(__('Sign In')); ?></li>
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
                    <div class="login-title">
                        <h3 class="title"><?php echo e(__('Login')); ?></h3>
                    </div>
                    <form id="loginForm" action="<?php echo e(route('user.login')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="input-box">
                            <span><?php echo e(__('Email')); ?> *</span>
                            <input type="email" name="email" value="<?php echo e(Request::old('email')); ?>">
                            <?php if(Session::has('err')): ?>
                                <p class="text-danger mb-2 mt-2"><?php echo e(Session::get('err')); ?></p>
                            <?php endif; ?>
                            <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                            <p class="text-danger mb-2 mt-2"><?php echo e(convertUtf8($message)); ?></p>
                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </div>
                        <div class="input-box mb-4">
                            <span><?php echo e(__('Password')); ?> *</span>
                            <input type="password" name="password" value="<?php echo e(Request::old('password')); ?>">
                            <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                            <p class="text-danger mb-2 mt-2"><?php echo e(convertUtf8($message)); ?></p>
                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
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
                            <button type="submit"><?php echo e(__('LOG IN')); ?></button><br>
                            <p class="float-lg-right float-left"><?php echo e(__("Don't have an account ?")); ?> <a href="<?php echo e(route('user-register')); ?>"><?php echo e(__('Click Here')); ?></a> <?php echo e(__('to create one.')); ?></p>
                            <a class="mr-3" href="<?php echo e(route('user-forgot')); ?>"><?php echo e(__('Lost your password?')); ?></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--   hero area end    -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make("front.$version.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\logistics\core\resources\views/front/login.blade.php ENDPATH**/ ?>