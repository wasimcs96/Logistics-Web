<?php $__env->startSection('content'); ?>
<form  class="" action="<?php echo e(route('admin.lead.update',['id'=>$lead->id])); ?>" method="POST">
  <?php echo csrf_field(); ?>
  <?php echo method_field('PUT'); ?>
  <div class="row" style="justify-content: center;">
        <div class="mb-3 col-lg-6">
            <div class="form-group">
                <label for="">First Name **</label>
                <input type="string" class="form-control" name="first_name" placeholder="First name" value="<?php echo e($lead->first_name); ?>" required>
                <p id="errusername" class="mb-0 text-danger em"></p>
            </div>
        </div>
    </div>

    <div class="row" style="justify-content: center;">
        <div class="mb-3 col-lg-6">
            <div class="form-group">
                <label for="">Last Name **</label>
                <input type="text" class="form-control" name="last_name" placeholder="Last name" value="<?php echo e($lead->last_name); ?>" required>
                <p id="erremail" class="mb-0 text-danger em"></p>
            </div>
        </div>
    </div>

    <div class="row" style="justify-content: center;">
        <div class="mb-3 col-lg-6">
            <div class="form-group">
                <label for="">Phone Number **</label>
                <input type="number" class="form-control" name="phone_number" placeholder="Phone number" value="<?php echo e($lead->phone_number); ?>" required>
                <p id="erremail" class="mb-0 text-danger em"></p>
            </div>
        </div>
    </div>

    <div class="row" style="justify-content: center;">
        <div class="mb-3 col-lg-6">
            <div class="form-group">
                <label for="">Client Email **</label>
                <input type="email" class="form-control" name="client_email" placeholder="lient email" value="<?php echo e($lead->client_email); ?>" required>
                <p id="erremail" class="mb-0 text-danger em"></p>
            </div>
        </div>
    </div>

    <div class="row" style="justify-content: center;">
        <div class="mb-3 col-lg-6">
            <div class="form-group">
                <label for="">Move Data **</label>
                <input type="text" class="form-control" name="move_data" placeholder="Move data" value="<?php echo e($lead->move_data); ?>" required>
                <p id="erremail" class="mb-0 text-danger em"></p>
            </div>
        </div>
    </div>

    <div class="row" style="justify-content: center;">
        <div class="mb-3 col-lg-6">
            <div class="form-group">
                <label for="">Moving From **</label>
                <input type="text" class="form-control" name="moving_from" placeholder="Moving from" value="<?php echo e($lead->moving_from); ?>" required>
                <p id="erremail" class="mb-0 text-danger em"></p>
            </div>
        </div>
    </div>
    <div class="row" style="justify-content: center;">
        <div class="mb-3 col-lg-6">
            <div class="form-group">
                <label for="">Moving To **</label>
                <input type="text" class="form-control" name="moving_to" placeholder="Moving to" value="<?php echo e($lead->moving_to); ?>" required>
                <p id="erremail" class="mb-0 text-danger em"></p>
            </div>
        </div>
    </div>

  <div class="row" style="justify-content: center;">
    <button  type="submit" class="btn btn-primary">Update</button>
  </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\logistics\core\resources\views/admin/leads/edit.blade.php ENDPATH**/ ?>