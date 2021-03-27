<?php $__env->startSection('content'); ?>
<div class="page-header">
  <h4 class="page-title">Claim</h4>
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
      <a href="#">File Item</a>
    </li>
  </ul>
</div>
<div class="row">
  <div class="col-md-12">

    <div class="card">
      <div class="card-header">
        <div class="card-title d-inline-block">File Item</div>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-lg-12">
            <div class="table-responsive">
              <table class="table table-striped mt-3">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Claim Id</th>
                    <th scope="col">Description</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Damage Description</th>
                  </tr>
                </thead>
                <tbody>

                  <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($key+1); ?></td>
                    <td><?php echo e($item->claims_id ?? ''); ?></td>
                    <td><?php echo e($item->description ?? ''); ?></td>
                    <!-- <td><?php echo e($item->photo ?? ''); ?></td> -->
                    <!-- <td><?php if(isset($item->photo)): ?><a href="<?php echo e(asset($item->photo)); ?>" target="_blank" ><img src="<?php echo e(asset($item->photo)); ?>" style="width: 100px;" target="_blank" ><?php else: ?> N/A <?php endif; ?></a></td> -->
                    <td><?php if(isset($item->photo)): ?><a href="<?php echo e($item->photo); ?>" ><img src="<?php echo e(asset($item->photo)); ?>" style="width: 100px;" target="_blank" ></a><?php else: ?> <img src="<?php echo e(asset('admin/img/no-image.png')); ?>" style="width: 100px;"> <?php endif; ?></td>
                    <td><?php echo e($item->damage_desc ?? ''); ?></td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\logistics\core\resources\views/admin/claim/view.blade.php ENDPATH**/ ?>