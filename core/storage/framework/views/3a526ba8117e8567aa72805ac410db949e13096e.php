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
                    <strong style="text-transform: capitalize;">Primary Conatct:</strong>
                </div>
                <div class="col-lg-8"><?php echo e(convertUtf8($quote->primary_number)); ?></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-4">
                    <strong style="text-transform: capitalize;">Client Notes:</strong>
                </div>
                <div class="col-lg-8"><?php echo e(convertUtf8($quote->client_notes)); ?></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-4">
                    <strong style="text-transform: capitalize;">Media:</strong>
                </div>
                <div class="col-lg-8"><?php echo e(convertUtf8($quote->media)); ?></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-4">
                    <strong style="text-transform: capitalize;">Job Type:</strong>
                </div>
                <div class="col-lg-8"><?php echo e(convertUtf8($quote->job_type)); ?></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-4">
                    <strong style="text-transform: capitalize;">Price Type:</strong>
                </div>
                <div class="col-lg-8"><?php echo e(convertUtf8($quote->price_type)); ?></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-4">
                    <strong style="text-transform: capitalize;">Payment Method:</strong>
                </div>
                <div class="col-lg-8"><?php echo e(convertUtf8($quote->payment_method)); ?></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-4">
                    <strong style="text-transform: capitalize;">Move Date:</strong>
                </div>
                <div class="col-lg-8"><?php echo e(convertUtf8($quote->mdate)); ?></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-4">
                    <strong style="text-transform: capitalize;">Follow Up Date:</strong>
                </div>
                <div class="col-lg-8"><?php echo e(convertUtf8($quote->fdate)); ?></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-4">
                    <strong style="text-transform: capitalize;">Building Type:</strong>
                </div>
                <div class="col-lg-8"><?php echo e(convertUtf8($quote->c_building_type)); ?></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-4">
                    <strong style="text-transform: capitalize;">Country:</strong>
                </div>
                <div class="col-lg-8"><?php echo e(convertUtf8($quote->c_country)); ?></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-4">
                    <strong style="text-transform: capitalize;">State:</strong>
                </div>
                <div class="col-lg-8"><?php echo e(convertUtf8($quote->c_state)); ?></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-4">
                    <strong style="text-transform: capitalize;">City:</strong>
                </div>
                <div class="col-lg-8"><?php echo e(convertUtf8($quote->c_city)); ?></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-4">
                    <strong style="text-transform: capitalize;">Franchisee Notes:</strong>
                </div>
                <div class="col-lg-8"><?php echo e(convertUtf8($quote->franchisee_notes)); ?></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-4">
                    <strong style="text-transform: capitalize;">Truck Fee:</strong>
                </div>
                <div class="col-lg-8"><?php echo e(convertUtf8($quote->truck_fee)); ?></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-4">
                    <strong style="text-transform: capitalize;">Hourly Rate:</strong>
                </div>
                <div class="col-lg-8"><?php echo e(convertUtf8($quote->hourly_rate)); ?></div>
            </div>
            <hr>

          <?php
            $fields = json_decode($quote->fields, true);
          ?>

          <?php $__currentLoopData = $fields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="row">
            <div class="col-lg-4">
              <strong style="text-transform: capitalize;"><?php echo e(str_replace("_"," ",$key)); ?>:</strong>
            </div>
            <div class="col-lg-8">
                <?php if(is_array($field)): ?>
                    <?php
                        $str = implode(", ", $field);
                    ?>
                    <?php echo e(convertUtf8($str)); ?>

                <?php else: ?>
                    <?php echo e(convertUtf8($field)); ?>

                <?php endif; ?>
            </div>
          </div>
          <hr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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