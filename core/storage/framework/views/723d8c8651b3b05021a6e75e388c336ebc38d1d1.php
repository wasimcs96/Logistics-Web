<?php $__env->startSection('content'); ?>
<div class="page-header">
  <h4 class="page-title">Claim</h4>
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
      <a href="#">Claims</a>
    </li>
  </ul>
</div>
<div class="row">
  <div class="col-md-12">

    <div class="card">
      <div class="card-header">
        <div class="card-title d-inline-block">Claims</div>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-lg-12">
            <div class="table-responsive">
              <table class="table table-striped mt-3">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Home Phone</th>
                    <th scope="col">Mobile Phone</th>
                    <th scope="col">Other Phone</th>
                    <th scope="col">Address</th>
                    <th scope="col">City</th>
                    <th scope="col">Province</th>
                    <th scope="col">Postal Code</th>
                    <th scope="col">Move Date</th>
                    <th scope="col">Additional Information</th>
                    <th scope="col">Order Number</th>
                    <th scope="col">More</th>
                  </tr>
                </thead>
                <tbody>

                  <?php $__currentLoopData = $claims; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$claim): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($key+1); ?></td>
                    <td><?php echo e($claim->first_name ?? ''); ?></td>
                    <td><?php echo e($claim->last_name ?? ''); ?></td>
                    <td><?php echo e($claim->email ?? ''); ?></td>
                    <td><?php echo e($claim->home_phone ?? ''); ?></td>
                    <td><?php echo e($claim->mobile_phone ?? ''); ?></td>
                    <td><?php echo e($claim->other_phone ?? ''); ?></td>
                    <td><?php echo e($claim->address ?? ''); ?></td>
                    <td><?php echo e($claim->city ?? ''); ?></td>
                    <td><?php echo e($claim->province ?? ''); ?></td>
                    <td><?php echo e($claim->postal_code ?? ''); ?></td>
                    <td><?php echo e($claim->move_date ?? ''); ?></td>
                    <!-- <td><?php echo e($claim->additional_information ?? ''); ?></td> -->
                    <td class="col-lg-3">
                                    <div class="comment more">
                                        <?php $aRoom= $claim->additional_information ?>
                                        <?php if(strlen($aRoom) > 20): ?>
                                        <?php echo e(substr($aRoom,0,20)); ?>

                                        <span class="read-more-show hide_content"><span
                                                class="btn btn-warning btn-sm">More<i
                                                    class="fa fa-angle-down"></i></span></span>
                                        <span class="read-more-content">
                                            <?php $reamm = substr($aRoom,100,strlen($aRoom)) ?> <?php echo $reamm; ?>

                                            <span class="read-more-hide hide_content"><span
                                                    class="btn btn-warning btn-sm">Less <i
                                                        class="fa fa-angle-up"></i></span></span> </span>
                                        <?php else: ?>
                                        <?php echo $aRoom; ?>

                                        <?php endif; ?>
                                </td>
                    <td><?php echo e($claim->order_number ?? ''); ?></td>
                    <td>
                    <a class="btn btn-secondary btn-sm" href="<?php echo e(route('admin.claim.view',['id'=>$claim->id])); ?>"
                        style="background: #6861CE !important;
                            border-color: #6861CE !important;">
                        <span class="btn-label">
                        <i class="fas fa-angle-double-right"></i>
                        </span>
                        View More
                      </a>
                    </td>



                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-script'); ?>
<script type="text/javascript">
// Hide the extra content initially, using JS so that if JS is disabled, no problemo:
            $('.read-more-content').addClass('hide_content')
            $('.read-more-show, .read-more-hide').removeClass('hide_content')

            // Set up the toggle effect:
            $('.read-more-show').on('click', function(e) {
              $(this).next('.read-more-content').removeClass('hide_content');
              $(this).addClass('hide_content');
              e.preventDefault();
            });

            // Changes contributed by @diego-rzg
            $('.read-more-hide').on('click', function(e) {
              var p = $(this).parent('.read-more-content');
              p.addClass('hide_content');
              p.prev('.read-more-show').removeClass('hide_content'); // Hide only the preceding "Read More"
              e.preventDefault();
            });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\logistics\core\resources\views/admin/claim/show.blade.php ENDPATH**/ ?>