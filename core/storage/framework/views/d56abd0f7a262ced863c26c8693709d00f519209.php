<?php $__env->startSection('content'); ?>
  <div class="page-header">
    <h4 class="page-title">Payment Gateways</h4>
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
        <a href="#">Payment Gateways</a>
      </li>
    </ul>
  </div>
  <div class="row">
    <div class="col-lg-4">
      <div class="card">
        <form action="<?php echo e(route('admin.paypal.update')); ?>" method="post">
          <?php echo csrf_field(); ?>
          <div class="card-header">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="card-title">Paypal</div>
                  </div>
              </div>
          </div>
          <div class="card-body pt-5 pb-5">
            <div class="row">
              <div class="col-lg-12">
                <?php echo csrf_field(); ?>

                <div class="form-group">
                  <label>Paypal</label>
                  <div class="selectgroup w-100">
                    <label class="selectgroup-item">
                      <input type="radio" name="status" value="1" class="selectgroup-input" <?php echo e($paypal->status == 1 ? 'checked' : ''); ?>>
                      <span class="selectgroup-button">Active</span>
                    </label>
                    <label class="selectgroup-item">
                      <input type="radio" name="status" value="0" class="selectgroup-input" <?php echo e($paypal->status == 0 ? 'checked' : ''); ?>>
                      <span class="selectgroup-button">Deactive</span>
                    </label>
                  </div>
                </div>
                <?php
                    $paypalInfo = json_decode($paypal->information, true);
                    // dd($paypalInfo);
                ?>
                <div class="form-group">
                  <label>Paypal Test Mode</label>
                  <div class="selectgroup w-100">
                    <label class="selectgroup-item">
                      <input type="radio" name="sandbox_check" value="1" class="selectgroup-input" <?php echo e($paypalInfo["sandbox_check"] == 1 ? 'checked' : ''); ?>>
                      <span class="selectgroup-button">Active</span>
                    </label>
                    <label class="selectgroup-item">
                      <input type="radio" name="sandbox_check" value="0" class="selectgroup-input" <?php echo e($paypalInfo["sandbox_check"] == 0 ? 'checked' : ''); ?>>
                      <span class="selectgroup-button">Deactive</span>
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label>Paypal Client ID</label>
                  <input class="form-control" name="client_id" value="<?php echo e($paypalInfo["client_id"]); ?>">
                  <?php if($errors->has('client_id')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('client_id')); ?></p>
                  <?php endif; ?>
                </div>
                <div class="form-group">
                  <label>Paypal Client Secret</label>
                  <input class="form-control" name="client_secret" value="<?php echo e($paypalInfo["client_secret"]); ?>">
                  <?php if($errors->has('client_secret')): ?>
                    <p class="mb-0 text-danger"><?php echo e($errors->first('client_secret')); ?></p>
                  <?php endif; ?>
                </div>

              </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="form">
              <div class="form-group from-show-notify row">
                <div class="col-12 text-center">
                  <button type="submit" id="displayNotif" class="btn btn-success">Update</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>


    <div class="col-lg-4">
      <div class="card">
        <form class="" action="<?php echo e(route('admin.stripe.update')); ?>" method="post">
          <?php echo csrf_field(); ?>
          <div class="card-header">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="card-title">Stripe</div>
                  </div>
              </div>
          </div>
          <div class="card-body pt-5 pb-5">
            <div class="row">
              <div class="col-lg-12">
                <?php echo csrf_field(); ?>
                <?php
                    $stripeInfo = json_decode($stripe->information, true);
                    // dd($stripeInfo);
                ?>
                <div class="form-group">
                    <label>Stripe</label>
                    <div class="selectgroup w-100">
                      <label class="selectgroup-item">
                        <input type="radio" name="status" value="1" class="selectgroup-input" <?php echo e($stripe->status == 1 ? 'checked' : ''); ?>>
                        <span class="selectgroup-button">Active</span>
                      </label>
                      <label class="selectgroup-item">
                        <input type="radio" name="status" value="0" class="selectgroup-input" <?php echo e($stripe->status == 0 ? 'checked' : ''); ?>>
                        <span class="selectgroup-button">Deactive</span>
                      </label>
                    </div>
                </div>
                <div class="form-group">
                    <label>Stripe Key</label>
                    <input class="form-control" name="key" value="<?php echo e($stripeInfo['key']); ?>">
                    <?php if($errors->has('key')): ?>
                        <p class="mb-0 text-danger"><?php echo e($errors->first('key')); ?></p>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label>Stripe Secret</label>
                    <input class="form-control" name="secret" value="<?php echo e($stripeInfo['secret']); ?>">
                    <?php if($errors->has('secret')): ?>
                        <p class="mb-0 text-danger"><?php echo e($errors->first('secret')); ?></p>
                    <?php endif; ?>
                </div>

              </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="form">
              <div class="form-group from-show-notify row">
                <div class="col-12 text-center">
                  <button type="submit" id="displayNotif" class="btn btn-success">Update</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>


    <div class="col-lg-4">
      <div class="card">
        <form class="" action="<?php echo e(route('admin.paytm.update')); ?>" method="post">
          <?php echo csrf_field(); ?>
          <div class="card-header">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="card-title">Paytm</div>
                  </div>
              </div>
          </div>


          <div class="card-body pt-5 pb-5">
            <div class="row">
              <div class="col-lg-12">
                <?php echo csrf_field(); ?>
                <?php
                    $paytmInfo = json_decode($paytm->information, true);
                    // dd($paytmInfo);
                ?>
                <div class="form-group">
                    <label>Paytm</label>
                    <div class="selectgroup w-100">
                      <label class="selectgroup-item">
                        <input type="radio" name="status" value="1" class="selectgroup-input" <?php echo e($paytm->status == 1 ? 'checked' : ''); ?>>
                        <span class="selectgroup-button">Active</span>
                      </label>
                      <label class="selectgroup-item">
                        <input type="radio" name="status" value="0" class="selectgroup-input" <?php echo e($paytm->status == 0 ? 'checked' : ''); ?>>
                        <span class="selectgroup-button">Deactive</span>
                      </label>
                    </div>
                </div>
                <div class="form-group">
                    <label>Paytm Merchant Key</label>
                    <input class="form-control" name="secret" value="<?php echo e($paytmInfo['secret']); ?>">
                    <?php if($errors->has('secret')): ?>
                        <p class="mb-0 text-danger"><?php echo e($errors->first('secret')); ?></p>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label>Paytm Merchant mid</label>
                    <input class="form-control" name="merchant" value="<?php echo e($paytmInfo['merchant']); ?>">
                    <?php if($errors->has('merchant')): ?>
                        <p class="mb-0 text-danger"><?php echo e($errors->first('merchant')); ?></p>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label>Paytm Merchant website</label>
                    <input class="form-control" name="website" value="<?php echo e($paytmInfo['website']); ?>">
                    <?php if($errors->has('website')): ?>
                        <p class="mb-0 text-danger"><?php echo e($errors->first('website')); ?></p>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label>Industry type id</label>
                    <input class="form-control" name="industry" value="<?php echo e($paytmInfo['industry']); ?>">
                    <?php if($errors->has('industry')): ?>
                        <p class="mb-0 text-danger"><?php echo e($errors->first('industry')); ?></p>
                    <?php endif; ?>
                </div>

              </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="form">
              <div class="form-group from-show-notify row">
                <div class="col-12 text-center">
                  <button type="submit" class="btn btn-success">Update</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>


    <div class="col-lg-4">
      <div class="card">
        <form class="" action="<?php echo e(route('admin.instamojo.update')); ?>" method="post">
          <?php echo csrf_field(); ?>
          <div class="card-header">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="card-title">Instamojo</div>
                  </div>
              </div>
          </div>


          <div class="card-body pt-5 pb-5">
            <div class="row">
              <div class="col-lg-12">
                <?php echo csrf_field(); ?>
                <?php
                    $instamojoInfo = json_decode($instamojo->information, true);
                    // dd($instamojoInfo);
                ?>
                <div class="form-group">
                    <label>Instamojo</label>
                    <div class="selectgroup w-100">
                      <label class="selectgroup-item">
                        <input type="radio" name="status" value="1" class="selectgroup-input" <?php echo e($instamojo->status == 1 ? 'checked' : ''); ?>>
                        <span class="selectgroup-button">Active</span>
                      </label>
                      <label class="selectgroup-item">
                        <input type="radio" name="status" value="0" class="selectgroup-input" <?php echo e($instamojo->status == 0 ? 'checked' : ''); ?>>
                        <span class="selectgroup-button">Deactive</span>
                      </label>
                    </div>
                </div>
                <div class="form-group">
                    <label>Test Mode</label>
                    <div class="selectgroup w-100">
                      <label class="selectgroup-item">
                        <input type="radio" name="sandbox_check" value="1" class="selectgroup-input" <?php echo e($instamojoInfo['sandbox_check'] == 1 ? 'checked' : ''); ?>>
                        <span class="selectgroup-button">Active</span>
                      </label>
                      <label class="selectgroup-item">
                        <input type="radio" name="sandbox_check" value="0" class="selectgroup-input" <?php echo e($instamojoInfo['sandbox_check'] == 0 ? 'checked' : ''); ?>>
                        <span class="selectgroup-button">Deactive</span>
                      </label>
                    </div>
                </div>
                <div class="form-group">
                    <label>Instamojo API Key</label>
                    <input class="form-control" name="key" value="<?php echo e($instamojoInfo['key']); ?>">
                    <?php if($errors->has('key')): ?>
                        <p class="mb-0 text-danger"><?php echo e($errors->first('key')); ?></p>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label>Instamojo Auth Token</label>
                    <input class="form-control" name="token" value="<?php echo e($instamojoInfo['token']); ?>">
                    <?php if($errors->has('token')): ?>
                        <p class="mb-0 text-danger"><?php echo e($errors->first('token')); ?></p>
                    <?php endif; ?>
                </div>

              </div>
            </div>
          </div>

          <div class="card-footer">
            <div class="form">
              <div class="form-group from-show-notify row">
                <div class="col-12 text-center">
                  <button type="submit" class="btn btn-success">Update</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>


    <div class="col-lg-4">
      <div class="card">
        <form class="" action="<?php echo e(route('admin.paystack.update')); ?>" method="post">
          <?php echo csrf_field(); ?>
          <div class="card-header">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="card-title">Paystack</div>
                  </div>
              </div>
          </div>
          <div class="card-body pt-5 pb-5">
            <div class="row">
              <div class="col-lg-12">
                <?php echo csrf_field(); ?>
                <?php
                    $paystackInfo = json_decode($paystack->information, true);
                    // dd($paystackInfo);
                ?>
                <div class="form-group">
                    <label>Paystack</label>
                    <div class="selectgroup w-100">
                      <label class="selectgroup-item">
                        <input type="radio" name="status" value="1" class="selectgroup-input" <?php echo e($paystack->status == 1 ? 'checked' : ''); ?>>
                        <span class="selectgroup-button">Active</span>
                      </label>
                      <label class="selectgroup-item">
                        <input type="radio" name="status" value="0" class="selectgroup-input" <?php echo e($paystack->status == 0 ? 'checked' : ''); ?>>
                        <span class="selectgroup-button">Deactive</span>
                      </label>
                    </div>
                </div>
                <div class="form-group">
                    <label>Paystack Public Key</label>
                    <input class="form-control" name="key" value="<?php echo e($paystackInfo['key']); ?>">
                    <?php if($errors->has('key')): ?>
                        <p class="mb-0 text-danger"><?php echo e($errors->first('key')); ?></p>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label>Paystack Business Email</label>
                    <input class="form-control" name="email" value="<?php echo e($paystackInfo['email']); ?>">
                    <?php if($errors->has('email')): ?>
                        <p class="mb-0 text-danger"><?php echo e($errors->first('email')); ?></p>
                    <?php endif; ?>
                </div>

              </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="form">
              <div class="form-group from-show-notify row">
                <div class="col-12 text-center">
                  <button type="submit" id="displayNotif" class="btn btn-success">Update</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>


    <div class="col-lg-4">
      <div class="card">
        <form class="" action="<?php echo e(route('admin.flutterwave.update')); ?>" method="post">
          <?php echo csrf_field(); ?>
          <div class="card-header">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="card-title">Flutterwave</div>
                  </div>
              </div>
          </div>
          <div class="card-body pt-5 pb-5">
            <div class="row">
              <div class="col-lg-12">
                <?php echo csrf_field(); ?>
                <?php
                    $flutterwaveInfo = json_decode($flutterwave->information, true);
                    // dd($flutterwaveInfo);
                ?>
                <div class="form-group">
                    <label>Flutterwave</label>
                    <div class="selectgroup w-100">
                      <label class="selectgroup-item">
                        <input type="radio" name="status" value="1" class="selectgroup-input" <?php echo e($flutterwave->status == 1 ? 'checked' : ''); ?>>
                        <span class="selectgroup-button">Active</span>
                      </label>
                      <label class="selectgroup-item">
                        <input type="radio" name="status" value="0" class="selectgroup-input" <?php echo e($flutterwave->status == 0 ? 'checked' : ''); ?>>
                        <span class="selectgroup-button">Deactive</span>
                      </label>
                    </div>
                </div>
                <div class="form-group">
                    <label>Flutterwave Public Key</label>
                    <input class="form-control" name="public_key" value="<?php echo e($flutterwaveInfo['public_key']); ?>">
                    <?php if($errors->has('public_key')): ?>
                        <p class="mb-0 text-danger"><?php echo e($errors->first('public_key')); ?></p>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label>Flutterwave Secret Key</label>
                    <input class="form-control" name="secret_key" value="<?php echo e($flutterwaveInfo['secret_key']); ?>">
                    <?php if($errors->has('secret_key')): ?>
                        <p class="mb-0 text-danger"><?php echo e($errors->first('secret_key')); ?></p>
                    <?php endif; ?>
                </div>

              </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="form">
              <div class="form-group from-show-notify row">
                <div class="col-12 text-center">
                  <button type="submit" class="btn btn-success">Update</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>

    <div class="col-lg-4">
        <div class="card">
            <form class="" action="<?php echo e(route('admin.mollie.update')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="card-header">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-title">Mollie Payment</div>
                    </div>
                </div>
            </div>


            <div class="card-body pt-5 pb-5">
                <div class="row">
                <div class="col-lg-12">
                    <?php echo csrf_field(); ?>
                    <?php
                        $mollieInfo = json_decode($mollie->information, true);
                        // dd($mollieInfo);
                    ?>
                    <div class="form-group">
                        <label>Mollie Payment</label>
                        <div class="selectgroup w-100">
                        <label class="selectgroup-item">
                            <input type="radio" name="status" value="1" class="selectgroup-input" <?php echo e($mollie->status == 1 ? 'checked' : ''); ?>>
                            <span class="selectgroup-button">Active</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="status" value="0" class="selectgroup-input" <?php echo e($mollie->status == 0 ? 'checked' : ''); ?>>
                            <span class="selectgroup-button">Deactive</span>
                        </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Mollie Payment Key</label>
                        <input class="form-control" name="key" value="<?php echo e($mollieInfo['key']); ?>">
                        <?php if($errors->has('key')): ?>
                            <p class="mb-0 text-danger"><?php echo e($errors->first('key')); ?></p>
                        <?php endif; ?>
                    </div>

                </div>
                </div>
            </div>

            <div class="card-footer">
                <div class="form">
                <div class="form-group from-show-notify row">
                    <div class="col-12 text-center">
                    <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </div>
                </div>
            </div>
            </form>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card">
            <form class="" action="<?php echo e(route('admin.razorpay.update')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="card-header">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-title">Razorpay</div>
                    </div>
                </div>
            </div>


            <div class="card-body pt-5 pb-5">
                <div class="row">
                <div class="col-lg-12">
                    <?php echo csrf_field(); ?>
                    <?php
                        $razorpayInfo = json_decode($razorpay->information, true);
                        // dd($razorpayInfo);
                    ?>
                    <div class="form-group">
                        <label>Razorpay</label>
                        <div class="selectgroup w-100">
                        <label class="selectgroup-item">
                            <input type="radio" name="status" value="1" class="selectgroup-input" <?php echo e($razorpay->status == 1 ? 'checked' : ''); ?>>
                            <span class="selectgroup-button">Active</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="status" value="0" class="selectgroup-input" <?php echo e($razorpay->status == 0 ? 'checked' : ''); ?>>
                            <span class="selectgroup-button">Deactive</span>
                        </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Razorpay Key</label>
                        <input class="form-control" name="key" value="<?php echo e($razorpayInfo['key']); ?>">
                        <?php if($errors->has('key')): ?>
                            <p class="mb-0 text-danger"><?php echo e($errors->first('key')); ?></p>
                        <?php endif; ?>
                    </div>

                    <div class="form-group">
                        <label>Razorpay Secret</label>
                        <input class="form-control" name="secret" value="<?php echo e($razorpayInfo['secret']); ?>">
                        <?php if($errors->has('secret')): ?>
                            <p class="mb-0 text-danger"><?php echo e($errors->first('secret')); ?></p>
                        <?php endif; ?>
                    </div>

                </div>
                </div>
            </div>

            <div class="card-footer">
                <div class="form">
                <div class="form-group from-show-notify row">
                    <div class="col-12 text-center">
                    <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </div>
                </div>
            </div>
            </form>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card">
            <form class="" action="<?php echo e(route('admin.payumoney.update')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="card-header">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-title">PayUmoney</div>
                    </div>
                </div>
            </div>


            <div class="card-body pt-5 pb-5">
                <div class="row">
                    <div class="col-lg-12">
                        <?php echo csrf_field(); ?>
                        <?php
                            $payumoneyInfo = json_decode($payumoney->information, true);
                        ?>
                        <div class="form-group">
                            <label>PayUmoney</label>
                            <div class="selectgroup w-100">
                            <label class="selectgroup-item">
                                <input type="radio" name="status" value="1" class="selectgroup-input" <?php echo e($payumoney->status == 1 ? 'checked' : ''); ?>>
                                <span class="selectgroup-button">Active</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="status" value="0" class="selectgroup-input" <?php echo e($payumoney->status == 0 ? 'checked' : ''); ?>>
                                <span class="selectgroup-button">Deactive</span>
                            </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>PayUmoney Merchant Key</label>
                            <input class="form-control" name="key" value="<?php echo e($payumoneyInfo['key']); ?>">
                            <?php if($errors->has('key')): ?>
                                <p class="mb-0 text-danger"><?php echo e($errors->first('key')); ?></p>
                            <?php endif; ?>
                        </div>

                        <div class="form-group">
                            <label>PayUmoney Salt</label>
                            <input class="form-control" name="salt" value="<?php echo e($payumoneyInfo['salt']); ?>">
                            <?php if($errors->has('salt')): ?>
                                <p class="mb-0 text-danger"><?php echo e($errors->first('salt')); ?></p>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>
            </div>

            <div class="card-footer">
                <div class="form">
                <div class="form-group from-show-notify row">
                    <div class="col-12 text-center">
                    <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </div>
                </div>
            </div>
            </form>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card">
            <form class="" action="<?php echo e(route('admin.mercadopago.update')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="card-header">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-title">Mercadopago</div>
                    </div>
                </div>
            </div>


            <div class="card-body pt-5 pb-5">

                    <?php echo csrf_field(); ?>
                    <?php
                        $mercadopagoInfo = json_decode($mercadopago->information, true);
                        // dd($mercadopagoInfo);
                    ?>
                    <div class="form-group">
                        <label>Mercado Pago</label>
                        <div class="selectgroup w-100">
                        <label class="selectgroup-item">
                            <input type="radio" name="status" value="1" class="selectgroup-input" <?php echo e($mercadopago->status == 1 ? 'checked' : ''); ?>>
                            <span class="selectgroup-button">Active</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="status" value="0" class="selectgroup-input" <?php echo e($mercadopago->status == 0 ? 'checked' : ''); ?>>
                            <span class="selectgroup-button">Deactive</span>
                        </label>
                        </div>
                    </div>

                    <div class="form-group">
                      <label>Mercado Pago Test Mode</label>
                      <div class="selectgroup w-100">
                        <label class="selectgroup-item">
                          <input type="radio" name="sandbox_check" value="1" class="selectgroup-input" <?php echo e($mercadopagoInfo["sandbox_check"] == 1 ? 'checked' : ''); ?>>
                          <span class="selectgroup-button">Active</span>
                        </label>
                        <label class="selectgroup-item">
                          <input type="radio" name="sandbox_check" value="0" class="selectgroup-input" <?php echo e($mercadopagoInfo["sandbox_check"] == 0 ? 'checked' : ''); ?>>
                          <span class="selectgroup-button">Deactive</span>
                        </label>
                      </div>
                    </div>

                    <div class="form-group">
                        <label>Mercadopago Token</label>
                        <input class="form-control" name="token" value="<?php echo e($mercadopagoInfo['token']); ?>">
                        <?php if($errors->has('token')): ?>
                            <p class="mb-0 text-danger"><?php echo e($errors->first('token')); ?></p>
                        <?php endif; ?>
                    </div>
            </div>

            <div class="card-footer">
                <div class="form">
                <div class="form-group from-show-notify row">
                    <div class="col-12 text-center">
                    <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </div>
                </div>
            </div>
            </form>
        </div>
    </div>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\logistics\core\resources\views/admin/gateways/index.blade.php ENDPATH**/ ?>