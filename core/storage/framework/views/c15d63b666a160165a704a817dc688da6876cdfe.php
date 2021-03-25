    <!-- Start logistics_header area -->
    <header class="logistics_header header_v1">
        <div class="container-full">
            <div class="hainer_main_content">
                <div class="logo" style="background: white;">
                    <a href="<?php echo e(route('front.index')); ?>"><img src="<?php echo e(asset('assets/front/img/'.$bs->logo)); ?>" class="img-fluid" alt=""></a>
                </div>
                <div class="header_navigation">
                    
                    <div class="site_menu">
                        <div class="row align-items-center">
                            <div class="<?php echo e($bs->is_quote == 0 ? 'col-lg-12' : 'col-lg-10'); ?>">
                                <div class="primary_menu">
                                    <nav class="main-menu <?php echo e($bs->is_quote == 0 ? 'text-right' : ''); ?>" style="width:100vw;">
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