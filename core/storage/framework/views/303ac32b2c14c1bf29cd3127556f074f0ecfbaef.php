<?php
$selLang = \App\Language::where('code', request()->input('language'))->first();
?>
<?php if(!empty($selLang) && $selLang->rtl == 1): ?>
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
    <h4 class="page-title">Contact Page</h4>
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
        <a href="#">Contact Page</a>
      </li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <form class="mb-3 dm-uploader drag-and-drop-zone" enctype="multipart/form-data" action="<?php echo e(route('admin.contact.update', $lang_id)); ?>" method="POST">
            <div class="card-header">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="card-title">Contact Page</div>
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
                  <label>Form Title **</label>
                  <input class="form-control" name="contact_form_title" value="<?php echo e($abs->contact_form_title); ?>" placeholder="Enter Titlte">
                  <?php if($errors->has('contact_form_title')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('contact_form_title')); ?></p>
                  <?php endif; ?>
                </div>
                <div class="form-group">
                  <label>Form Subtitle **</label>
                  <input class="form-control" name="contact_form_subtitle" value="<?php echo e($abs->contact_form_subtitle); ?>" placeholder="Enter Subtitlte">
                  <?php if($errors->has('contact_form_subtitle')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('contact_form_subtitle')); ?></p>
                  <?php endif; ?>
                </div>
                <div class="form-group">
                  <label>Address **</label>
                  <input class="form-control" name="contact_address" value="<?php echo e($abs->contact_address); ?>" placeholder="Enter Address">
                  <?php if($errors->has('contact_address')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('contact_address')); ?></p>
                  <?php endif; ?>
                </div>
                <div class="form-group">
                  <label>Phone **</label>
                  <input class="form-control" name="contact_number" value="<?php echo e($abs->contact_number); ?>" placeholder="Enter Phone Number">
                  <?php if($errors->has('contact_number')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('contact_number')); ?></p>
                  <?php endif; ?>
                </div>
                <div class="form-group">
                  <label>Email **</label>
                  <input class="form-control ltr" name="contact_mail" value="<?php echo e($abe->to_mail); ?>" readonly>
                  <div class="text-warning">You cannot upadate Email Address from here, you can update it from <a class="text-" href="<?php echo e(route('admin.mailToAdmin')); ?>"><u>Basic Settings > Email Settings > Mail To Admin</u></a></p></div>
                </div>
                <div class="form-group">
                  <label>Latitude **</label>
                  <input class="form-control ltr" name="latitude" value="<?php echo e($abs->latitude); ?>" placeholder="Enter Latitude">
                  <?php if($errors->has('latitude')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('latitude')); ?></p>
                  <?php endif; ?>
                </div>
                <div class="form-group">
                  <label>Longitude **</label>
                  <input class="form-control ltr" name="longitude" value="<?php echo e($abs->longitude); ?>" placeholder="Enter Longitude">
                  <?php if($errors->has('longitude')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('longitude')); ?></p>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer pt-3">
            <div class="form">
              <div class="form-group from-show-notify row">
                <div class="col-12 text-center">
                  <button id="displayNotif" class="btn btn-success">Update</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\logistics\core\resources\views/admin/contact.blade.php ENDPATH**/ ?>