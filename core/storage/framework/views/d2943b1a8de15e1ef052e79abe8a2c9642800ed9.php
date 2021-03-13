<?php
$selLang = \App\Language::where('code', request()->input('language'))->first();
?>
<?php if(!empty($selLang) && $selLang->rtl == 1): ?>
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
    <h4 class="page-title">Update Rss feed</h4>
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
        <a href="#">Rss feeds</a>
      </li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">
        <a href="#">Update Rss feed</a>
      </li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="card-title d-inline-block">Update Rss feed</div>
          <a class="btn btn-info btn-sm float-right d-inline-block" href="<?php echo e(route('admin.rss.feed') . '?language=' . request()->input('language')); ?>">
            <span class="btn-label">
              <i class="fas fa-backward" style="font-size: 12px;"></i>
            </span>
            Back
          </a>
        </div>
        <div class="card-body pt-5 pb-5">
          <div class="row">
            <div class="col-lg-6 offset-lg-3">
              <form id="ajaxForm" class="" action="<?php echo e(route('admin.rss.update')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="id" value="<?php echo e($rss->id); ?>">

                <div class="form-group">
                  <label for="">Feed Name **</label>
                    <input type="text" class="form-control" name="feed_name" value="<?php echo e($rss->feed_name); ?>" placeholder="Enter Feed Name">
                  <p id="errfeedname" class="mb-0 text-danger em"></p>
                </div>

                <div class="form-group">
                  <label for="">Feed Url **</label>
                  <input type="text" class="form-control ltr" name="feed_url" value="<?php echo e($rss->feed_url); ?>" placeholder="Enter Feed Url">
                  <p id="errfeedurl" class="mb-0 text-danger em"></p>
                </div>

                <div class="form-group">
                  <label for="">Number of Posts to Import **</label>
                  <input type="number" class="form-control ltr" name="post_limit" value="<?php echo e($rss->post_limit); ?>" placeholder="Enter Post Limit">
                  <p id="errpostlimit" class="mb-0 text-danger em"></p>
                </div>

                <div class="form-group">
                  <label for="">Read More Button Text **</label>
                  <input type="text" class="form-control" name="read_more_button" value="<?php echo e($rss->read_more_button); ?>">
                  <p id="errreadmore" class="mb-0 text-danger em"></p>
                </div>

              </form>
            </div>
          </div>
        </div>
        <div class="card-footer">
          <div class="form">
            <div class="form-group from-show-notify row">
              <div class="col-12 text-center">
                <button type="submit" id="submitBtn" class="btn btn-success">Import Rss feed</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\logistics\core\resources\views/admin/rss/edit.blade.php ENDPATH**/ ?>