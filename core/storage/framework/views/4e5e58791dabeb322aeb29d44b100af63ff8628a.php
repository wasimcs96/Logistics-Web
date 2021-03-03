<!--   Core JS Files   -->
<script src="<?php echo e(asset('assets/admin/js/core/jquery.3.2.1.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/admin/js/core/vue.js')); ?>"></script>
<script src="<?php echo e(asset('assets/admin/js/core/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/admin/js/core/bootstrap.min.js')); ?>"></script>

<!-- jQuery UI -->
<script src="<?php echo e(asset('assets/admin/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/admin/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')); ?>"></script>

<!-- jQuery Scrollbar -->
<script src="<?php echo e(asset('assets/admin/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')); ?>"></script>

<!-- Bootstrap Notify -->
<script src="<?php echo e(asset('assets/admin/js/plugin/bootstrap-notify/bootstrap-notify.min.js')); ?>"></script>

<!-- Sweet Alert -->
<script src="<?php echo e(asset('assets/admin/js/plugin/sweetalert/sweetalert.min.js')); ?>"></script>

<!-- Bootstrap Tag Input -->
<script src="<?php echo e(asset('assets/admin/js/plugin/bootstrap-tagsinput/bootstrap-tagsinput.min.js')); ?>"></script>

<!-- Bootstrap Datepicker -->
<script src="<?php echo e(asset('assets/admin/js/plugin/bootstrap-datepicker/bootstrap-datepicker.min.js')); ?>"></script>

<!-- Dropzone JS -->
<script src="<?php echo e(asset('assets/admin/js/plugin/dropzone/jquery.dropzone.min.js')); ?>"></script>

<!-- DM Uploader JS -->
<script src="<?php echo e(asset('assets/admin/js/plugin/jquery.dm-uploader/jquery.dm-uploader.min.js')); ?>"></script>

<!-- Summernote JS -->
<script src="<?php echo e(asset('assets/admin/js/plugin/summernote/summernote-bs4.js')); ?>"></script>

<!-- JS color JS -->
<script src="<?php echo e(asset('assets/admin/js/plugin/jscolor/jscolor.js')); ?>"></script>

<!-- Atlantis JS -->
<script src="<?php echo e(asset('assets/admin/js/atlantis.min.js')); ?>"></script>

<!-- Fontawesome Icon Picker JS -->
<script src="<?php echo e(asset('assets/admin/js/plugin/fontawesome-iconpicker/fontawesome-iconpicker.min.js')); ?>"></script>

<script>
  $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });
</script>

<script>
    var imgupload = "<?php echo e(route('admin.summernote.upload')); ?>";
</script>

<!-- Custom JS -->
<script src="<?php echo e(asset('assets/admin/js/custom.js')); ?>"></script>

<?php echo $__env->yieldContent('scripts'); ?>

<?php echo $__env->yieldContent('vuescripts'); ?>

<?php if(session()->has('success')): ?>
<script>
  var content = {};

  content.message = '<?php echo e(session('success')); ?>';
  content.title = 'Success';
  content.icon = 'fa fa-bell';

  $.notify(content,{
    type: 'success',
    placement: {
      from: 'top',
      align: 'right'
    },
    showProgressbar: true,
    time: 1000,
    delay: 4000,
  });
</script>
<?php endif; ?>


<?php if(session()->has('warning')): ?>
<script>
  var content = {};

  content.message = '<?php echo e(session('warning')); ?>';
  content.title = 'Warning!';
  content.icon = 'fa fa-bell';

  $.notify(content,{
    type: 'warning',
    placement: {
      from: 'top',
      align: 'right'
    },
    showProgressbar: true,
    time: 1000,
    delay: 4000,
  });
</script>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\logistics\core\resources\views/admin/partials/scripts.blade.php ENDPATH**/ ?>