<?php $__env->startSection('pagename','- All Rss'); ?>

<?php $__env->startSection('meta-keywords', "$be->blogs_meta_keywords"); ?>
<?php $__env->startSection('meta-description', "$be->blogs_meta_description"); ?>

<?php $__env->startSection('content'); ?>
  <!--   hero area start   -->
  <div class="breadcrumb-area" style="background-image: url('<?php echo e(asset('assets/front/img/' . $bs->breadcrumb)); ?>');background-size:cover;">
     <div class="container">
        <div class="breadcrumb-txt">
           <div class="row">
              <div class="col-xl-7 col-lg-8 col-sm-10">
                <span><?php echo e(__('RSS')); ?></span>
                 <h1><?php echo e(__('RSS Feeds')); ?></h1>
                 <ul class="breadcumb">
                    <li><a href="<?php echo e(route('front.index')); ?>"><?php echo e(__('Home')); ?></a></li>
                    <li><?php echo e(__('Latest rss')); ?></li>
                 </ul>
              </div>
           </div>
        </div>
     </div>
     <div class="breadcrumb-area-overlay" style="background-color: #<?php echo e($be->breadcrumb_overlay_color); ?>;opacity: <?php echo e($be->breadcrumb_overlay_opacity); ?>;"></div>
  </div>
  <!--   hero area end    -->


  <!--    blog lists start   -->
  <div class="logistics_blog blog_v1 pt-125 pb-100">
     <div class="container">
        <div class="row">
           <div class="col-lg-8">
              <div class="row">
                <?php if(count($posts) == 0): ?>
                  <div class="col-md-12">
                    <div class="bg-light py-5">
                      <h3 class="text-center"><?php echo e(__('NO FEED FOUND')); ?></h3>
                    </div>
                  </div>
                <?php else: ?>
                  <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-6 mb-5">
                        <div class="grid_item mx-0">
                            <div class="grid_inner_item">
                                <div class="logistics_img">
                                    <a href="<?php echo e(route('front.rssdetails', [$post->slug, $post->id])); ?>"><img src="<?php echo e($post->photo); ?>" class="img-fluid" alt=""></a>
                                </div>
                                <div class="logistics_content">
                                    <div class="post_meta">
                                        <?php
                                            if (!empty($currentLang)) {
                                                $postDate = \Carbon\Carbon::parse($post->created_at)->locale("$currentLang->code");
                                            } else {
                                                $postDate = \Carbon\Carbon::parse($post->created_at)->locale("en");
                                            }

                                            $postDate = $postDate->translatedFormat('d M. Y');
                                        ?>
                                        <span><i class="far fa-user"></i><a href="#"><?php echo e(__('By')); ?> <?php echo e($post->category->feed_name); ?></a></span>
                                        <span><i class="far fa-calendar-alt"></i><a href="#"><?php echo e($postDate); ?></a></span>
                                    </div>
                                    <h3 class="post_title"><a href="<?php echo e(route('front.rssdetails', [$post->slug, $post->id])); ?>"><?php echo e(strlen(convertUtf8($post->title)) > 40 ? substr(convertUtf8($post->title), 0, 40) . '...' : convertUtf8($post->title)); ?></a></h3>
                                    <a href="<?php echo e(route('front.rssdetails', [$post->slug, $post->id])); ?>" class="btn_link"><?php echo e(__('Read More')); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
              </div>
              <?php if($posts->total() > 4): ?>
                <div class="row">
                   <div class="col-md-12">
                      <nav class="pagination-nav <?php echo e($posts->total() > 6 ? 'mb-4 mt-2' : ''); ?>">
                        <?php echo e($posts->links()); ?>

                      </nav>
                   </div>
                </div>
              <?php endif; ?>
           </div>
           <!--    blog sidebar section start   -->
           <div class="col-lg-4">
              <div class="sidebar">
                 <div class="blog-sidebar-widgets category-widget">
                    <div class="category-lists job">
                       <h4><?php echo e(__('Categories')); ?></h4>
                       <ul>
                          <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $rcat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <li class="single-category <?php if($cat_id == $rcat->id): ?> active <?php endif; ?>"><a href="<?php echo e(route('front.rcatpost',$rcat->id)); ?>"><?php echo e(convertUtf8($rcat->feed_name)); ?></a></li>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       </ul>
                    </div>
                 </div>
                 <div class="subscribe-section">
                    <span><?php echo e(__('SUBSCRIBE')); ?></span>
                    <h3><?php echo e(__('SUBSCRIBE FOR NEWSLETTER')); ?></h3>
                    <form id="subscribeForm" class="subscribe-form" action="<?php echo e(route('front.subscribe')); ?>" method="POST">
                       <?php echo csrf_field(); ?>
                       <div class="form-element"><input name="email" type="email" placeholder="<?php echo e(__('Email')); ?>"></div>
                       <p id="erremail" class="text-danger mb-3 err-email"></p>
                       <div class="form-element"><input type="submit" value="<?php echo e(__('Subscribe')); ?>"></div>
                    </form>
                 </div>
              </div>
           </div>
           <!--    blog sidebar section end   -->
        </div>
     </div>
  </div>
  <!--    blog lists end   -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make("front.logistic.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\logistics\core\resources\views/front/logistic/rcatpost.blade.php ENDPATH**/ ?>