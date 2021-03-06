<?php
$selLang = \App\Language::where('code', request()->input('language'))->first();
?>

<?php $__env->startSection('styles'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/admin/css/daterangepicker.css')); ?>" />
<?php if(!empty($selLang) && $selLang->rtl == 1): ?>
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
<?php endif; ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
  <div class="page-header">
    <h4 class="page-title">Calendar Events</h4>
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
        <a href="#">Calendar Events</a>
      </li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">

      <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card-title d-inline-block">Calendar Events</div>
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
                    <a href="#" class="btn btn-primary float-right btn-sm" data-toggle="modal" data-target="#createModal"><i class="fas fa-plus"></i> Add Event</a>
                    <button class="btn btn-danger float-right btn-sm mr-2 d-none bulk-delete" data-href="<?php echo e(route('admin.calendar.bulk.delete')); ?>"><i class="flaticon-interface-5"></i> Delete</button>
                </div>
            </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-12">
              <?php if(count($events) == 0): ?>
                <h3 class="text-center">NO EVENT FOUND</h3>
              <?php else: ?>
                <div class="table-responsive">
                  <table class="table table-striped mt-3">
                    <thead>
                      <tr>
                        <th scope="col">
                            <input type="checkbox" class="bulk-check" data-val="all">
                        </th>
                        <th scope="col">Question</th>
                        <th scope="col">Start Date</th>
                        <th scope="col">End Date</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td>
                            <input type="checkbox" class="bulk-check" data-val="<?php echo e($event->id); ?>">
                          </td>
                          <td><?php echo e(convertUtf8(strlen($event->title)) > 30 ? convertUtf8(substr($event->title, 0, 30)) . '...' : convertUtf8($event->title)); ?></td>
                          <td>
                            <?php
                            $start = strtotime($event->start_date);
                            $start = date('Y-m-d H:i' ,$start);
                            ?>
                            <?php echo e($start); ?>

                          </td>
                          <td>
                            <?php
                            $end = strtotime($event->end_date);
                            $end = date('Y-m-d H:i' ,$end);
                            ?>
                            <?php echo e($end); ?>

                          </td>
                          <td>
                            <a class="btn btn-secondary btn-sm editbtn" href="#editModal" data-toggle="modal" data-event_id="<?php echo e($event->id); ?>" data-title="<?php echo e($event->title); ?>" data-start_date="<?php echo e($event->start_date); ?>" data-end_date="<?php echo e($event->end_date); ?>">
                              <span class="btn-label">
                                <i class="fas fa-edit"></i>
                              </span>
                              Edit
                            </a>
                            <form class="deleteform d-inline-block" action="<?php echo e(route('admin.calendar.delete')); ?>" method="post">
                              <?php echo csrf_field(); ?>
                              <input type="hidden" name="event_id" value="<?php echo e($event->id); ?>">
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


  <!-- Create Event Modal -->
  <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Add Event</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="ajaxForm" class="modal-form create" action="<?php echo e(route('admin.calendar.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="">Language **</label>
                <select name="language_id" class="form-control">
                    <option value="" selected disabled>Select a language</option>
                    <?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($lang->id); ?>"><?php echo e($lang->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <p id="errlanguage_id" class="mb-0 text-danger em"></p>
            </div>
            <div class="form-group">
              <label for="">Title **</label>
              <input name="title" class="form-control" placeholder="Enter Title" type="text" value="">
              <p id="errtitle" class="mb-0 text-danger em"></p>
            </div>
            <div class="form-group">
              <label for="">Event Period **</label>
              <input type="text" name="datetimes" class="form-control ltr" placeholder="Enter Event Period" autocomplete="off"/>
              <input type="hidden" id="start_date" name="start_date" value="">
              <input type="hidden" id="end_date" name="end_date" value="">
              <p id="errstart_date" class="mb-0 text-danger em"></p>
              <p id="errend_date" class="mb-0 text-danger em"></p>
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

  <!-- Edit Event Modal -->
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Edit Event</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="ajaxEditForm" class="" action="<?php echo e(route('admin.calendar.update')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <input id="inevent_id" type="hidden" name="event_id" value="">
            <div class="form-group">
              <label for="">Title **</label>
              <input id="intitle" name="title" class="form-control" placeholder="Enter Title" type="text" value="">
              <p id="eerrtitle" class="mb-0 text-danger em"></p>
            </div>
            <div class="form-group">
            <label for="">Event Period **</label>
                <input type="text" name="edatetimes" class="form-control ltr" placeholder="Enter Event Period"/>
                <input type="hidden" id="instart_date" name="start_date" value="">
                <input type="hidden" id="inend_date" name="end_date" value="">
                <p id="eerrstart_date" class="mb-0 text-danger em"></p>
                <p id="eerrend_date" class="mb-0 text-danger em"></p>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button id="updateBtn" type="button" class="btn btn-primary">Save Changes</button>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script type="text/javascript" src="<?php echo e(asset('assets/admin/js/plugin/daterangepicker/moment.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/admin/js/plugin/daterangepicker/daterangepicker.js')); ?>"></script>

<script type="text/javascript">
    $(function() {

      $('input[name="datetimes"]').daterangepicker({
          autoUpdateInput: false,
          timePicker: true,
          locale: {
              cancelLabel: 'Clear'
          }
      });

      $('input[name="datetimes"]').on('apply.daterangepicker', function(ev, picker) {
          $(this).val(picker.startDate.format('MM/DD/YYYY hh:mm A') + ' - ' + picker.endDate.format('MM/DD/YYYY hh:mm A'));
          $("#start_date").val(picker.startDate.format('MM/DD/YYYY hh:mm A'));
          $("#end_date").val(picker.endDate.format('MM/DD/YYYY hh:mm A'));
      });

      $('input[name="datetimes"]').on('cancel.daterangepicker', function(ev, picker) {
          $(this).val('');
          $("#start_date").val('');
          $("#end_date").val('');
      });

    });

</script>

<script>
  $(document).ready(function() {
    $(".editbtn").on('click', function() {
      let startDate = $(this).data('start_date');
      let endDate = $(this).data('end_date');

      $('input[name="edatetimes"]').daterangepicker({
        timePicker: true,
        startDate: startDate,
        endDate: endDate,
        locale: {
          format: 'MM/DD/YYYY hh:mm A'
        }
      });

      $('input[name="edatetimes"]').on('apply.daterangepicker', function(ev, picker) {
          $(this).val(picker.startDate.format('MM/DD/YYYY hh:mm A') + ' - ' + picker.endDate.format('MM/DD/YYYY hh:mm A'));
          $("#instart_date").val(picker.startDate.format('MM/DD/YYYY hh:mm A'));
          $("#inend_date").val(picker.endDate.format('MM/DD/YYYY hh:mm A'));
      });

      $('input[name="edatetimes"]').on('cancel.daterangepicker', function(ev, picker) {
          $(this).val('');
          $("#instart_date").val('');
          $("#inend_date").val('');
      });

    });
  });
</script>


<script>
    $(document).ready(function() {

        // make input fields RTL
        $("select[name='language_id']").on('change', function() {
            $(".request-loader").addClass("show");
            let url = "<?php echo e(url('/')); ?>/admin/rtlcheck/" + $(this).val();
            console.log(url);
            $.get(url, function(data) {
                $(".request-loader").removeClass("show");
                if (data == 1) {
                    $("form.create input").each(function() {
                        if (!$(this).hasClass('ltr')) {
                            $(this).addClass('rtl');
                        }
                    });
                    $("form.create select").each(function() {
                        if (!$(this).hasClass('ltr')) {
                            $(this).addClass('rtl');
                        }
                    });
                    $("form.create textarea").each(function() {
                        if (!$(this).hasClass('ltr')) {
                            $(this).addClass('rtl');
                        }
                    });
                    $("form.create .nicEdit-main").each(function() {
                        $(this).addClass('rtl text-right');
                    });

                } else {
                    $("form.create input, form.create select, form.create textarea").removeClass('rtl');
                    $("form.create .nicEdit-main").removeClass('rtl text-right');
                }
            })
        });

    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\logistics\core\resources\views/admin/calendar/index.blade.php ENDPATH**/ ?>