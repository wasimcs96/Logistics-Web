<?php
$selLang = \App\Language::where('code', request()->input('language'))->first();
?>
<?php if(!empty($selLang) && $selLang->rtl == 1): ?>
<?php $__env->startSection('styles'); ?>
<style>
    form:not(.modal-form) input,
    form:not(.modal-form) textarea,
    form:not(.modal-form) select,
    select[name='language'] {
        direction: rtl;
    }
    form:not(.modal-form) .note-editor.note-frame .note-editing-area .note-editable {
        direction: rtl;
        text-align: right;
    }
</style>
<?php $__env->stopSection(); ?>
<?php endif; ?>

<?php $__env->startSection('content'); ?>
<div class="page-header">
   <h4 class="page-title">Services</h4>
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
         <a href="#">Service Page</a>
      </li>
      <li class="separator">
         <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">
         <a href="#">Services</a>
      </li>
   </ul>
</div>
<div class="row">
   <div class="col-md-12">
      <div class="card">
         <div class="card-header">
            <div class="row">
               <div class="col-lg-4">
                  <div class="card-title d-inline-block">Services</div>
               </div>
               <div class="col-lg-3">
                  <?php if(!empty($langs)): ?>
                  <select name="language" class="form-control" onchange="window.location='<?php echo e(url()->current() . '?language='); ?>'+this.value">
                     <option value="" selected disabled>Select a Language</option>
                     <?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <option value="<?php echo e($lang->code); ?>" <?php echo e($lang->code == request()->input('language') ? 'selected' : ''); ?>><?php echo e($lang->name); ?></option>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                  <?php endif; ?>
               </div>
               <div class="col-lg-4 offset-lg-1 mt-2 mt-lg-0">
                  <a href="#" class="btn btn-primary float-right btn-sm" data-toggle="modal" data-target="#createModal"><i class="fas fa-plus"></i> Add Service</a>
                  <button class="btn btn-danger float-right btn-sm mr-2 d-none bulk-delete" data-href="<?php echo e(route('admin.service.bulk.delete')); ?>"><i class="flaticon-interface-5"></i> Delete</button>
               </div>
            </div>
         </div>
         <div class="card-body">
            <div class="row">
               <div class="col-lg-12">
                  <?php if(count($services) == 0): ?>
                  <h3 class="text-center">NO SERVICE FOUND</h3>
                  <?php else: ?>
                  <div class="table-responsive">
                     <table class="table table-striped mt-3">
                        <thead>
                           <tr>
                              <th scope="col">
                                 <input type="checkbox" class="bulk-check" data-val="all">
                              </th>
                              <th scope="col">Image</th>
                              <th scope="col">Title</th>
                              <?php if(hasCategory($be->theme_version)): ?>
                                <th scope="col">Category</th>
                              <?php endif; ?>
                              <?php if(!hasCategory($be->theme_version)): ?>
                                <th scope="col">Featured</th>
                              <?php endif; ?>
                              <th scope="col">Serial Number</th>
                              <th scope="col">Actions</th>
                           </tr>
                        </thead>


                        <tbody>
                           <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <tr>
                              <td>
                                 <input type="checkbox" class="bulk-check" data-val="<?php echo e($service->id); ?>">
                              </td>
                              <td><img src="<?php echo e(asset('assets/front/img/services/'.$service->main_image)); ?>" alt="" width="70"></td>
                              <td><?php echo e(strlen(convertUtf8($service->title)) > 100 ? convertUtf8(substr($service->title, 0, 100)) . '...' : convertUtf8($service->title)); ?></td>

                              <?php if(hasCategory($be->theme_version)): ?>
                                <td>
                                    <?php if(!empty($service->scategory)): ?>
                                    <?php echo e(convertUtf8($service->scategory->name)); ?>

                                    <?php endif; ?>
                                </td>
                              <?php endif; ?>

                              <?php if(!hasCategory($be->theme_version)): ?>
                                <td>
                                    <form id="featureForm<?php echo e($service->id); ?>" class="d-inline-block" action="<?php echo e(route('admin.service.feature')); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="service_id" value="<?php echo e($service->id); ?>">
                                    <select class="form-control <?php echo e($service->feature == 1 ? 'bg-success' : 'bg-danger'); ?>" name="feature" onchange="document.getElementById('featureForm<?php echo e($service->id); ?>').submit();">
                                        <option value="1" <?php echo e($service->feature == 1 ? 'selected' : ''); ?>>Yes</option>
                                        <option value="0" <?php echo e($service->feature == 0 ? 'selected' : ''); ?>>No</option>
                                    </select>
                                    </form>
                                </td>
                              <?php endif; ?>

                              <td><?php echo e($service->serial_number); ?></td>
                              <td>
                                 <a class="btn btn-secondary btn-sm" href="<?php echo e(route('admin.service.edit', $service->id) . '?language=' . request()->input('language')); ?>">
                                    <span class="btn-label">
                                        <i class="fas fa-edit"></i>
                                    </span>
                                    Edit
                                 </a>
                                 <form class="deleteform d-inline-block" action="<?php echo e(route('admin.service.delete')); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="service_id" value="<?php echo e($service->id); ?>">
                                    <button type="submit" class="btn btn-danger btn-sm deletebtn">
                                        <span class="btn-label">
                                            <i class="fas fa-trash"></i>
                                        </span>
                                        Delete
                                    </button>
                                 </form>
                              </td>
                           </tr>
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
                  <?php echo e($services->appends(['language' => request()->input('language')])->links()); ?>

               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Create Service Modal -->
<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Add Service</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <form class="mb-3 dm-uploader drag-and-drop-zone modal-form" enctype="multipart/form-data" action="<?php echo e(route('admin.service.upload')); ?>" method="POST">
               <div class="form-row px-2">
                  <div class="col-12 mb-2">
                     <label for=""><strong>Image **</strong></label>
                  </div>
                  <div class="col-md-12 d-md-block d-sm-none mb-3">
                     <img src="<?php echo e(asset('assets/admin/img/noimage.jpg')); ?>" alt="..." class="img-thumbnail">
                  </div>
                  <div class="col-sm-12">
                     <div class="from-group mb-2">
                        <input type="text" class="form-control progressbar" aria-describedby="fileHelp" placeholder="No image uploaded..." readonly="readonly" />
                        <div class="progress mb-2 d-none">
                           <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary"
                              role="progressbar"
                              style="width: 0%;"
                              aria-valuenow="0" aria-valuemin="0" aria-valuemax="0">
                              0%
                           </div>
                        </div>
                     </div>
                     <div class="mt-4">
                        <div role="button" class="btn btn-primary mr-2">
                           <i class="fa fa-folder-o fa-fw"></i> Browse Files
                           <input type="file" title='Click to add Files' />
                        </div>
                        <small class="status text-muted">Select a file or drag it over this area..</small>
                        <p class="em text-danger mb-0" id="errservice_image"></p>
                     </div>
                  </div>
               </div>
            </form>
            <form id="ajaxForm" class="modal-form" action="<?php echo e(route('admin.service.store')); ?>" method="POST">
               <?php echo csrf_field(); ?>
               <input type="hidden" id="image" name="" value="">
               <div class="form-group">
                  <label for="">Language **</label>
                  <select id="language" name="language_id" class="form-control">
                     <?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <option value="<?php echo e($lang->id); ?>"><?php echo e($lang->name); ?></option>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                  <p id="errlanguage_id" class="mb-0 text-danger em"></p>
               </div>
               <div class="form-group">
                    <label for="">Title **</label>
                    <input type="text" class="form-control" name="title" placeholder="Enter title" value="">
                    <p id="errtitle" class="mb-0 text-danger em"></p>
               </div>
               <?php if(hasCategory($be->theme_version)): ?>
               <div class="form-group">
                  <label for="">Category **</label>
                  <select id="scategory" class="form-control" name="category" disabled>
                     <option value="" selected disabled>Select a category</option>
                  </select>
                  <p id="errcategory" class="mb-0 text-danger em"></p>
               </div>
               <?php endif; ?>

                <div class="form-group">
                    <label for="">Summary **</label>
                    <textarea class="form-control" name="summary" placeholder="Enter summary" rows="3"></textarea>
                    <p id="errsummary" class="mb-0 text-danger em"></p>
                </div>

                <div class="form-group">
                    <label>Details Page **</label>
                    <div class="selectgroup w-100">
                        <label class="selectgroup-item">
                            <input type="radio" name="details_page_status" value="1" class="selectgroup-input" checked>
                            <span class="selectgroup-button">Enable</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="details_page_status" value="0" class="selectgroup-input">
                            <span class="selectgroup-button">Disable</span>
                        </label>
                    </div>
                    <p id="errdetails_page_status" class="mb-0 text-danger em"></p>
                </div>

               <div class="form-group" id="contentFg">
                  <label for="">Content **</label>
                  <textarea class="form-control summernote" name="content" data-height="300" placeholder="Enter content"></textarea>
                  <p id="errcontent" class="mb-0 text-danger em"></p>
               </div>
               <div class="row">
                   <div class="col-lg-12">
                        <div class="form-group">
                            <label for="">Serial Number **</label>
                            <input type="number" class="form-control ltr" name="serial_number" value="" placeholder="Enter Serial Number">
                            <p id="errserial_number" class="mb-0 text-danger em"></p>
                            <p class="text-warning"><small>The higher the serial number is, the later the service will be shown everywhere.</small></p>
                        </div>
                   </div>
               </div>
               <div class="form-group">
                  <label>Meta Keywords</label>
                  <input class="form-control" name="meta_keywords" value="" placeholder="Enter meta keywords" data-role="tagsinput">
                  <p id="errmeta_keywords" class="mb-0 text-danger em"></p>
               </div>
               <div class="form-group">
                  <label>Meta Description</label>
                  <textarea class="form-control" name="meta_description" rows="5" placeholder="Enter meta description"></textarea>
                  <p id="errmeta_description" class="mb-0 text-danger em"></p>
               </div>
            </form>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button id="submitBtn" type="button" class="btn btn-primary">Submit</button>
         </div>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>


<script>
function toggleDetails() {
    let val = $("input[name='details_page_status']:checked").val();

    // if 'details page' is 'enable', then show 'content' & hide 'summary'
    if (val == 1) {
        $("#contentFg").show();
    }
    // if 'details page' is 'disable', then show 'summary' & hide 'content'
    else if (val == 0) {
        $("#contentFg").hide();
    }
}

$("input[name='details_page_status']").on('change', function() {
    toggleDetails();
});
</script>

<?php if(hasCategory($be->theme_version)): ?>
    <script>
        function loadCategories() {
            $("#scategory").removeAttr('disabled');
            let langid = $("select[name='language_id']").val();
            let url = "<?php echo e(url('/')); ?>/admin/service/" + langid + "/getcats";
            // console.log(url);
            $.get(url, function(data) {
                console.log(data);
                let options = `<option value="" disabled selected>Select a category</option>`;
                for (let i = 0; i < data.length; i++) {
                    options += `<option value="${data[i].id}">${data[i].name}</option>`;
                }
                $("#scategory").html(options);

            });
        }

        $(document).ready(function() {

            loadCategories();

            $("select[name='language_id']").on('change', function() {
                loadCategories();
            });

        });
    </script>
<?php endif; ?>

<script>
    $(document).ready(function() {
        // make input fields RTL
        $("select[name='language_id']").on('change', function() {
            $(".request-loader").addClass("show");
            let url = "<?php echo e(url('/')); ?>/admin/rtlcheck/" + $(this).val();
            console.log(url);
            $.get(url, function(data) {
                $(".request-loader").removeClass("show");
                if (data == 1) {
                    $("form.modal-form input").each(function() {
                        if (!$(this).hasClass('ltr')) {
                            $(this).addClass('rtl');
                        }
                    });
                    $("form.modal-form select").each(function() {
                        if (!$(this).hasClass('ltr')) {
                            $(this).addClass('rtl');
                        }
                    });
                    $("form.modal-form textarea").each(function() {
                        if (!$(this).hasClass('ltr')) {
                            $(this).addClass('rtl');
                        }
                    });
                    $("form.modal-form .summernote").each(function() {
                        $(this).siblings('.note-editor').find('.note-editable').addClass('rtl text-right');
                    });

                } else {
                    $("form.modal-form input, form.modal-form select, form.modal-form textarea").removeClass('rtl');
                    $("form.modal-form .summernote").siblings('.note-editor').find('.note-editable').removeClass('rtl text-right');
                }
            })
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\logistics\core\resources\views/admin/service/service/index.blade.php ENDPATH**/ ?>