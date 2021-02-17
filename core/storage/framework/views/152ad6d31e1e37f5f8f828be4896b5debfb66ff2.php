<?php $__env->startSection('content'); ?>
<?php
    $staffs = App\Admin::select('id','username')->get();
?>
<div class="page-header">
   <h4 class="page-title">
      <?php if(request()->path()=='admin/all/tickets'): ?>
        All
      <?php elseif(request()->path()=='admin/pending/tickets'): ?>
        Pending
      <?php elseif(request()->path()=='admin/open/tickets'): ?>
        Open
      <?php elseif(request()->path()=='admin/closed/tickets'): ?>
        Closed
      <?php endif; ?>
      Tickets
    </h4>
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
         <a href="#">Tickets</a>
      </li>
      <li class="separator">
         <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">
         <a href="#">
          <?php if(request()->path()=='admin/all/tickets'): ?>
            All
          <?php elseif(request()->path()=='admin/pending/tickets'): ?>
            Pending
          <?php elseif(request()->path()=='admin/open/tickets'): ?>
            Open
          <?php elseif(request()->path()=='admin/closed/tickets'): ?>
            Closed
          <?php endif; ?>
         Tickets</a>
      </li>
   </ul>
</div>
<div class="row">
   <div class="col-md-12">
      <div class="card">
         <div class="card-header">
            <div class="row">
               <div class="col-lg-4">
                  <div class="card-title d-inline-block">
                     <?php if(request()->path()=='admin/all/tickets'): ?>
                     All
                   <?php elseif(request()->path()=='admin/pending/tickets'): ?>
                     Pending
                   <?php elseif(request()->path()=='admin/open/tickets'): ?>
                     Open
                   <?php elseif(request()->path()=='admin/closed/tickets'): ?>
                     Closed
                   <?php endif; ?>
                     Tickets
                  </div>
               </div>
               <div class="col-lg-3 offset-lg-5 mt-2 mt-lg-0">
                  <form action="<?php echo e(url()->current()); ?>" method="GET">
                      <input class="form-control" type="text" name="search" value="<?php echo e(request()->input('search') ? request()->input('search') : ''); ?>" placeholder="Enter ticket number / subject to seach">
                  </form>
               </div>
            </div>
         </div>
         <div class="card-body">
            <div class="row">
               <div class="col-lg-12">
                  <?php if($tickets->count() == 0): ?>
                  <h3 class="text-center">NO TICKET FOUND</h3>
                  <?php else: ?>
                  <div class="table-responsive">
                     <table class="table table-striped mt-3">
                        <thead>
                           <tr>
                              <th scope="col">Ticket Number</th>
                              <th scope="col">Username</th>
                              <th scope="col">Email</th>
                              <th scope="col">Subject</th>
                              <th scope="col">Status</th>
                              <th scope="col">Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php $__currentLoopData = $tickets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ticket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <tr>
                              <td>
                                 #<?php echo e($ticket->ticket_number); ?>

                              </td>
                              <td><?php echo e($ticket->user->username); ?></td>
                              <td><?php echo e($ticket->user->email); ?></td>
                              <td><?php echo e($ticket->subject); ?></td>
                              <td>
                                 <?php if($ticket->status == 'pending'): ?>
                                <span class="badge badge-warning">Pending</span>
                                <?php elseif($ticket->status == 'open'): ?>
                                <span class="badge badge-primary">Open</span>
                                <?php else: ?>
                                <span class="badge badge-danger">Closed</span>
                                <?php endif; ?>
                              </td>
                              <td>

                                <div class="btn-group">
                                 <button type="button" class="btn btn-info dropdown-toggle btn btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                     Actions
                                 </button>
                                 <div class="dropdown-menu">
                                    <?php if(Auth::guard('admin')->user()->id == 1): ?>
                                    <?php if($ticket->admin_id == 1 ): ?>
                                    <a class="dropdown-item click-modal-staff" href="<?php echo e($ticket->id); ?>" data-toggle="modal" data-target="#assignModal">Assign To</a>
                                    <?php else: ?>
                                    <?php if(Auth::guard('admin')->user()->id == 1): ?>
                                    <a class="dropdown-item click-modal-staff" href="javascript:;" ><span class="badge badge-success">Assigned To <?php echo e($ticket->admin->username); ?></span></a>
                                    <?php endif; ?>
                                    <?php endif; ?>
                                    <a class="dropdown-item" href="<?php echo e(route('admin.ticket.messages',$ticket->id)); ?>">Messages</a>
                                    <?php else: ?>
                                       <a class="dropdown-item" href="<?php echo e(route('admin.ticket.messages',$ticket->id)); ?>">Messages</a>
                                    <?php endif; ?>
                                 </div>
                             </div>
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
                <?php echo e($tickets->appends(['search' => request()->input('search')])->links()); ?>

              </div>
            </div>
          </div>
      </div>
   </div>
</div>

<!-- Create Ticket Modal -->
<div class="modal fade" id="assignModal" tabindex="-1" role="dialog"                      aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Assign Staff</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <form id="ajaxForm" class="modal-form" action="<?php echo e(route('ticket.assign.staff')); ?>"  method="POST">
               <?php echo csrf_field(); ?>
               <input type="hidden" name="ticket_id" class="ticket_id_get" value="">
               <div class="form-group">
                  <label for="">Staff **</label>
                  <select id="staff" name="staff" class="form-control">
                     <option value="1" selected disabled>Select Staff</option>
                     <?php $__currentLoopData = $staffs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $staff): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <option value="<?php echo e($staff->id); ?>"><?php echo e($staff->username); ?></option>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                  <p id="errstaff" class="mb-0 text-danger em"></p>
               </div>
            </form>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button id="submitBtn" type="button" class="btn btn-primary">Assign</button>
         </div>
      </div>
   </div>
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>

<script>
$(document).on('click','.click-modal-staff',function(){
   let ticketIdGet = $(this).attr('href');
   $('.ticket_id_get').val(ticketIdGet);
   console.log(ticketIdGet);
})
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\logistics\core\resources\views/admin/tickets/index.blade.php ENDPATH**/ ?>