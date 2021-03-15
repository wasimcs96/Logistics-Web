<?php $__env->startSection('pagename'); ?>
 -
 <?php if(empty($category)): ?>
 <?php echo e(__('All')); ?>

 <?php else: ?>
 <?php echo e(convertUtf8($category->name)); ?>

 <?php endif; ?>
 <?php echo e(__('Blogs')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta-keywords', "$be->blogs_meta_keywords"); ?>
<?php $__env->startSection('meta-description', "$be->blogs_meta_description"); ?>

<?php $__env->startSection('content'); ?>
  <!--   hero area start   -->
  <div class="breadcrumb-area blogs" style="background-image: url('<?php echo e(asset('assets/front/img/' . $bs->breadcrumb)); ?>');background-size:cover;">
     <div class="container">
        <div class="breadcrumb-txt">
           <div class="row">
              <div class="col-xl-7 col-lg-8 col-sm-10">
                 <span><?php echo e(convertUtf8($bs->blog_title)); ?></span>
                 <h1><?php echo e(convertUtf8($bs->blog_subtitle)); ?></h1>
                 <ul class="breadcumb">
                    <li><a href="<?php echo e(route('front.index')); ?>"><?php echo e(__('Home')); ?></a></li>
                    <li><?php echo e(__('Latest Blogs')); ?></li>
                 </ul>
              </div>
           </div>
        </div>
     </div>
     <div class="breadcrumb-area-overlay" style="background-color: #<?php echo e($be->breadcrumb_overlay_color); ?>;opacity: <?php echo e($be->breadcrumb_overlay_opacity); ?>;"></div>
  </div>
  <!--   hero area end    -->


  <!--    blog lists start   -->
  <div class="blog-lists section-padding">
     <div class="container">
        <div class="row">
           <div class="col-lg-8">
              <div class="row">
                <?php if(count($blogs) == 0): ?>
                  <div class="col-md-12">
                    <div class="bg-light py-5">
                      <h3 class="text-center"><?php echo e(__('NO BLOG FOUND')); ?></h3>
                    </div>
                  </div>
                <?php else: ?>
                  <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-6">
                       <div class="single-blog">
                          <div class="blog-img-wrapper">
                             <img src="<?php echo e(asset('assets/front/img/blogs/'.$blog->main_image)); ?>" alt="">
                          </div>
                          <div class="blog-txt">
                            <?php
                                if (!empty($currentLang)) {
                                    $blogDate = \Carbon\Carbon::parse($blog->created_at)->locale("$currentLang->code");
                                } else {
                                    $blogDate = \Carbon\Carbon::parse($blog->created_at)->locale("en");
                                }

                                $blogDate = $blogDate->translatedFormat('jS F, Y');
                            ?>
                             <p class="date"><small><?php echo e(__('By')); ?> <span class="username"><?php echo e(__('Admin')); ?></span></small> | <small><?php echo e($blogDate); ?></small> </p>

                             <h4 class="blog-title"><a href="<?php echo e(route('front.blogdetails', [$blog->slug, $blog->id])); ?>"><?php echo e(convertUtf8(strlen($blog->title)) > 40 ? convertUtf8(substr($blog->title, 0, 40)) . '...' : convertUtf8($blog->title)); ?></a></h4>

                             <p class="blog-summary"><?php echo (strlen(strip_tags(convertUtf8($blog->content))) > 100) ? substr(strip_tags(convertUtf8($blog->content)), 0, 100) . '...' : strip_tags(convertUtf8($blog->content)); ?></p>

                             <a href="<?php echo e(route('front.blogdetails', [$blog->slug, $blog->id])); ?>" class="readmore-btn"><span><?php echo e(__('Read More')); ?></span></a>

                          </div>
                       </div>
                    </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
              </div>
              <?php if($blogs->total() > 6): ?>
                <div class="row">
                   <div class="col-md-12">
                      <nav class="pagination-nav <?php echo e($blogs->total() > 6 ? 'mb-4' : ''); ?>">
                        <?php echo e($blogs->appends(['term'=>request()->input('term'), 'month'=>request()->input('month'), 'year'=>request()->input('year'), 'category' => request()->input('category')])->links()); ?>

                      </nav>
                   </div>
                </div>
              <?php endif; ?>
           </div>
           <!--    blog sidebar section start   -->
           <div class="col-lg-4">
              <div class="sidebar">
                 <div class="blog-sidebar-widgets">
                    <div class="searchbar-form-section">
                       <form action="<?php echo e(route('front.blogs', ['category' => request()->input('category'), 'month' => request()->input('month'), 'year' => request()->input('year')])); ?>" method="GET">
                          <div class="searchbar">
                             <input name="category" type="hidden" value="<?php echo e(request()->input('category')); ?>">
                             <input name="month" type="hidden" value="<?php echo e(request()->input('month')); ?>">
                             <input name="year" type="hidden" value="<?php echo e(request()->input('year')); ?>">
                             <input name="term" type="text" placeholder="<?php echo e(__('Search Blogs')); ?>" value="<?php echo e(request()->input('term')); ?>">
                             <button type="submit"><i class="fa fa-search"></i></button>
                          </div>
                       </form>
                    </div>
                 </div>
                 <div class="blog-sidebar-widgets category-widget">
                    <div class="category-lists job">
                       <h4><?php echo e(__('Categories')); ?></h4>
                       <ul>
                          <?php $__currentLoopData = $bcats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $bcat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="single-category <?php if(request()->input('category') == $bcat->slug): ?> active <?php endif; ?>"><a href="<?php echo e(route('front.blogs', ['term'=>request()->input('term'), 'category'=>$bcat->slug, 'month' => request()->input('month'), 'year' => request()->input('year')])); ?>"><?php echo e(convertUtf8($bcat->name)); ?></a></li>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       </ul>
                    </div>
                 </div>
                 <div class="blog-sidebar-widgets category-widget">
                    <div class="category-lists job">
                       <h4><?php echo e(__('Archives')); ?></h4>
                       <ul>
                          <?php $__currentLoopData = $archives; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $archive): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                              $myArr = explode('-', $archive->date);
                              $monthNum  = $myArr[0];
                              $dateObj   = DateTime::createFromFormat('!m', $monthNum);
                              $monthName = $dateObj->format('F');
                            ?>
                            <li class="single-category <?php if(request()->input('month') == $myArr[0] && request()->input('year') == $myArr[1]): ?> active <?php endif; ?>">
                                <a href="<?php echo e(route('front.blogs', ['term'=>request()->input('term'), 'category'=>request()->input('category'),'month'=>$myArr[0], 'year'=>$myArr[1]])); ?>">

                                    <?php
                                        if (!empty($currentLang)) {
                                            $monthName = \Carbon\Carbon::parse($monthName)->locale("$currentLang->code");
                                            $year = \Carbon\Carbon::parse($myArr[1])->locale("$currentLang->code");
                                        } else {
                                            $monthName = \Carbon\Carbon::parse($monthName)->locale("en");
                                            $year = \Carbon\Carbon::parse($myArr[1])->locale("en");
                                        }

                                        $monthName = $monthName->translatedFormat('F');
                                        $year = $year->translatedFormat('Y');
                                    ?>

                                    <?php echo e($monthName); ?> <?php echo e($year); ?>

                                </a>
                            </li>
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

<?php echo $__env->make("front.$version.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\logistics\core\resources\views/front/blogs.blade.php ENDPATH**/ ?>