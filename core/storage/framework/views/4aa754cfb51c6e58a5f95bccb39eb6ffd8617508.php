<?php if(!empty($job->language) && $job->language->rtl == 1): ?>
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
    <h4 class="page-title">Edit Job</h4>
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
        <a href="#">Career Page</a>
      </li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">
        <a href="#">Edit Job</a>
      </li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="card-title d-inline-block">Edit Job</div>
          <a class="btn btn-info btn-sm float-right d-inline-block" href="<?php echo e(route('admin.job.index') . '?language=' . request()->input('language')); ?>">
            <span class="btn-label">
              <i class="fas fa-backward" style="font-size: 12px;"></i>
            </span>
            Back
          </a>
        </div>
        <div class="card-body pt-5 pb-5">
          <div class="row">
            <div class="col-lg-12">

                <form id="ajaxForm" class="" action="<?php echo e(route('admin.job.update')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="job_id" value="<?php echo e($job->id); ?>">
                    <div id="sliders"></div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Title **</label>
                                <input type="text" class="form-control" name="title" value="<?php echo e($job->title); ?>"
                                    placeholder="Enter title">
                                <p id="errtitle" class="mb-0 text-danger em"></p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Category **</label>
                                <select class="form-control" name="jcategory_id">
                                    <option value="" selected disabled>Select a category</option>
                                    <?php $__currentLoopData = $jcats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $jcat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($jcat->id); ?>" <?php echo e($job->jcategory_id == $jcat->id ? 'selected' : ''); ?>><?php echo e($jcat->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <p id="errjcategory_id" class="mb-0 text-danger em"></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Employment Status **</label>
                                <input type="text" class="form-control" name="employment_status" value="<?php echo e($job->employment_status); ?>"
                                    data-role="tagsinput">
                                <p class="text-warning mb-0"><small>Use comma (,) to seperate statuses. eg: full-time, part-time, contractual</small></p>
                                <p id="erremployment_status" class="mb-0 text-danger em"></p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Vacancy **</label>
                                <input type="number" class="form-control" name="vacancy" value="<?php echo e($job->vacancy); ?>"
                                    placeholder="Enter number of vacancy" min="1">
                                <p id="errvacancy" class="mb-0 text-danger em"></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Application Deadline **</label>
                                <input id="deadline" type="text" class="form-control datepicker ltr" name="deadline" value="<?php echo e($job->deadline); ?>" placeholder="Enter application deadline" autocomplete="off">
                                <p id="errdeadline" class="mb-0 text-danger em"></p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Experience in Years **</label>
                                <input type="text" class="form-control" name="experience" value="<?php echo e($job->experience); ?>"
                                    placeholder="Enter years of experience">
                                <p id="errexperience" class="mb-0 text-danger em"></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Job Responsibilities **</label>
                                <textarea class="form-control summernote" id="jobRes" name="job_responsibilities" data-height="150"
                                    placeholder="Enter job responsibilities"><?php echo e(replaceBaseUrl($job->job_responsibilities)); ?></textarea>
                                <p id="errjob_responsibilities" class="mb-0 text-danger em"></p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Educational Requirements **</label>
                                <textarea class="form-control summernote" id="eduReq" name="educational_requirements" data-height="150"
                                    placeholder="Enter educational requirements"><?php echo e(replaceBaseUrl($job->educational_requirements)); ?></textarea>
                                <p id="erreducational_requirements" class="mb-0 text-danger em"></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Experience Requirements **</label>
                                <textarea class="form-control summernote" id="expReq" name="experience_requirements" data-height="150"
                                    placeholder="Enter experience requirements"><?php echo e(replaceBaseUrl($job->experience_requirements)); ?></textarea>
                                <p id="errexperience_requirements" class="mb-0 text-danger em"></p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Additional Requirements</label>
                                <textarea class="form-control summernote" id="addReq" name="additional_requirements" data-height="150"
                                    placeholder="Enter additional requirements"><?php echo e(replaceBaseUrl($job->additional_requirements)); ?></textarea>
                                <p id="erradditional_requirements" class="mb-0 text-danger em"></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Salary **</label>
                                <textarea class="form-control summernote" id="salary" name="salary" data-height="150"
                                    placeholder="Enter salary"><?php echo e(replaceBaseUrl($job->salary)); ?></textarea>
                                <p id="errsalary" class="mb-0 text-danger em"></p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Benefits</label>
                                <textarea class="form-control summernote" id="benefits" name="benefits" data-height="150"
                                    placeholder="Enter compensation & other benefits"><?php echo e(replaceBaseUrl($job->benefits)); ?></textarea>
                                <p id="errbenefits" class="mb-0 text-danger em"></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Job Location **</label>
                                <input type="text" class="form-control" name="job_location" value="<?php echo e($job->job_location); ?>"
                                    placeholder="Enter job location">
                                <p id="errjob_location" class="mb-0 text-danger em"></p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Email <span class="text-warning">(Where applicatints will send their CVs)</span> **</label>
                                <input type="email" class="form-control ltr" name="email" value="<?php echo e($job->email); ?>"
                                    placeholder="Enter email address">
                                <p id="erremail" class="mb-0 text-danger em"></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Read Before Apply</label>
                                <textarea class="form-control summernote" id="read_before_apply" name="read_before_apply" data-height="150"
                                    placeholder="Enter read before apply"><?php echo e(replaceBaseUrl($job->read_before_apply)); ?></textarea>
                                <p id="errread_before_apply" class="mb-0 text-danger em"></p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Serial Number **</label>
                                <input type="number" class="form-control ltr" name="serial_number" value="<?php echo e($job->serial_number); ?>" placeholder="Enter Serial Number">
                                <p id="errserial_number" class="mb-0 text-danger em"></p>
                                <p class="text-warning"><small>The higher the serial number is, the later the job will be shown.</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Meta Keywords</label>
                                <input class="form-control" name="meta_keywords" value="<?php echo e($job->meta_keywords); ?>" placeholder="Enter meta keywords" data-role="tagsinput">
                             </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Meta Description</label>
                                <textarea class="form-control" name="meta_description" rows="3" placeholder="Enter meta description"><?php echo e($job->meta_description); ?></textarea>
                             </div>
                        </div>
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

<?php $__env->startSection('scripts'); ?>
<script>
$(document).ready(function() {
    var today = new Date();
    $("#deadline").datepicker({
      autoclose: true,
      endDate : today,
      todayHighlight: true
    });
});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\logistics\core\resources\views/admin/job/job/edit.blade.php ENDPATH**/ ?>