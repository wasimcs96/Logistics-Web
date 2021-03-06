<?php $__env->startSection('pagename'); ?>
 - <?php echo e(convertUtf8($post->title)); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <!--   hero area end   -->
  <div class="blog-details breadcrumb-area" style="background-image: url('<?php echo e(asset('assets/front/img/' . $bs->breadcrumb)); ?>');background-size:cover;">
     <div class="container">
        <div class="breadcrumb-txt">
           <div class="row">
              <div class="col-xl-7 col-lg-8 col-sm-10">
                <span><?php echo e(convertUtf8($bs->rss_details_title)); ?></span>
                <h1><?php echo e(strlen(convertUtf8($post->title)) > 30 ? substr(convertUtf8($post->title), 0, 30) . '...' : convertUtf8($post->title)); ?></h1>
                 <ul class="breadcumb">
                    <li><a href="<?php echo e(route('front.index')); ?>"><?php echo e(__('Home')); ?></a></li>
                    <li><?php echo e(__('RSS Feed Details')); ?></li>
                 </ul>
              </div>
           </div>
        </div>
     </div>
     <div class="breadcrumb-area-overlay" style="background-color: #<?php echo e($be->breadcrumb_overlay_color); ?>;opacity: <?php echo e($be->breadcrumb_overlay_opacity); ?>;"></div>
  </div>
  <!--   hero area end    -->


  <!--    blog details section start   -->
  <div class="blog-details-section section-padding">
     <div class="container">
        <div class="row">
           <div class="col-lg-7">
              <div class="blog-details">
                 <img class="blog-details-img-1" src="<?php echo e($post->photo); ?>" alt="">
                 <small class="date"><?php echo e(date('F d, Y', strtotime($post->created_at))); ?>  -  <?php echo e(__('BY')); ?> <?php echo e($post->category->feed_name); ?></small>
                 <h2 class="blog-details-title"><?php echo e(convertUtf8($post->title)); ?></h2>
                 <div class="blog-details-body">
                   <?php echo convertUtf8($post->description); ?>

                 </div>

                 <div class="text-left">
                    <a target="_blank" href="<?php echo e($post->rss_link); ?>" class="boxed-btn py-2 mt-4 text-capitalize"><?php echo e($post->category->read_more_button); ?></a>
                 </div>
              </div>
              <div class="blog-share mb-5">
                 <ul>
                    <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e(urlencode(url()->current())); ?>" class="facebook-share"><i class="fab fa-facebook-f"></i> <?php echo e(__('Share')); ?></a></li>
                    <li><a href="https://twitter.com/intent/tweet?text=my share text&amp;url=<?php echo e(urlencode(url()->current())); ?>" class="twitter-share"><i class="fab fa-twitter"></i> <?php echo e(__('Tweet')); ?></a></li>
                    <li><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo e(urlencode(url()->current())); ?>&amp;title=<?php echo e(convertUtf8($post->title)); ?>" class="linkedin-share"><i class="fab fa-linkedin-in"></i> <?php echo e(__('Linkedin')); ?></a></li>
                 </ul>
              </div>

              <div class="comment-lists">
                <div id="disqus_thread"></div>
              </div>
           </div>
           <!--    blog sidebar section start   -->
           <div class="col-lg-4">
              <div class="sidebar">
                 <div class="blog-sidebar-widgets category-widget">
                    <div class="category-lists job">
                       <h4><?php echo e(__('Categories')); ?></h4>
                       <ul>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $rcat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="single-category"><a href="<?php echo e(route('front.rcatpost',$rcat->id)); ?>"><?php echo e(convertUtf8($rcat->feed_name)); ?></a></li>
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
  <!--    blog details section end   -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php if($bs->is_disqus == 1): ?>
<?php echo $bs->disqus_script; ?>

<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("front.$version.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\logistics\core\resources\views/front/rss-details.blade.php ENDPATH**/ ?>