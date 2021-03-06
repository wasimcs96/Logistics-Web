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
    <h4 class="page-title">Jobs</h4>
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
        <a href="#">Jobs</a>
      </li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">

      <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card-title d-inline-block">Jobs</div>
                </div>
                <div class="col-lg-3">
                    <?php if(!empty($langs)): ?>
                        <select name="language" class="form-control" onchange="window.location='<?php echo e(url()->current() . '?language='); ?>'+this.value">
                            <option value="" selected disabled>Select a Language</option>
                            <?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($lang->code); ?>" <?php echo e($lang->code == request()->input('language') ? 'selected' : ''); ?>><?php echo e($lang->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    <?php endif; ?>
                </div>
                <div class="col-lg-4 offset-lg-1 mt-2 mt-lg-0">
                    <a href="<?php echo e(route('admin.job.create') . '?language=' . request()->input('language')); ?>" class="btn btn-primary float-lg-right float-left btn-sm"><i class="fas fa-plus"></i> Post Job</a>
                    <button class="btn btn-danger float-right btn-sm mr-2 d-none bulk-delete" data-href="<?php echo e(route('admin.job.bulk.delete')); ?>"><i class="flaticon-interface-5"></i> Delete</button>
                </div>
            </div>
        </div>

        <div class="card-body">
          <div class="row">
            <div class="col-lg-12">
              <?php if(count($jobs) == 0): ?>
                <h3 class="text-center">NO JOB FOUND</h3>
              <?php else: ?>
                <div class="table-responsive">
                  <table class="table table-striped mt-3">
                    <thead>
                      <tr>
                        <th scope="col">
                            <input type="checkbox" class="bulk-check" data-val="all">
                        </th>
                        <th scope="col">Title</th>
                        <th scope="col">Category</th>
                        <th scope="col">Vacancy</th>
                        <th scope="col">Serial Number</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td>
                            <input type="checkbox" class="bulk-check" data-val="<?php echo e($job->id); ?>">
                          </td>
                          <td><?php echo e(strlen(convertUtf8($job->title)) > 70 ? convertUtf8(substr($job->title, 0, 70)) . '...' : convertUtf8($job->title)); ?></td>
                          <td>
                              <?php if(!empty($job->jcategory)): ?>
                              <?php echo e(convertUtf8($job->jcategory->name)); ?>

                              <?php endif; ?>
                          </td>
                          <td><?php echo e($job->vacancy); ?></td>
                          <td><?php echo e($job->serial_number); ?></td>
                          <td>
                            <a class="btn btn-secondary btn-sm" href="<?php echo e(route('admin.job.edit', $job->id) . '?language=' . request()->input('language')); ?>">
                            <span class="btn-label">
                              <i class="fas fa-edit"></i>
                            </span>
                            Edit
                            </a>
                            <form class="deleteform d-inline-block" action="<?php echo e(route('admin.job.delete')); ?>" method="post">
                              <?php echo csrf_field(); ?>
                              <input type="hidden" name="job_id" value="<?php echo e($job->id); ?>">
                              <button type="submit" class="btn btn-danger btn-sm deletebtn">
                                <span class="btn-label">
                                  <i class="fas fa-trash"></i>
                                </span>
                                Delete
                              </button>
                            </form>
                          </td>
                        </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <div class="card-footer">
          <div class="row">
            <div class="d-inline-block mx-auto">
              <?php echo e($jobs->links()); ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Create Job Modal -->
  <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Post Job</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="ajaxForm" class="" action="<?php echo e(route('admin.job.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <input type="hidden" id="image" name="" value="">
            <div class="form-group">
              <label for="">Title **</label>
              <input type="text" class="form-control" name="title" placeholder="Enter title" value="">
              <p id="errtitle" class="mb-0 text-danger em"></p>
            </div>
            <div class="form-group">
              <label for="">Category **</label>
              <select class="form-control" name="category">
                <option value="" selected disabled>Select a category</option>
                <?php $__currentLoopData = $scats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $scat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($scat->id); ?>"><?php echo e($scat->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
              <p id="errcategory" class="mb-0 text-danger em"></p>
            </div>
            <div class="form-group">
              <label for="">Content **</label>
              <textarea id="nicContent" class="form-control nic-edit" name="content" rows="8" cols="80" placeholder="Enter content"></textarea>
              <p id="errcontent" class="mb-0 text-danger em"></p>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button id="submitBtn" type="button" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\logistics\core\resources\views/admin/job/job/index.blade.php ENDPATH**/ ?>