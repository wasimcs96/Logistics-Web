<!-- Details Modal -->
<div class="modal fade" id="detailsModal<?php echo e($quote->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <strong style="text-transform: capitalize;">Name:</strong>
                </div>
                <div class="col-lg-8"><?php echo e(convertUtf8($quote->name)); ?></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-4">
                    <strong style="text-transform: capitalize;">Email:</strong>
                </div>
                <div class="col-lg-8"><?php echo e(convertUtf8($quote->email)); ?></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-4">
                    <strong style="text-transform: capitalize;">Phone Number:</strong>
                </div>
                <div class="col-lg-8"><?php echo e(convertUtf8($quote->phone_number)); ?></div>
            </div>
            <hr>
            <div class="row">
              <div class="col-lg-4">
                  <strong style="text-transform: capitalize;">Moving From:</strong>
              </div>
              <div class="col-lg-8"><?php echo e(convertUtf8($quote->move_from)); ?></div>
          </div>
          <hr>
          <div class="row">
            <div class="col-lg-4">
                <strong style="text-transform: capitalize;">Moving To:</strong>
            </div>
            <div class="col-lg-8"><?php echo e(convertUtf8($quote->move_to)); ?></div>
        </div>
        <hr>
        <div class="row">
          <div class="col-lg-4">
              <strong style="text-transform: capitalize;">Moving Date:</strong>
          </div>
          <div class="col-lg-8"><?php echo e(convertUtf8($quote->move_date)); ?></div>
      </div>
      <hr>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            

          <?php
            $fields = json_decode($quote->fields, true);
          ?>

          

          <div class="row">
            <div class="col-lg-4">
              <strong>Status:</strong>
            </div>
            <div class="col-lg-8">
              <?php if($quote->status == 0): ?>
                <span class="badge badge-warning">Pending</span>
              <?php elseif($quote->status == 1): ?>
                <span class="badge badge-secondary">Processing</span>
              <?php elseif($quote->status == 2): ?>
                <span class="badge badge-success">Completed</span>
              <?php elseif($quote->status == 3): ?>
                <span class="badge badge-danger">Rejected</span>
              <?php endif; ?>
            </div>
          </div>
          <hr>

          <?php if(!empty($quote->nda)): ?>
          <div class="row">
            <div class="col-lg-4">
              <strong>NDA File:</strong>
            </div>
            <div class="col-lg-8">
              <a class="btn btn-secondary btn-sm" href="<?php echo e(asset('assets/front/ndas/'.$quote->nda)); ?>" target="_blank">
                <span class="btn-label">
                  <i class="fa fa-eye"></i>
                </span>
                View
              </a>
            </div>
          </div>
          <hr>
          <?php endif; ?>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php /**PATH D:\xampp\htdocs\logistics\core\resources\views/admin/quote/quote-details.blade.php ENDPATH**/ ?>