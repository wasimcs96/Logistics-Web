<?php if(!empty($abs->language) && $abs->language->rtl == 1): ?>
<?php $__env->startSection('styles'); ?>
<style>
    form:not(.modal-form) input,
    form:not(.modal-form) textarea,
    form:not(.modal-form) select,
    select[name='language'] {
        direction: rtl;
    }
    form:not(.modal-form) .note-editor.note-frame .note-editing-area .note-editable {
        direction: rtl;
        text-align: right;
    }
</style>
<?php $__env->stopSection(); ?>
<?php endif; ?>

<?php $__env->startSection('content'); ?>
  <div class="page-header">
    <h4 class="page-title">Call to Action Section</h4>
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
        <a href="#">Home Page</a>
      </li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">
        <a href="#">Call to Action Section</a>
      </li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-10">
                    <div class="card-title">Update Call to Action Section</div>
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
        <div class="card-body pt-5 pb-4">
          <div class="row">
            <div class="col-lg-6 offset-lg-3">

              <?php if(getVersion($abe->theme_version) != 'gym' && getVersion($abe->theme_version) != 'car'): ?>
                <form class="mb-3 dm-uploader drag-and-drop-zone" enctype="multipart/form-data" action="<?php echo e(route('admin.cta.upload', $lang_id)); ?>" method="POST">
                    <div class="form-row">
                    <div class="col-12 mb-2">
                        <label for=""><strong>Background **</strong></label>
                    </div>
                    <div class="col-md-12 d-md-block d-sm-none mb-3">
                            <?php if(!empty($abs->cta_bg)): ?>
                                <img src="<?php echo e(asset('assets/front/img/'.$abs->cta_bg)); ?>" alt="..." class="img-thumbnail">
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
                        <p class="text-danger mb-0 em" id="errcta_bg"></p>
                        </div>
                    </div>
                    </div>
                </form>
              <?php endif; ?>


              <form id="ajaxForm" action="<?php echo e(route('admin.cta.update', $lang_id)); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                  <label for="">Text **</label>
                  <input name="cta_section_text" class="form-control" value="<?php echo e($abs->cta_section_text); ?>">
                  <p id="errcta_section_text" class="em text-danger mb-0"></p>
                </div>
                <div class="form-group">
                  <label for="">Button Text **</label>
                  <input type="text" class="form-control" name="cta_section_button_text" value="<?php echo e($abs->cta_section_button_text); ?>">
                  <p id="errcta_section_button_text" class="em text-danger mb-0"></p>
                </div>
                <div class="form-group">
                  <label for="">Button URL **</label>
                  <input type="text" class="form-control ltr" name="cta_section_button_url" value="<?php echo e($abs->cta_section_button_url); ?>">
                  <p id="errcta_section_button_url" class="em text-danger mb-0"></p>
                </div>
              </form>

            </div>
          </div>
        </div>

        <div class="card-footer">
          <div class="form">
            <div class="form-group from-show-notify row">
              <div class="col-12 text-center">
                <button type="submit" id="submitBtn" class="btn btn-success">Update</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\logistics\core\resources\views/admin/home/cta.blade.php ENDPATH**/ ?>