<?php $__env->startSection('content'); ?>
<form  class="" action="<?php echo e(route('admin.truck.store')); ?>" method="POST">
  <?php echo csrf_field(); ?>
  <div class="row" style="justify-content: center;">
  <div class="mb-3 col-lg-6">
    <div class="form-group">
      <label for="">Truck Number **</label>
      <input type="string" class="form-control" name="truck_number" placeholder="Enter truck number" value="">
      <p id="errusername" class="mb-0 text-danger em"></p>
    </div>
  </div>
</div>

  <div class="row" style="justify-content: center;">
  <div class="mb-3 col-lg-6">
    <div class="form-group">
      <label for="">Company Name **</label>
      <input type="text" class="form-control" name="company_name" placeholder="Enter company name" value="">
      <p id="erremail" class="mb-0 text-danger em"></p>
    </div>
  </div>
</div>

  <div class="row" style="justify-content: center;">
  <div class="mb-3 col-lg-6">
    <div class="form-group">
      <label for="">Load Weight **</label>
      <input type="text" class="form-control" name="load_weight" placeholder="Enter load weight" value="">
      <p id="erremail" class="mb-0 text-danger em"></p>
    </div>
  </div>
</div>

  <div class="row" style="justify-content: center;">
    <button  type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\logistics\core\resources\views/admin/trucks/create.blade.php ENDPATH**/ ?>