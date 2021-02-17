<?php
  $default = \App\Language::where('is_default', 1)->first();
  $admin = Auth::guard('admin')->user();
  if (!empty($admin->role)) {
    $permissions = $admin->role->permissions;
    $permissions = json_decode($permissions, true);
  }
?>

<div class="sidebar sidebar-style-2" data-background-color="dark2">
  <div class="sidebar-wrapper scrollbar scrollbar-inner">
    <div class="sidebar-content">
      <div class="user">
        <div class="avatar-sm float-left mr-2">
          <?php if(!empty(Auth::guard('admin')->user()->image)): ?>
            <img src="<?php echo e(asset('assets/admin/img/propics/'.Auth::guard('admin')->user()->image)); ?>" alt="..." class="avatar-img rounded">
          <?php else: ?>
            <img src="<?php echo e(asset('assets/admin/img/propics/blank_user.jpg')); ?>" alt="..." class="avatar-img rounded">
          <?php endif; ?>
        </div>
        <div class="info">
          <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
            <span>
              <?php echo e(Auth::guard('admin')->user()->first_name); ?>

              <?php if(empty(Auth::guard('admin')->user()->role)): ?>
                <span class="user-level">Owner</span>
              <?php else: ?>
                <span class="user-level"><?php echo e(Auth::guard('admin')->user()->role->name); ?></span>
              <?php endif; ?>
              <span class="caret"></span>
            </span>
          </a>
          <div class="clearfix"></div>

          <div class="collapse in" id="collapseExample">
            <ul class="nav">
              <li>
                <a href="<?php echo e(route('admin.editProfile')); ?>">
                  <span class="link-collapse">Edit Profile</span>
                </a>
              </li>
              <li>
                <a href="<?php echo e(route('admin.changePass')); ?>">
                  <span class="link-collapse">Change Password</span>
                </a>
              </li>
              <li>
                <a href="<?php echo e(route('admin.logout')); ?>">
                  <span class="link-collapse">Logout</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <ul class="nav nav-primary">

        <?php if(empty($admin->role) || (!empty($permissions) && in_array('Dashboard', $permissions))): ?>
          
          <li class="nav-item <?php if(request()->path() == 'admin/dashboard'): ?> active <?php endif; ?>">
            <a href="<?php echo e(route('admin.dashboard')); ?>">
              <i class="la flaticon-paint-palette"></i>
              <p>Dashboard</p>
            </a>
          </li>
        <?php endif; ?>



        <?php if(empty($admin->role) || (!empty($permissions) && in_array('Basic Settings', $permissions))): ?>
          
          <li class="nav-item
          <?php if(request()->path() == 'admin/favicon'): ?> active
          <?php elseif(request()->path() == 'admin/logo'): ?> active
          <!-- <!-- <?php elseif(request()->path() == 'admin/themeversion'): ?> active -->
          <!-- <?php elseif(request()->path() == 'admin/homeversion'): ?> active --> -->
          <?php elseif(request()->path() == 'admin/basicinfo'): ?> active
          <?php elseif(request()->path() == 'admin/support'): ?> active
          <?php elseif(request()->path() == 'admin/social'): ?> active
          <?php elseif(request()->is('admin/social/*')): ?> active
          <?php elseif(request()->path() == 'admin/breadcrumb'): ?> active
          <?php elseif(request()->path() == 'admin/heading'): ?> active
          <?php elseif(request()->path() == 'admin/script'): ?> active
          <?php elseif(request()->path() == 'admin/seo'): ?> active
          <?php elseif(request()->path() == 'admin/maintainance'): ?> active
          <?php elseif(request()->path() == 'admin/announcement'): ?> active
          <?php elseif(request()->path() == 'admin/cookie-alert'): ?> active
          <?php elseif(request()->path() == 'admin/mail-from-admin'): ?> active
          <?php elseif(request()->path() == 'admin/mail-to-admin'): ?> active
          <?php elseif(request()->path() == 'admin/shipping'): ?> active
          <?php elseif(request()->routeIs('admin.shipping.edit')): ?> active
          <?php elseif(request()->routeIs('admin.product.tags')): ?> active
          <?php elseif(request()->routeIs('admin.featuresettings')): ?> active
          <?php endif; ?>">
            <a data-toggle="collapse" href="#basic">
              <i class="la flaticon-settings"></i>
              <p>Basic Settings</p>
              <span class="caret"></span>
            </a>
            <div class="collapse
            <?php if(request()->path() == 'admin/favicon'): ?> show
            <?php elseif(request()->path() == 'admin/logo'): ?> show
            <!-- <?php elseif(request()->path() == 'admin/themeversion'): ?> show -->
            <!-- <?php elseif(request()->path() == 'admin/homeversion'): ?> show -->
            <?php elseif(request()->path() == 'admin/basicinfo'): ?> show
            <?php elseif(request()->path() == 'admin/support'): ?> show
            <?php elseif(request()->path() == 'admin/social'): ?> show
            <?php elseif(request()->is('admin/social/*')): ?> show
            <?php elseif(request()->path() == 'admin/breadcrumb'): ?> show
            <?php elseif(request()->path() == 'admin/heading'): ?> show
            <?php elseif(request()->path() == 'admin/script'): ?> show
            <?php elseif(request()->path() == 'admin/seo'): ?> show
            <?php elseif(request()->path() == 'admin/maintainance'): ?> show
            <?php elseif(request()->path() == 'admin/announcement'): ?> show
            <?php elseif(request()->path() == 'admin/cookie-alert'): ?> show
            <?php elseif(request()->path() == 'admin/mail-from-admin'): ?> show
            <?php elseif(request()->path() == 'admin/mail-to-admin'): ?> show
            <?php elseif(request()->path() == 'admin/shipping'): ?> show
            <?php elseif(request()->routeIs('admin.shipping.edit')): ?> show
            <?php elseif(request()->routeIs('admin.product.tags')): ?> show
            <?php elseif(request()->routeIs('admin.featuresettings')): ?> show
            <?php endif; ?>" id="basic">
              <ul class="nav nav-collapse">
                <li class="<?php if(request()->path() == 'admin/favicon'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.favicon') . '?language=' . $default->code); ?>">
                    <span class="sub-item">Favicon</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/logo'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.logo') . '?language=' . $default->code); ?>">
                    <span class="sub-item">Logo</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/basicinfo'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.basicinfo') . '?language=' . $default->code); ?>">
                    <span class="sub-item">General Settings</span>
                  </a>
                </li>

                <li class="submenu">
                    <a data-toggle="collapse" href="#emailset" aria-expanded="<?php echo e((request()->path() == 'admin/mail-from-admin' || request()->path() == 'admin/mail-to-admin') ? 'true' : 'false'); ?>">
                      <span class="sub-item">Email Settings</span>
                      <span class="caret"></span>
                    </a>
                    <div class="collapse <?php echo e((request()->path() == 'admin/mail-from-admin' || request()->path() == 'admin/mail-to-admin') ? 'show' : ''); ?>" id="emailset" style="">
                      <ul class="nav nav-collapse subnav">
                        <li class="<?php if(request()->path() == 'admin/mail-from-admin'): ?> active <?php endif; ?>">
                          <a href="<?php echo e(route('admin.mailFromAdmin')); ?>">
                            <span class="sub-item">Mail from Admin</span>
                          </a>
                        </li>
                        <li class="<?php if(request()->path() == 'admin/mail-to-admin'): ?> active <?php endif; ?>">
                          <a href="<?php echo e(route('admin.mailToAdmin')); ?>">
                            <span class="sub-item">Mail to Admin</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                </li>

                <!-- <li class="<?php if(request()->path() == 'admin/themeversion'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.themeversion') . '?language=' . $default->code); ?>">
                    <span class="sub-item">Theme Versions</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/homeversion'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.homeversion') . '?language=' . $default->code); ?>">
                    <span class="sub-item">Home Versions</span>
                  </a>
                </li> -->

                <li class="<?php if(request()->routeIs('admin.featuresettings')): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.featuresettings') . '?language=' . $default->code); ?>">
                    <span class="sub-item">Features Settings</span>
                  </a>
                </li>

                <li class="submenu">
                  <a data-toggle="collapse" href="#shopset" aria-expanded="<?php echo e((request()->path() == 'admin/shipping' || request()->routeIs('admin.shipping.edit')) || request()->routeIs('admin.product.tags') ? 'true' : 'false'); ?>">
                    <span class="sub-item">Shop Settings</span>
                    <span class="caret"></span>
                  </a>
                  <div class="collapse <?php echo e((request()->path() == 'admin/shipping' || request()->routeIs('admin.shipping.edit')) || request()->routeIs('admin.product.tags') ? 'show' : ''); ?>" id="shopset" style="">
                    <ul class="nav nav-collapse subnav">
                      <li class="
                      <?php if(request()->path() == 'admin/shipping'): ?> active
                      <?php elseif(request()->routeIs('admin.shipping.edit')): ?> active
                      <?php endif; ?>">
                        <a href="<?php echo e(route('admin.shipping.index'). '?language=' . $default->code); ?>">
                          <span class="sub-item">Shipping Charges</span>
                        </a>
                      </li>
                      <li class="<?php if(request()->routeIs('admin.product.tags')): ?> active <?php endif; ?>">
                        <a href="<?php echo e(route('admin.product.tags'). '?language=' . $default->code); ?>">
                          <span class="sub-item">Popular Tags</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>

                <li class="<?php if(request()->path() == 'admin/support'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.support') . '?language=' . $default->code); ?>">
                    <span class="sub-item">Support Informations</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/social'): ?> active
                <?php elseif(request()->is('admin/social/*')): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.social.index')); ?>">
                    <span class="sub-item">Social Links</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/breadcrumb'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.breadcrumb') . '?language=' . $default->code); ?>">
                    <span class="sub-item">Breadcrumb</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/heading'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.heading') . '?language=' . $default->code); ?>">
                    <span class="sub-item">Page Headings</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/script'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.script')); ?>">
                    <span class="sub-item">Scripts</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/seo'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.seo') . '?language=' . $default->code); ?>">
                    <span class="sub-item">SEO Information</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/maintainance'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.maintainance')); ?>">
                    <span class="sub-item">Maintainance Mode</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/announcement'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.announcement') . '?language=' . $default->code); ?>">
                    <span class="sub-item">Announcement Popup</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/cookie-alert'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.cookie.alert') . '?language=' . $default->code); ?>">
                    <span class="sub-item">Cookie Alert</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
        <?php endif; ?>


        
        <?php if(empty($admin->role) || (!empty($permissions) && in_array('Customers', $permissions))): ?>
        <li class="nav-item
        <?php if(request()->routeIs('admin.register.user')): ?> active
        <?php elseif(request()->routeIs('register.user.view')): ?> active
        <?php endif; ?>">
            <a href="<?php echo e(route('admin.register.user')); ?>">
                <i class="la flaticon-users"></i>
                <p>Customers</p>
            </a>
        </li>
        <?php endif; ?>

        <?php if(empty($admin->role) || (!empty($permissions) && in_array('Trucks', $permissions))): ?>
        <li class="nav-item
        <?php if(request()->routeIs('admin.truck.index')): ?> active
        <?php elseif(request()->routeIs('admin.truck.show')): ?> active
        <?php endif; ?>">

            <a href="<?php echo e(route('admin.truck.index')); ?>">
                <i class="fas fa-truck"></i>
                <p>Trucks Management</p>
            </a>
        </li>
        <?php endif; ?>

        <?php if(isset(Auth::guard('admin')->user()->role_id)): ?>
        <?php if(Auth::guard('admin')->user()->role_id == 6): ?>
        <!-- <?php if(empty($admin->role) || (!empty($permissions) && in_array('Trucks', $permissions))): ?> -->
        <li class="nav-item
        <?php if(request()->routeIs('driver.index')): ?> active
        <?php endif; ?>">
       
            <a href="<?php echo e(route('driver.index')); ?>">
                <i class="la flaticon-file"></i>
                <p>My orders</p>
            </a>
        </li>
        <!-- <?php endif; ?> -->
        <?php endif; ?>
        <?php endif; ?>



        <?php if(empty($admin->role) || (!empty($permissions) && in_array('Subscribers', $permissions))): ?>
          
          <li class="nav-item
          <?php if(request()->path() == 'admin/subscribers'): ?> active
          <?php elseif(request()->path() == 'admin/mailsubscriber'): ?> active
          <?php endif; ?>">
            <a data-toggle="collapse" href="#subscribers">
              <i class="la flaticon-envelope"></i>
              <p>Subscribers</p>
              <span class="caret"></span>
            </a>
            <div class="collapse
            <?php if(request()->path() == 'admin/subscribers'): ?> show
            <?php elseif(request()->path() == 'admin/mailsubscriber'): ?> show
            <?php endif; ?>" id="subscribers">
              <ul class="nav nav-collapse">
                <li class="<?php if(request()->path() == 'admin/subscribers'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.subscriber.index')); ?>">
                    <span class="sub-item">Subscribers</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/mailsubscriber'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.mailsubscriber')); ?>">
                    <span class="sub-item">Mail to Subscribers</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
        <?php endif; ?>





        <?php if(empty($admin->role) || (!empty($permissions) && in_array('Package Management', $permissions))): ?>
          
          <li class="nav-item
          <?php if(request()->path() == 'admin/packages'): ?> active
          <?php elseif(request()->path() == 'admin/package/form'): ?> active
          <?php elseif(request()->is('admin/package/*/inputEdit')): ?> active
          <?php elseif(request()->path() == 'admin/all/orders'): ?> active
          <?php elseif(request()->path() == 'admin/pending/orders'): ?> active
          <?php elseif(request()->path() == 'admin/processing/orders'): ?> active
          <?php elseif(request()->path() == 'admin/completed/orders'): ?> active
          <?php elseif(request()->path() == 'admin/rejected/orders'): ?> active
          <?php endif; ?>">
            <a data-toggle="collapse" href="#packages">
              <i class="la flaticon-box-1"></i>
              <p>Package Management</p>
              <span class="caret"></span>
            </a>
            <div class="collapse
            <?php if(request()->path() == 'admin/packages'): ?> show
            <?php elseif(request()->path() == 'admin/package/form'): ?> show
            <?php elseif(request()->is('admin/package/*/inputEdit')): ?> show
            <?php elseif(request()->path() == 'admin/all/orders'): ?> show
            <?php elseif(request()->path() == 'admin/pending/orders'): ?> show
            <?php elseif(request()->path() == 'admin/processing/orders'): ?> show
            <?php elseif(request()->path() == 'admin/completed/orders'): ?> show
            <?php elseif(request()->path() == 'admin/rejected/orders'): ?> show
            <?php endif; ?>" id="packages">
              <ul class="nav nav-collapse">
                <li class="
                <?php if(request()->path() == 'admin/package/form'): ?> active
                <?php elseif(request()->is('admin/package/*/inputEdit')): ?> active
                <?php endif; ?>">
                  <a href="<?php echo e(route('admin.package.form') . '?language=' . $default->code); ?>">
                    <span class="sub-item">Form Builder</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/packages'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.package.index') . '?language=' . $default->code); ?>">
                    <span class="sub-item">Packages</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/all/orders'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.all.orders')); ?>">
                    <span class="sub-item">All Orders</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/pending/orders'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.pending.orders')); ?>">
                    <span class="sub-item">Pending Orders</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/processing/orders'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.processing.orders')); ?>">
                    <span class="sub-item">Processing Orders</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/completed/orders'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.completed.orders')); ?>">
                    <span class="sub-item">Completed Orders</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/rejected/orders'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.rejected.orders')); ?>">
                    <span class="sub-item">Rejected Orders</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
        <?php endif; ?>


        <?php if(empty($admin->role) || (!empty($permissions) && in_array('Quote Management', $permissions))): ?>
          
          <li class="nav-item
          <?php if(request()->path() == 'admin/quote/form'): ?> active
          <?php elseif(request()->is('admin/quote/*/inputEdit')): ?> active
          <?php elseif(request()->path() == 'admin/all/quotes'): ?> active
          <?php elseif(request()->path() == 'admin/pending/quotes'): ?> active
          <?php elseif(request()->path() == 'admin/processing/quotes'): ?> active
          <?php elseif(request()->path() == 'admin/completed/quotes'): ?> active
          <?php elseif(request()->path() == 'admin/rejected/quotes'): ?> active
          <?php elseif(request()->path() == 'admin/quote/visibility'): ?> active
          <?php endif; ?>">
            <a data-toggle="collapse" href="#quote">
              <i class="la flaticon-list"></i>
              <p>Quote Management</p>
              <span class="caret"></span>
            </a>
            <div class="collapse
            <?php if(request()->path() == 'admin/quote/form'): ?> show
            <?php elseif(request()->is('admin/quote/*/inputEdit')): ?> show
            <?php elseif(request()->path() == 'admin/all/quotes'): ?> show
            <?php elseif(request()->path() == 'admin/pending/quotes'): ?> show
            <?php elseif(request()->path() == 'admin/processing/quotes'): ?> show
            <?php elseif(request()->path() == 'admin/completed/quotes'): ?> show
            <?php elseif(request()->path() == 'admin/rejected/quotes'): ?> show
            <?php elseif(request()->path() == 'admin/quote/visibility'): ?> show
            <?php endif; ?>" id="quote">
              <ul class="nav nav-collapse">
                <li class="
                <?php if(request()->path() == 'admin/quote/visibility'): ?> active
                <?php endif; ?>">
                  <a href="<?php echo e(route('admin.quote.visibility')); ?>">
                    <span class="sub-item">Visibility</span>
                  </a>
                </li>
                <li class="
                <?php if(request()->path() == 'admin/quote/form'): ?> active
                <?php elseif(request()->is('admin/quote/*/inputEdit')): ?> active
                <?php endif; ?>">
                  <a href="<?php echo e(route('admin.quote.form') . '?language=' . $default->code); ?>">
                    <span class="sub-item">Form Builder</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/all/quotes'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.all.quotes')); ?>">
                    <span class="sub-item">All Quotes</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/pending/quotes'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.pending.quotes')); ?>">
                    <span class="sub-item">Pending Quotes</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/processing/quotes'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.processing.quotes')); ?>">
                    <span class="sub-item">Processing Quotes</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/completed/quotes'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.completed.quotes')); ?>">
                    <span class="sub-item">Completed Quotes</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/rejected/quotes'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.rejected.quotes')); ?>">
                    <span class="sub-item">Rejected Quotes</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
        <?php endif; ?>



        <?php if(empty($admin->role) || (!empty($permissions) && in_array('Product Management', $permissions))): ?>
          
          <li class="nav-item
          <?php if(request()->path() == 'admin/category'): ?> active
          <?php elseif(request()->path() == 'admin/product'): ?> active
          <?php elseif(request()->is('admin/product/*/edit')): ?> active
          <?php elseif(request()->is('admin/category/*/edit')): ?> active
          <?php elseif(request()->path() == 'admin/product/all/orders'): ?> active
          <?php elseif(request()->path() == 'admin/product/pending/orders'): ?> active
          <?php elseif(request()->path() == 'admin/product/processing/orders'): ?> active
          <?php elseif(request()->path() == 'admin/product/completed/orders'): ?> active
          <?php elseif(request()->path() == 'admin/product/rejected/orders'): ?> active
          <?php elseif(request()->routeIs('admin.product.create')): ?> active
          <?php elseif(request()->routeIs('admin.product.details')): ?> active
          <?php endif; ?>">
            <a data-toggle="collapse" href="#category">
              <i class="fab fa-product-hunt"></i>
              <p>Product Management</p>
              <span class="caret"></span>
            </a>
            <div class="collapse
            <?php if(request()->path() == 'admin/category'): ?> show
            <?php elseif(request()->is('admin/category/*/edit')): ?> show
            <?php elseif(request()->path() == 'admin/product'): ?> show
            <?php elseif(request()->is('admin/product/*/edit')): ?> show
            <?php elseif(request()->path() == 'admin/product/all/orders'): ?> show
            <?php elseif(request()->path() == 'admin/product/pending/orders'): ?> show
            <?php elseif(request()->path() == 'admin/product/processing/orders'): ?> show
            <?php elseif(request()->path() == 'admin/product/completed/orders'): ?> show
            <?php elseif(request()->path() == 'admin/product/rejected/orders'): ?> show
            <?php elseif(request()->routeIs('admin.product.create')): ?> show
            <?php elseif(request()->routeIs('admin.product.details')): ?> show
            <?php endif; ?>" id="category">
              <ul class="nav nav-collapse">
                <li class="
                <?php if(request()->path() == 'admin/category'): ?> active
                <?php elseif(request()->is('admin/category/*/edit')): ?> active
                <?php endif; ?>">
                  <a href="<?php echo e(route('admin.category.index') . '?language=' . $default->code); ?>">
                    <span class="sub-item">Category</span>
                  </a>
                </li>

                <li class="
                <?php if(request()->path() == 'admin/product'): ?> active
                <?php elseif(request()->is('admin/product/*/edit')): ?> active
                <?php elseif(request()->routeIs('admin.product.create')): ?> active
                <?php endif; ?>">
                  <a href="<?php echo e(route('admin.product.index'). '?language=' . $default->code); ?>">
                    <span class="sub-item">Products</span>
                  </a>
                </li>


                <li class="<?php if(request()->path() == 'admin/product/all/orders'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.all.product.orders')); ?>">
                    <span class="sub-item">All Orders</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/product/pending/orders'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.pending.product.orders')); ?>">
                    <span class="sub-item">Pending Orders</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/product/processing/orders'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.processing.product.orders')); ?>">
                    <span class="sub-item">Processing Orders</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/product/completed/orders'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.completed.product.orders')); ?>">
                    <span class="sub-item">Completed Orders</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/product/rejected/orders'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.rejected.product.orders')); ?>">
                    <span class="sub-item">Rejected Orders</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
        <?php endif; ?>



<?php if(empty($admin->role) || (!empty($permissions) && in_array('Tickets', $permissions))): ?>
        
        <li class="nav-item
            <?php if(request()->path() == 'admin/all/tickets'): ?> active
            <?php elseif(request()->path() == 'admin/pending/tickets'): ?> active
            <?php elseif(request()->path() == 'admin/open/tickets'): ?> active
            <?php elseif(request()->path() == 'admin/closed/tickets'): ?> active
            <?php elseif(request()->routeIs('admin.ticket.messages')): ?> active
            <?php endif; ?>">
            <a data-toggle="collapse" href="#tickets">
                <i class="la flaticon-web-1"></i>
                <p>Tickets</p>
                <span class="caret"></span>
            </a>
            <div class="collapse
            <?php if(request()->path() == 'admin/all/tickets'): ?> show
            <?php elseif(request()->path() == 'admin/pending/tickets'): ?> show
            <?php elseif(request()->path() == 'admin/open/tickets'): ?> show
            <?php elseif(request()->path() == 'admin/closed/tickets'): ?> show
            <?php elseif(request()->routeIs('admin.ticket.messages')): ?> show
            <?php endif; ?>" id="tickets">
                <ul class="nav nav-collapse">
                    <li class="<?php if(request()->path() == 'admin/all/tickets'): ?> active <?php endif; ?>">
                        <a href="<?php echo e(route('admin.tickets.all')); ?>">
                        <span class="sub-item">All Tickets</span>
                        </a>
                    </li>
                    <li class="<?php if(request()->path() == 'admin/pending/tickets'): ?> active <?php endif; ?>">
                        <a href="<?php echo e(route('admin.tickets.pending')); ?>">
                        <span class="sub-item">Pending Tickets</span>
                        </a>
                    </li>
                    <li class="<?php if(request()->path() == 'admin/open/tickets'): ?> active <?php endif; ?>">
                        <a href="<?php echo e(route('admin.tickets.open')); ?>">
                        <span class="sub-item">Open Tickets</span>
                        </a>
                    </li>
                    <li class="<?php if(request()->path() == 'admin/closed/tickets'): ?> active <?php endif; ?>">
                        <a href="<?php echo e(route('admin.tickets.closed')); ?>">
                        <span class="sub-item">Closed Tickets</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>

  <?php endif; ?>

        <?php if(empty($admin->role) || (!empty($permissions) && in_array('Payment Gateways', $permissions))): ?>
          
          <li class="nav-item
          <?php if(request()->path() == 'admin/gateways'): ?> active
          <?php elseif(request()->path() == 'admin/offline/gateways'): ?> active
          <?php endif; ?>">
            <a data-toggle="collapse" href="#gateways">
              <i class="la flaticon-paypal"></i>
              <p>Payment Gateways</p>
              <span class="caret"></span>
            </a>
            <div class="collapse
            <?php if(request()->path() == 'admin/gateways'): ?> show
            <?php elseif(request()->path() == 'admin/offline/gateways'): ?> show
            <?php endif; ?>" id="gateways">
              <ul class="nav nav-collapse">
                <li class="<?php if(request()->path() == 'admin/gateways'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.gateway.index')); ?>">
                    <span class="sub-item">Online Gateways</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/offline/gateways'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.gateway.offline') . '?language=' . $default->code); ?>">
                    <span class="sub-item">Offline Gateways</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

        <?php endif; ?>




        <?php if(empty($admin->role) || (!empty($permissions) && in_array('Home Page', $permissions))): ?>
          
          <li class="nav-item
          <?php if(request()->path() == 'admin/features'): ?> active
          <?php elseif(request()->path() == 'admin/introsection'): ?> active
          <?php elseif(request()->path() == 'admin/servicesection'): ?> active
          <?php elseif(request()->path() == 'admin/herosection/static'): ?> active
          <?php elseif(request()->path() == 'admin/herosection/video'): ?> active
          <?php elseif(request()->path() == 'admin/herosection/sliders'): ?> active
          <?php elseif(request()->is('admin/herosection/slider/*/edit')): ?> active
          <?php elseif(request()->path() == 'admin/approach'): ?> active
          <?php elseif(request()->is('admin/approach/*/pointedit')): ?> active
          <?php elseif(request()->path() == 'admin/statistics'): ?> active
          <?php elseif(request()->is('admin/statistics/*/edit')): ?> active
          <?php elseif(request()->path() == 'admin/members'): ?> active
          <?php elseif(request()->is('admin/member/*/edit')): ?> active
          <?php elseif(request()->is('admin/approach/*/pointedit')): ?> active
          <?php elseif(request()->path() == 'admin/cta'): ?> active
          <?php elseif(request()->is('admin/feature/*/edit')): ?> active
          <?php elseif(request()->path() == 'admin/testimonials'): ?> active
          <?php elseif(request()->is('admin/testimonial/*/edit')): ?> active
          <?php elseif(request()->path() == 'admin/invitation'): ?> active
          <?php elseif(request()->path() == 'admin/partners'): ?> active
          <?php elseif(request()->is('admin/partner/*/edit')): ?> active
          <?php elseif(request()->path() == 'admin/portfoliosection'): ?> active
          <?php elseif(request()->path() == 'admin/blogsection'): ?> active
          <?php elseif(request()->path() == 'admin/member/create'): ?> active
          <?php elseif(request()->path() == 'admin/sections'): ?> active
          <?php elseif(request()->path() == 'admin/package/background'): ?> active
          <?php endif; ?>">
            <a data-toggle="collapse" href="#home">
              <i class="la flaticon-home"></i>
              <p>Home Page</p>
              <span class="caret"></span>
            </a>
            <div class="collapse
            <?php if(request()->path() == 'admin/features'): ?> show
            <?php elseif(request()->path() == 'admin/introsection'): ?> show
            <?php elseif(request()->path() == 'admin/servicesection'): ?> show
            <?php elseif(request()->path() == 'admin/herosection/static'): ?> show
            <?php elseif(request()->path() == 'admin/herosection/video'): ?> show
            <?php elseif(request()->path() == 'admin/herosection/sliders'): ?> show
            <?php elseif(request()->is('admin/herosection/slider/*/edit')): ?> show
            <?php elseif(request()->path() == 'admin/approach'): ?> show
            <?php elseif(request()->is('admin/approach/*/pointedit')): ?> show
            <?php elseif(request()->path() == 'admin/statistics'): ?> show
            <?php elseif(request()->is('admin/statistics/*/edit')): ?> show
            <?php elseif(request()->path() == 'admin/members'): ?> show
            <?php elseif(request()->is('admin/member/*/edit')): ?> show
            <?php elseif(request()->path() == 'admin/cta'): ?> show
            <?php elseif(request()->is('admin/feature/*/edit')): ?> show
            <?php elseif(request()->path() == 'admin/testimonials'): ?> show
            <?php elseif(request()->is('admin/testimonial/*/edit')): ?> show
            <?php elseif(request()->path() == 'admin/invitation'): ?> show
            <?php elseif(request()->path() == 'admin/partners'): ?> show
            <?php elseif(request()->is('admin/partner/*/edit')): ?> show
            <?php elseif(request()->path() == 'admin/portfoliosection'): ?> show
            <?php elseif(request()->path() == 'admin/blogsection'): ?> show
            <?php elseif(request()->path() == 'admin/member/create'): ?> show
            <?php elseif(request()->path() == 'admin/sections'): ?> show
            <?php elseif(request()->path() == 'admin/package/background'): ?> show
            <?php endif; ?>" id="home">
              <ul class="nav nav-collapse">
                <li class="
                <?php if(request()->path() == 'admin/herosection/static'): ?> selected
                <?php elseif(request()->path() == 'admin/herosection/video'): ?> selected
                <?php elseif(request()->path() == 'admin/herosection/sliders'): ?> selected
                <?php elseif(request()->is('admin/herosection/slider/*/edit')): ?> selected
                <?php endif; ?>">
                  <a data-toggle="collapse" href="#herosection">
                    <span class="sub-item">Hero Section</span>
                    <span class="caret"></span>
                  </a>
                  <div class="collapse
                  <?php if(request()->path() == 'admin/herosection/static'): ?> show
                  <?php elseif(request()->path() == 'admin/herosection/video'): ?> show
                  <?php elseif(request()->path() == 'admin/herosection/sliders'): ?> show
                  <?php elseif(request()->is('admin/herosection/slider/*/edit')): ?> show
                  <?php endif; ?>" id="herosection">
                    <ul class="nav nav-collapse subnav">
                      <li class="<?php if(request()->path() == 'admin/herosection/static'): ?> active <?php endif; ?>">
                        <a href="<?php echo e(route('admin.herosection.static') . '?language=' . $default->code); ?>">
                          <span class="sub-item">Static Version</span>
                        </a>
                      </li>
                      <li class="
                      <?php if(request()->path() == 'admin/herosection/sliders'): ?> active
                      <?php elseif(request()->is('admin/herosection/slider/*/edit')): ?> active
                      <?php endif; ?>">
                        <a href="<?php echo e(route('admin.slider.index') . '?language=' . $default->code); ?>">
                          <span class="sub-item">Slider Version</span>
                        </a>
                      </li>
                      <li class="<?php if(request()->path() == 'admin/herosection/video'): ?> active <?php endif; ?>">
                        <a href="<?php echo e(route('admin.herosection.video') . '?language=' . $default->code); ?>">
                          <span class="sub-item">Video Version</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>

                <li class="
                <?php if(request()->path() == 'admin/features'): ?> active
                <?php elseif(request()->is('admin/feature/*/edit')): ?> active
                <?php endif; ?>">
                  <a href="<?php echo e(route('admin.feature.index') . '?language=' . $default->code); ?>">
                    <span class="sub-item">Features</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/introsection'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.introsection.index') . '?language=' . $default->code); ?>">
                    <span class="sub-item">Intro Section</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/servicesection'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.servicesection.index') . '?language=' . $default->code); ?>">
                    <span class="sub-item">Service Section</span>
                  </a>
                </li>
                <li class="
                <?php if(request()->path() == 'admin/approach'): ?> active
                <?php elseif(request()->is('admin/approach/*/pointedit')): ?> active
                <?php endif; ?>">
                  <a href="<?php echo e(route('admin.approach.index') . '?language=' . $default->code); ?>">
                    <span class="sub-item">Approach Section</span>
                  </a>
                </li>
                <li class="
                <?php if(request()->path() == 'admin/statistics'): ?> active
                <?php elseif(request()->is('admin/statistics/*/edit')): ?> active
                <?php endif; ?>">
                  <a href="<?php echo e(route('admin.statistics.index') . '?language=' . $default->code); ?>">
                    <span class="sub-item">Statistics Section</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/cta'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.cta.index') . '?language=' . $default->code); ?>">
                    <span class="sub-item">Call to Action Section</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/portfoliosection'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.portfoliosection.index') . '?language=' . $default->code); ?>">
                    <span class="sub-item">Portfolio Section</span>
                  </a>
                </li>
                <li class="
                <?php if(request()->path() == 'admin/testimonials'): ?> active
                <?php elseif(request()->is('admin/testimonial/*/edit')): ?> active
                <?php endif; ?>">
                  <a href="<?php echo e(route('admin.testimonial.index') . '?language=' . $default->code); ?>">
                    <span class="sub-item">Testimonials</span>
                  </a>
                </li>
                <li class="
                <?php if(request()->path() == 'admin/members'): ?> active
                <?php elseif(request()->is('admin/member/*/edit')): ?> active
                <?php elseif(request()->path() == 'admin/member/create'): ?> active
                <?php endif; ?>">
                  <a href="<?php echo e(route('admin.member.index') . '?language=' . $default->code); ?>">
                    <span class="sub-item">Team Section</span>
                  </a>
                </li>
                <li class="
                <?php if(request()->path() == 'admin/package/background'): ?> active
                <?php endif; ?>">
                  <a href="<?php echo e(route('admin.package.background') . '?language=' . $default->code); ?>">
                    <span class="sub-item">Package Background</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/blogsection'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.blogsection.index') . '?language=' . $default->code); ?>">
                    <span class="sub-item">Blog Section</span>
                  </a>
                </li>
                <li class="
                <?php if(request()->path() == 'admin/partners'): ?> active
                <?php elseif(request()->is('admin/partner/*/edit')): ?> active
                <?php endif; ?>">
                  <a href="<?php echo e(route('admin.partner.index') . '?language=' . $default->code); ?>">
                    <span class="sub-item">Partners</span>
                  </a>
                </li>
                <li class="
                <?php if(request()->path() == 'admin/sections'): ?> active
                <?php endif; ?>">
                  <a href="<?php echo e(route('admin.sections.index') . '?language=' . $default->code); ?>">
                    <span class="sub-item">Section Customization</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
        <?php endif; ?>


      <?php if(empty($admin->role) || (!empty($permissions) && in_array('Menu Builder', $permissions))): ?>
      
      <li class="nav-item
        <?php if(request()->path() == 'admin/menu-builder'): ?> active <?php endif; ?>">
        <a href="<?php echo e(route('admin.menu_builder.index') . '?language=' . $default->code); ?>">
          <i class="fas fa-bars"></i>
          <p>Drag & Drop Menu Builder</p>
        </a>
      </li>
    <?php endif; ?>



        <?php if(empty($admin->role) || (!empty($permissions) && in_array('Footer', $permissions))): ?>
          
          <li class="nav-item
          <?php if(request()->path() == 'admin/footers'): ?> active
          <?php elseif(request()->path() == 'admin/ulinks'): ?> active
          <?php endif; ?>">
            <a data-toggle="collapse" href="#footer">
              <i class="la flaticon-layers"></i>
              <p>Footer</p>
              <span class="caret"></span>
            </a>
            <div class="collapse
            <?php if(request()->path() == 'admin/footers'): ?> show
            <?php elseif(request()->path() == 'admin/ulinks'): ?> show
            <?php endif; ?>" id="footer">
              <ul class="nav nav-collapse">
                <li class="<?php if(request()->path() == 'admin/footers'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.footer.index') . '?language=' . $default->code); ?>">
                    <span class="sub-item">Logo & Text</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/ulinks'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.ulink.index') . '?language=' . $default->code); ?>">
                    <span class="sub-item">Useful Links</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
        <?php endif; ?>



        <?php if(empty($admin->role) || (!empty($permissions) && in_array('Pages', $permissions))): ?>
          
          <li class="nav-item
          <?php if(request()->path() == 'admin/page/create'): ?> active
          <?php elseif(request()->path() == 'admin/pages'): ?> active
          <?php elseif(request()->is('admin/page/*/edit')): ?> active
          <?php endif; ?>">
            <a data-toggle="collapse" href="#pages">
              <i class="la flaticon-file"></i>
              <p>Pages</p>
              <span class="caret"></span>
            </a>
            <div class="collapse
            <?php if(request()->path() == 'admin/page/create'): ?> show
            <?php elseif(request()->path() == 'admin/pages'): ?> show
            <?php elseif(request()->is('admin/page/*/edit')): ?> show
            <?php endif; ?>" id="pages">
              <ul class="nav nav-collapse">
                <li class="<?php if(request()->path() == 'admin/page/create'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.page.create')); ?>">
                    <span class="sub-item">Create Page</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/pages'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.page.index') . '?language=' . $default->code); ?>">
                    <span class="sub-item">Pages</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
        <?php endif; ?>



        <?php if(empty($admin->role) || (!empty($permissions) && in_array('Service Page', $permissions))): ?>
          
          <li class="nav-item
          <?php if(request()->path() == 'admin/scategorys'): ?> active
          <?php elseif(request()->is('admin/scategory/*/edit')): ?> active
          <?php elseif(request()->path() == 'admin/services'): ?> active
          <?php elseif(request()->is('admin/service/*/edit')): ?> active
          <?php endif; ?>">
            <a data-toggle="collapse" href="#service">
              <i class="la flaticon-customer-support"></i>
              <p>Service Page</p>
              <span class="caret"></span>
            </a>
            <div class="collapse
            <?php if(request()->path() == 'admin/scategorys'): ?> show
            <?php elseif(request()->is('admin/scategory/*/edit')): ?> show
            <?php elseif(request()->path() == 'admin/services'): ?> show
            <?php elseif(request()->is('admin/service/*/edit')): ?> show
            <?php endif; ?>" id="service">
              <ul class="nav nav-collapse">
                <?php if(hasCategory($be->theme_version)): ?>
                <li class="
                <?php if(request()->path() == 'admin/scategorys'): ?> active
                <?php elseif(request()->is('admin/scategory/*/edit')): ?> active
                <?php endif; ?>">
                  <a href="<?php echo e(route('admin.scategory.index') . '?language=' . $default->code); ?>">
                    <span class="sub-item">Category</span>
                  </a>
                </li>
                <?php endif; ?>
                <li class="
                <?php if(request()->path() == 'admin/services'): ?> active
                <?php elseif(request()->is('admin/service/*/edit')): ?> active
                <?php endif; ?>">
                  <a href="<?php echo e(route('admin.service.index') . '?language=' . $default->code); ?>">
                    <span class="sub-item">Services</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
        <?php endif; ?>



        <?php if(empty($admin->role) || (!empty($permissions) && in_array('Portfolio Management', $permissions))): ?>
          
          <li class="nav-item
           <?php if(request()->path() == 'admin/portfolios'): ?> active
           <?php elseif(request()->path() == 'admin/portfolio/create'): ?> active
           <?php elseif(request()->is('admin/portfolio/*/edit')): ?> active
           <?php endif; ?>">
            <a href="<?php echo e(route('admin.portfolio.index') . '?language=' . $default->code); ?>">
              <i class="la flaticon-imac"></i>
              <p>Portfolio Management</p>
            </a>
          </li>
        <?php endif; ?>



        <?php if(empty($admin->role) || (!empty($permissions) && in_array('Career Page', $permissions))): ?>
          
          <li class="nav-item
          <?php if(request()->path() == 'admin/jcategorys'): ?> active
          <?php elseif(request()->path() == 'admin/job/create'): ?> active
          <?php elseif(request()->is('admin/jcategory/*/edit')): ?> active
          <?php elseif(request()->path() == 'admin/jobs'): ?> active
          <?php elseif(request()->is('admin/job/*/edit')): ?> active
          <?php endif; ?>">
            <a data-toggle="collapse" href="#career">
                <i class="fas fa-user-md"></i>
              <p>Career Page</p>
              <span class="caret"></span>
            </a>
            <div class="collapse
            <?php if(request()->path() == 'admin/jcategorys'): ?> show
            <?php elseif(request()->path() == 'admin/job/create'): ?> show
            <?php elseif(request()->is('admin/jcategory/*/edit')): ?> show
            <?php elseif(request()->path() == 'admin/jobs'): ?> show
            <?php elseif(request()->is('admin/job/*/edit')): ?> show
            <?php endif; ?>" id="career">
              <ul class="nav nav-collapse">
                <li class="
                <?php if(request()->path() == 'admin/jcategorys'): ?> active
                <?php elseif(request()->is('admin/jcategory/*/edit')): ?> active
                <?php endif; ?>">
                  <a href="<?php echo e(route('admin.jcategory.index') . '?language=' . $default->code); ?>">
                    <span class="sub-item">Category</span>
                  </a>
                </li>
                <li class="
                <?php if(request()->path() == 'admin/jobs'): ?> active
                <?php elseif(request()->is('admin/job/*/edit')): ?> active
                <?php elseif(request()->is('admin/job/create')): ?> active
                <?php endif; ?>">
                  <a href="<?php echo e(route('admin.job.index') . '?language=' . $default->code); ?>">
                    <span class="sub-item">Job Management</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
        <?php endif; ?>


        <?php if(empty($admin->role) || (!empty($permissions) && in_array('Event Calendar', $permissions))): ?>
          
          <li class="nav-item
           <?php if(request()->path() == 'admin/calendars'): ?> active
           <?php endif; ?>">
            <a href="<?php echo e(route('admin.calendar.index') . '?language=' . $default->code); ?>">
              <i class="la flaticon-calendar"></i>
              <p>Event Calendar</p>
            </a>
          </li>
        <?php endif; ?>


        <?php if(empty($admin->role) || (!empty($permissions) && in_array('Gallery Management', $permissions))): ?>
          
          <li class="nav-item
           <?php if(request()->path() == 'admin/gallery'): ?> active
           <?php elseif(request()->path() == 'admin/gallery/create'): ?> active
           <?php elseif(request()->is('admin/gallery/*/edit')): ?> active
           <?php endif; ?>">
            <a href="<?php echo e(route('admin.gallery.index') . '?language=' . $default->code); ?>">
              <i class="la flaticon-picture"></i>
              <p>Gallery Management</p>
            </a>
          </li>
        <?php endif; ?>



        <?php if(empty($admin->role) || (!empty($permissions) && in_array('FAQ Management', $permissions))): ?>
          
          <li class="nav-item
           <?php if(request()->path() == 'admin/faqs'): ?> active <?php endif; ?>">
            <a href="<?php echo e(route('admin.faq.index') . '?language=' . $default->code); ?>">
              <i class="la flaticon-round"></i>
              <p>FAQ Management</p>
            </a>
          </li>
        <?php endif; ?>



        <?php if(empty($admin->role) || (!empty($permissions) && in_array('Blogs', $permissions))): ?>
          
          <li class="nav-item
          <?php if(request()->path() == 'admin/bcategorys'): ?> active
          <?php elseif(request()->path() == 'admin/blogs'): ?> active
          <?php elseif(request()->path() == 'admin/archives'): ?> active
          <?php elseif(request()->is('admin/blog/*/edit')): ?> active
          <?php endif; ?>">
            <a data-toggle="collapse" href="#blog">
              <i class="la flaticon-chat-4"></i>
              <p>Blogs</p>
              <span class="caret"></span>
            </a>
            <div class="collapse
            <?php if(request()->path() == 'admin/bcategorys'): ?> show
            <?php elseif(request()->path() == 'admin/blogs'): ?> show
            <?php elseif(request()->path() == 'admin/archives'): ?> show
            <?php elseif(request()->is('admin/blog/*/edit')): ?> show
            <?php endif; ?>" id="blog">
              <ul class="nav nav-collapse">
                <li class="<?php if(request()->path() == 'admin/bcategorys'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.bcategory.index') . '?language=' . $default->code); ?>">
                    <span class="sub-item">Category</span>
                  </a>
                </li>
                <li class="
                <?php if(request()->path() == 'admin/blogs'): ?> active
                <?php elseif(request()->is('admin/blog/*/edit')): ?> active
                <?php endif; ?>">
                  <a href="<?php echo e(route('admin.blog.index') . '?language=' . $default->code); ?>">
                    <span class="sub-item">Blogs</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/archives'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.archive.index')); ?>">
                    <span class="sub-item">Archives</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
        <?php endif; ?>

        <?php if(empty($admin->role) || (!empty($permissions) && in_array('RSS Feeds', $permissions))): ?>
        
        <li class="nav-item
        <?php if(request()->path() == 'admin/rss/create'): ?> active
        <?php elseif(request()->path() == 'admin/rss/feeds'): ?> active
        <?php elseif(request()->path() == 'admin/rss'): ?> active
        <?php elseif(request()->is('admin/rss/edit/*')): ?> active
        <?php endif; ?>">
          <a data-toggle="collapse" href="#rss">
            <i class="fa fa-rss"></i>
            <p>RSS Feeds</p>
            <span class="caret"></span>
          </a>
          <div class="collapse
          <?php if(request()->path() == 'admin/rss/create'): ?> show
          <?php elseif(request()->path() == 'admin/rss/feeds'): ?> show
          <?php elseif(request()->path() == 'admin/rss'): ?> show
          <?php elseif(request()->is('admin/rss/edit/*')): ?> show
          <?php endif; ?>" id="rss">
            <ul class="nav nav-collapse">
              <li class="<?php if(request()->path() == 'admin/rss/create'): ?> active <?php endif; ?>">
                <a href="<?php echo e(route('admin.rss.create')); ?>">
                  <span class="sub-item">Import RSS Feeds</span>
                </a>
              </li>

              <li class="<?php if(request()->path() == 'admin/rss/feeds'): ?> active <?php endif; ?>">
                <a href="<?php echo e(route('admin.rss.feed'). '?language=' . $default->code); ?>">
                  <span class="sub-item">RSS Feeds</span>
                </a>
              </li>

              <li class="<?php if(request()->path() == 'admin/rss'): ?> active <?php endif; ?>">
                <a href="<?php echo e(route('admin.rss.index'). '?language=' . $default->code); ?>">
                  <span class="sub-item">RSS Posts</span>
                </a>
              </li>

            </ul>
          </div>
        </li>
      <?php endif; ?>



      <?php if(empty($admin->role) || (!empty($permissions) && in_array('Sitemap', $permissions))): ?>
      
      <li class="nav-item
        <?php if(request()->path() == 'admin/sitemap'): ?> active <?php endif; ?>">
        <a href="<?php echo e(route('admin.sitemap.index') . '?language=' . $default->code); ?>">
          <i class="fa fa-sitemap"></i>
          <p>Sitemap</p>
        </a>
      </li>
    <?php endif; ?>

      <?php if(empty($admin->role) || (!empty($permissions) && in_array('Contact Page', $permissions))): ?>
        
        <li class="nav-item
          <?php if(request()->path() == 'admin/contact'): ?> active <?php endif; ?>">
          <a href="<?php echo e(route('admin.contact.index') . '?language=' . $default->code); ?>">
            <i class="la flaticon-whatsapp"></i>
            <p>Contact Page</p>
          </a>
        </li>
      <?php endif; ?>


      <?php if(empty($admin->role) || (!empty($permissions) && in_array('Role Management', $permissions))): ?>
        
        <li class="nav-item
          <?php if(request()->path() == 'admin/roles'): ?> active
          <?php elseif(request()->is('admin/role/*/permissions/manage')): ?> active
          <?php endif; ?>">
          <a href="<?php echo e(route('admin.role.index')); ?>">
            <i class="la flaticon-multimedia-2"></i>
            <p>Role Management</p>
          </a>
        </li>
      <?php endif; ?>



        <?php if(empty($admin->role) || (!empty($permissions) && in_array('Users Management', $permissions))): ?>
          
          <li class="nav-item
           <?php if(request()->path() == 'admin/users'): ?> active
           <?php elseif(request()->is('admin/user/*/edit')): ?> active
           <?php endif; ?>">
            <a href="<?php echo e(route('admin.user.index')); ?>">
              <i class="la flaticon-user-5"></i>
              <p>Users Management</p>
            </a>
          </li>
        <?php endif; ?>


        <?php if(empty($admin->role) || (!empty($permissions) && in_array('Language Management', $permissions))): ?>
        
        <li class="nav-item
         <?php if(request()->path() == 'admin/languages'): ?> active
         <?php elseif(request()->is('admin/language/*/edit')): ?> active
         <?php elseif(request()->is('admin/language/*/edit/keyword')): ?> active
         <?php endif; ?>">
          <a href="<?php echo e(route('admin.language.index')); ?>">
            <i class="la flaticon-chat-8"></i>
            <p>Language Management</p>
          </a>
        </li>
        <?php endif; ?>


        <?php if(empty($admin->role) || (!empty($permissions) && in_array('Backup', $permissions))): ?>
        
        <li class="nav-item
         <?php if(request()->path() == 'admin/backup'): ?> active
         <?php endif; ?>">
          <a href="<?php echo e(route('admin.backup.index')); ?>">
            <i class="la flaticon-down-arrow-3"></i>
            <p>Backup</p>
          </a>
        </li>
        <?php endif; ?>



        
        <li class="nav-item">
          <a href="<?php echo e(route('admin.cache.clear')); ?>">
            <i class="la flaticon-close"></i>
            <p>Clear Cache</p>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>
<?php /**PATH D:\xampp\htdocs\logistics\core\resources\views/admin/partials/side-navbar.blade.php ENDPATH**/ ?>