<?php if(!empty($abs->language) && $abs->language->rtl == 1): ?>
<?php $__env->startSection('styles'); ?>
<style>
    form:not(.modal-form) input,
    form:not(.modal-form)  textarea,
    form:not(.modal-form)  select {
        direction: rtl;
    }
    form:not(.modal-form)  .note-editor.note-frame .note-editing-area .note-editable {
        direction: rtl;
        text-align: right;
    }
</style>
<?php $__env->stopSection(); ?>
<?php endif; ?>

<?php $__env->startSection('content'); ?>
  <div class="page-header">
    <h4 class="page-title">Approach Section</h4>
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
        <a href="#">Home</a>
      </li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">
        <a href="#">Approach Section</a>
      </li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-10">
                    <div class="card-title">Title & Subtitle</div>
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
        <form class="" action="<?php echo e(route('admin.approach.update', $lang_id)); ?>" method="post">
          <?php echo csrf_field(); ?>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-3">
                <div class="form-group">
                  <label>Title **</label>
                  <input class="form-control" name="approach_section_title" value="<?php echo e($abs->approach_title); ?>" placeholder="Enter Title">
                  <?php if($errors->has('approach_section_title')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('approach_section_title')); ?></p>
                  <?php endif; ?>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="form-group">
                  <label>Subtitle **</label>
                  <input class="form-control" name="approach_section_subtitle" value="<?php echo e($abs->approach_subtitle); ?>" placeholder="Enter Subtitle">
                  <?php if($errors->has('approach_section_subtitle')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('approach_section_subtitle')); ?></p>
                  <?php endif; ?>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="form-group">
                  <label>Button Text</label>
                  <input class="form-control" name="approach_section_button_text" value="<?php echo e($abs->approach_button_text); ?>" placeholder="Enter Button Text">
                  <?php if($errors->has('approach_section_button_text')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('approach_section_button_text')); ?></p>
                  <?php endif; ?>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="form-group">
                  <label>Button URL</label>
                  <input class="form-control ltr" name="approach_section_button_url" value="<?php echo e($abs->approach_button_url); ?>" placeholder="Enter Button URL">
                  <?php if($errors->has('approach_section_button_url')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('approach_section_button_url')); ?></p>
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

      <div class="card">
        <div class="card-header">
          <div class="card-title d-inline-block">Points</div>
          <a href="#" class="btn btn-primary float-right" data-toggle="modal" data-target="#createPointModal"><i class="fas fa-plus"></i> Add Point</a>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-12">
              <?php if(count($points) == 0): ?>
                <h2 class="text-center">NO POINT ADDED</h2>
              <?php else: ?>
                <div class="table-responsive">
                  <table class="table table-striped mt-3">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Icon</th>
                        <th scope="col">Title</th>
                        <th scope="col">Serial Number</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $__currentLoopData = $points; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $point): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td><?php echo e($loop->iteration); ?></td>
                          <td><i class="<?php echo e($point->icon); ?>"></i></td>
                          <td><?php echo e(convertUtf8($point->title)); ?></td>
                          <td><?php echo e($point->serial_number); ?></td>
                          <td>
                            <a class="btn btn-secondary btn-sm" href="<?php echo e(route('admin.approach.point.edit', $point->id) . '?language=' . request()->input('language')); ?>">
                            <span class="btn-label">
                              <i class="fas fa-edit"></i>
                            </span>
                            Edit
                            </a>
                            <form class="d-inline-block deleteform" action="<?php echo e(route('admin.approach.pointdelete')); ?>" method="post">
                              <?php echo csrf_field(); ?>
                              <input type="hidden" name="pointid" value="<?php echo e($point->id); ?>">
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
      </div>
    </div>
  </div>

  
  <?php if ($__env->exists('admin.home.approach.create')) echo $__env->make('admin.home.approach.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
  <script>
    $(document).ready(function() {
        $('.icp').on('iconpickerSelected', function(event){
            $("#inputIcon").val($(".iconpicker-component").find('i').attr('class'));
        });

        // make input fields RTL
        $("select[name='language_id']").on('change', function() {
            $(".request-loader").addClass("show");
            let url = "<?php echo e(url('/')); ?>/admin/rtlcheck/" + $(this).val();
            console.log(url);
            $.get(url, function(data) {
                $(".request-loader").removeClass("show");
                if (data == 1) {
                    $("form.modal-form input").each(function() {
                        if (!$(this).hasClass('ltr')) {
                            $(this).addClass('rtl');
                        }
                    });
                    $("form.modal-form select").each(function() {
                        if (!$(this).hasClass('ltr')) {
                            $(this).addClass('rtl');
                        }
                    });
                    $("form.modal-form textarea").each(function() {
                        if (!$(this).hasClass('ltr')) {
                            $(this).addClass('rtl');
                        }
                    });
                    $("form.modal-form .nicEdit-main").each(function() {
                        $(this).addClass('rtl text-right');
                    });

                } else {
                    $("form.modal-form input, form.modal-form select, form.modal-form textarea").removeClass('rtl');
                    $("form.modal-form .nicEdit-main").removeClass('rtl text-right');
                }
            })
        });
    });
  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\logistics\core\resources\views/admin/home/approach/index.blade.php ENDPATH**/ ?>