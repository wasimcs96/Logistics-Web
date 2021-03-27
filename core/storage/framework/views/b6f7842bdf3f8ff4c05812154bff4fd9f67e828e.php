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
            <span style="color: white;">
              <?php echo e(Auth::guard('admin')->user()->first_name); ?>

              <?php if(empty(Auth::guard('admin')->user()->role)): ?>
                <span class="user-level">Owner</span>
              <?php else: ?>
                <span class="user-level" style="color: white;"><?php echo e(Auth::guard('admin')->user()->role->name); ?></span>
              <?php endif; ?>
              <span class="caret"></span>
            </span>
          </a>
          <div class="clearfix"></div>

          <div class="collapse in" id="collapseExample">
            <ul class="nav">
              <li>
                <a href="<?php echo e(route('admin.editProfile')); ?>">
                  <span class="link-collapse" style="color: white;">Edit Profile</span>
                </a>
              </li>
              <li>
                <a href="<?php echo e(route('admin.changePass')); ?>">
                  <span class="link-collapse" style="color: white;">Change Password</span>
                </a>
              </li>
              <li>
                <a href="<?php echo e(route('admin.logout')); ?>">
                  <span class="link-collapse" style="color: white;">Logout</span>
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
              <p style="color: white;">Dashboard</p>
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
              <p style="color: white;">Basic Settings</p>
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
                    <span class="sub-item" style="color: white;">Favicon</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/logo'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.logo') . '?language=' . $default->code); ?>">
                    <span class="sub-item" style="color: white;">Logo</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/basicinfo'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.basicinfo') . '?language=' . $default->code); ?>">
                    <span class="sub-item" style="color: white;">General Settings</span>
                  </a>
                </li>

                <li class="submenu">
                    <a data-toggle="collapse" href="#emailset" aria-expanded="<?php echo e((request()->path() == 'admin/mail-from-admin' || request()->path() == 'admin/mail-to-admin') ? 'true' : 'false'); ?>">
                      <span class="sub-item" style="color: white;">Email Settings</span>
                      <span class="caret"></span>
                    </a>
                    <div class="collapse <?php echo e((request()->path() == 'admin/mail-from-admin' || request()->path() == 'admin/mail-to-admin') ? 'show' : ''); ?>" id="emailset" style="">
                      <ul class="nav nav-collapse subnav">
                        <li class="<?php if(request()->path() == 'admin/mail-from-admin'): ?> active <?php endif; ?>">
                          <a href="<?php echo e(route('admin.mailFromAdmin')); ?>">
                            <span class="sub-item" style="color: white;">Mail from Admin</span>
                          </a>
                        </li>
                        <li class="<?php if(request()->path() == 'admin/mail-to-admin'): ?> active <?php endif; ?>">
                          <a href="<?php echo e(route('admin.mailToAdmin')); ?>">
                            <span class="sub-item" style="color: white;">Mail to Admin</span>
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
                    <span class="sub-item" style="color: white;">Features Settings</span>
                  </a>
                </li>

                <li class="submenu">
                  <a data-toggle="collapse" href="#shopset" aria-expanded="<?php echo e((request()->path() == 'admin/shipping' || request()->routeIs('admin.shipping.edit')) || request()->routeIs('admin.product.tags') ? 'true' : 'false'); ?>">
                    <span class="sub-item" style="color: white;">Shop Settings</span>
                    <span class="caret"></span>
                  </a>
                  <div class="collapse <?php echo e((request()->path() == 'admin/shipping' || request()->routeIs('admin.shipping.edit')) || request()->routeIs('admin.product.tags') ? 'show' : ''); ?>" id="shopset" style="">
                    <ul class="nav nav-collapse subnav">
                      <li class="
                      <?php if(request()->path() == 'admin/shipping'): ?> active
                      <?php elseif(request()->routeIs('admin.shipping.edit')): ?> active
                      <?php endif; ?>">
                        <a href="<?php echo e(route('admin.shipping.index'). '?language=' . $default->code); ?>">
                          <span class="sub-item" style="color: white;">Shipping Charges</span>
                        </a>
                      </li>
                      <li class="<?php if(request()->routeIs('admin.product.tags')): ?> active <?php endif; ?>">
                        <a href="<?php echo e(route('admin.product.tags'). '?language=' . $default->code); ?>">
                          <span class="sub-item" style="color: white;">Popular Tags</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>

                <li class="<?php if(request()->path() == 'admin/support'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.support') . '?language=' . $default->code); ?>">
                    <span class="sub-item" style="color: white;">Support Informations</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/social'): ?> active
                <?php elseif(request()->is('admin/social/*')): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.social.index')); ?>">
                    <span class="sub-item" style="color: white;">Social Links</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/breadcrumb'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.breadcrumb') . '?language=' . $default->code); ?>">
                    <span class="sub-item" style="color: white;">Breadcrumb</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/heading'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.heading') . '?language=' . $default->code); ?>">
                    <span class="sub-item" style="color: white;">Page Headings</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/script'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.script')); ?>">
                    <span class="sub-item" style="color: white;">Scripts</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/seo'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.seo') . '?language=' . $default->code); ?>">
                    <span class="sub-item" style="color: white;">SEO Information</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/maintainance'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.maintainance')); ?>">
                    <span class="sub-item" style="color: white;">Maintainance Mode</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/announcement'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.announcement') . '?language=' . $default->code); ?>">
                    <span class="sub-item" style="color: white;">Announcement Popup</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/cookie-alert'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.cookie.alert') . '?language=' . $default->code); ?>">
                    <span class="sub-item" style="color: white;">Cookie Alert</span>
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
                <p style="color: white;">Customers</p>
            </a>
        </li>
        <?php endif; ?>

        <?php if(empty($admin->role) || (!empty($permissions) && in_array('Trucks', $permissions))): ?>
        <li class="nav-item
        <?php if(request()->routeIs('admin.claim.show')): ?> active
        <?php elseif(request()->routeIs('admin.claim.show')): ?> active
        <?php endif; ?>">

            <a href="<?php echo e(route('admin.claim.show')); ?>">
            <i class="fas fa-exclamation-circle"></i>
                <p style="color: white;">Claim</p>
            </a>
        </li>
        <?php endif; ?>

        <?php if(empty($admin->role) || (!empty($permissions) && in_array('Claims', $permissions))): ?>
        <li class="nav-item
        <?php if(request()->routeIs('admin.truck.index')): ?> active
        <?php elseif(request()->routeIs('admin.truck.show')): ?> active
        <?php endif; ?>">

            <a href="<?php echo e(route('admin.truck.index')); ?>">
                <i class="fas fa-truck"></i>
                <p style="color: white;">Trucks Management</p>
            </a>
        </li>
        <?php endif; ?>

        <?php if(empty($admin->role) || (!empty($permissions) && in_array('Leads', $permissions))): ?>
        <li class="nav-item
        <?php if(request()->routeIs('admin.lead.index')): ?> active
        <?php elseif(request()->routeIs('admin.lead.show')): ?> active
        <?php endif; ?>">

            <a href="<?php echo e(route('admin.lead.index')); ?>">
                <i class="fas fa-tasks"></i>
                <p style="color: white;">Leads Management</p>
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
                <p style="color: white;">My orders</p>
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
              <p style="color: white;">Subscribers</p>
              <span class="caret"></span>
            </a>
            <div class="collapse
            <?php if(request()->path() == 'admin/subscribers'): ?> show
            <?php elseif(request()->path() == 'admin/mailsubscriber'): ?> show
            <?php endif; ?>" id="subscribers">
              <ul class="nav nav-collapse">
                <li class="<?php if(request()->path() == 'admin/subscribers'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.subscriber.index')); ?>">
                    <span class="sub-item" style="color: white;">Subscribers</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/mailsubscriber'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.mailsubscriber')); ?>">
                    <span class="sub-item" style="color: white;">Mail to Subscribers</span>
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
              <p style="color: white;">Package Management</p>
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
                    <span class="sub-item" style="color: white;">Form Builder</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/packages'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.package.index') . '?language=' . $default->code); ?>">
                    <span class="sub-item" style="color: white;">Packages</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/all/orders'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.all.orders')); ?>">
                    <span class="sub-item" style="color: white;">All Orders</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/pending/orders'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.pending.orders')); ?>">
                    <span class="sub-item" style="color: white;">Pending Orders</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/processing/orders'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.processing.orders')); ?>">
                    <span class="sub-item" style="color: white;">Processing Orders</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/completed/orders'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.completed.orders')); ?>">
                    <span class="sub-item" style="color: white;">Completed Orders</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/rejected/orders'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.rejected.orders')); ?>">
                    <span class="sub-item" style="color: white;">Rejected Orders</span>
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
              <p style="color: white;">Quote Management</p>
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
                    <span class="sub-item" style="color: white;">Visibility</span>
                  </a>
                </li>
                <li class="
                <?php if(request()->path() == 'admin/quote/form'): ?> active
                <?php elseif(request()->is('admin/quote/*/inputEdit')): ?> active
                <?php endif; ?>">
                  <a href="<?php echo e(route('admin.quote.form') . '?language=' . $default->code); ?>">
                    <span class="sub-item" style="color: white;">Form Builder</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/all/quotes'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.all.quotes')); ?>">
                    <span class="sub-item" style="color: white;">All Quotes</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/pending/quotes'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.pending.quotes')); ?>">
                    <span class="sub-item" style="color: white;">Pending Quotes</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/processing/quotes'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.processing.quotes')); ?>">
                    <span class="sub-item" style="color: white;">Processing Quotes</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/completed/quotes'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.completed.quotes')); ?>">
                    <span class="sub-item" style="color: white;">Completed Quotes</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/rejected/quotes'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.rejected.quotes')); ?>">
                    <span class="sub-item" style="color: white;">Rejected Quotes</span>
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
              <p style="color: white;">Order Management</p>
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
                    <span class="sub-item" style="color: white;">Category</span>
                  </a>
                </li>

                <li class="
                <?php if(request()->path() == 'admin/product'): ?> active
                <?php elseif(request()->is('admin/product/*/edit')): ?> active
                <?php elseif(request()->routeIs('admin.product.create')): ?> active
                <?php endif; ?>">
                  <a href="<?php echo e(route('admin.product.index'). '?language=' . $default->code); ?>">
                    <span class="sub-item" style="color: white;">Products</span>
                  </a>
                </li>


                <li class="<?php if(request()->path() == 'admin/product/all/orders'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.all.product.orders')); ?>">
                    <span class="sub-item" style="color: white;">All Orders</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/product/pending/orders'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.pending.product.orders')); ?>">
                    <span class="sub-item" style="color: white;">Pending Orders</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/product/processing/orders'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.processing.product.orders')); ?>">
                    <span class="sub-item" style="color: white;">Processing Orders</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/product/completed/orders'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.completed.product.orders')); ?>">
                    <span class="sub-item" style="color: white;">Completed Orders</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/product/rejected/orders'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.rejected.product.orders')); ?>">
                    <span class="sub-item" style="color: white;">Rejected Orders</span>
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
              <p style="color: white;">Payment Gateways</p>
              <span class="caret"></span>
            </a>
            <div class="collapse
            <?php if(request()->path() == 'admin/gateways'): ?> show
            <?php elseif(request()->path() == 'admin/offline/gateways'): ?> show
            <?php endif; ?>" id="gateways">
              <ul class="nav nav-collapse">
                <li class="<?php if(request()->path() == 'admin/gateways'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.gateway.index')); ?>">
                    <span class="sub-item" style="color: white;">Online Gateways</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/offline/gateways'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.gateway.offline') . '?language=' . $default->code); ?>">
                    <span class="sub-item" style="color: white;">Offline Gateways</span>
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
          <?php elseif(request()->path() == 'admin/blogsection'): ?> active
          <?php elseif(request()->path() == 'admin/member/create'): ?> active
          <?php elseif(request()->path() == 'admin/sections'): ?> active
          <?php elseif(request()->path() == 'admin/package/background'): ?> active
          <?php endif; ?>">
            <a data-toggle="collapse" href="#home">
              <i class="la flaticon-home"></i>
              <p style="color: white;">Home Page</p>
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
                    <span class="sub-item" style="color: white;">Hero Section</span>
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
                          <span class="sub-item" style="color: white;">Static Version</span>
                        </a>
                      </li>
                      <li class="
                      <?php if(request()->path() == 'admin/herosection/sliders'): ?> active
                      <?php elseif(request()->is('admin/herosection/slider/*/edit')): ?> active
                      <?php endif; ?>">
                        <a href="<?php echo e(route('admin.slider.index') . '?language=' . $default->code); ?>">
                          <span class="sub-item" style="color: white;">Slider Version</span>
                        </a>
                      </li>
                      <li class="<?php if(request()->path() == 'admin/herosection/video'): ?> active <?php endif; ?>">
                        <a href="<?php echo e(route('admin.herosection.video') . '?language=' . $default->code); ?>">
                          <span class="sub-item" style="color: white;">Video Version</span>
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
                    <span class="sub-item" style="color: white;">Features</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/introsection'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.introsection.index') . '?language=' . $default->code); ?>">
                    <span class="sub-item" style="color: white;">Intro Section</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/servicesection'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.servicesection.index') . '?language=' . $default->code); ?>">
                    <span class="sub-item" style="color: white;">Service Section</span>
                  </a>
                </li>
                <li class="
                <?php if(request()->path() == 'admin/approach'): ?> active
                <?php elseif(request()->is('admin/approach/*/pointedit')): ?> active
                <?php endif; ?>">
                  <a href="<?php echo e(route('admin.approach.index') . '?language=' . $default->code); ?>">
                    <span class="sub-item" style="color: white;">Approach Section</span>
                  </a>
                </li>
                <li class="
                <?php if(request()->path() == 'admin/statistics'): ?> active
                <?php elseif(request()->is('admin/statistics/*/edit')): ?> active
                <?php endif; ?>">
                  <a href="<?php echo e(route('admin.statistics.index') . '?language=' . $default->code); ?>">
                    <span class="sub-item" style="color: white;">Statistics Section</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/cta'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.cta.index') . '?language=' . $default->code); ?>">
                    <span class="sub-item" style="color: white;">Call to Action Section</span>
                  </a>
                </li>
                <li class="
                <?php if(request()->path() == 'admin/testimonials'): ?> active
                <?php elseif(request()->is('admin/testimonial/*/edit')): ?> active
                <?php endif; ?>">
                  <a href="<?php echo e(route('admin.testimonial.index') . '?language=' . $default->code); ?>">
                    <span class="sub-item" style="color: white;">Testimonials</span>
                  </a>
                </li>
                <li class="
                <?php if(request()->path() == 'admin/members'): ?> active
                <?php elseif(request()->is('admin/member/*/edit')): ?> active
                <?php elseif(request()->path() == 'admin/member/create'): ?> active
                <?php endif; ?>">
                  <a href="<?php echo e(route('admin.member.index') . '?language=' . $default->code); ?>">
                    <span class="sub-item" style="color: white;">Team Section</span>
                  </a>
                </li>
                <li class="
                <?php if(request()->path() == 'admin/package/background'): ?> active
                <?php endif; ?>">
                  <a href="<?php echo e(route('admin.package.background') . '?language=' . $default->code); ?>">
                    <span class="sub-item" style="color: white;">Package Background</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/blogsection'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.blogsection.index') . '?language=' . $default->code); ?>">
                    <span class="sub-item" style="color: white;">Blog Section</span>
                  </a>
                </li>
                <li class="
                <?php if(request()->path() == 'admin/partners'): ?> active
                <?php elseif(request()->is('admin/partner/*/edit')): ?> active
                <?php endif; ?>">
                  <a href="<?php echo e(route('admin.partner.index') . '?language=' . $default->code); ?>">
                    <span class="sub-item" style="color: white;">Partners</span>
                  </a>
                </li>
                <li class="
                <?php if(request()->path() == 'admin/sections'): ?> active
                <?php endif; ?>">
                  <a href="<?php echo e(route('admin.sections.index') . '?language=' . $default->code); ?>">
                    <span class="sub-item" style="color: white;">Section Customization</span>
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
          <p style="color: white;">Drag & Drop Menu Builder</p>
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
              <p style="color: white;">Footer</p>
              <span class="caret"></span>
            </a>
            <div class="collapse
            <?php if(request()->path() == 'admin/footers'): ?> show
            <?php elseif(request()->path() == 'admin/ulinks'): ?> show
            <?php endif; ?>" id="footer">
              <ul class="nav nav-collapse">
                <li class="<?php if(request()->path() == 'admin/footers'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.footer.index') . '?language=' . $default->code); ?>">
                    <span class="sub-item" style="color: white;">Logo & Text</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/ulinks'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.ulink.index') . '?language=' . $default->code); ?>">
                    <span class="sub-item" style="color: white;">Useful Links</span>
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
              <p style="color: white;">Pages</p>
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
                    <span class="sub-item" style="color: white;">Create Page</span>
                  </a>
                </li>
                <li class="<?php if(request()->path() == 'admin/pages'): ?> active <?php endif; ?>">
                  <a href="<?php echo e(route('admin.page.index') . '?language=' . $default->code); ?>">
                    <span class="sub-item" style="color: white;">Pages</span>
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
              <p style="color: white;">Event Calendar</p>
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
              <p style="color: white;">Gallery Management</p>
            </a>
          </li>
        <?php endif; ?>



        <?php if(empty($admin->role) || (!empty($permissions) && in_array('FAQ Management', $permissions))): ?>
          
          <li class="nav-item
           <?php if(request()->path() == 'admin/faqs'): ?> active <?php endif; ?>">
            <a href="<?php echo e(route('admin.faq.index') . '?language=' . $default->code); ?>">
              <i class="la flaticon-round"></i>
              <p style="color: white;">FAQ Management</p>
            </a>
          </li>
        <?php endif; ?>



        
          
          
        

        
        
        
      



      <?php if(empty($admin->role) || (!empty($permissions) && in_array('Sitemap', $permissions))): ?>
      
      <li class="nav-item
        <?php if(request()->path() == 'admin/sitemap'): ?> active <?php endif; ?>">
        <a href="<?php echo e(route('admin.sitemap.index') . '?language=' . $default->code); ?>">
          <i class="fa fa-sitemap"></i>
          <p style="color: white;">Sitemap</p>
        </a>
      </li>
    <?php endif; ?>

      <?php if(empty($admin->role) || (!empty($permissions) && in_array('Contact Page', $permissions))): ?>
        
        <li class="nav-item
          <?php if(request()->path() == 'admin/contact'): ?> active <?php endif; ?>">
          <a href="<?php echo e(route('admin.contact.index') . '?language=' . $default->code); ?>">
            <i class="la flaticon-whatsapp"></i>
            <p style="color: white;">Contact Page</p>
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
            <p style="color: white;">Role Management</p>
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
              <p style="color: white;">Users Management</p>
            </a>
          </li>
        <?php endif; ?>


        
        
        
        


        <?php if(empty($admin->role) || (!empty($permissions) && in_array('Backup', $permissions))): ?>
        
        <li class="nav-item
         <?php if(request()->path() == 'admin/backup'): ?> active
         <?php endif; ?>">
          <a href="<?php echo e(route('admin.backup.index')); ?>">
            <i class="la flaticon-down-arrow-3"></i>
            <p style="color: white;">Backup</p>
          </a>
        </li>
        <?php endif; ?>



        
        <li class="nav-item">
          <a href="<?php echo e(route('admin.cache.clear')); ?>">
            <i class="la flaticon-close"></i>
            <p style="color: white;">Clear Cache</p>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>
<?php /**PATH D:\xampp\htdocs\logistics\core\resources\views/admin/partials/side-navbar.blade.php ENDPATH**/ ?>