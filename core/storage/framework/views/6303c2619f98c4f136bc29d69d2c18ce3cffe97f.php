<?php if(!empty($slider->language) && $slider->language->rtl == 1): ?>
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
    <h4 class="page-title">Edit Slider</h4>
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
        <a href="#">Hero Section</a>
      </li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">
        <a href="#">Edit Slider</a>
      </li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="card-title d-inline-block">Edit Slider</div>
          <a class="btn btn-info btn-sm float-right d-inline-block" href="<?php echo e(route('admin.slider.index') . '?language=' . request()->input('language')); ?>">
            <span class="btn-label">
              <i class="fas fa-backward" style="font-size: 12px;"></i>
            </span>
            Back
          </a>
        </div>
        <div class="card-body pt-5 pb-5">
          <div class="row">
            <div class="col-lg-8 offset-lg-2">
              <form class="mb-3 dm-uploader drag-and-drop-zone" enctype="multipart/form-data" action="<?php echo e(route('admin.slider.uploadUpdate', $slider->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="form-row px-2">
                  <div class="col-12 mb-2">
                    <label for=""><strong>Image **</strong></label>
                  </div>
                  <div class="col-md-12 d-md-block d-sm-none mb-3">
                    <img src="<?php echo e(asset('assets/front/img/sliders/'.$slider->image)); ?>" alt="..." class="img-thumbnail">
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

              <form id="ajaxForm" class="" action="<?php echo e(route('admin.slider.update')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="slider_id" value="<?php echo e($slider->id); ?>">

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                          <label for="">Title </label>
                          <input type="text" class="form-control" name="title" value="<?php echo e($slider->title); ?>" placeholder="Enter Title">
                          <p id="errtitle" class="text-danger mb-0 em"></p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                          <label for="">Title Font Size **</label>
                          <input type="number" class="form-control ltr" name="title_font_size" value="<?php echo e($slider->title_font_size); ?>">
                          <p id="errtitle_font_size" class="em text-danger mb-0"></p>
                        </div>
                    </div>
                </div>


                <?php if(getVersion($be->theme_version) == 'gym' || getVersion($be->theme_version) == 'car' || getVersion($be->theme_version) == 'cleaning'): ?>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Bold Text </label>
                                <input type="text" class="form-control" name="bold_text" value="<?php echo e($slider->bold_text); ?>" placeholder="Enter Bold Text">
                                <p id="errbold_text" class="mb-0 text-danger em"></p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Bold Text Font Size **</label>
                                <input type="number" class="form-control ltr" name="bold_text_font_size" value="<?php echo e($slider->bold_text_font_size); ?>">
                                <p id="errbold_text_font_size" class="em text-danger mb-0"></p>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>



                <?php if(getVersion($be->theme_version) == 'cleaning'): ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="">Bold Text Color **</label>
                                <input type="text" class="form-control jscolor" name="bold_text_color" value="<?php echo e($slider->bold_text_color); ?>">
                                <p id="errbold_text_color" class="em text-danger mb-0"></p>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>


                <?php if(getVersion($be->theme_version) != 'cleaning'): ?>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                            <label for="">Text </label>
                            <input type="text" class="form-control" name="text" value="<?php echo e($slider->text); ?>" placeholder="Enter Text">
                            <p id="errtext" class="text-danger mb-0 em"></p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Text Font Size **</label>
                                <input type="number" class="form-control ltr" name="text_font_size" value="<?php echo e($slider->text_font_size); ?>">
                                <p id="errtext_font_size" class="em text-danger mb-0"></p>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>


                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                          <label for="">Button Text </label>
                          <input type="text" class="form-control" name="button_text" value="<?php echo e($slider->button_text); ?>" placeholder="Enter Button Text">
                          <p id="errbutton_text" class="text-danger mb-0 em"></p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Button Text Font Size **</label>
                            <input type="number" class="form-control ltr" name="button_text_font_size" value="<?php echo e($slider->button_text_font_size); ?>">
                            <p id="errbutton_text_font_size" class="em text-danger mb-0"></p>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                  <label for="">Button URL **</label>
                  <input type="text" class="form-control ltr" name="button_url" value="<?php echo e($slider->button_url); ?>" placeholder="Enter Button URL">
                  <p id="errbutton_url" class="text-danger mb-0 em"></p>
                </div>
                <div class="form-group">
                  <label for="">Serial Number **</label>
                  <input type="number" class="form-control ltr" name="serial_number" value="<?php echo e($slider->serial_number); ?>" placeholder="Enter Serial Number">
                  <p id="errserial_number" class="mb-0 text-danger em"></p>
                  <p class="text-warning"><small>The higher the serial number is, the later the slider will be shown.</small></p>
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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\logistics\core\resources\views/admin/home/hero/slider/edit.blade.php ENDPATH**/ ?>