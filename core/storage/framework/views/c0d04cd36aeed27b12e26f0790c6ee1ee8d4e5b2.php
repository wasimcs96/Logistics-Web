<?php $__env->startSection('content'); ?>
  <div class="page-header">
    <h4 class="page-title">Scripts</h4>
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
        <a href="#">Scripts</a>
      </li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <form class="" action="<?php echo e(route('admin.script.update')); ?>" method="post">
          <?php echo csrf_field(); ?>
          <div class="card-header">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="card-title">Update Scripts</div>
                  </div>
              </div>
          </div>
          <div class="card-body pt-5 pb-5">
            <div class="row">
              <div class="col-lg-6 offset-lg-3">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                  <label>Tawk.to Status</label>
                  <div class="selectgroup w-100">
                        <label class="selectgroup-item">
                            <input type="radio" name="is_tawkto" value="1" class="selectgroup-input" <?php echo e($bs->is_tawkto == 1 ? 'checked' : ''); ?>>
                            <span class="selectgroup-button">Active</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="is_tawkto" value="0" class="selectgroup-input" <?php echo e($bs->is_tawkto == 0 ? 'checked' : ''); ?>>
                            <span class="selectgroup-button">Deactive</span>
                        </label>
                    </div>
                  <?php if($errors->has('is_tawkto')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('is_tawkto')); ?></p>
                  <?php endif; ?>
                </div>
                <div class="form-group">
                  <label>Tawk.to Script</label>
                  <textarea class="form-control" name="tawk_to_script" rows="5"><?php echo e($bs->tawk_to_script); ?></textarea>
                  <?php if($errors->has('tawk_to_script')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('tawk_to_script')); ?></p>
                  <?php endif; ?>
                </div>
                <div class="form-group">
                  <label>Disqus Status</label>
                  <div class="selectgroup w-100">
                    <label class="selectgroup-item">
                      <input type="radio" name="is_disqus" value="1" class="selectgroup-input" <?php echo e($bs->is_disqus == 1 ? 'checked' : ''); ?>>
                      <span class="selectgroup-button">Active</span>
                    </label>
                    <label class="selectgroup-item">
                      <input type="radio" name="is_disqus" value="0" class="selectgroup-input" <?php echo e($bs->is_disqus == 0 ? 'checked' : ''); ?>>
                      <span class="selectgroup-button">Deactive</span>
                    </label>
                  </div>
                  <?php if($errors->has('is_disqus')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('is_disqus')); ?></p>
                  <?php endif; ?>
                </div>
                <div class="form-group">
                  <label>Disqus Script</label>
                  <textarea class="form-control" name="disqus_script" rows="5"><?php echo e($bs->disqus_script); ?></textarea>
                  <?php if($errors->has('disqus_script')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('disqus_script')); ?></p>
                  <?php endif; ?>
                </div>
                <div class="form-group">
                  <label>Google Analytics Status</label>
                  <div class="selectgroup w-100">
                    <label class="selectgroup-item">
                      <input type="radio" name="is_analytics" value="1" class="selectgroup-input" <?php echo e($bs->is_analytics == 1 ? 'checked' : ''); ?>>
                      <span class="selectgroup-button">Active</span>
                    </label>
                    <label class="selectgroup-item">
                      <input type="radio" name="is_analytics" value="0" class="selectgroup-input" <?php echo e($bs->is_analytics == 0 ? 'checked' : ''); ?>>
                      <span class="selectgroup-button">Deactive</span>
                    </label>
                  </div>
                  <?php if($errors->has('is_analytics')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('is_analytics')); ?></p>
                  <?php endif; ?>
                </div>
                <div class="form-group">
                  <label>Google Analytics Script</label>
                  <textarea class="form-control" name="google_analytics_script" rows="5"><?php echo e($bs->google_analytics_script); ?></textarea>
                  <?php if($errors->has('google_analytics_script')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('google_analytics_script')); ?></p>
                  <?php endif; ?>
                </div>
                <div class="form-group">
                  <label>Appzi Feedback Status</label>
                  <div class="selectgroup w-100">
                    <label class="selectgroup-item">
                      <input type="radio" name="is_appzi" value="1" class="selectgroup-input" <?php echo e($bs->is_appzi == 1 ? 'checked' : ''); ?>>
                      <span class="selectgroup-button">Active</span>
                    </label>
                    <label class="selectgroup-item">
                      <input type="radio" name="is_appzi" value="0" class="selectgroup-input" <?php echo e($bs->is_appzi == 0 ? 'checked' : ''); ?>>
                      <span class="selectgroup-button">Deactive</span>
                    </label>
                  </div>
                  <?php if($errors->has('is_appzi')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('is_appzi')); ?></p>
                  <?php endif; ?>
                </div>
                <div class="form-group">
                  <label>Appzi Feedback Script</label>
                  <textarea class="form-control" name="appzi_script" rows="5"><?php echo e($bs->appzi_script); ?></textarea>
                  <?php if($errors->has('appzi_script')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('appzi_script')); ?></p>
                  <?php endif; ?>
                </div>
                <div class="form-group">
                  <label>AddThis Status</label>
                  <div class="selectgroup w-100">
                    <label class="selectgroup-item">
                      <input type="radio" name="is_addthis" value="1" class="selectgroup-input" <?php echo e($bs->is_addthis == 1 ? 'checked' : ''); ?>>
                      <span class="selectgroup-button">Active</span>
                    </label>
                    <label class="selectgroup-item">
                      <input type="radio" name="is_addthis" value="0" class="selectgroup-input" <?php echo e($bs->is_addthis == 0 ? 'checked' : ''); ?>>
                      <span class="selectgroup-button">Deactive</span>
                    </label>
                  </div>
                  <?php if($errors->has('is_addthis')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('is_addthis')); ?></p>
                  <?php endif; ?>
                </div>
                <div class="form-group">
                  <label>AddThis Script</label>
                  <textarea class="form-control" name="addthis_script" rows="5"><?php echo e($bs->addthis_script); ?></textarea>
                  <?php if($errors->has('addthis_script')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('addthis_script')); ?></p>
                  <?php endif; ?>
                </div>
                <div class="form-group">
                  <label>Google Recaptcha Status</label>
                  <div class="selectgroup w-100">
                    <label class="selectgroup-item">
                      <input type="radio" name="is_recaptcha" value="1" class="selectgroup-input" <?php echo e($bs->is_recaptcha == 1 ? 'checked' : ''); ?>>
                      <span class="selectgroup-button">Active</span>
                    </label>
                    <label class="selectgroup-item">
                      <input type="radio" name="is_recaptcha" value="0" class="selectgroup-input" <?php echo e($bs->is_recaptcha == 0 ? 'checked' : ''); ?>>
                      <span class="selectgroup-button">Deactive</span>
                    </label>
                  </div>
                  <?php if($errors->has('is_recaptcha')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('is_recaptcha')); ?></p>
                  <?php endif; ?>
                </div>
                <div class="form-group">
                  <label>Google Recaptcha Site key</label>
                  <input class="form-control" name="google_recaptcha_site_key" value="<?php echo e($bs->google_recaptcha_site_key); ?>">
                  <?php if($errors->has('google_recaptcha_site_key')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('google_recaptcha_site_key')); ?></p>
                  <?php endif; ?>
                </div>
                <div class="form-group">
                  <label>Google Recaptcha Secret key</label>
                  <input class="form-control" name="google_recaptcha_secret_key" value="<?php echo e($bs->google_recaptcha_secret_key); ?>">
                  <?php if($errors->has('google_recaptcha_secret_key')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('google_recaptcha_secret_key')); ?></p>
                  <?php endif; ?>
                </div>
                <div class="form-group">
                    <label>Facebook Pexel Status</label>
                    <div class="selectgroup w-100">
                        <label class="selectgroup-item">
                            <input type="radio" name="is_facebook_pexel" value="1" class="selectgroup-input" <?php echo e($be->is_facebook_pexel == 1 ? 'checked' : ''); ?>>
                            <span class="selectgroup-button">Active</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="is_facebook_pexel" value="0" class="selectgroup-input" <?php echo e($be->is_facebook_pexel == 0 ? 'checked' : ''); ?>>
                            <span class="selectgroup-button">Deactive</span>
                        </label>
                    </div>
                    <?php if($errors->has('is_facebook_pexel')): ?>
                        <p class="mb-0 text-danger"><?php echo e($errors->first('is_facebook_pexel')); ?></p>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label>Facebook Pexel Script</label>
                    <textarea class="form-control" name="facebook_pexel_script" rows="5"><?php echo e($be->facebook_pexel_script); ?></textarea>
                    <?php if($errors->has('facebook_pexel_script')): ?>
                        <p class="mb-0 text-danger"><?php echo e($errors->first('facebook_pexel_script')); ?></p>
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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\logistics\core\resources\views/admin/basic/scripts.blade.php ENDPATH**/ ?>