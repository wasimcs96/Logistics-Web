<?php $__env->startSection('styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('assets/admin/css/bootstrap-iconpicker.min.css')); ?>">
<?php $__env->stopSection(); ?>

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
    <h4 class="page-title">Drag & Drop Menu Builder</h4>
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
        <a href="#">Menu Builder</a>
      </li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-10">
                    <div class="card-title">Menu Builder</div>
                </div>
                <div class="col-lg-2">
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
        <div class="card-body pt-5 pb-5">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card border-primary mb-3">
                        <div class="card-header bg-primary text-white">Choose from Redymade Menus</div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item"><?php echo e(__('Home')); ?> <a data-text="<?php echo e(__('Home')); ?>" data-type="home" class="addToMenus btn btn-primary btn-sm float-right" href="">Add to Menus</a></li>
                                <li class="list-group-item"><?php echo e(__('Services')); ?> <a data-text="<?php echo e(__('Services')); ?>" data-type="services" class="addToMenus btn btn-primary btn-sm float-right" href="">Add to Menus</a></li>
                                <li class="list-group-item"><?php echo e(__('Packages')); ?> <a data-text="<?php echo e(__('Packages')); ?>" data-type="packages" class="addToMenus btn btn-primary btn-sm float-right" href="">Add to Menus</a></li>
                                <!-- <li class="list-group-item"><?php echo e(__('Portfolios')); ?> <a data-text="<?php echo e(__('Portfolios')); ?>" data-type="portfolios" class="addToMenus btn btn-primary btn-sm float-right" href="">Add to Menus</a></li> -->

                                <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="list-group-item"><?php echo e($page->name); ?> <a data-text="<?php echo e($page->name); ?>" data-type="<?php echo e($page->id); ?>" class="addToMenus btn btn-primary btn-sm float-right" href="">Add to Menus</a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                

                                <li class="list-group-item"><?php echo e(__('Team Members')); ?> <a data-text="<?php echo e(__('Team Members')); ?>" data-type="team" class="addToMenus btn btn-primary btn-sm float-right" href="">Add to Menus</a></li>
                                <li class="list-group-item"><?php echo e(__('Career')); ?> <a data-text="<?php echo e(__('Career')); ?>" data-type="career" class="addToMenus btn btn-primary btn-sm float-right" href="">Add to Menus</a></li>
                                <li class="list-group-item"><?php echo e(__('Event Calendar')); ?> <a data-text="<?php echo e(__('Event Calendar')); ?>" data-type="calendar" class="addToMenus btn btn-primary btn-sm float-right" href="">Add to Menus</a></li>
                                <li class="list-group-item"><?php echo e(__('Gallery')); ?> <a data-text="<?php echo e(__('Gallery')); ?>" data-type="gallery" class="addToMenus btn btn-primary btn-sm float-right" href="">Add to Menus</a></li>
                                <li class="list-group-item"><?php echo e(__('FAQ')); ?> <a data-text="<?php echo e(__('FAQ')); ?>" data-type="faq" class="addToMenus btn btn-primary btn-sm float-right" href="">Add to Menus</a></li>


                                <li class="list-group-item"><?php echo e(__('Products')); ?> <a data-text="<?php echo e(__('Products')); ?>" data-type="products" class="addToMenus btn btn-primary btn-sm float-right" href="">Add to Menus</a></li>
                                <li class="list-group-item"><?php echo e(__('Cart')); ?> <a data-text="<?php echo e(__('Cart')); ?>" data-type="cart" class="addToMenus btn btn-primary btn-sm float-right" href="">Add to Menus</a></li>
                                <li class="list-group-item"><?php echo e(__('Checkout')); ?> <a data-text="<?php echo e(__('Checkout')); ?>" data-type="checkout" class="addToMenus btn btn-primary btn-sm float-right" href="">Add to Menus</a></li>


                                <li class="list-group-item"><?php echo e(__('Our Blogs')); ?> <a data-text="<?php echo e(__('Our Blogs')); ?>" data-type="blogs" class="addToMenus btn btn-primary btn-sm float-right" href="">Add to Menus</a></li>
                                <li class="list-group-item"><?php echo e(__('RSS News')); ?> <a data-text="<?php echo e(__('RSS News')); ?>" data-type="rss" class="addToMenus btn btn-primary btn-sm float-right" href="">Add to Menus</a></li>
                                <li class="list-group-item"><?php echo e(__('Contact')); ?> <a data-text="<?php echo e(__('Contact')); ?>" data-type="contact" class="addToMenus btn btn-primary btn-sm float-right" href="">Add to Menus</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-primary mb-3">
                        <div class="card-header bg-primary text-white">Add / Edit Menu</div>
                        <div class="card-body">
                            <form id="frmEdit" class="form-horizontal">
                                <input class="item-menu" type="hidden" name="type" value="">

                                <div id="withUrl">
                                    <div class="form-group">
                                        <label for="text">Text</label>
                                        <input type="text" class="form-control item-menu" name="text" placeholder="Text">
                                    </div>
                                    <div class="form-group">
                                        <label for="href">URL</label>
                                        <input type="text" class="form-control item-menu" name="href" placeholder="URL">
                                    </div>
                                    <div class="form-group">
                                        <label for="target">Target</label>
                                        <select name="target" id="target" class="form-control item-menu">
                                            <option value="_self">Self</option>
                                            <option value="_blank">Blank</option>
                                            <option value="_top">Top</option>
                                        </select>
                                    </div>
                                </div>

                                <div id="withoutUrl" style="display: none;">
                                    <div class="form-group">
                                        <label for="text">Text</label>
                                        <input type="text" class="form-control item-menu" name="text" placeholder="Text">
                                    </div>
                                    <div class="form-group">
                                        <label for="href">URL</label>
                                        <input type="text" class="form-control item-menu" name="href" placeholder="URL">
                                    </div>
                                    <div class="form-group">
                                        <label for="target">Target</label>
                                        <select name="target" class="form-control item-menu">
                                            <option value="_self">Self</option>
                                            <option value="_blank">Blank</option>
                                            <option value="_top">Top</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer">
                            <button type="button" id="btnUpdate" class="btn btn-primary" disabled><i class="fas fa-sync-alt"></i> Update</button>
                            <button type="button" id="btnAdd" class="btn btn-success"><i class="fas fa-plus"></i> Add</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card mb-3">
                        <div class="card-header bg-primary text-white">Website Menus</div>
                        <div class="card-body">
                            <ul id="myEditor" class="sortableLists list-group">
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="card-footer pt-3">
            <div class="form">
                <div class="form-group from-show-notify row">
                    <div class="col-12 text-center">
                        <button id="btnOutput" class="btn btn-success">Update Menu</button>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('scripts'); ?>
<script type="text/javascript" src="<?php echo e(asset('assets/admin/js/plugin/jquery-menu-editor/jquery-menu-editor.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/admin/js/plugin/bootstrap-iconpicker/iconset/fontawesome5-3-1.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/admin/js/plugin/bootstrap-iconpicker/bootstrap-iconpicker.min.js')); ?>"></script>
<script>
    function disableWithUrl() {
        $("#withUrl input").removeClass('item-menu');
        $("#withUrl select").removeClass('item-menu');
    }

    function enableWithUrl() {
        $("#withUrl input").addClass('item-menu');
        $("#withUrl select").addClass('item-menu');
    }

    function disableWithoutUrl() {
        $("#withoutUrl input").removeClass('item-menu');
        $("#withoutUrl select").removeClass('item-menu');
    }

    function enableWithoutUrl() {
        $("#withoutUrl input").addClass('item-menu');
        $("#withoutUrl select").addClass('item-menu');
    }

    jQuery(document).ready(function () {
        /* =============== DEMO =============== */
        // menu items
        var arrayjson = <?php echo json_encode($prevMenu); ?>;

        // icon picker options
        var iconPickerOptions = {searchText: "Buscar...", labelHeader: "{0}/{1}"};
        // sortable list options
        var sortableListOptions = {
            placeholderCss: {'background-color': "#cccccc"}
        };

        var editor = new MenuEditor('myEditor', {listOptions: sortableListOptions, iconPicker: iconPickerOptions});
        editor.setForm($('#frmEdit'));
        editor.setUpdateButton($('#btnUpdate'));
        // $('#btnReload').on('click', function () {

            editor.setData(<?php echo $prevMenu; ?>);
        // });

        $('#btnOutput').on('click', function () {
            var str = editor.getString();
            let fd = new FormData();
            // fd.append('language_id', );
            fd.append('str', str);
            fd.append('language_id', <?php echo e($lang_id); ?>);

            $.ajax({
                url: "<?php echo e(route('admin.menu_builder.update')); ?>",
                type: 'POST',
                data: fd,
                contentType: false,
                processData: false,
                success: function(data) {
                    if (data == "success") {
                        location.reload();
                    }
                }
            });
        });

        $("#btnUpdate").click(function(){
            disableWithoutUrl();
            editor.update();
            enableWithoutUrl();
        });

        $('#btnAdd').click(function(){
            disableWithoutUrl();
            $("input[name='type']").val('custom');
            editor.add();
            enableWithoutUrl();
        });
        /* ====================================== */



        // when menu is chosen from readymade menus list
        $(".addToMenus").on('click', function(e) {
            e.preventDefault();
            disableWithUrl();
            $("input[name='type']").val($(this).data('type'));
            $("#withoutUrl input[name='text']").val($(this).data('text'));
            $("#withoutUrl input[name='target']").val('_self');
            editor.add();
            enableWithUrl();

        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\logistics\core\resources\views/admin/menu_builder/index.blade.php ENDPATH**/ ?>