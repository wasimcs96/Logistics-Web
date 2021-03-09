<?php $__env->startSection('pagename'); ?>
 - <?php echo e(__('Event Calendar')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta-keywords', "$be->calendar_meta_keywords"); ?>
<?php $__env->startSection('meta-description', "$be->calendar_meta_description"); ?>

<?php $__env->startSection('styles'); ?>
<link href='<?php echo e(asset('assets/front/css/calendar.css')); ?>' rel='stylesheet' />
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
  <!--   breadcrumb area start   -->
  <div class="breadcrumb-area about" style="background-image: url('<?php echo e(asset('assets/front/img/' . $bs->breadcrumb)); ?>');background-size:cover;">
     <div class="container">
        <div class="service breadcrumb-txt">
           <div class="row">
              <div class="col-xl-7 col-lg-8 col-sm-10">
                 <span><?php echo e(convertUtf8($be->event_calendar_title)); ?></span>
                 <h1><?php echo e(convertUtf8($be->event_calendar_subtitle)); ?></h1>
                 <ul class="breadcumb">
                    <li><a href="<?php echo e(route('front.index')); ?>"><?php echo e(__('Home')); ?></a></li>
                    <li><?php echo e(convertUtf8($be->event_calendar_title)); ?></li>
                 </ul>
              </div>
           </div>
        </div>
     </div>
     <div class="breadcrumb-area-overlay" style="background-color: #<?php echo e($be->breadcrumb_overlay_color); ?>;opacity: <?php echo e($be->breadcrumb_overlay_opacity); ?>;"></div>
  </div>
  <!--   breadcrumb area end    -->


  <!--   about company section start   -->
  <div class="about-company-section pt-105 pb-115">
     <div class="container">
        <div class="row">
           <div class="col-lg-12">
              <div id='calendar'></div>
           </div>
        </div>
     </div>
  </div>
  <!--   about company section end   -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>

    var events = <?php echo json_encode($formattedEvents); ?>;
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();

    today = yyyy + '-' + mm + '-' + dd;

    document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar');

      var calendar = new FullCalendar.Calendar(calendarEl, {
        plugins: [ 'dayGrid', 'timeGrid', 'list', 'interaction' ],
        header: {
          left: 'prev,next today',
          center: 'title',
          right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek',
        },
        buttonText: {
            today: "<?php echo e(__('today')); ?>",
            month: "<?php echo e(__('month')); ?>",
            week: "<?php echo e(__('week')); ?>",
            day: "<?php echo e(__('day')); ?>",
            list: "<?php echo e(__('list')); ?>"
        },
        defaultDate: today,
        navLinks: true, // can click day/week names to navigate views
        editable: true,
        eventLimit: true, // allow "more" link when too many events
        events: events,
        locale: '<?php echo e($currentLang->code); ?>',
        dir: "<?php echo e($rtl == 1 ? 'rtl' : 'ltr'); ?>"
      });

      calendar.render();
    });

  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("front.$version.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\logistics\core\resources\views/front/calendar.blade.php ENDPATH**/ ?>