<?php $__env->startSection('meta-keywords', "$be->home_meta_keywords"); ?>
<?php $__env->startSection('meta-description', "$be->home_meta_description"); ?>


<?php $__env->startSection('content'); ?>
    <!--   hero area start   -->
    <?php if($bs->home_version == 'static'): ?>
        <?php if ($__env->exists('front.logistic.partials.static')) echo $__env->make('front.logistic.partials.static', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php elseif($bs->home_version == 'slider'): ?>
        <?php if ($__env->exists('front.logistic.partials.slider')) echo $__env->make('front.logistic.partials.slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php elseif($bs->home_version == 'video'): ?>
        <?php if ($__env->exists('front.logistic.partials.video')) echo $__env->make('front.logistic.partials.video', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php elseif($bs->home_version == 'particles'): ?>
        <?php if ($__env->exists('front.logistic.partials.particles')) echo $__env->make('front.logistic.partials.particles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php elseif($bs->home_version == 'water'): ?>
        <?php if ($__env->exists('front.logistic.partials.water')) echo $__env->make('front.logistic.partials.water', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php elseif($bs->home_version == 'parallax'): ?>
        <?php if ($__env->exists('front.logistic.partials.parallax')) echo $__env->make('front.logistic.partials.parallax', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <!--   hero area end    -->


    <!-- Start logistics_feature section -->
    <?php if($bs->feature_section == 1): ?>
    <section class="logistics_feature feature_v1">
        <div class="container-fluid">
            <div class="row no-gutters">
                <?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="grid_item <?php echo e($loop->iteration == 2 ? 'active_item' : ''); ?>">
                            <div class="grid_inner_item d-flex align-items-center">
                                <div class="logistics_icon">
                                    <i class="<?php echo e($feature->icon); ?>"></i>
                                </div>
                                <div class="logistics_content">
                                    <h4><?php echo e(convertUtf8($feature->title)); ?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <!-- End logistics_feature area -->

    <!-- Start logistics_about section -->
    <?php if($bs->intro_section == 1): ?>
    <section class="logistics_about about_v1 pt-100 pb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="logistics_box_img">
                        <div class="logistics_img">
                            <img src="<?php echo e(asset('assets/front/img/'.$bs->intro_bg)); ?>" class="img-fluid" alt="">
                        </div>
                        <div class="logistics_img">
                            <img src="<?php echo e(asset('assets/front/img/'.$be->intro_bg2)); ?>" class="img-fluid" alt="">
                            <div class="play_box">
                                <a href="<?php echo e($bs->intro_section_video_link); ?>" class="play_btn"><i class="fas fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="logistics_content_box">
                        <div class="section_title">
                            <span><?php echo e(convertUtf8($bs->intro_section_title)); ?></span>
                            <h2><?php echo e(convertUtf8($bs->intro_section_text)); ?></h2>
                        </div>
                        <div class="button_box">
                            <a href="<?php echo e($bs->intro_section_button_url); ?>" class="logistics_btn"><?php echo e(convertUtf8($bs->intro_section_button_text)); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <!-- End logistics_about section -->

    <!-- Start logistics_service section -->
    <?php if($bs->service_section == 1): ?>
    <section class="logistics_service service_v1 dark_bg pt-120 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title">
                        <span><?php echo e(convertUtf8($bs->service_section_title)); ?></span>
                        <h2><?php echo e(convertUtf8($bs->service_section_subtitle)); ?></h2>
                    </div>
                </div>
            </div>
            <div class="service_slide service-slick">
                <?php if(hasCategory($be->theme_version)): ?>
                    <?php $__currentLoopData = $scategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $scategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="grid_item">
                            <div class="grid_inner_item">
                                <div class="logistics_icon">
                                    <img src="<?php echo e(asset('assets/front/img/service_category_icons/'.$scategory->image)); ?>" class="img-fluid" alt="">
                                </div>
                                <div class="logistics_content">
                                    <h4><?php echo e(convertUtf8($scategory->name)); ?></h4>
                                    <p>
                                        <?php if(strlen(convertUtf8($scategory->short_text)) > 112): ?>
                                           <?php echo e(substr(convertUtf8($scategory->short_text), 0, 112)); ?><span style="display: none;"><?php echo e(substr(convertUtf8($scategory->short_text), 112)); ?></span>
                                           <a href="#" class="see-more">see more...</a>
                                        <?php else: ?>
                                           <?php echo e(convertUtf8($scategory->short_text)); ?>

                                        <?php endif; ?>
                                    </p>
                                    <a href="<?php echo e(route('front.services', ['category'=>$scategory->id])); ?>" class="btn_link"><?php echo e(__('View Services')); ?></a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="grid_item">
                            <div class="grid_inner_item">
                                <?php if(!empty($service->main_image)): ?>
                                    <div class="logistics_icon">
                                        <img src="<?php echo e(asset('assets/front/img/services/' . $service->main_image)); ?>" class="img-fluid" alt="">
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
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>


            </div>
        </div>
    </section>
    <?php endif; ?>
    <!-- End logistics_service section -->

    <!-- Start logistics_we_do section -->
    <?php if($bs->approach_section == 1): ?>
    <section class="logistics_we_do we_do_v1 pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="logistics_content_box">
                        <div class="section_title">
                            <span><?php echo e(convertUtf8($bs->approach_title)); ?></span>
                            <h2>T<?php echo e(convertUtf8($bs->approach_subtitle)); ?></h2>
                        </div>
                        <?php if(!empty($bs->approach_button_url) && !empty($bs->approach_button_text)): ?>
                            <div class="button_box">
                                <a href="<?php echo e($bs->approach_button_url); ?>" class="logistics_btn"><?php echo e(convertUtf8($bs->approach_button_text)); ?></a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="logistics_icon_box">
                        <?php $__currentLoopData = $points; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $point): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="icon_list d-flex">
                                <div class="icon">
                                    <i class="<?php echo e($point->icon); ?>"></i>
                                </div>
                                <div class="text">
                                    <h4><?php echo e(convertUtf8($point->title)); ?></h4>
                                    <p>
                                        <?php if(strlen(convertUtf8($point->short_text)) > 150): ?>
                                            <?php echo e(substr(convertUtf8($point->short_text), 0, 150)); ?><span style="display: none;"><?php echo e(substr(convertUtf8($point->short_text), 150)); ?></span>
                                            <a href="#" class="see-more">see more...</a>
                                        <?php else: ?>
                                            <?php echo e(convertUtf8($point->short_text)); ?>

                                        <?php endif; ?>
                                    </p>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <!-- End logistics_we_do section -->

    <!-- Start logistics_fun section -->
    <?php if($bs->statistics_section == 1): ?>
    <section class="logistics_fun logistics_fun_v1 bg_image pt-100 pb-100" <?php if($bs->home_version != 'parallax'): ?> style="background-image: url('<?php echo e(asset('assets/front/img/'.$be->statistics_bg)); ?>'); background-size:cover;" <?php endif; ?> id="statisticsSection" <?php if($bs->home_version == 'parallax'): ?> style="background-image: url('<?php echo e(asset('assets/front/img/'.$be->statistics_bg)); ?>'); background-size:cover; background-attachment: fixed;" <?php endif; ?>>
        <div class="bg_overlay" style="background: #<?php echo e($be->statistics_overlay_color); ?>;opacity: <?php echo e($be->statistics_overlay_opacity); ?>;"></div>
        <div class="container">
            <div class="row">
                <?php $__currentLoopData = $statistics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $statistic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="counter_box">
                            <div class="icon">
                                <i class="<?php echo e($statistic->icon); ?>"></i>
                            </div>
                            <h2><span class="counter"><?php echo e(convertUtf8($statistic->quantity)); ?></span>+</h2>
                            <p><?php echo e(convertUtf8($statistic->title)); ?></p>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <!-- End logistics_fun section -->

    <!-- Start logistics_testimonial section -->
    <?php if($bs->testimonial_section == 1): ?>
    <section class="logistics_testimonial testimonial_v1 pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center">
                        <span><?php echo e(convertUtf8($bs->testimonial_title)); ?></span>
                        <h2><?php echo e(convertUtf8($bs->testimonial_subtitle)); ?></h2>
                    </div>
                </div>
            </div>
            <div class="testimonial_slide">
                <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="testimonial_box d-lg-flex align-items-lg-center">
                        <div class="logistics_img">
                            <img src="<?php echo e(asset('assets/front/img/testimonials/'.$testimonial->image)); ?>" class="img-fluid" alt="" width="100%">
                        </div>
                        <div class="logistics_content">
                            <h4><?php echo e(convertUtf8($testimonial->name)); ?></h4>
                            <h6><?php echo e(convertUtf8($testimonial->rank)); ?></h6>
                            <p><?php echo e(convertUtf8($testimonial->comment)); ?></p>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <!-- End logistics_testimonial section -->

    <!-- Start logistics_project section -->
    <?php if($bs->portfolio_section == 1): ?>
    <section class="logistics_project project_v1 pt-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title">
                        <span><?php echo e(convertUtf8($bs->portfolio_section_title)); ?></span>
                        <h2><?php echo e(convertUtf8($bs->portfolio_section_text)); ?></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="project_slide project-slick">
                <?php $__currentLoopData = $portfolios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $portfolio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="grid_item">
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
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <!-- End logistics_project section -->

    <!-- Start logistics_pricing section -->
    <?php if($be->pricing_section == 1): ?>
    <section class="logistics_pricing pricing_v1 pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center">
                        <span><?php echo e(convertUtf8($be->pricing_title)); ?></span>
                        <h2><?php echo e(convertUtf8($be->pricing_subtitle)); ?></h2>
                    </div>
                </div>
            </div>
            <div class="pricing_slide pricing-slick">
                <?php $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="pricing_box text-center">
                        <div class="pricing_title">
                            <h3><?php echo e(convertUtf8($package->title)); ?></h3>
                            <p><?php echo e(__('Featured Package')); ?></p>
                        </div>
                        <div class="pricing_price">
                            <h3><?php echo e($bex->base_currency_symbol_position == 'left' ? $bex->base_currency_symbol : ''); ?> <?php echo e($package->price); ?> <?php echo e($bex->base_currency_symbol_position == 'right' ? $bex->base_currency_symbol : ''); ?></h3>
                        </div>
                        <div class="pricing_body">
                            <?php echo replaceBaseUrl(convertUtf8($package->description)); ?>

                        </div>
                        <div class="pricing_button">
                            <?php if($package->order_status == 1): ?>
                                <a href="<?php echo e(route('front.packageorder.index', $package->id)); ?>" class="logistics_btn"><?php echo e(__('Place Order')); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <!-- End logistics_pricing section -->

    <!-- Start logistics_team section -->
    <?php if($bs->team_section == 1): ?>
    <section class="logistics_team team_v1 gray_bg pt-100 pb-75">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="section_title">
                        <span><?php echo e(convertUtf8($bs->team_section_title)); ?></span>
                        <h2><?php echo e(convertUtf8($bs->team_section_subtitle)); ?></h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="button_box">
                        <a href="<?php echo e(route('front.team')); ?>" class="btn_link"><?php echo e(__('View More')); ?></a>
                    </div>
                </div>
            </div>
            <div class="team_slide team-slick">
                <?php $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="grid_item">
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
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <!-- End logistics_team section -->

    <!-- Start logistics_blog section -->
    <?php if($bs->news_section == 1): ?>
    <section class="logistics_blog blog_v1 pt-125">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center">
                        <span><?php echo e(convertUtf8($bs->blog_section_title)); ?></span>
                        <h2><?php echo e(convertUtf8($bs->blog_section_subtitle)); ?></h2>
                    </div>
                </div>
            </div>
            <div class="blog_slide blog-slick" style="height: 530px;">
                <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="grid_item">
                        <div class="grid_inner_item">
                            <div class="logistics_img">
                                <a href="<?php echo e(route('front.blogdetails', [$blog->slug, $blog->id])); ?>"><img src="<?php echo e(asset('assets/front/img/blogs/'.$blog->main_image)); ?>" class="img-fluid" alt=""></a>
                            </div>
                            <div class="logistics_content">
                                <div class="post_meta">
                                    <?php
                                        $blogDate = \Carbon\Carbon::parse($blog->created_at)->locale("$currentLang->code");
                                        $blogDate = $blogDate->translatedFormat('d M. Y');
                                    ?>
                                    <span><i class="far fa-user"></i><a href="#"><?php echo e(__('By')); ?> <?php echo e(__('Admin')); ?></a></span>
                                    <span><i class="far fa-calendar-alt"></i><a href="#"><?php echo e($blogDate); ?></a></span>
                                </div>
                                <h3 class="post_title"><a href="<?php echo e(route('front.blogdetails', [$blog->slug, $blog->id])); ?>"><?php echo e(convertUtf8(strlen($blog->title)) > 40 ? convertUtf8(substr($blog->title, 0, 40)) . '...' : convertUtf8($blog->title)); ?></a></h3>
                                <a href="<?php echo e(route('front.blogdetails', [$blog->slug, $blog->id])); ?>" class="btn_link"><?php echo e(__('Read More')); ?></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <!-- End logistics_blog section -->

    <!-- Start logistics_partner section -->
    <?php if($bs->partner_section == 1): ?>
    <section class="logistics_partner partner_v1 pt-125 pb-125">
        <div class="container">
            <div class="partner_slide">
                <?php $__currentLoopData = $partners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="single_partner">
                        <a href="<?php echo e($partner->url); ?>"><img src="<?php echo e(asset('assets/front/img/partners/'.$partner->image)); ?>" class="img-fluid" alt=""></a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <!-- End logistics_partner section -->

    <!-- Start logistics_cta section -->
    <?php if($bs->call_to_action_section == 1): ?>
    <section class="logistics_cta cta_v1 main_bg pt-70 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-9">
                    <div class="section_title">
                        <h2 class="text-white"><?php echo e(convertUtf8($bs->cta_section_text)); ?></h2>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="button_box">
                        <!-- <a href="<?php echo e($bs->cta_section_button_url); ?>" class="logistics_btn"><?php echo e(convertUtf8($bs->cta_section_button_text)); ?></a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <!-- End logistics_cta section -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.logistic.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\logistics\core\resources\views/front/logistic/index.blade.php ENDPATH**/ ?>