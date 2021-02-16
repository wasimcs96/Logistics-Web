<?php $__env->startSection('content'); ?>
  <div class="mt-2 mb-4">
    <h2 class="text-white pb-2">Welcome back, <?php echo e(Auth::guard('admin')->user()->first_name); ?> <?php echo e(Auth::guard('admin')->user()->last_name); ?>!</h2>
  </div>
  <div class="row">
		<div class="col-sm-6 col-md-4">
			<div class="card card-stats card-primary card-round">
				<div class="card-body">
					<div class="row">
						<div class="col-5">
							<div class="icon-big text-center">
								<i class="flaticon-users"></i>
							</div>
						</div>
						<div class="col-7 col-stats">
							<div class="numbers">
								<p class="card-category">Team Members</p>
								<h4 class="card-title"><?php echo e($currentLang->members()->count()); ?></h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="card card-stats card-info card-round">
				<div class="card-body">
					<div class="row">
						<div class="col-5">
							<div class="icon-big text-center">
								<i class="flaticon-interface-6"></i>
							</div>
						</div>
						<div class="col-7 col-stats">
							<div class="numbers">
								<p class="card-category">Subscribers</p>
								<h4 class="card-title"><?php echo e(\App\Subscriber::count()); ?></h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="card card-stats card-secondary card-round">
				<div class="card-body ">
					<div class="row">
						<div class="col-5">
							<div class="icon-big text-center">
								<i class="flaticon-success"></i>
							</div>
						</div>
						<div class="col-7 col-stats">
							<div class="numbers">
								<p class="card-category">Quotations</p>
								<h4 class="card-title"><?php echo e(\App\Quote::count()); ?></h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="card card-stats card-success card-round">
				<div class="card-body ">
					<div class="row">
						<div class="col-5">
							<div class="icon-big text-center">
								<i class="flaticon-analytics"></i>
							</div>
						</div>
						<div class="col-7 col-stats">
							<div class="numbers">
								<p class="card-category">Projects</p>
								<h4 class="card-title"><?php echo e($currentLang->portfolios()->count()); ?></h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="card card-stats card-warning card-round">
				<div class="card-body ">
					<div class="row">
						<div class="col-5">
							<div class="icon-big text-center">
								<i class="fab fa-blogger-b"></i>
							</div>
						</div>
						<div class="col-7 col-stats">
							<div class="numbers">
								<p class="card-category">Blogs</p>
								<h4 class="card-title"><?php echo e($currentLang->blogs()->count()); ?></h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="card card-stats card-danger card-round">
				<div class="card-body ">
					<div class="row">
						<div class="col-5">
							<div class="icon-big text-center">
								<i class="la flaticon-bars-2"></i>
							</div>
						</div>
						<div class="col-7 col-stats">
							<div class="numbers">
								<p class="card-category">Services</p>
								<h4 class="card-title"><?php echo e($currentLang->services()->count()); ?></h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


  <div class="row">
    <div class="col-lg-6">
      <div class="row row-card-no-pd">
    		<div class="col-md-12">
    			<div class="card">
    				<div class="card-header">
    					<div class="card-head-row">
    						<h4 class="card-title">Recent Quotations</h4>
    					</div>
    					<p class="card-category">
    					Top 10 latest quotation request</p>
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
                              <th scope="col">#</th>
                              <th scope="col">Deatails</th>
                              <th scope="col">Mail</th>
                              <th scope="col">Action</th>
                              </tr>
                          </thead>
                          <tbody>
                              <?php $__currentLoopData = $quotes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $quote): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <tr>
                                  <td><?php echo e($loop->iteration); ?></td>
                                  <td>
                                  <button class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#detailsModal<?php echo e($quote->id); ?>"><i class="fas fa-eye"></i> View</button>
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
    			</div>
    		</div>
    	</div>
    </div>
    <div class="col-lg-6">
      <div class="row row-card-no-pd">
    		<div class="col-md-12">
    			<div class="card">
    				<div class="card-header">
    					<div class="card-head-row">
    						<h4 class="card-title">Recent Projecs</h4>
    					</div>
    					<p class="card-category">
    					Top 10 latest submitted projects</p>
    				</div>
    				<div class="card-body">
    					<div class="row">
    						<div class="col-md-12">
    							<div class="table-responsive table-hover table-sales">
    								<table class="table">
                      <thead>
                        <tr>
                          <th>Image</th>
                          <th>Title</th>
                          <th>Client</th>
                          <th>Architecht</th>
                          <th>Submission Date</th>
                        </tr>
                      </thead>
    									<tbody>
                        <?php $__currentLoopData = $portfolios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $portfolio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr>
                            <td><img src="<?php echo e(asset('assets/front/img/portfolios/featured/'.$portfolio->featured_image)); ?>" width="80" /></td>
                            <td><?php echo e(strlen($portfolio->title) > 25 ? substr($portfolio->title, 0, 25) . '...' : $portfolio->title); ?></td>
                            <td><?php echo e($portfolio->client_name); ?></td>
                            <td><?php echo e($portfolio->start_date); ?></td>
      											<td><?php echo e($portfolio->submission_date); ?></td>
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
              <textarea id="inmessage" class="form-control nic-edit" name="message" rows="5" cols="80" placeholder="Enter message"></textarea>
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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\logistics\core\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>