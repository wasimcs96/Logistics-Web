<?php $__env->startSection('content'); ?>
  <!--   breadcrumb area start   -->
  <div class="breadcrumb-area" style="background-image: url('<?php echo e(asset('assets/front/img/' . $bs->breadcrumb)); ?>');background-size:cover;">
     <div class="container">
        <div class="breadcrumb-txt">
           <div class="row">
              <div class="col-xl-7 col-lg-8 col-sm-10">
                 <h1>File A Claim</h1>
                 <ul class="breadcumb">
                    <li><a href="<?php echo e(route('front.index')); ?>"><?php echo e(__('Home')); ?></a></li>
                    <li><a href="<?php echo e(route('claim.index')); ?>"></a><?php echo e(__('Claim')); ?></li>
                 </ul>
              </div>
           </div>
        </div>
     </div>
     <div class="breadcrumb-area-overlay" style="background-color: #<?php echo e($be->breadcrumb_overlay_color); ?>;opacity: <?php echo e($be->breadcrumb_overlay_opacity); ?>;"></div>
  </div>
  <div class="container mt-4">
    <form class="" action="<?php echo e(route('claim.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div class="mb-3 col-lg-6">
    <label for="exampleInputPassword1" class="form-label">First Name</label>
    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Enter First Name" required>
  </div>
  <div class="mb-3 col-lg-6">
    <label for="exampleInputPassword1" class="form-label">Last Name</label>
    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter Last Name" required>
  </div>
  <div class="mb-3 col-lg-6">
    <label for="exampleInputPassword1" class="form-label">Home Phone</label>
    <input type="number" class="form-control" name="home_phone" id="home_phone" required>
  </div>
  <div class="mb-3 col-lg-6">
    <label for="exampleInputPassword1" class="form-label">Mobile Phone</label>
    <input type="number" class="form-control" name="mobile_phone" id="mobile_phone" required>
  </div>
  <div class="mb-3 col-lg-6">
    <label for="exampleInputPassword1" class="form-label">Other Phone</label>
    <input type="number" class="form-control" name="other_phone" id="other_phone" required>
  </div>
  <div class="mb-3 col-lg-6">
    <label for="exampleInputPassword1" class="form-label">Address</label>
    <input type="text" class="form-control" name="address" id="address" required>
  </div>
  <div class="mb-3 col-lg-6">
    <label for="exampleInputPassword1" class="form-label">City</label>
    <input type="text" class="form-control" name="city" id="city" required>
  </div>
  <div class="mb-3 col-mb-3 col-lg-6">
    <label for="exampleInputPassword1" class="form-label">Province</label>
    <input type="text" class="form-control" name="province" id="province" required>
  </div>
  <div class="mb-3 col-mb-3 col-lg-6">
    <label for="exampleInputPassword1" class="form-label">Postal Code</label>
    <input type="text" class="form-control" name="postal_code" id="postal_code" required>
  </div>
  <div class="mb-3 col-mb-3 col-lg-6">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" required>
  </div>
  <div class="mb-3 col-mb-3 col-lg-6">
    <label for="exampleInputPassword1" class="form-label">Move date</label>
    <input type="date" class="form-control" name="move_date" id="move_date" required>
  </div>
  <div class="mb-3 col-mb-3 col-lg-6">
    <label for="exampleInputPassword1" class="form-label">Order Number</label>
    <input type="number" class="form-control" name="order_number" id="order_number" required>
  </div>
  <p class="my-2"><b>ITEM #1</b></p>
  <div class="mb-3 col-mb-3 col-lg-6">
    <label for="exampleInputPassword1" class="form-label">Description</label>
    <input type="text" class="form-control" name="item[1][description]" id="description" required>
  </div>
  <div class="mb-3 col-mb-3 col-lg-6">
  <label for="formFile" class="form-label">Photo</label>
  <input class="form-control" type="file" name="item[1][photo]" id="photo" required>
</div>
<div class="mb-3 col-mb-3 col-lg-6">
  <label for="exampleFormControlTextarea1" class="form-label">Description of Damage</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" name="item[1][damage_desc]" rows="3" required></textarea>
</div>
<p class="my-2"><b>ITEM #2</b></p>
  <div class="col-mb-3 col-lg-6">
    <label for="exampleInputPassword1" class="form-label">Description</label>
    <input type="text" class="form-control" name="item[2][description]" id="description" required>
  </div>
  <div class="col-mb-3 col-lg-6">
  <label for="formFile" class="form-label">Photo</label>
  <input class="form-control" type="file" name="item[2][photo]" id="photo" required>
</div>
<div class="col-mb-3 col-lg-6">
  <label for="exampleFormControlTextarea1" class="form-label">Description of Damage</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" name="item[2][damage_desc]" rows="3" required></textarea>
</div>
<p class="my-2"><b>ITEM #3</b></p>
  <div class="col-mb-3 col-lg-6">
    <label for="exampleInputPassword1" class="form-label">Description</label>
    <input type="text" class="form-control" name="item[3][description]" id="description" required>
  </div>
  <div class="col-mb-3 col-lg-6">
  <label for="formFile" class="form-label">Photo</label>
  <input class="form-control" type="file" name="item[3][photo]" id="photo" required>
</div>
<div class="col-mb-3 col-lg-6">
  <label for="exampleFormControlTextarea1" class="form-label">Description of Damage</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" name="item[3][damage_desc]" rows="3" required></textarea>
</div>
<div class="mb-3 col-lg-6">
  <label for="exampleFormControlTextarea1" class="form-label">Additional Information</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" name="information" rows="3" required></textarea>
</div>
  <button type="submit" class="btn btn" style="margin-bottom: 10px;margin: 20px;">Submit</button>
</form>
  </div>

  <?php $__env->stopSection(); ?>
<?php echo $__env->make('front.logistic.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\logistics\core\resources\views/front/claim/index.blade.php ENDPATH**/ ?>