<?php $__env->startSection('content'); ?>
  <div class="page-header">
    <h4 class="page-title">Quotes</h4>
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
        <a href="#">Quote Management</a>
      </li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">
        <a href="#">Quotes</a>
      </li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">

      <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card-title d-inline-block">Quotes</div>
                </div>
                <div class="col-lg-6">
                    <button class="btn btn-danger float-right btn-sm mr-2 d-none bulk-delete" data-href="<?php echo e(route('admin.quote.bulk.delete')); ?>"><i class="flaticon-interface-5"></i> Delete</button>
                </div>
            </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-12">
              <?php if(count($quotes) == 0): ?>
                <h3 class="text-center">NO QUOTE REQUEST FOUND</h3>
              <?php else: ?>
                <div class="table-responsive">
                  <table class="table table-striped mt-3">
                    <thead>
                      <tr>
                        <th scope="col">
                            <input type="checkbox" class="bulk-check" data-val="all">
                        </th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Deatails</th>
                        <th scope="col">Status</th>
                        <th scope="col">Mail</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $__currentLoopData = $quotes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $quote): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td>
                            <input type="checkbox" class="bulk-check" data-val="<?php echo e($quote->id); ?>">
                          </td>
                          <td><?php echo e(convertUtf8($quote->name)); ?></td>
                          <td><?php echo e(convertUtf8($quote->email)); ?></td>
                          <td>
                            <button class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#detailsModal<?php echo e($quote->id); ?>"><i class="fas fa-eye"></i> View</button>
                          </td>
                          <td>
                            <form id="statusForm<?php echo e($quote->id); ?>" class="d-inline-block" action="<?php echo e(route('admin.quotes.status')); ?>" method="post">
                              <?php echo csrf_field(); ?>
                              <input type="hidden" name="quote_id" value="<?php echo e($quote->id); ?>">
                              <select class="form-control
                              <?php if($quote->status == 0): ?>
                                bg-warning
                              <?php elseif($quote->status == 1): ?>
                                bg-primary
                              <?php elseif($quote->status == 2): ?>
                                bg-success
                              <?php elseif($quote->status == 3): ?>
                                bg-danger
                              <?php endif; ?>
                              " name="status" onchange="document.getElementById('statusForm<?php echo e($quote->id); ?>').submit();">
                                <option value="0" <?php echo e($quote->status == 0 ? 'selected' : ''); ?>>Pending</option>
                                <option value="1" <?php echo e($quote->status == 1 ? 'selected' : ''); ?>>Processing</option>
                                <option value="2" <?php echo e($quote->status == 2 ? 'selected' : ''); ?>>Completed</option>
                                <option value="3" <?php echo e($quote->status == 3 ? 'selected' : ''); ?>>Rejected</option>
                              </select>
                            </form>
                          </td>
                          <td>
                            <a href="#" class="btn btn-primary btn-sm editbtn" data-target="#mailModal" data-toggle="modal" data-email="<?php echo e($quote->email); ?>"><i class="far fa-envelope"></i> Send</a>
                          </td>
                          <td>
                            <form class="deleteform d-inline-block" action="<?php echo e(route('admin.quote.delete')); ?>" method="post">
                              <?php echo csrf_field(); ?>
                              <input type="hidden" name="quote_id" value="<?php echo e($quote->id); ?>">
                              <button type="submit" class="btn btn-danger btn-sm deletebtn">
                                <span class="btn-label">
                                  <i class="fas fa-trash"></i>
                                </span>
                                Delete
                              </button>
                            </form>
                          </td>
                        </tr>

                        <?php if ($__env->exists('admin.quote.quote-details')) echo $__env->make('admin.quote.quote-details', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
              <?php echo e($quotes->links()); ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Send Mail Modal -->
  <div class="modal fade" id="mailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Send Mail</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="ajaxEditForm" class="" action="<?php echo e(route('admin.quotes.mail')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group">
              <label for="">Client Mail **</label>
              <input id="inemail" type="text" class="form-control" name="email" value="" placeholder="Enter email">
              <p id="eerremail" class="mb-0 text-danger em"></p>
            </div>
            <div class="form-group">
              <label for="">Subject **</label>
              <input id="insubject" type="text" class="form-control" name="subject" value="" placeholder="Enter subject">
              <p id="eerrsubject" class="mb-0 text-danger em"></p>
            </div>
            <div class="form-group">
              <label for="">Message **</label>
              <textarea id="inmessage" class="form-control summernote" name="message" data-height="150" placeholder="Enter message"></textarea>
              <p id="eerrmessage" class="mb-0 text-danger em"></p>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button id="updateBtn" type="button" class="btn btn-primary">Send Mail</button>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\logistics\core\resources\views/admin/quote/quote.blade.php ENDPATH**/ ?>