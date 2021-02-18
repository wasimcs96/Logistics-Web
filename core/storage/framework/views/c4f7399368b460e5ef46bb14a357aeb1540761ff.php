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
    <h4 class="page-title">Portfolios</h4>
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
        <a href="#">Portfolio Page</a>
      </li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">
        <a href="#">Portfolios</a>
      </li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">

      <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card-title d-inline-block">Portfolios</div>
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
                    <a href="<?php echo e(route('admin.portfolio.create') . '?language=' . request()->input('language')); ?>" class="btn btn-primary float-right btn-sm"><i class="fas fa-plus"></i> Add Portfolio</a>
                    <button class="btn btn-danger float-right btn-sm mr-2 d-none bulk-delete" data-href="<?php echo e(route('admin.portfolio.bulk.delete')); ?>"><i class="flaticon-interface-5"></i> Delete</button>
                </div>
            </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-12">
              <?php if(count($portfolios) == 0): ?>
                <h3 class="text-center">NO PORTFOLIO FOUND</h3>
              <?php else: ?>
                <div class="table-responsive">
                  <table class="table table-striped mt-3">
                    <thead>
                      <tr>
                        <th scope="col">
                            <input type="checkbox" class="bulk-check" data-val="all">
                        </th>
                        <th scope="col">Featured Image</th>
                        <th scope="col">Title</th>
                        <th scope="col">Service</th>
                        <th scope="col">Featured</th>
                        <th scope="col">Serial Number</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $__currentLoopData = $portfolios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $portfolio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td>
                            <input type="checkbox" class="bulk-check" data-val="<?php echo e($portfolio->id); ?>">
                          </td>
                          <td><img src="<?php echo e(asset('assets/front/img/portfolios/featured/'.$portfolio->featured_image)); ?>" width="80"></td>
                          <td><?php echo e(strlen(convertUtf8($portfolio->title)) > 200 ? convertUtf8(substr($portfolio->title, 0, 200)) . '...' : convertUtf8($portfolio->title)); ?></td>
                          <td>
                            <?php if(!empty($portfolio->service)): ?>
                            <?php echo e(convertUtf8($portfolio->service->title)); ?>

                            <?php endif; ?>
                          </td>
                          <td>
                            <form id="featureForm<?php echo e($portfolio->id); ?>" class="d-inline-block" action="<?php echo e(route('admin.portfolio.feature')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="portfolio_id" value="<?php echo e($portfolio->id); ?>">
                            <select class="form-control <?php echo e($portfolio->feature == 1 ? 'bg-success' : 'bg-danger'); ?>" name="feature" onchange="document.getElementById('featureForm<?php echo e($portfolio->id); ?>').submit();">
                                <option value="1" <?php echo e($portfolio->feature == 1 ? 'selected' : ''); ?>>Yes</option>
                                <option value="0" <?php echo e($portfolio->feature == 0 ? 'selected' : ''); ?>>No</option>
                            </select>
                            </form>
                          </td>
                          <td><?php echo e($portfolio->serial_number); ?></td>
                          <td>
                            <a class="btn btn-secondary btn-sm" href="<?php echo e(route('admin.portfolio.edit', $portfolio->id) . '?language=' . request()->input('language')); ?>">
                            <span class="btn-label">
                              <i class="fas fa-edit"></i>
                            </span>
                            Edit
                            </a>
                            <form class="deleteform d-inline-block" action="<?php echo e(route('admin.portfolio.delete')); ?>" method="post">
                              <?php echo csrf_field(); ?>
                              <input type="hidden" name="portfolio_id" value="<?php echo e($portfolio->id); ?>">
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
              <?php echo e($portfolios->appends(['language' => request()->input('language')])->links()); ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\logistics\core\resources\views/admin/portfolio/index.blade.php ENDPATH**/ ?>