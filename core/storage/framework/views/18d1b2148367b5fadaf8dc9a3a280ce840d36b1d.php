<?php

    if ($payment != 'offline') {
        $pay_data = $gateway->convertAutoData();
    }

?>


<?php if($payment == 'paypal'): ?>

  <input type="hidden" name="method" value="<?php echo e($gateway->name); ?>">

<?php endif; ?>

<?php if($payment == 'stripe'): ?>

  <input type="hidden" name="method" value="<?php echo e($gateway->name); ?>">

  <div class="row">

    <div class="col-lg-6 mb-4">
        <div class="form-element">
            <input class="input-field card-elements" name="cardNumber" type="text" placeholder="<?php echo e(__('Card Number')); ?>" autocomplete="off"  autofocus oninput="validateCard(this.value);" />
            <span id="errCard"></span>
        </div>
        <?php if($errors->has('cardNumber')): ?>
            <p class="text-danger mb-0"><?php echo e($errors->first('cardNumber')); ?></p>
        <?php endif; ?>
    </div>

    <div class="col-lg-6 mb-4">
        <div class="form-element">
            <input class="input-field card-elements" name="cardCVC" type="text" placeholder="<?php echo e(__('CVV')); ?>" autocomplete="off"  oninput="validateCVC(this.value);" />
            <span id="errCVC"></span>
        </div>
        <?php if($errors->has('cardCVC')): ?>
            <p class="text-danger mb-0"><?php echo e($errors->first('cardCVC')); ?></p>
        <?php endif; ?>
    </div>

    <div class="col-lg-6 mb-4">
        <div class="form-element">
            <input class="input-field card-elements" name="month" type="text" placeholder="<?php echo e(__('Month')); ?>"  />
        </div>
        <?php if($errors->has('month')): ?>
            <p class="text-danger mb-0"><?php echo e($errors->first('month')); ?></p>
        <?php endif; ?>
    </div>

    <div class="col-lg-6 mb-4">
        <div class="form-element">
            <input class="input-field card-elements" name="year" type="text" placeholder="<?php echo e(__('Year')); ?>"  />
        </div>
        <?php if($errors->has('year')): ?>
            <p class="text-danger mb-0"><?php echo e($errors->first('year')); ?></p>
        <?php endif; ?>
    </div>

  </div>

  

<?php endif; ?>

<?php if($payment == 'payumoney'): ?>

  <input type="hidden" name="method" value="<?php echo e($gateway->name); ?>">

  <div class="row">

    <div class="col-lg-6 mb-4">
        <div class="form-element">
            <input class="input-field" name="payumoney_first_name" type="text" placeholder="<?php echo e(__('First Name')); ?>" />
        </div>
        <?php if($errors->has('payumoney_first_name')): ?>
            <p class="text-danger mb-0"><?php echo e($errors->first('payumoney_first_name')); ?></p>
        <?php endif; ?>
    </div>

    <div class="col-lg-6 mb-4">
        <div class="form-element">
            <input class="input-field" name="payumoney_last_name" type="text" placeholder="<?php echo e(__('Last Name')); ?>" />
        </div>
        <?php if($errors->has('payumoney_last_name')): ?>
            <p class="text-danger mb-0"><?php echo e($errors->first('payumoney_last_name')); ?></p>
        <?php endif; ?>
    </div>

    <div class="col-lg-6 mb-4">
        <div class="form-element">
            <input class="input-field" name="payumoney_phone" type="text" placeholder="<?php echo e(__('Phone')); ?>"  />
        </div>
        <?php if($errors->has('payumoney_phone')): ?>
            <p class="text-danger mb-0"><?php echo e($errors->first('payumoney_phone')); ?></p>
        <?php endif; ?>
    </div>

  </div>

<?php endif; ?>

<?php if($payment == 'instamojo'): ?>

  <input type="hidden" name="method" value="<?php echo e($gateway->name); ?>">

<?php endif; ?>

<?php if($payment == 'razorpay'): ?>

  <input type="hidden" name="method" value="<?php echo e($gateway->name); ?>">
  <div class="row">
    <div class="col-lg-6 mb-4">
        <div class="form-element">
            <input class="input-field card-elements" name="razorpay_phone" type="text" placeholder="<?php echo e(__('Phone')); ?>"  />
        </div>
        <?php if($errors->has('razorpay_phone')): ?>
            <p class="text-danger mb-0"><?php echo e($errors->first('razorpay_phone')); ?></p>
        <?php endif; ?>
    </div>
    <div class="col-lg-6 mb-4">
        <div class="form-element">
            <input class="input-field card-elements" name="razorpay_address" type="text" placeholder="<?php echo e(__('Address')); ?>"  />
        </div>
        <?php if($errors->has('razorpay_address')): ?>
            <p class="text-danger mb-0"><?php echo e($errors->first('razorpay_address')); ?></p>
        <?php endif; ?>
    </div>
  </div>
<?php endif; ?>

<?php if($payment == 'flutterwave'): ?>

  <input type="hidden" name="method" value="<?php echo e($gateway->name); ?>">

<?php endif; ?>


<?php if($payment == 'paystack'): ?>

  <input type="hidden" name="txnid" id="ref_id" value="">
  <input type="hidden" name="sub" id="sub" value="0">
	<input type="hidden" name="method" value="<?php echo e($gateway->name); ?>">

<?php endif; ?>

<?php if($payment == 'mollie'): ?>

  <input type="hidden" name="method" value="<?php echo e($gateway->name); ?>">

<?php endif; ?>

<?php if($payment == 'mercadopago'): ?>

  <input type="hidden" name="method" value="<?php echo e($gateway->name); ?>">

<?php endif; ?>


<?php if($payment == 'offline'): ?>

  <div>
    <p class="gateway-desc"><?php echo e($gateway->short_description); ?></p>
  </div>

  <div class="gateway-instruction">
    <p><?php echo replaceBaseUrl($gateway->instructions); ?></p>
  </div>

  <?php if($gateway->is_receipt == 1): ?>
  <div class="mb-4 form-element">
      <label for="" class="d-block mb-2"><?php echo e(__('Receipt')); ?> **</label>
      <input type="file" name="receipt">
      <p class="mb-0 text-warning">** <?php echo e(__('Receipt image must be .jpg / .jpeg / .png')); ?></p>
  </div>
  <?php endif; ?>

<?php endif; ?>
<?php /**PATH D:\xampp\htdocs\logistics\core\resources\views/front/load/payment.blade.php ENDPATH**/ ?>