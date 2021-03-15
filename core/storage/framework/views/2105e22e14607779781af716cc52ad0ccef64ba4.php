<?php $__env->startSection('pagename'); ?>
 - <?php echo e(__('FAQ')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta-keywords', "$be->faq_meta_keywords"); ?>
<?php $__env->startSection('meta-description', "$be->faq_meta_description"); ?>

<?php $__env->startSection('content'); ?>
<!--   breadcrumb area start   -->
<div class="breadcrumb-area" style="background-image: url('<?php echo e(asset('assets/front/img/' . $bs->breadcrumb)); ?>');background-size:cover;">
   <div class="container">
      <div class="breadcrumb-txt">
         <div class="row">
            <div class="col-xl-7 col-lg-8 col-sm-10">
               <span><?php echo e(convertUtf8($bs->faq_title)); ?></span>
               <h1><?php echo e(convertUtf8($bs->faq_subtitle)); ?></h1>
               <ul class="breadcumb">
                  <li><a href="<?php echo e(route('front.index')); ?>"><?php echo e(__('Home')); ?></a></li>
                  <li><?php echo e(__('FAQS')); ?></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <div class="breadcrumb-area-overlay" style="background-color: #<?php echo e($be->breadcrumb_overlay_color); ?>;opacity: <?php echo e($be->breadcrumb_overlay_opacity); ?>;"></div>
</div>
<!--   breadcrumb area end    -->


<!--   FAQ section start   -->
<div class="faq-section">
   <div class="container">
      <div class="row">
         <div class="col-lg-6">
            <div class="accordion" id="accordionExample1">
               <?php for($i=0; $i < ceil(count($faqs)/2); $i++): ?>
               <div class="card">
                  <div class="card-header" id="heading<?php echo e($faqs[$i]->id); ?>">
                     <h2 class="mb-0">
                        <button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse<?php echo e($faqs[$i]->id); ?>" aria-expanded="false" aria-controls="collapse<?php echo e($faqs[$i]->id); ?>">
                        <?php echo e(convertUtf8($faqs[$i]->question)); ?>

                        </button>
                     </h2>
                  </div>
                  <div id="collapse<?php echo e($faqs[$i]->id); ?>" class="collapse" aria-labelledby="heading<?php echo e($faqs[$i]->id); ?>" data-parent="#accordionExample1">
                     <div class="card-body">
                        <?php echo e(convertUtf8($faqs[$i]->answer)); ?>

                     </div>
                  </div>
               </div>
               <?php endfor; ?>
            </div>
         </div>
         <div class="col-lg-6">
            <div class="accordion" id="accordionExample2">
               <?php for($i=ceil(count($faqs)/2); $i < count($faqs); $i++): ?>
               <div class="card">
                  <div class="card-header" id="heading<?php echo e($faqs[$i]->id); ?>">
                     <h2 class="mb-0">
                        <button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse<?php echo e($faqs[$i]->id); ?>" aria-expanded="false" aria-controls="collapse<?php echo e($faqs[$i]->id); ?>">
                        <?php echo e(convertUtf8($faqs[$i]->question)); ?>

                        </button>
                     </h2>
                  </div>
                  <div id="collapse<?php echo e($faqs[$i]->id); ?>" class="collapse" aria-labelledby="heading<?php echo e($faqs[$i]->id); ?>" data-parent="#accordionExample2">
                     <div class="card-body">
                        <?php echo e(convertUtf8($faqs[$i]->answer)); ?>

                     </div>
                  </div>
               </div>
               <?php endfor; ?>
            </div>
         </div>
      </div>
   </div>
</div>
<!--   FAQ section end   -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make("front.$version.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\logistics\core\resources\views/front/faq.blade.php ENDPATH**/ ?>