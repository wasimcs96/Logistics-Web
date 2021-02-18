<?php if(!empty($abs->language) && $abs->language->rtl == 1): ?>
<?php $__env->startSection('styles'); ?>
<style>
    form input,
    form textarea,
    form select {
        direction: rtl;
    }
    form .note-editor.note-frame .note-editing-area .note-editable {
        direction: rtl;
        text-align: right;
    }
</style>
<?php $__env->stopSection(); ?>
<?php endif; ?>

<?php $__env->startSection('content'); ?>
  <div class="page-header">
    <h4 class="page-title">Page Headings</h4>
    <ul class="breadcrumbs">
      <li class="nav-home">
        <a href="<?php echo e(route('admin.dashboard')); ?>">
          <i class="flaticon-home"></i>
        </a>
      </li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">
        <a href="#">Basic Settings</a>
      </li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">
        <a href="#">Page Headings</a>
      </li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <form class="" action="<?php echo e(route('admin.heading.update', $lang_id)); ?>" method="post">
          <?php echo csrf_field(); ?>
          <div class="card-header">
              <div class="row">
                  <div class="col-lg-10">
                      <div class="card-title">Update Page Headings</div>
                  </div>
                  <div class="col-lg-2">
                      <?php if(!empty($langs)): ?>
                          <select name="language" class="form-control" onchange="window.location='<?php echo e(url()->current() . '?language='); ?>'+this.value">
                              <option value="" selected disabled>Select a Language</option>
                              <?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <option value="<?php echo e($lang->code); ?>" <?php echo e($lang->code == request()->input('language') ? 'selected' : ''); ?>><?php echo e($lang->name); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                      <?php endif; ?>
                  </div>
              </div>
          </div>
          <div class="card-body pt-5 pb-5">
            <div class="row">
              <div class="col-lg-6 offset-lg-3">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                  <label>Service Title **</label>
                  <input class="form-control" name="service_title" value="<?php echo e($abs->service_title); ?>">
                  <?php if($errors->has('service_title')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('service_title')); ?></p>
                  <?php endif; ?>
                </div>
                <div class="form-group">
                  <label>Service Subtitle **</label>
                  <input class="form-control" name="service_subtitle" value="<?php echo e($abs->service_subtitle); ?>">
                  <?php if($errors->has('service_subtitle')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('service_subtitle')); ?></p>
                  <?php endif; ?>
                </div>
                <div class="form-group">
                  <label>Service Details Title **</label>
                  <input class="form-control" name="service_details_title" value="<?php echo e($abs->service_details_title); ?>">
                  <?php if($errors->has('service_details_title')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('service_details_title')); ?></p>
                  <?php endif; ?>
                </div>
                <div class="form-group">
                  <label>Portfolio Title **</label>
                  <input class="form-control" name="portfolio_title" value="<?php echo e($abs->portfolio_title); ?>">
                  <?php if($errors->has('portfolio_title')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('portfolio_title')); ?></p>
                  <?php endif; ?>
                </div>
                <div class="form-group">
                  <label>Portfolio Subtitle **</label>
                  <input class="form-control" name="portfolio_subtitle" value="<?php echo e($abs->portfolio_subtitle); ?>">
                  <?php if($errors->has('portfolio_subtitle')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('portfolio_subtitle')); ?></p>
                  <?php endif; ?>
                </div>
                <div class="form-group">
                  <label>Portfolio Details Title **</label>
                  <input class="form-control" name="portfolio_details_title" value="<?php echo e($abs->portfolio_details_title); ?>">
                  <?php if($errors->has('portfolio_details_title')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('portfolio_details_title')); ?></p>
                  <?php endif; ?>
                </div>
                <div class="form-group">
                  <label>FAQ Title **</label>
                  <input class="form-control" name="faq_title" value="<?php echo e($abs->faq_title); ?>">
                  <?php if($errors->has('faq_title')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('faq_title')); ?></p>
                  <?php endif; ?>
                </div>
                <div class="form-group">
                  <label>FAQ Subtitle **</label>
                  <input class="form-control" name="faq_subtitle" value="<?php echo e($abs->faq_subtitle); ?>">
                  <?php if($errors->has('faq_subtitle')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('faq_subtitle')); ?></p>
                  <?php endif; ?>
                </div>

                <div class="form-group">
                  <label>Pricing Title **</label>
                  <input class="form-control" name="pricing_title" value="<?php echo e($abe->pricing_title); ?>">
                  <?php if($errors->has('pricing_title')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('pricing_title')); ?></p>
                  <?php endif; ?>
                </div>

                <div class="form-group">
                  <label>Pricing Subtitle **</label>
                  <input class="form-control" name="pricing_subtitle" value="<?php echo e($abe->pricing_subtitle); ?>">
                  <?php if($errors->has('pricing_subtitle')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('pricing_subtitle')); ?></p>
                  <?php endif; ?>
                </div>

                <div class="form-group">
                  <label>Product Title **</label>
                  <input class="form-control" name="product_title" value="<?php echo e($abe->product_title); ?>">
                  <?php if($errors->has('product_title')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('product_title')); ?></p>
                  <?php endif; ?>
                </div>

                <div class="form-group">
                  <label>Product Subtitle **</label>
                  <input class="form-control" name="product_subtitle" value="<?php echo e($abe->product_subtitle); ?>">
                  <?php if($errors->has('product_subtitle')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('product_subtitle')); ?></p>
                  <?php endif; ?>
                </div>

                <div class="form-group">
                  <label>Product Details Title **</label>
                  <input class="form-control" name="product_details_title" value="<?php echo e($abe->product_details_title); ?>">
                  <?php if($errors->has('product_details_title')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('product_details_title')); ?></p>
                  <?php endif; ?>
                </div>


                <div class="form-group">
                  <label>Cart Title **</label>
                  <input class="form-control" name="cart_title" value="<?php echo e($abe->cart_title); ?>">
                  <?php if($errors->has('cart_title')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('cart_title')); ?></p>
                  <?php endif; ?>
                </div>

                <div class="form-group">
                  <label>Cart Subtitle **</label>
                  <input class="form-control" name="cart_subtitle" value="<?php echo e($abe->cart_subtitle); ?>">
                  <?php if($errors->has('cart_subtitle')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('cart_subtitle')); ?></p>
                  <?php endif; ?>
                </div>

                <div class="form-group">
                  <label>Checkout Title **</label>
                  <input class="form-control" name="checkout_title" value="<?php echo e($abe->checkout_title); ?>">
                  <?php if($errors->has('checkout_title')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('checkout_title')); ?></p>
                  <?php endif; ?>
                </div>

                <div class="form-group">
                  <label>Checkout Subtitle **</label>
                  <input class="form-control" name="checkout_subtitle" value="<?php echo e($abe->checkout_subtitle); ?>">
                  <?php if($errors->has('checkout_subtitle')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('checkout_subtitle')); ?></p>
                  <?php endif; ?>
                </div>

                <div class="form-group">
                  <label>Blog Title **</label>
                  <input class="form-control" name="blog_title" value="<?php echo e($abs->blog_title); ?>">
                  <?php if($errors->has('blog_title')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('blog_title')); ?></p>
                  <?php endif; ?>
                </div>
                <div class="form-group">
                  <label>Blog Subtitle **</label>
                  <input class="form-control" name="blog_subtitle" value="<?php echo e($abs->blog_subtitle); ?>">
                  <?php if($errors->has('blog_subtitle')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('blog_subtitle')); ?></p>
                  <?php endif; ?>
                </div>
                <div class="form-group">
                  <label>Blog Details Title **</label>
                  <input class="form-control" name="blog_details_title" value="<?php echo e($abs->blog_details_title); ?>">
                  <?php if($errors->has('blog_details_title')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('blog_details_title')); ?></p>
                  <?php endif; ?>
                </div>
                <div class="form-group">
                  <label>RSS Title **</label>
                  <input class="form-control" name="rss_title" value="<?php echo e($abe->rss_title); ?>">
                  <?php if($errors->has('rss_title')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('rss_title')); ?></p>
                  <?php endif; ?>
                </div>
                <div class="form-group">
                  <label>RSS Subtitle **</label>
                  <input class="form-control" name="rss_subtitle" value="<?php echo e($abe->rss_subtitle); ?>">
                  <?php if($errors->has('rss_subtitle')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('rss_subtitle')); ?></p>
                  <?php endif; ?>
                </div>
                <div class="form-group">
                  <label>RSS Details Title **</label>
                  <input class="form-control" name="rss_details_title" value="<?php echo e($abe->rss_details_title); ?>">
                  <?php if($errors->has('rss_details_title')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('rss_details_title')); ?></p>
                  <?php endif; ?>
                </div>
                <div class="form-group">
                  <label>Gallery Title **</label>
                  <input class="form-control" name="gallery_title" value="<?php echo e($abs->gallery_title); ?>">
                  <?php if($errors->has('gallery_title')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('gallery_title')); ?></p>
                  <?php endif; ?>
                </div>
                <div class="form-group">
                  <label>Gallery Subtitle **</label>
                  <input class="form-control" name="gallery_subtitle" value="<?php echo e($abs->gallery_subtitle); ?>">
                  <?php if($errors->has('gallery_subtitle')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('gallery_subtitle')); ?></p>
                  <?php endif; ?>
                </div>
                <div class="form-group">
                  <label>Career Title **</label>
                  <input class="form-control" name="career_title" value="<?php echo e($abe->career_title); ?>">
                  <?php if($errors->has('career_title')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('career_title')); ?></p>
                  <?php endif; ?>
                </div>
                <div class="form-group">
                  <label>Career Subtitle **</label>
                  <input class="form-control" name="career_subtitle" value="<?php echo e($abe->career_subtitle); ?>">
                  <?php if($errors->has('career_subtitle')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('career_subtitle')); ?></p>
                  <?php endif; ?>
                </div>
                <div class="form-group">
                  <label>Event Calendar Title **</label>
                  <input class="form-control" name="event_calendar_title" value="<?php echo e($abe->event_calendar_title); ?>">
                  <?php if($errors->has('event_calendar_title')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('event_calendar_title')); ?></p>
                  <?php endif; ?>
                </div>
                <div class="form-group">
                  <label>Event Calendar Subtitle **</label>
                  <input class="form-control" name="event_calendar_subtitle" value="<?php echo e($abe->event_calendar_subtitle); ?>">
                  <?php if($errors->has('event_calendar_subtitle')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('event_calendar_subtitle')); ?></p>
                  <?php endif; ?>
                </div>
                <div class="form-group">
                  <label>Team Title **</label>
                  <input class="form-control" name="team_title" value="<?php echo e($abs->team_title); ?>">
                  <?php if($errors->has('team_title')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('team_title')); ?></p>
                  <?php endif; ?>
                </div>
                <div class="form-group">
                  <label>Team Subtitle **</label>
                  <input class="form-control" name="team_subtitle" value="<?php echo e($abs->team_subtitle); ?>">
                  <?php if($errors->has('team_subtitle')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('team_subtitle')); ?></p>
                  <?php endif; ?>
                </div>
                <div class="form-group">
                  <label>Contact Title **</label>
                  <input class="form-control" name="contact_title" value="<?php echo e($abs->contact_title); ?>">
                  <?php if($errors->has('contact_title')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('contact_title')); ?></p>
                  <?php endif; ?>
                </div>
                <div class="form-group">
                  <label>Contact Subtitle **</label>
                  <input class="form-control" name="contact_subtitle" value="<?php echo e($abs->contact_subtitle); ?>">
                  <?php if($errors->has('contact_subtitle')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('contact_subtitle')); ?></p>
                  <?php endif; ?>
                </div>
                <div class="form-group">
                  <label>Quote Title **</label>
                  <input class="form-control" name="quote_title" value="<?php echo e($abs->quote_title); ?>">
                  <?php if($errors->has('quote_title')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('quote_title')); ?></p>
                  <?php endif; ?>
                </div>
                <div class="form-group">
                  <label>Quote Subtitle **</label>
                  <input class="form-control" name="quote_subtitle" value="<?php echo e($abs->quote_subtitle); ?>">
                  <?php if($errors->has('quote_subtitle')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('quote_subtitle')); ?></p>
                  <?php endif; ?>
                </div>
                <div class="form-group">
                  <label>Error Page Title **</label>
                  <input class="form-control" name="error_title" value="<?php echo e($abs->error_title); ?>">
                  <?php if($errors->has('error_title')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('error_title')); ?></p>
                  <?php endif; ?>
                </div>
                <div class="form-group">
                  <label>Error Page Subtitle **</label>
                  <input class="form-control" name="error_subtitle" value="<?php echo e($abs->error_subtitle); ?>">
                  <?php if($errors->has('error_subtitle')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('error_subtitle')); ?></p>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="form">
              <div class="form-group from-show-notify row">
                <div class="col-12 text-center">
                  <button type="submit" id="displayNotif" class="btn btn-success">Update</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\logistics\core\resources\views/admin/basic/headings.blade.php ENDPATH**/ ?>