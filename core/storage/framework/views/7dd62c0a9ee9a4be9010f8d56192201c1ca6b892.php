<?php if(!empty($page->language) && $page->language->rtl == 1): ?>
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
    <h4 class="page-title">Pages</h4>
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
        <a href="#">Edit Page</a>
      </li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">
        <a href="#">Pages</a>
      </li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="card-title d-inline-block">Edit Page</div>
          <a class="btn btn-info btn-sm float-right d-inline-block" href="<?php echo e(route('admin.page.index') . '?language=' . request()->input('language')); ?>">
						<span class="btn-label">
							<i class="fas fa-backward" style="font-size: 12px;"></i>
						</span>
						Back
					</a>
        </div>
        <div class="card-body pt-5 pb-4">
          <div class="row">
            <div class="col-lg-10 offset-lg-1">
              <form id="ajaxForm" action="<?php echo e(route('admin.page.update')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="pageid" value="<?php echo e($page->id); ?>">
                <div class="row">
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label for="">Name **</label>
                      <input type="text" name="name" class="form-control" placeholder="Enter Name" value="<?php echo e($page->name); ?>">
                      <p id="errname" class="em text-danger mb-0"></p>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label for="">Title **</label>
                      <input type="text" class="form-control" name="title" placeholder="Enter Title" value="<?php echo e($page->title); ?>">
                      <p id="errtitle" class="em text-danger mb-0"></p>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label for="">Subtitle **</label>
                      <input type="text" class="form-control" name="subtitle" placeholder="Enter Subtitle" value="<?php echo e($page->subtitle); ?>">
                      <p id="errsubtitle" class="em text-danger mb-0"></p>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label for="">Status **</label>
                      <select class="form-control ltr" name="status">
                        <option value="1" <?php echo e($page->status == 1 ? 'selected' : ''); ?>>Active</option>
                        <option value="0" <?php echo e($page->status == 0 ? 'selected' : ''); ?>>Deactive</option>
                      </select>
                      <p id="errstatus" class="em text-danger mb-0"></p>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="">Body **</label>
                  <textarea id="body" class="form-control summernote" name="body" data-height="500"><?php echo e(replaceBaseUrl($page->body)); ?></textarea>
                  <p id="errbody" class="em text-danger mb-0"></p>
                </div>
                <div class="form-group">
                  <label for="">Serial Number **</label>
                  <input type="number" class="form-control ltr" name="serial_number" value="<?php echo e($page->serial_number); ?>" placeholder="Enter Serial Number">
                  <p id="errserial_number" class="mb-0 text-danger em"></p>
                  <p class="text-warning"><small>The higher the serial number is, the later the page will be shown in menu.</small></p>
                </div>
                <div class="form-group">
                   <label>Meta Keywords</label>
                   <input class="form-control" name="meta_keywords" value="<?php echo e($page->meta_keywords); ?>" placeholder="Enter meta keywords" data-role="tagsinput">
                </div>
                <div class="form-group">
                   <label>Meta Description</label>
                   <textarea class="form-control" name="meta_description" rows="5" placeholder="Enter meta description"><?php echo e($page->meta_description); ?></textarea>
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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\logistics\core\resources\views/admin/page/edit.blade.php ENDPATH**/ ?>