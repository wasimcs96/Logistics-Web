<?php if(!empty($abs->language) && $abs->language->rtl == 1): ?>
<?php $__env->startSection('styles'); ?>
<style>
    form input,
    form textarea,
    form select,
    select {
        direction: rtl;
    }
    form .note-editor.note-frame .note-editing-area .note-editable {
        direction: rtl;
        text-align: right;
    }
</style>
<?php $__env->stopSection(); ?>
<?php endif; ?>

<?php $__env->startSection('content'); ?>
<div class="page-header">
    <h4 class="page-title">Form Builder</h4>
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
        <a href="#">Form Builder</a>
      </li>
    </ul>
  </div>

  <div class="row" id="app">
    <div class="col-lg-7">
      <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card-title">Input Fields</div>
                </div>
                <div class="col-lg-4">
                    <?php if(!empty($langs)): ?>
                        <select name="language" class="form-control" onchange="window.location='<?php echo e(url()->current() . '?language='); ?>'+this.value">
                            <option value="" selected disabled>Select a Language</option>
                            <?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($lang->code); ?>" <?php echo e($lang->code == request()->input('language') ? 'selected' : ''); ?>><?php echo e($lang->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="card-body">
            <p class="text-warning">** Do not create <strong class="text-danger">Name & Email</strong> input field, it will be in the Request a Quote form By default.</p>

            <?php if(count($inputs) > 0): ?>

                <?php $__currentLoopData = $inputs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $input): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                    <?php if($input->type == 1): ?>
                    <form action="<?php echo e(route('admin.quote.inputDelete')); ?>" method="post">
                        <?php echo e(csrf_field()); ?>

                        <input type="hidden" name="input_id" value="<?php echo e($input->id); ?>">
                        <div class="form-group">
                        <label for=""><?php echo e($input->label); ?> <?php if($input->required == 1): ?> <span>**</span> <?php elseif($input->required == 0): ?> (Optional) <?php endif; ?></label>
                        <div class="row">
                            <div class="col-md-10">
                            <input class="form-control" type="text" name="" value="" placeholder="<?php echo e($input->placeholder); ?>">
                            </div>
                            <div class="col-md-1">
                            <a class="btn btn-warning btn-md" href="<?php echo e(route('admin.quote.inputEdit', $input->id) . '?language=' . request()->input('language')); ?>">
                                <i class="fas fa-edit"></i>
                            </a>
                            </div>
                            <div class="col-md-1">
                            <button class="btn btn-danger btn-md" type="submit">
                                <i class="fa fa-times"></i>
                            </button>
                            </div>
                        </div>
                        </div>
                    </form>
                    <?php elseif($input->type == 2): ?>
                    <form action="<?php echo e(route('admin.quote.inputDelete')); ?>" method="post">
                        <?php echo e(csrf_field()); ?>

                        <input type="hidden" name="input_id" value="<?php echo e($input->id); ?>">
                        <div class="form-group">
                        <label for=""><?php echo e($input->label); ?> <?php if($input->required == 1): ?> <span>**</span> <?php elseif($input->required == 0): ?> (Optional) <?php endif; ?></label>
                        <div class="row">
                            <div class="col-md-10">
                            <select class="form-control" name="">
                                <option value="" selected disabled><?php echo e($input->placeholder); ?></option>
                                <?php $__currentLoopData = $input->quote_input_options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value=""><?php echo e($option->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            </div>

                            <div class="col-md-1">
                            <a class="btn btn-warning btn-md" href="<?php echo e(route('admin.quote.inputEdit', $input->id) . '?language=' . request()->input('language')); ?>">
                                <i class="fas fa-edit"></i>
                            </a>
                            </div>
                            <div class="col-md-1">
                            <button class="btn btn-danger btn-md" type="submit">
                                <i class="fa fa-times"></i>
                            </button>
                            </div>
                        </div>
                        </div>
                    </form>
                    <?php elseif($input->type == 3): ?>
                    <form action="<?php echo e(route('admin.quote.inputDelete')); ?>" method="post">
                        <?php echo e(csrf_field()); ?>

                        <input type="hidden" name="input_id" value="<?php echo e($input->id); ?>">
                        <div class="form-group">
                        <label for=""><?php echo e($input->label); ?> <?php if($input->required == 1): ?> <span>**</span> <?php elseif($input->required == 0): ?> (Optional) <?php endif; ?></label>
                        <div class="row">
                            <div class="col-md-10">
                            <?php $__currentLoopData = $input->quote_input_options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" id="customRadio<?php echo e($option->id); ?>" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio<?php echo e($option->id); ?>"><?php echo e($option->name); ?></label>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <div class="col-md-1">
                            <a class="btn btn-warning btn-md" href="<?php echo e(route('admin.quote.inputEdit', $input->id) . '?language=' . request()->input('language')); ?>">
                                <i class="fas fa-edit"></i>
                            </a>
                            </div>
                            <div class="col-md-1">
                            <button type="submit" class="btn btn-danger btn-md">
                                <i class="fa fa-times"></i>
                            </button>
                            </div>
                        </div>
                        </div>
                    </form>
                    <?php elseif($input->type == 4): ?>
                    <form action="<?php echo e(route('admin.quote.inputDelete')); ?>" method="post">
                        <?php echo e(csrf_field()); ?>

                        <input type="hidden" name="input_id" value="<?php echo e($input->id); ?>">
                        <div class="form-group">
                        <label for=""><?php echo e($input->label); ?> <?php if($input->required == 1): ?> <span>**</span> <?php elseif($input->required == 0): ?> (Optional) <?php endif; ?></label>
                        <div class="row">
                            <div class="col-md-10">
                            <textarea class="form-control" name="" rows="5" cols="80" placeholder="<?php echo e($input->placeholder); ?>"></textarea>
                            </div>
                            <div class="col-md-1">
                            <a class="btn btn-warning btn-md" href="<?php echo e(route('admin.quote.inputEdit', $input->id) . '?language=' . request()->input('language')); ?>">
                                <i class="fas fa-edit"></i>
                            </a>
                            </div>
                            <div class="col-md-1">
                            <button type="submit" class="btn btn-danger btn-md">
                                <i class="fa fa-times"></i>
                            </button>
                            </div>
                        </div>
                        </div>
                    </form>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php endif; ?>

            <div class="form-group">
                <label for="">NDA file <?php if($ndaIn->required == 1): ?> <span>**</span> <?php elseif($ndaIn->required == 0): ?> (Optional) <?php endif; ?></label>
                <div class="row">
                    <div class="col-md-10">
                        <input type="file">
                    </div>
                    <div class="col-md-1">
                    <a class="btn btn-warning btn-md" href="<?php echo e(route('admin.quote.inputEdit', 10) . '?language=' . request()->input('language')); ?>">
                        <i class="fas fa-edit"></i>
                    </a>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>

    <div class="col-lg-5">
      <div class="card">
        <div class="card-header">
          <div class="card-title">Create Input</div>
        </div>

        <form id="ajaxForm" action="<?php echo e(route('admin.quote.form.store')); ?>" method="post" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

            <input type="hidden" name="language_id" value="<?php echo e($lang_id); ?>">
            <div class="form-group">
                <label for=""><strong>Field Type</strong></label>
                <div class="">
                    <div class="form-check form-check-inline">
                        <input name="type" class="form-check-input" type="radio" id="inlineRadio1" value="1" v-model="type" @change="typeChange()">
                        <label class="form-check-label" for="inlineRadio1">Text Field</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input name="type" class="form-check-input" type="radio" id="inlineRadio2" value="2" v-model="type" @change="typeChange()">
                        <label class="form-check-label" for="inlineRadio2">Select</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input name="type" class="form-check-input" type="radio" id="inlineRadio3" value="3" v-model="type" @change="typeChange()">
                        <label class="form-check-label" for="inlineRadio3">Checkbox</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input name="type" class="form-check-input" type="radio" id="inlineRadio4" value="4" v-model="type" @change="typeChange()">
                        <label class="form-check-label" for="inlineRadio4">Textarea</label>
                    </div>
                </div>
                <p id="errtype" class="mb-0 text-danger em"></p>
            </div>

            <div class="form-group">
                <label>Required</label>
                <div class="selectgroup w-100">
                    <label class="selectgroup-item">
                        <input type="radio" name="required" value="1" class="selectgroup-input" checked>
                        <span class="selectgroup-button">Yes</span>
                    </label>
                    <label class="selectgroup-item">
                        <input type="radio" name="required" value="0" class="selectgroup-input">
                        <span class="selectgroup-button">No</span>
                    </label>
                </div>
                <p id="errrequired" class="mb-0 text-danger em"></p>
            </div>

            <div class="form-group">
                <label for=""><strong>Label Name</strong></label>
                <div class="">
                    <input type="text" class="form-control" name="label" value="" placeholder="Enter Label Name">
                </div>
                <p id="errlabel" class="mb-0 text-danger em"></p>
            </div>

            <div class="form-group" v-if="placeholdershow">
                <label for=""><strong>Placeholder</strong></label>
                <div class="">
                    <input type="text" class="form-control" name="placeholder" value="" placeholder="Enter Placeholder">
                </div>
                <p id="errplaceholder" class="mb-0 text-danger em"></p>
            </div>


            <div class="form-group" v-if="counter > 0" id="optionarea">
                <label for=""><strong>Options</strong></label>
                <div class="row mb-2 counterrow" v-for="n in counter" :id="'counterrow'+n">
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="options[]" value="" placeholder="Option label">
                    </div>

                    <div class="col-md-1">
                        <button type="button" class="btn btn-danger btn-md text-white btn-sm" @click="removeOption(n)"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <p id="erroptions.0" class="mb-2 text-danger em"></p>
                <button type="button" class="btn btn-success btn-sm text-white" @click="addOption()"><i class="fa fa-plus"></i> Add Option</button>
            </div>

            <div class="form-group text-center">
                <button id="submitBtn" type="submit" class="btn btn-primary btn-sm">ADD FIELD</button>
            </div>
        </form>

      </div>

    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('vuescripts'); ?>
  <script>
    var app = new Vue({
      el: '#app',
      data: {
        type: 1,
        counter: 0,
        placeholdershow: true
      },
      methods: {
        typeChange() {
          if (this.type == 3) {
            this.placeholdershow = false;
          } else {
            this.placeholdershow = true;
          }
          if (this.type == 2 || this.type == 3) {
            this.counter = 1;
          } else {
            this.counter = 0;
          }
        },
        addOption() {
          $("#optionarea").addClass('d-block');
          this.counter++;
        },
        removeOption(n) {
          $("#counterrow"+n).remove();
          if ($(".counterrow").length == 0) {
            this.counter = 0;
          }
        }
      }
    })
  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\logistics\core\resources\views/admin/quote/form.blade.php ENDPATH**/ ?>