<?php $__env->startSection('pagename'); ?>
 - <?php echo e(__('Order of') . ' ' . $package->title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta-keywords', "$package->meta_keywords"); ?>
<?php $__env->startSection('meta-description', "$package->meta_description"); ?>

<?php $__env->startSection('content'); ?>
  <!--   breadcrumb area start   -->
  <div class="breadcrumb-area" style="background-image: url('<?php echo e(asset('assets/front/img/' . $bs->breadcrumb)); ?>');background-size:cover;">
     <div class="container">
        <div class="breadcrumb-txt"style="
        padding: 5px;
    ">
           <div class="row">
              <div class="col-xl-7 col-lg-8 col-sm-10">
                 
                 <ul class="breadcumb"style="
                 padding: 10px;
                 margin-top: 0;
             ">
                    <li><a href="<?php echo e(route('front.index')); ?>"><?php echo e(__('Home')); ?></a></li>
                    <li><?php echo e(__('Package Order')); ?></li>
                 </ul>
              </div>
           </div>
        </div>
     </div>
     <div class="breadcrumb-area-overlay" style="background-color: #<?php echo e($be->breadcrumb_overlay_color); ?>;opacity: <?php echo e($be->breadcrumb_overlay_opacity); ?>;"></div>
  </div>
  <!--   breadcrumb area end    -->


  <!--   quote area start   -->
  <div class="quote-area pt-110 pb-115">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <form class="pay-form" action="
            <?php if(count($gateways) == 0): ?>
            <?php echo e(route('front.packageorder.submit')); ?>

            <?php endif; ?>"
            enctype="multipart/form-data" method="POST">

            <?php echo csrf_field(); ?>
            <input type="hidden" name="package_id" value="<?php echo e($package->id); ?>">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-element mb-4">
                        <label><?php echo e(__('Name')); ?> <span>**</span></label>
                        <input name="name" type="text" value="<?php echo e(old("name")); ?>" placeholder="<?php echo e(__('Enter Name')); ?>">

                        <?php if($errors->has("name")): ?>
                        <p class="text-danger mb-0"><?php echo e($errors->first("name")); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-element mb-4">
                        <label><?php echo e(__('Email')); ?> <span>**</span></label>
                        <input name="email" type="text" value="<?php echo e(old("email")); ?>" placeholder="<?php echo e(__('Enter Email Address')); ?>">

                        <?php if($errors->has("email")): ?>
                        <p class="text-danger mb-0"><?php echo e($errors->first("email")); ?></p>
                        <?php endif; ?>
                    </div>
                </div>

                <?php $__currentLoopData = $inputs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $input): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="<?php echo e($input->type == 4 || $input->type == 3 ? 'col-lg-12' : 'col-lg-6'); ?>">
                        <div class="form-element mb-4">
                            <?php if($input->type == 1): ?>
                                <label><?php echo e(convertUtf8($input->label)); ?> <?php if($input->required == 1): ?> <span>**</span> <?php endif; ?></label>
                                <input name="<?php echo e($input->name); ?>" type="text" value="<?php echo e(old("$input->name")); ?>" placeholder="<?php echo e(convertUtf8($input->placeholder)); ?>">
                            <?php endif; ?>

                            <?php if($input->type == 2): ?>
                                <label><?php echo e(convertUtf8($input->label)); ?> <?php if($input->required == 1): ?> <span>**</span> <?php endif; ?></label>
                                <select name="<?php echo e($input->name); ?>">
                                    <option value="" selected disabled><?php echo e(convertUtf8($input->placeholder)); ?></option>
                                    <?php $__currentLoopData = $input->package_input_options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e(convertUtf8($option->name)); ?>" <?php echo e(old("$input->name") == convertUtf8($option->name) ? 'selected' : ''); ?>><?php echo e(convertUtf8($option->name)); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            <?php endif; ?>

                            <?php if($input->type == 3): ?>
                                <label><?php echo e(convertUtf8($input->label)); ?> <?php if($input->required == 1): ?> <span>**</span> <?php endif; ?></label>
                                <?php $__currentLoopData = $input->package_input_options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                        <input type="checkbox" id="customCheckboxInline<?php echo e($option->id); ?>" name="<?php echo e($input->name); ?>[]" class="custom-control-input" value="<?php echo e(convertUtf8($option->name)); ?>" <?php echo e(is_array(old("$input->name")) && in_array(convertUtf8($option->name), old("$input->name")) ? 'checked' : ''); ?>>
                                        <label class="custom-control-label" for="customCheckboxInline<?php echo e($option->id); ?>"><?php echo e(convertUtf8($option->name)); ?></label>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>

                            <?php if($input->type == 4): ?>
                                <label><?php echo e(convertUtf8($input->label)); ?> <?php if($input->required == 1): ?> <span>**</span> <?php endif; ?></label>
                                <textarea name="<?php echo e($input->name); ?>" id="" cols="30" rows="10" placeholder="<?php echo e(convertUtf8($input->placeholder)); ?>"><?php echo e(old("$input->name")); ?></textarea>
                            <?php endif; ?>

                            <?php if($errors->has("$input->name")): ?>
                            <p class="text-danger mb-0"><?php echo e($errors->first("$input->name")); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <?php if($ndaIn->active == 1): ?>
            <div class="row mb-4">
              <div class="col-lg-12">
                <div class="form-element mb-2">
                  <label><?php echo e(__('NDA File')); ?> <?php if($ndaIn->required == 1): ?> <span>**</span> <?php endif; ?></label>
                  <input type="file" name="nda" value="">
                </div>
                <p class="text-warning mb-0">** <?php echo e(__('Only doc, docx, pdf, rtf, txt, zip, rar files are allowed')); ?></p>
                <?php if($errors->has('nda')): ?>
                  <p class="text-danger mb-0"><?php echo e($errors->first('nda')); ?></p>
                <?php endif; ?>
              </div>
            </div>
            <?php endif; ?>


            <?php if(count($gateways) + count($ogateways) > 0): ?>
            <div class="row mb-4">
                <div class="col-lg-6">
                    <div class="form-element mb-2">
                        <label><?php echo e(__('Pay Via')); ?>  <span>**</span></label>
                        <select name="method" id="method" class="option input-field" required="">
                            <?php $__currentLoopData = $gateways; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paydata): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($paydata->name); ?>" data-form="<?php echo e($paydata->showCheckoutLink()); ?>" data-show="<?php echo e($paydata->showForm()); ?>" data-href="<?php echo e(route('front.load.payment',['slug' => $paydata->showKeyword(),'id' => $paydata->id])); ?>" data-val="<?php echo e($paydata->keyword); ?>">

                                    <?php echo e($paydata->name); ?>


                                </option>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                             <?php if(!empty($ogateways)): ?>
                                <?php $__currentLoopData = $ogateways; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ogateway): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($ogateway->name); ?>" data-form="<?php echo e(route('front.offline.submit', $ogateway->id)); ?>" data-show="yes" data-href="<?php echo e(route('front.load.payment',['slug' => "offline",'id' => $ogateway->id])); ?>" data-val="offline">

                                        <?php echo e($ogateway->name); ?>


                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                             <?php endif; ?>

                        </select>

                        <?php if($errors->has('receipt')): ?>
                            <p class="text-danger"><?php echo e($errors->first('receipt')); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            
            <div id="payments" class="d-none">

            </div>


            <input type="hidden" name="cmd" value="_xclick">
            <input type="hidden" name="no_note" value="1">
            <input type="hidden" name="lc" value="UK">
            <input type="hidden" name="currency_code" id="currency_name" value="USD">
            <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest">
            <input type="hidden" name="sub" id="sub" value="0">

            <div class="row">
              <div class="col-lg-12">
                <button type="submit" name="button"><?php echo e(__('Submit')); ?></button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-4 mt-4 mt-lg-0">
            <?php if ($__env->exists("front.$version.package-order")) echo $__env->make("front.$version.package-order", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
      </div>
    </div>
  </div>
  <!--   quote area end   -->
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>

<script src="https://js.paystack.co/v1/inline.js"></script>

<?php if(count($gateways) + count($ogateways) > 0): ?>
<script>
$(document).ready(function() {
    changeGateway();
})
</script>
<?php endif; ?>


<script>

function changeGateway() {
    var val  = $('#method').find(':selected').attr('data-val');
    var form = $('#method').find(':selected').attr('data-form');
    var show = $('#method').find(':selected').attr('data-show');
    var href = $('#method').find(':selected').attr('data-href');


    if(show == "yes") {
        $('#payments').removeClass('d-none');
    } else {
        $('#payments').addClass('d-none');
    }

    if(val == 'paystack'){
        $('.pay-form').prop('id','paystack');
    }

    $('#payments').load(href);
    $('.pay-form').attr('action',form);
}

$('#method').on('change',function() {
    changeGateway();
});

$(document).on('submit','#paystack',function(){
    var val = $('#sub').val();
    if(val == 0){
        var total = <?php echo e($package->price); ?>;
        var curr =  "<?php echo e($bex->base_currency_text); ?>";
        total = Math.round(total);
        var handler = PaystackPop.setup({
        key: "<?php echo e($paystack['key']); ?>",
        email: "<?php echo e($paystack['email']); ?>",
        amount: total * 100,
        currency: curr,
        ref: ''+Math.floor((Math.random() * 1000000000) + 1),
            callback: function(response){
                $('#ref_id').val(response.reference);
                $('#sub').val('1');
                $('#paystack button[type="submit"]').click();
            },
            onClose: function(){
                window.location.reload();
            }
        });
        handler.openIframe();
        return false;

    } else {
        return true;
    }
});

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("front.$version.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\logistics\core\resources\views/front/package-order.blade.php ENDPATH**/ ?>