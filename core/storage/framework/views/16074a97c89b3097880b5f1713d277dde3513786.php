<?php $__env->startSection('content'); ?>
  <div class="page-header">
    <h4 class="page-title">Announcement Popup</h4>
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
        <a href="#">Announcement Popup</a>
      </li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
          <div class="card-header">
              <div class="row">
                  <div class="col-lg-10">
                      <div class="card-title">Update Announcement Popup Banner</div>
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
                <form class="mb-3 dm-uploader drag-and-drop-zone" enctype="multipart/form-data" action="<?php echo e(route('admin.announcement.upload', $lang_id)); ?>" method="POST">
                  <div class="form-row">
                    <div class="col-12 mb-2">
                      <label for=""><strong>Announcement Image</strong></label>
                    </div>
                    <div class="col-md-12 d-md-block d-sm-none mb-3">
                        <?php if(!empty($abs->announcement)): ?>
                            <img src="<?php echo e(asset('assets/front/img/'.$abs->announcement)); ?>" alt="..." class="img-thumbnail">
                        <?php else: ?>
                            <img src="<?php echo e(asset('assets/admin/img/noimage.jpg')); ?>" alt="..." class="img-thumbnail">
                        <?php endif; ?>
                    </div>
                    <div class="col-sm-12">
                      <div class="from-group mb-2">
                        <input type="text" class="form-control progressbar" aria-describedby="fileHelp" placeholder="No image uploaded..." readonly="readonly" />

                        <div class="progress mb-2 d-none">
                          <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary"
                            role="progressbar"
                            style="width: 0%;"
                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="0">
                            0%
                          </div>
                        </div>

                      </div>

                      <div class="mt-4">
                        <div role="button" class="btn btn-primary mr-2">
                          <i class="fa fa-folder-o fa-fw"></i> Browse Files
                          <input type="file" title='Click to add Files' />
                        </div>
                        <small class="status text-muted">Select a file or drag it over this area..</small>
                        <p class="text-warning mb-0">Only jpg, jpeg, png image is allowed.</p>
                        <p class="text-danger mb-0 em" id="errannouncement_img"></p>
                      </div>
                    </div>
                  </div>
                </form>

                <form id="ajaxForm" action="<?php echo e(route('admin.announcement.update', $lang_id)); ?>" method="post">
                  <?php echo csrf_field(); ?>
                  <div class="form-group">
                    <label>Announcement Popup</label>
                    <div class="selectgroup w-100">
                      <label class="selectgroup-item">
                        <input type="radio" name="is_announcement" value="1" class="selectgroup-input" <?php echo e($abs->is_announcement == 1 ? 'checked' : ''); ?>>
                        <span class="selectgroup-button">Active</span>
                      </label>
                      <label class="selectgroup-item">
                        <input type="radio" name="is_announcement" value="0" class="selectgroup-input" <?php echo e($abs->is_announcement == 0 ? 'checked' : ''); ?>>
                        <span class="selectgroup-button">Deactive</span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Popup Delay (Second)</label>
                    <input class="form-control ltr" type="text" name="announcement_delay" value="<?php echo e(($abs->announcement_delay)); ?>">
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="form-group from-show-notify row">
              <div class="col-12 text-center">
                <button type="submit" id="submitBtn" class="btn btn-success">Update</button>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\logistics\core\resources\views/admin/basic/announcement.blade.php ENDPATH**/ ?>