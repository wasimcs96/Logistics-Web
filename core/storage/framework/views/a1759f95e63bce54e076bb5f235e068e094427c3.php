<!DOCTYPE html>
<html lang="en">
   <head>
      <!--Start of Google Analytics script-->
      <?php if($bs->is_analytics == 1): ?>
      <?php echo $bs->google_analytics_script; ?>

      <?php endif; ?>
      <!--End of Google Analytics script-->

      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <meta name="description" content="<?php echo $__env->yieldContent('meta-description'); ?>">
      <meta name="keywords" content="<?php echo $__env->yieldContent('meta-keywords'); ?>">

      <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
      <title><?php echo e($bs->website_title); ?> <?php echo $__env->yieldContent('pagename'); ?></title>
      <!-- favicon -->
      <link rel="shortcut icon" href="<?php echo e(asset('assets/front/img/'.$bs->favicon)); ?>" type="image/x-icon">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="<?php echo e(asset('assets/front/css/bootstrap.min.css')); ?>">
      <!-- plugin css -->
      <link rel="stylesheet" href="<?php echo e(asset('assets/front/css/plugin.min.css')); ?>">
      <?php echo $__env->yieldContent('styles'); ?>
      <!--default css-->
      <link rel="stylesheet" href="<?php echo e(asset('assets/front/css/default.css')); ?>">
      <!-- main css -->
      <link rel="stylesheet" href="<?php echo e(asset('assets/front/css/logistic-style.css')); ?>">
      <!-- responsive css -->
      <link rel="stylesheet" href="<?php echo e(asset('assets/front/css/responsive.css')); ?>">
      <!-- logistic responsive css -->
      <link rel="stylesheet" href="<?php echo e(asset('assets/front/css/logistic-responsive.css')); ?>">

      <?php if($bs->is_tawkto == 1): ?>
      <style>
      #scroll_up {
          bottom: 50px;
          margin-bottom: 34px;
    margin-right: 4px;
      }
      #scroll_up {
          right: 20px;
      }
      </style>
      <?php endif; ?>
      <?php if(count($langs) == 0): ?>
      <style media="screen">
      .support-bar-area ul.social-links li:last-child {
          margin-right: 0px;
      }
      .support-bar-area ul.social-links::after {
          display: none;
      }
      </style>
      <?php endif; ?>
      <?php if($bs->feature_section == 0): ?>
      <style media="screen">
      .hero-txt {
          padding-bottom: 160px;
      }
      </style>
      <?php endif; ?>


      <!-- base color change -->
      <link href="<?php echo e(url('/')); ?>/assets/front/css/logistic-base-color.php?color=<?php echo e($bs->base_color); ?>&color1=<?php echo e($bs->secondary_base_color); ?>" rel="stylesheet">


      <?php if($rtl == 1): ?>
      <!-- RTL css -->
      <link rel="stylesheet" href="<?php echo e(asset('assets/front/css/rtl.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('assets/front/css/logistic-rtl.css')); ?>">
      <?php endif; ?>
      <!-- jquery js -->
      <script src="<?php echo e(asset('assets/front/js/jquery-3.3.1.min.js')); ?>"></script>

      <?php if($bs->is_appzi == 1): ?>
      <!-- Start of Appzi Feedback Script -->
      <script async src="https://app.appzi.io/bootstrap/bundle.js?token=<?php echo e($bs->appzi_token); ?>"></script>
      <!-- End of Appzi Feedback Script -->
      <?php endif; ?>

      <!-- Start of Facebook Pixel Code -->
      <?php if($be->is_facebook_pexel == 1): ?>
        <?php echo $be->facebook_pexel_script; ?>

      <?php endif; ?>
      <!-- End of Facebook Pixel Code -->

      <!--Start of Appzi script-->
      <?php if($bs->is_appzi == 1): ?>
      <?php echo $bs->appzi_script; ?>

      <?php endif; ?>
      <!--End of Appzi script-->
   </head>



   <body <?php if($rtl == 1): ?> dir="rtl" <?php endif; ?>>


    <!-- Start finlance_header area -->
    <?php if ($__env->exists('front.logistic.partials.navbar')) echo $__env->make('front.logistic.partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End finlance_header area -->


    <?php echo $__env->yieldContent('content'); ?>


    <!--    announcement banner section start   -->
    <a class="announcement-banner" href="<?php echo e(asset('assets/front/img/'.$bs->announcement)); ?>"></a>
    <!--    announcement banner section end   -->


    <!-- Start logistics_footer section -->
    <footer class="logistics_footer footer_v1 dark_bg">
        <?php if($bs->top_footer_section == 1): ?>
        <div class="footer_top pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="widget_box about_widget">
                            <img src="<?php echo e(asset('assets/front/img/'.$bs->footer_logo)); ?>" class="img-fluid" alt="">
                            <p>
                                <?php if(strlen(convertUtf8($bs->footer_text)) > 194): ?>
                                   <?php echo e(substr(convertUtf8($bs->footer_text), 0, 194)); ?><span style="display: none;"><?php echo e(substr(convertUtf8($bs->footer_text), 194)); ?></span>
                                   <a href="#" class="see-more">see more...</a>
                                <?php else: ?>
                                   <?php echo e(convertUtf8($bs->footer_text)); ?>

                                <?php endif; ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="widget_box contact_widget">
                            <h4 class="widget_title"><?php echo e(__('Contact Us')); ?></h4>
                            <p><?php echo e(convertUtf8($bs->contact_address)); ?></p>
                            <p><?php echo e(__('Phone')); ?>: <a href="#"><?php echo e(convertUtf8($bs->contact_number)); ?> </a></p>
                            <p><?php echo e(__('Email')); ?>: <a href="#"><?php echo e(convertUtf8($be->to_mail)); ?></a></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="widget_box">
                            <h4 class="widget_title"><?php echo e(__('Useful Links')); ?></h4>
                            <ul class="widget_link">
                                <?php $__currentLoopData = $ulinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $ulink): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="<?php echo e($ulink->url); ?>"><?php echo e(convertUtf8($ulink->name)); ?></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="widget_box newsletter_box">
                            <h4 class="widget_title"><?php echo e(__('Newsletter')); ?></h4>
                            <p><?php echo e(convertUtf8($bs->newsletter_text)); ?></p>
                            <form id="footerSubscribeForm" action="<?php echo e(route('front.subscribe')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <div class="form_group">
                                    <input type="email" class="form_control" placeholder="<?php echo e(__('Enter Email Address')); ?>" name="email" required>
                                    <p id="erremail" class="text-danger mb-0 err-email"></p>
                                    <button class="logistics_btn" type="submit"><?php echo e(__('Subscribe')); ?></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>


        <?php if($bs->copyright_section == 1): ?>
        <div class="footer_bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="copyright_text">
                            <p><?php echo replaceBaseUrl(convertUtf8($bs->copyright_text)); ?></p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="social_box">
                            <ul>
                                <?php $__currentLoopData = $socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a target="_blank" href="<?php echo e($social->url); ?>"><i class="<?php echo e($social->icon); ?>"></i></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </footer><!-- End logistics_footer section -->



    <!-- preloader section start -->
    <div class="loader-container">
        <span class="loader">
        <span class="loader-inner"></span>
        </span>
    </div>
    <!-- preloader section end -->

    <!--Scroll-up-->
    <a id="scroll_up" ><i class="fas fa-angle-up"></i></a>


    
    <?php if($be->cookie_alert_status == 1): ?>
    <?php echo $__env->make('cookieConsent::index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    

      <?php
        $mainbs = [];
        $mainbs['is_announcement'] = $bs->is_announcement;
        $mainbs['announcement_delay'] = $bs->announcement_delay;
        $mainbs = json_encode($mainbs);
      ?>
      <script>
        var lat = <?php echo e($bs->latitude); ?>;
        var lng = <?php echo e($bs->longitude); ?>;
        var mainbs = <?php echo $mainbs; ?>;

        var rtl = <?php echo e($rtl); ?>;
      </script>
      <!-- popper js -->
      <script src="<?php echo e(asset('assets/front/js/popper.min.js')); ?>"></script>
      <!-- bootstrap js -->
      <script src="<?php echo e(asset('assets/front/js/bootstrap.min.js')); ?>"></script>
      <!-- Plugin js -->
      <script src="<?php echo e(asset('assets/front/js/plugin.min.js')); ?>"></script>
      <?php if(request()->path() == 'contact'): ?>
      <!-- google map api -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC7eALQrRUekFNQX71IBNkxUXcz-ALS-MY&callback=initMap" async defer></script>
      <!-- google map activate js -->
      <script src="<?php echo e(asset('assets/front/js/google-map-activate.min.js')); ?>"></script>
      <?php endif; ?>
      <!-- main js -->
      <?php if($rtl == 1): ?>
      <script src="<?php echo e(asset('assets/front/js/logistic-rtl-main.js')); ?>"></script>
      <?php else: ?>
      <script src="<?php echo e(asset('assets/front/js/logistic-main.js')); ?>"></script>
      <?php endif; ?>

      <?php echo $__env->yieldContent('scripts'); ?>

      <?php if(session()->has('success')): ?>
      <script>
         toastr["success"]("<?php echo e(__(session('success'))); ?>");
      </script>
      <?php endif; ?>

      <?php if(session()->has('error')): ?>
      <script>
         toastr["error"]("<?php echo e(__(session('error'))); ?>");
      </script>
      <?php endif; ?>

      <!--Start of subscribe functionality-->
      <script>
        $(document).ready(function() {
          $("#subscribeForm, #footerSubscribeForm").on('submit', function(e) {
            // console.log($(this).attr('id'));

            e.preventDefault();

            let formId = $(this).attr('id');
            let fd = new FormData(document.getElementById(formId));
            let $this = $(this);

            $.ajax({
              url: $(this).attr('action'),
              type: $(this).attr('method'),
              data: fd,
              contentType: false,
              processData: false,
              success: function(data) {
                // console.log(data);
                if ((data.errors)) {
                  $this.find(".err-email").html(data.errors.email[0]);
                } else {
                  toastr["success"]("You are subscribed successfully!");
                  $this.trigger('reset');
                  $this.find(".err-email").html('');
                }
              }
            });
          });
        });
      </script>
      <!--End of subscribe functionality-->

      <!--Start of Tawk.to script-->
      <?php if($bs->is_tawkto == 1): ?>
      <?php echo $bs->tawk_to_script; ?>

      <?php endif; ?>
      <!--End of Tawk.to script-->

      <!--Start of AddThis script-->
      <?php if($bs->is_addthis == 1): ?>
      <?php echo $bs->addthis_script; ?>

      <?php endif; ?>
      <!--End of AddThis script-->
   </body>
</html>
<?php /**PATH C:\xampp\htdocs\logistics\core\resources\views/front/logistic/layout.blade.php ENDPATH**/ ?>