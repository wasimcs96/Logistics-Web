<?php if(!empty($abe->language) && $abe->language->rtl == 1): ?>
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
    <h4 class="page-title">SEO Informations</h4>
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
        <a href="#">SEO Informations</a>
      </li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <form class="" action="<?php echo e(route('admin.seo.update', $lang_id)); ?>" method="post">
          <?php echo csrf_field(); ?>
          <div class="card-header">
              <div class="row">
                  <div class="col-lg-10">
                      <div class="card-title">Update SEO Informations</div>
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
              <?php echo csrf_field(); ?>
              <div class="col-lg-6">
                <div class="form-group">
                  <label>Meta Keywords for Home Page</label>
                  <input class="form-control" name="home_meta_keywords" value="<?php echo e($abe->home_meta_keywords); ?>" placeholder="Enter meta keywords" data-role="tagsinput">
                </div>
                <div class="form-group">
                  <label>Meta Description for Home Page</label>
                  <textarea class="form-control" name="home_meta_description" rows="5" placeholder="Enter meta description"><?php echo e($abe->home_meta_description); ?></textarea>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                    <label>Meta Keywords for Services Page</label>
                    <input class="form-control" name="services_meta_keywords" value="<?php echo e($abe->services_meta_keywords); ?>" placeholder="Enter meta keywords" data-role="tagsinput">
                  </div>
                  <div class="form-group">
                    <label>Meta Description for Services Page</label>
                    <textarea class="form-control" name="services_meta_description" rows="5" placeholder="Enter meta description"><?php echo e($abe->services_meta_description); ?></textarea>
                  </div>
              </div>

              <div class="col-lg-6">
                  <div class="form-group">
                    <label>Meta Keywords for Packages</label>
                    <input class="form-control" name="packages_meta_keywords" value="<?php echo e($abe->packages_meta_keywords); ?>" placeholder="Enter meta keywords" data-role="tagsinput">
                  </div>
                  <div class="form-group">
                    <label>Meta Description for Packages</label>
                    <textarea class="form-control" name="packages_meta_description" rows="5" placeholder="Enter meta description"><?php echo e($abe->packages_meta_description); ?></textarea>
                  </div>
              </div>

              <div class="col-lg-6">
                  <div class="form-group">
                    <label>Meta Keywords for Portfolios</label>
                    <input class="form-control" name="portfolios_meta_keywords" value="<?php echo e($abe->portfolios_meta_keywords); ?>" placeholder="Enter meta keywords" data-role="tagsinput">
                  </div>
                  <div class="form-group">
                    <label>Meta Description for Portfolios</label>
                    <textarea class="form-control" name="portfolios_meta_description" rows="5" placeholder="Enter meta description"><?php echo e($abe->portfolios_meta_description); ?></textarea>
                  </div>
              </div>

              <div class="col-lg-6">
                  <div class="form-group">
                    <label>Meta Keywords for Team Page</label>
                    <input class="form-control" name="team_meta_keywords" value="<?php echo e($abe->team_meta_keywords); ?>" placeholder="Enter meta keywords" data-role="tagsinput">
                  </div>
                  <div class="form-group">
                    <label>Meta Description for Team Page</label>
                    <textarea class="form-control" name="team_meta_description" rows="5" placeholder="Enter meta description"><?php echo e($abe->team_meta_description); ?></textarea>
                  </div>
              </div>

              <div class="col-lg-6">
                  <div class="form-group">
                    <label>Meta Keywords for Career Page</label>
                    <input class="form-control" name="career_meta_keywords" value="<?php echo e($abe->career_meta_keywords); ?>" placeholder="Enter meta keywords" data-role="tagsinput">
                  </div>
                  <div class="form-group">
                    <label>Meta Description for Career Page</label>
                    <textarea class="form-control" name="career_meta_description" rows="5" placeholder="Enter meta description"><?php echo e($abe->career_meta_description); ?></textarea>
                  </div>
              </div>

              <div class="col-lg-6">
                  <div class="form-group">
                    <label>Meta Keywords for Event Calendar Page</label>
                    <input class="form-control" name="calendar_meta_keywords" value="<?php echo e($abe->calendar_meta_keywords); ?>" placeholder="Enter meta keywords" data-role="tagsinput">
                  </div>
                  <div class="form-group">
                    <label>Meta Description for Event Calendar Page</label>
                    <textarea class="form-control" name="calendar_meta_description" rows="5" placeholder="Enter meta description"><?php echo e($abe->calendar_meta_description); ?></textarea>
                  </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group">
                    <label>Meta Keywords for Gallery Page</label>
                    <input class="form-control" name="gallery_meta_keywords" value="<?php echo e($abe->gallery_meta_keywords); ?>" placeholder="Enter meta keywords" data-role="tagsinput">
                  </div>
                  <div class="form-group">
                    <label>Meta Description for Gallery Page</label>
                    <textarea class="form-control" name="gallery_meta_description" rows="5" placeholder="Enter meta description"><?php echo e($abe->gallery_meta_description); ?></textarea>
                  </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group">
                    <label>Meta Keywords for FAQ Page</label>
                    <input class="form-control" name="faq_meta_keywords" value="<?php echo e($abe->faq_meta_keywords); ?>" placeholder="Enter meta keywords" data-role="tagsinput">
                  </div>
                  <div class="form-group">
                    <label>Meta Description for FAQ Page</label>
                    <textarea class="form-control" name="faq_meta_description" rows="5" placeholder="Enter meta description"><?php echo e($abe->faq_meta_description); ?></textarea>
                  </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group">
                    <label>Meta Keywords for Blogs Page</label>
                    <input class="form-control" name="blogs_meta_keywords" value="<?php echo e($abe->blogs_meta_keywords); ?>" placeholder="Enter meta keywords" data-role="tagsinput">
                  </div>
                  <div class="form-group">
                    <label>Meta Description for Blogs Page</label>
                    <textarea class="form-control" name="blogs_meta_description" rows="5" placeholder="Enter meta description"><?php echo e($abe->blogs_meta_description); ?></textarea>
                  </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group">
                    <label>Meta Keywords for RSS Feeds Page</label>
                    <input class="form-control" name="rss_meta_keywords" value="<?php echo e($abe->rss_meta_keywords); ?>" placeholder="Enter meta keywords" data-role="tagsinput">
                  </div>
                  <div class="form-group">
                    <label>Meta Description for RSS Feeds Page</label>
                    <textarea class="form-control" name="rss_meta_description" rows="5" placeholder="Enter meta description"><?php echo e($abe->rss_meta_description); ?></textarea>
                  </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group">
                    <label>Meta Keywords for Contact Page</label>
                    <input class="form-control" name="contact_meta_keywords" value="<?php echo e($abe->contact_meta_keywords); ?>" placeholder="Enter meta keywords" data-role="tagsinput">
                  </div>
                  <div class="form-group">
                    <label>Meta Description for Contact Page</label>
                    <textarea class="form-control" name="contact_meta_description" rows="5" placeholder="Enter meta description"><?php echo e($abe->contact_meta_description); ?></textarea>
                  </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group">
                    <label>Meta Keywords for Quote Page</label>
                    <input class="form-control" name="quote_meta_keywords" value="<?php echo e($abe->quote_meta_keywords); ?>" placeholder="Enter meta keywords" data-role="tagsinput">
                  </div>
                  <div class="form-group">
                    <label>Meta Description for Quote Page</label>
                    <textarea class="form-control" name="quote_meta_description" rows="5" placeholder="Enter meta description"><?php echo e($abe->quote_meta_description); ?></textarea>
                  </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group">
                    <label>Meta Keywords for Products Page</label>
                    <input class="form-control" name="products_meta_keywords" value="<?php echo e($abe->products_meta_keywords); ?>" placeholder="Enter meta keywords" data-role="tagsinput">
                  </div>
                  <div class="form-group">
                    <label>Meta Description for Products Page</label>
                    <textarea class="form-control" name="products_meta_description" rows="5" placeholder="Enter meta description"><?php echo e($abe->products_meta_description); ?></textarea>
                  </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group">
                    <label>Meta Keywords for Cart Page</label>
                    <input class="form-control" name="cart_meta_keywords" value="<?php echo e($abe->cart_meta_keywords); ?>" placeholder="Enter meta keywords" data-role="tagsinput">
                  </div>
                  <div class="form-group">
                    <label>Meta Description for Cart Page</label>
                    <textarea class="form-control" name="cart_meta_description" rows="5" placeholder="Enter meta description"><?php echo e($abe->cart_meta_description); ?></textarea>
                  </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group">
                    <label>Meta Keywords for Checkout Page</label>
                    <input class="form-control" name="checkout_meta_keywords" value="<?php echo e($abe->checkout_meta_keywords); ?>" placeholder="Enter meta keywords" data-role="tagsinput">
                  </div>
                  <div class="form-group">
                    <label>Meta Description for Checkout Page</label>
                    <textarea class="form-control" name="checkout_meta_description" rows="5" placeholder="Enter meta description"><?php echo e($abe->checkout_meta_description); ?></textarea>
                  </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group">
                    <label>Meta Keywords for Login Page</label>
                    <input class="form-control" name="login_meta_keywords" value="<?php echo e($abe->login_meta_keywords); ?>" placeholder="Enter meta keywords" data-role="tagsinput">
                  </div>
                  <div class="form-group">
                    <label>Meta Description for Login Page</label>
                    <textarea class="form-control" name="login_meta_description" rows="5" placeholder="Enter meta description"><?php echo e($abe->login_meta_description); ?></textarea>
                  </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group">
                    <label>Meta Keywords for Register Page</label>
                    <input class="form-control" name="register_meta_keywords" value="<?php echo e($abe->register_meta_keywords); ?>" placeholder="Enter meta keywords" data-role="tagsinput">
                  </div>
                  <div class="form-group">
                    <label>Meta Description for Register Page</label>
                    <textarea class="form-control" name="register_meta_description" rows="5" placeholder="Enter meta description"><?php echo e($abe->register_meta_description); ?></textarea>
                  </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group">
                    <label>Meta Keywords for Forgot Password Page</label>
                    <input class="form-control" name="forgot_meta_keywords" value="<?php echo e($abe->forgot_meta_keywords); ?>" placeholder="Enter meta keywords" data-role="tagsinput">
                  </div>
                  <div class="form-group">
                    <label>Meta Description for Forgot Password Page</label>
                    <textarea class="form-control" name="forgot_meta_description" rows="5" placeholder="Enter meta description"><?php echo e($abe->forgot_meta_description); ?></textarea>
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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\logistics\core\resources\views/admin/basic/seo.blade.php ENDPATH**/ ?>