<?php $__env->startSection('content'); ?>
<form class="" action="<?php echo e(route('admin.lead.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div class="row" style="justify-content: center;">
        <div class="mb-3 col-lg-6">
            <div class="form-group">
                <label for="">First Name **</label>
                <input type="string" class="form-control" name="first_name" placeholder="First name" value="" required>
                <p id="errusername" class="mb-0 text-danger em"></p>
            </div>
        </div>
    </div>

    <div class="row" style="justify-content: center;">
        <div class="mb-3 col-lg-6">
            <div class="form-group">
                <label for="">Last Name **</label>
                <input type="text" class="form-control" name="last_name" placeholder="Last name" value="" required>
                <p id="erremail" class="mb-0 text-danger em"></p>
            </div>
        </div>
    </div>

    <div class="row" style="justify-content: center;">
        <div class="mb-3 col-lg-6">
            <div class="form-group">
                <label for="">Phone Number **</label>
                <input type="number" class="form-control" name="phone_number" placeholder="Phone number" value="" required>
                <p id="erremail" class="mb-0 text-danger em"></p>
            </div>
        </div>
    </div>

    <div class="row" style="justify-content: center;">
        <div class="mb-3 col-lg-6">
            <div class="form-group">
                <label for="">Client Email **</label>
                <input type="email" class="form-control" name="client_email" placeholder="lient email" value="" required>
                <p id="erremail" class="mb-0 text-danger em"></p>
            </div>
        </div>
    </div>

    <div class="row" style="justify-content: center;">
        <div class="mb-3 col-lg-6">
            <div class="form-group">
                <label for="">Move Data **</label>
                <input type="text" class="form-control" name="move_data" placeholder="Move data" value="" required>
                <p id="erremail" class="mb-0 text-danger em"></p>
            </div>
        </div>
    </div>

    <div class="row" style="justify-content: center;">
        <div class="mb-3 col-lg-6">
            <div class="form-group">
                <label for="">Moving From **</label>
                <input type="text" class="form-control" name="moving_from" placeholder="Moving from" value="" required>
                <p id="erremail" class="mb-0 text-danger em"></p>
            </div>
        </div>
    </div>
    <div class="row" style="justify-content: center;">
        <div class="mb-3 col-lg-6">
            <div class="form-group">
                <label for="">Moving To **</label>
                <input type="text" class="form-control" name="moving_to" placeholder="Moving to" value="" required>
                <p id="erremail" class="mb-0 text-danger em"></p>
            </div>
        </div>
    </div>

    <div class="row" style="justify-content: center;">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\logistics\core\resources\views/admin/leads/create.blade.php ENDPATH**/ ?>