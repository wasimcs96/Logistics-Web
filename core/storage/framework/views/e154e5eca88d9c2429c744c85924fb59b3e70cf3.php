<?php if(!empty($member->language) && $member->language->rtl == 1): ?>
<?php $__env->startSection('styles'); ?>
<style>
    form input,
    form textarea,
    form select {
        direction: rtl;
    }
    .nicEdit-main {
        direction: rtl;
        text-align: right;
    }
</style>
<?php $__env->stopSection(); ?>
<?php endif; ?>

<?php $__env->startSection('content'); ?>
  <div class="page-header">
    <h4 class="page-title">Edit Member</h4>
    <ul class="breadcrumbs">
      <li class="nav-home">
        <a href="#">
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
        <a href="#">Edit Member</a>
      </li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="card-title d-inline-block">Edit Member</div>
          <a class="btn btn-info btn-sm float-right d-inline-block" href="<?php echo e(route('admin.member.index') . '?language=' . request()->input('language')); ?>">
            <span class="btn-label">
              <i class="fas fa-backward" style="font-size: 12px;"></i>
            </span>
            Back
          </a>
        </div>
        <div class="card-body pt-5 pb-5">
          <div class="row">
            <div class="col-lg-6 offset-lg-3">
              <form class="mb-3 dm-uploader drag-and-drop-zone" enctype="multipart/form-data" action="<?php echo e(route('admin.member.uploadUpdate', $member->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="form-row px-2">
                  <div class="col-12 mb-2">
                    <label for=""><strong>Image **</strong></label>
                  </div>
                  <div class="col-md-12 d-md-block d-sm-none mb-3">
                    <img src="<?php echo e(asset('assets/front/img/members/'.$member->image)); ?>" alt="..." class="img-thumbnail">
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
                        <input type="file" title='Click to add Files'  />
                      </div>
                      <small class="status text-muted">Select a file or drag it over this area..</small>
                    </div>
                  </div>
                </div>
              </form>

              <form id="ajaxForm" class="" action="<?php echo e(route('admin.member.update')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="member_id" value="<?php echo e($member->id); ?>">
                <div class="form-group">
                  <label for="">Name **</label>
                  <input type="text" class="form-control" name="name" value="<?php echo e($member->name); ?>" placeholder="Enter name">
                  <p id="errname" class="mb-0 text-danger em"></p>
                </div>
                <div class="form-group">
                  <label for="">Rank **</label>
                  <input type="text" class="form-control" name="rank" value="<?php echo e($member->rank); ?>" placeholder="Enter rank">
                  <p id="errrank" class="mb-0 text-danger em"></p>
                </div>
                <div class="form-group">
                  <label for="">Facebook</label>
                  <input type="text" class="form-control ltr" name="facebook" value="<?php echo e($member->facebook); ?>" placeholder="Enter facebook url">
                  <p id="errfacebook" class="mb-0 text-danger em"></p>
                </div>
                <div class="form-group">
                  <label for="">Twitter</label>
                  <input type="text" class="form-control ltr" name="twitter" value="<?php echo e($member->twitter); ?>" placeholder="Enter twitter url">
                  <p id="errtwitter" class="mb-0 text-danger em"></p>
                </div>
                <div class="form-group">
                  <label for="">Instagram</label>
                  <input type="text" class="form-control ltr" name="instagram" value="<?php echo e($member->instagram); ?>" placeholder="Enter instagram url">
                  <p id="errinstagram" class="mb-0 text-danger em"></p>
                </div>
                <div class="form-group">
                  <label for="">Linkedin</label>
                  <input type="text" class="form-control ltr" name="linkedin" value="<?php echo e($member->linkedin); ?>" placeholder="Enter linkedin url">
                  <p id="errlinkedin" class="mb-0 text-danger em"></p>
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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\logistics\core\resources\views/admin/home/member/edit.blade.php ENDPATH**/ ?>