    <!-- Start logistics_header area -->
    <header class="logistics_header header_v1">
        <div class="container-full">
            <div class="hainer_main_content">
                <div class="logo">
                    <a href="<?php echo e(route('front.index')); ?>"><img src="<?php echo e(asset('assets/front/img/'.$bs->logo)); ?>" class="img-fluid" alt=""></a>
                </div>
                <div class="header_navigation">
                    <div class="top_header">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="top_left">
                                    <span><i class="fas fa-headphones"></i><a href="tel:<?php echo e($bs->support_phone); ?>"><?php echo e($bs->support_phone); ?></a></span>
                                    <span><i class="far fa-envelope"></i><a href="mailto:<?php echo e($bs->support_email); ?>"><?php echo e($bs->support_email); ?></a></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="top_right d-flex align-items-center">
                                    <ul class="social">
                                        <?php $__currentLoopData = $socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><a href="<?php echo e($social->url); ?>"><i class="<?php echo e($social->icon); ?>"></i></a></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                    <?php if(!empty($currentLang)): ?>
                                        <div class="dropdown">
                                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fas fa-globe"></i><?php echo e(convertUtf8($currentLang->name)); ?>

                                            </button>
                                            <div class="dropdown-menu">
                                                <?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <a class="dropdown-item" href='<?php echo e(route('changeLanguage', $lang->code)); ?>'><?php echo e(convertUtf8($lang->name)); ?></a>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if(auth()->guard()->guest()): ?>

                                    <ul class="login">
                                        <li><a href="<?php echo e(route('user.login')); ?>"><?php echo e(__('Login')); ?></a></li>
                                    </ul>
                                    <?php endif; ?>
                                    <?php if(auth()->guard()->check()): ?>
                                    <ul class="login">
                                        <li><a href="<?php echo e(route('user-dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></li>
                                    </ul>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="site_menu">
                        <div class="row align-items-center">
                            <div class="<?php echo e($bs->is_quote == 0 ? 'col-lg-12' : 'col-lg-10'); ?>">
                                <div class="primary_menu">
                                    <nav class="main-menu <?php echo e($bs->is_quote == 0 ? 'text-right' : ''); ?>">
                                        <?php
                                            $links = json_decode($menus, true);
                                            //  dd($links);
                                        ?>
                                        <ul>

                                            <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php
                                                    $href = getHref($link);
                                                ?>

                                                
                                                <?php if($link["type"] == 'services' && hasCategory($be->theme_version)): ?>

                                                    


                                                <?php else: ?>

                                                    <?php if(!array_key_exists("children",$link)): ?>
                                                        
                                                        <li><a href="<?php echo e($href); ?>" target="<?php echo e($link["target"]); ?>"><?php echo e($link["text"]); ?></a></li>

                                                    <?php else: ?>
                                                        <li class="menu-item-has-children">
                                                            
                                                            <a href="<?php echo e($href); ?>" target="<?php echo e($link["target"]); ?>"><?php echo e($link["text"]); ?></a>

                                                            <ul class="sub-menu">



                                                                
                                                                <?php $__currentLoopData = $link["children"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $level2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php
                                                                        $l2Href = getHref($level2);
                                                                    ?>

                                                                    <li <?php if(array_key_exists("children", $level2)): ?> class="submenus" <?php endif; ?>>
                                                                        <a  href="<?php echo e($l2Href); ?>" target="<?php echo e($level2["target"]); ?>"><?php echo e($level2["text"]); ?></a>

                                                                        
                                                                        <?php
                                                                            if (array_key_exists("children", $level2)) {
                                                                                create_menu($level2);
                                                                            }
                                                                        ?>
                                                                        

                                                                    </li>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                



                                                            </ul>

                                                        </li>
                                                    <?php endif; ?>


                                                <?php endif; ?>



                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            <?php if(auth()->guard()->guest()): ?>
                                            <li class="d-lg-none d-inline-block"><a href="<?php echo e(route('user.login')); ?>"><?php echo e(__('Login')); ?></a></li>
                                            <?php endif; ?>
                                            <?php if(auth()->guard()->check()): ?>
                                            <li class="d-lg-none d-inline-block"><a href="<?php echo e(route('user-dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></li>
                                            <?php endif; ?>
                                        </ul>
                                        
                                    </nav>
                                </div>
                            </div>
                            <?php if($bs->is_quote == 1): ?>
                                <div class="col-lg-2">
                                    <div class="button_box">
                                        <a href="<?php echo e(route('front.quote')); ?>" class="logistics_btn"><?php echo e(__('Get Quote')); ?></a>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <div class="col-sm-12">
                                <div class="mobile_menu"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End logistics_header area -->
<?php /**PATH D:\xampp\htdocs\logistics\core\resources\views/front/logistic/partials/navbar.blade.php ENDPATH**/ ?>