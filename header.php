<!DOCTYPE php>
<php lang="en">

  
<!-- Mirrored from bootstrapget.com/demos/cube-admin-template/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Feb 2025 22:02:56 GMT -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Admin Templates & Dashboards - Cube Admin Template</title>

    <!-- Meta -->
    <meta name="description" content="Marketplace for Bootstrap Admin Dashboards" />
    <meta name="author" content="Bootstrap Gallery" />
    <link rel="canonical" href="https://www.bootstrap.gallery/">
    <meta property="og:url" content="https://www.bootstrap.gallery/">
    <meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
    <meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
    <meta property="og:type" content="Website">
    <meta property="og:site_name" content="Bootstrap Gallery">
    <link rel="shortcut icon" href="assets/images/favicon.svg" />
   <link rel="stylesheet" href="assets/vendor/calendar/css/custom.css" />
   <link rel="stylesheet" href="assets/css/main.min.css">

<!-- 👇 YAHAN STYLE LAGAO -->
<style>
/* ACTIVE SIDEBAR ITEM */
.sidebar-menu > li.active > a,
.sidebar-menu > li.active.current-page > a {
    background-color: #6f42c1 !important;   /* Purple */
    color: #ffffff !important;
}

/* Icon color */
.sidebar-menu > li.active > a i {
    color: #ffffff !important;
}

/* Hover bhi purple rahe */
.sidebar-menu > li.active > a:hover {
    background-color: #5a32a3 !important;
    color: #ffffff !important;
}
.clr{
  color: #5a32a3;
  margin-left:-4px;
  
}
.size{
  font-size:17px;
  margin-top:5px;
  color: Skyblue;
}
.shadow{
  box-shadow:5px 10px 20px #5a32a3 ;
}
.testinheading{
   background-color: #6240a1ff!important;
    color:white!important;
  /* color: #5a32a3 !important; */

}
.testinheading:hover{
  background-color: #4f2d8fff !important;
  color:white!important;
  letter-spacing:1px!important;
  color:white!important;
  transition : 0.1s ease-in-out;
}
</style>
</head>

<link rel="stylesheet" href="assets/fonts/bootstrap/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="assets/css/main.min.css" />

    <!-- *************
			************ CSS Files *************
		************* -->
    <link rel="stylesheet" href="assets/fonts/bootstrap/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="assets/css/main.min.css" />

    <!-- *************
			************ Vendor Css Files *************
		************ -->

    <!-- Scrollbar CSS -->
    <link rel="stylesheet" href="assets/vendor/overlay-scroll/OverlayScrollbars.min.css" />
  </head>

  <body>

    <!-- Page wrapper starts -->
    <div class="page-wrapper">

      <!-- Main container starts -->
      <div class="main-container">

        <!-- Sidebar wrapper starts -->
        <nav id="sidebar" class="sidebar-wrapper">

          <!-- App brand starts -->
          <div class="app-brand  p-3 my-2 m-auto">
            <a href="index.php" class="d-flex">
              <img src="assets/images/log9.png" class="logo" alt="Auto_logo" class="img-fluid " ><p class="mx-3 size"><h1 class="clr"><b>L</b></h1></P><p class=" size"> ab</p> <p> <h1 class="clr"> <b>A</b></h1></P><p class=" size"> utomation</p>
            </a>
          </div>

          <!-- App brand ends -->

          <!-- Sidebar menu starts -->
          <div class="sidebarMenuScroll">
           <ul class="sidebar-menu">
              <li >            
                <a href="index.php">
                  <i class="bi bi-bar-chart-line"></i>
                  <span class="menu-text">Dashboard</span>
                  </a>
                
              </li>
              <li>
                <a href="!#">
                 <i class="bi bi-person-badge"></i>
                  <span class="menu-text">User / Admin</span>
                </a>
                <ul class="treeview-menu">
                  <li>
                    <a href="add-user.php">Add User</a>
                  </li>
                  <li>
                    <a href="user-list.php">User List</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="!#">
                  <i class="bi bi-box-seam"></i>
                  <span class="menu-text">Product</span>
                </a>
                <ul class="treeview-menu">
                  <li>
                    <a href="add-product.php">Add Product</a>
                  </li>
                  <li>
                    <a href="product-list.php">Product List</a>
                  </li>
                  <li>
                    <a href="update-product.php">Edit / Update Product</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="testing.php">
                 <i class="bi bi-clipboard-data"></i>
                  <span class="menu-text">Testing </span>
                </a>
               
              </li>
              
              <li>
                <a href="!#">
                <i class="bi bi-patch-check"></i>
                  <span class="menu-text">CPRI Approval</span>
                </a>
                <ul class="treeview-menu">
                  <li> <a href="send-cpri.php">Send to CPRI</a></li>
                  <li> <a href="cpri-aproved-product.php">CPRI Approved Products</a></li>
                  <li> <a href="cpri-reject.php">CPRI Rejected Products</a></li>
                      
                </ul>
              </li>
              <li>
                    <a href="orders.php">
                      <i class="bi bi-shop-window"></i>
                      <span class="menu-text">Orders</span>
                    </a>
                  </li>
                  <li>
                    <a href="!#">
                      <i class="bi bi-bar-chart-line"></i>
                      <span class="menu-text">Reports</span>
                    </a>
                    <ul class="treeview-menu">
                         <li> <a href="product-revise-report.php">Product-wise Report</a></li>
                         <li> <a href="testing-status-report.php">Testing Status Report</a></li>
                         <li> <a href="date-report.php">Date-wise Report</a></li>
                         <li> <a href="cpri-aproved-report.php">CPRI Approval Report</a></li>
                         
                        </ul>
              </li>
              <li>
                <a href="logout.php">
                  <i class="bi bi-box-arrow-right"></i>
                  <span class="menu-text">Logout</span>
                </a>
                </li>
              
                <li>
                  <a href="contacts.php">
                    <i class="bi bi-wallet2"></i>
                    <span class="menu-text">Contacts</span>
                  </a>
                </li>
              <li>
                <a href="expenses.php">
                  <i class="bi bi-send"></i>
                  <span class="menu-text">Expenses</span>
                </a>
              </li>
              <li class="treeview">
                <a href="#!">
                  <i class="bi bi-box"></i>
                  <span class="menu-text">Widgets</span>
                </a>
                <ul class="treeview-menu">
                  <li>
                    <a href="general-widgets.php">General</a>
                  </li>
                  <li>
                    <a href="graph-widgets.php">Graph Widgers</a>
                  </li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#!">
                  <i class="bi bi-stickies"></i>
                  <span class="menu-text">Components</span>
                </a>
                <ul class="treeview-menu">
                  <li>
                    <a href="accordions.php">Accordions</a>
                  </li>
                  <li>
                    <a href="alerts.php">Alerts</a>
                  </li>
                  <li>
                    <a href="avatars.php">Avatars</a>
                  </li>
                  <li>
                    <a href="buttons.php">Buttons</a>
                  </li>
                  <li>
                    <a href="badges.php">Badges</a>
                  </li>
                  <li>
                    <a href="cards.php">Cards</a>
                  </li>
                  <li>
                    <a href="advanced-cards.php">Advanced Cards</a>
                  </li>
                  <li>
                    <a href="carousel.php">Carousel</a>
                  </li>
                  <li>
                    <a href="dropdowns.php">Dropdowns</a>
                  </li>
                  <li>
                    <a href="icons.php">Icons</a>
                  </li>
                  <li>
                    <a href="list-items.php">List Items</a>
                  </li>
                  <li>
                    <a href="modals.php">Modals</a>
                  </li>
                  <li>
                    <a href="offcanvas.php">Offcanvas</a>
                  </li>
                  <li>
                    <a href="placeholders.php">Placeholders</a>
                  </li>
                  <li>
                    <a href="progress.php">Progress Bars</a>
                  </li>
                  <li>
                    <a href="popovers.php">Popovers</a>
                  </li>
                  <li>
                    <a href="spinners.php">Spinners</a>
                  </li>
                  <li>
                    <a href="tabs.php">Tabs</a>
                  </li>
                  <li>
                    <a href="toasts.php">Toasts</a>
                  </li>
                  <li>
                    <a href="tooltips.php">Tooltips</a>
                  </li>
                  <li>
                    <a href="typography.php">Typography</a>
                  </li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#!">
                  <i class="bi bi-ui-checks-grid"></i>
                  <span class="menu-text">Forms</span>
                </a>
                <ul class="treeview-menu">
                  <li>
                    <a href="form-inputs.php">Form Inputs</a>
                  </li>
                  <li>
                    <a href="form-checkbox-radio.php">Checkbox &amp; Radio</a>
                  </li>
                  <li>
                    <a href="form-file-input.php">File Input</a>
                  </li>
                  <li>
                    <a href="form-validations.php">Validations</a>
                  </li>
                  <li>
                    <a href="date-time-pickers.php">Date Time Pickers</a>
                  </li>
                  <li>
                    <a href="input-tags.php">Input Tags</a>
                  </li>
                  <li>
                    <a href="input-masks.php">Input Masks</a>
                  </li>
                  <li>
                    <a href="editor.php">Editor</a>
                  </li>
                  <li>
                    <a href="form-layouts.php">Form Layouts</a>
                  </li>
                  <li>
                    <a href="form-tabs.php">Form Tabs</a>
                  </li>
                  <li>
                    <a href="form-accordion.php">Form Accordion</a>
                  </li>
                  <li>
                    <a href="form-wizard.php">Form Wizard</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="notifications.php">
                  <i class="bi bi-globe"></i>
                  <span class="menu-text">Notifications</span>
                </a>
              </li>
              <li>
                <a href="calendar.php">
                  <i class="bi bi-calendar2"></i>
                  <span class="menu-text">Calendar</span>
                </a>
              </li>
              <li>
                <a href="reviews.php">
                  <i class="bi bi-mouse3"></i>
                  <span class="menu-text">Reviews</span>
                </a>
              </li>
              <li>
                <a href="support.php">
                  <i class="bi bi-headphones"></i>
                  <span class="menu-text">Support</span>
                </a>
              </li>
              <li>
                <a href="default-layout.php">
                  <i class="bi bi-layout-sidebar"></i>
                  <span class="menu-text">Default Layout</span>
                </a>
              </li>
              <li>
                <a href="tables.php">
                  <i class="bi bi-border-all"></i>
                  <span class="menu-text">Tables</span>
                </a>
              </li>
              <li class="treeview">
                <a href="#!">
                  <i class="bi bi-pie-chart"></i>
                  <span class="menu-text">Graphs</span>
                </a>
                <ul class="treeview-menu">
                  <li>
                    <a href="apex.php">Apex</a>
                  </li>
                  <li>
                    <a href="morris.php">Morris</a>
                  </li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#!">
                  <i class="bi bi-window-sidebar"></i>
                  <span class="menu-text">Invoices</span>
                </a>
                <ul class="treeview-menu">
                  <li>
                    <a href="create-invoice.php">Create Invoice</a>
                  </li>
                  <li>
                    <a href="view-invoice.php">View Invoice</a>
                  </li>
                  <li>
                    <a href="invoice-list.php">Invoice List</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="maps.php">
                  <i class="bi bi-pin-map"></i>
                  <span class="menu-text">Maps</span>
                </a>
              </li>
              <li>
                <a href="profile.php">
                  <i class="bi bi-filter-circle"></i>
                  <span class="menu-text">User Profile</span>
                </a>
              </li>
              <li>
                <a href="help.php">
                  <i class="bi bi-chat"></i>
                  <span class="menu-text">Help</span>
                </a>
              </li>
              <li>
                <a href="contact.php">
                  <i class="bi bi-phone-vibrate"></i>
                  <span class="menu-text">Contact Us</span>
                </a>
              </li>
              <li>
                <a href="settings.php">
                  <i class="bi bi-gear"></i>
                  <span class="menu-text">Settings</span>
                </a>
              </li>
              <li>
                <a href="maintenance.php">
                  <i class="bi bi-exclamation-octagon"></i>
                  <span class="menu-text">Maintenance</span>
                </a>
              </li>
              <li>
                <a href="page-not-found.php">
                  <i class="bi bi-exclamation-diamond"></i>
                  <span class="menu-text">404</span>
                </a>
              </li>
              <li class="treeview">
                <a href="#!">
                  <i class="bi bi-upc-scan"></i>
                  <span class="menu-text">Login/Signup</span>
                </a>
                <ul class="treeview-menu">
                  <li>
                    <a href="login.php">Login</a>
                  </li>
                  <li>
                    <a href="signup.php">Signup</a>
                  </li>
                  <li>
                    <a href="forgot-password.php">Forgot Password</a>
                  </li>
                  <li>
                    <a href="reset-password.php">Reset Password</a>
                  </li>
                  <li>
                    <a href="lock-screen.php">Lock Screen</a>
                  </li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#!">
                  <i class="bi bi-code-square"></i>
                  <span class="menu-text">Nested Menu</span>
                </a>
                <ul class="treeview-menu">
                  <li>
                    <a href="#!">Nested 1</a>
                  </li>
                  <li>
                    <a href="#!">
                      Nested 2
                      <i class="bi bi-caret-right-fill"></i>
                    </a>
                    <ul class="treeview-menu">
                      <li>
                        <a href="#!">Nested 2.1</a>
                      </li>
                      <li>
                        <a href="#!">Nested 2.2
                          <i class="bi bi-caret-right-fill"></i>
                        </a>
                        <ul class="treeview-menu">
                          <li>
                            <a href="#!">Nested 2.2.1</a>
                          </li>
                          <li>
                            <a href="#!">Nested 2.2.2</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <!-- Sidebar menu ends -->

        </nav>
        <!-- Sidebar wrapper ends -->

        <!-- App container starts -->
        <div class="app-container">

          <!-- App header starts -->
          <div class="app-header d-flex align-items-center">

            <!-- Toggle buttons starts -->
            <div class="d-flex">
              <button class="toggle-sidebar">
                <i class="bi bi-list lh-1"></i>
              </button>
              <button class="pin-sidebar">
                <i class="bi bi-list lh-1"></i>
              </button>
            </div>
            <!-- Toggle buttons ends -->

            <!-- App brand sm starts -->
            <div class="app-brand-sm d-lg-none d-flex">

              <!-- Logo sm starts -->
              <a href="index.php">
                <img src="assets/images/logo-sm.svg" class="logo" alt="Bootstrap Gallery">
              </a>
              <!-- Logo sm end -->

            </div>
            <!-- App brand sm ends -->

            <!-- Page title starts -->
            <h5 class="m-0 ms-2 fw-semibold">Dashboard</h5>
            <!-- Page title ends -->

            <!-- App header actions starts -->
            <div class="header-actions">

              <!-- Search container start -->
              <div class="search-container d-xl-block d-none me-3">
                <input type="text" class="form-control" id="searchData" placeholder="Search" />
                <i class="bi bi-search"></i>
              </div>
              <!-- Search container ends -->

              <!-- Header action bar starts -->
              <div class="bg-white p-2 rounded-4 d-flex align-items-center">

                <!-- Header actions start -->
                <div class="d-sm-flex d-none">
                  <div class="dropdown">
                    <a class="dropdown-toggle d-flex p-3 position-relative" href="#!" role="button"
                      data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="bi bi-bag fs-4 lh-1"></i>
                      <span class="count-label">6</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-sm">
                      <h5 class="fw-semibold px-3 py-2 text-primary">Orders</h5>
                      <div class="scroll250">
                        <div class="mx-3 d-flex gap-2 flex-column">
                          <div class="bg-danger-subtle border border-danger px-3 py-2 rounded-1">
                            <p class="m-0 text-danger">New product purchased</p>
                            <p class="small m-0">Just now</p>
                          </div>
                          <div class="bg-success-subtle border border-success px-3 py-2 rounded-1">
                            <p class="m-0 text-success">Order received.</p>
                            <p class="small m-0">Today, 07:45pm</p>
                          </div>

                          <div class="bg-info-subtle border border-info px-3 py-2 rounded-1">
                            <p class="m-0 text-info">New item ordered.</p>
                            <p class="small m-0">Today, 07:45pm</p>
                          </div>
                          <div class="bg-warning-subtle border border-warning px-3 py-2 rounded-1">
                            <p class="m-0 text-warning">New ticket</p>
                            <p class="small m-0">Today, 09:30pm</p>
                          </div>
                        </div>
                      </div>
                      <div class="d-grid m-3">
                        <a href="javascript:void(0)" class="btn btn-primary">View all</a>
                      </div>
                    </div>
                  </div>
                  <div class="dropdown">
                    <a class="dropdown-toggle d-flex p-3 position-relative" href="#!" role="button"
                      data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="bi bi-receipt fs-4 lh-1"></i>
                      <span class="count-label bg-danger">9</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-sm">
                      <h5 class="fw-semibold px-3 py-2 text-primary">Invoices</h5>
                      <div class="scroll250">
                        <div class="dropdown-item">
                          <div class="d-flex align-items-center py-2">
                            <img src="assets/images/user1.png" class="img-3x me-3 rounded-5" alt="Admin Theme" />
                            <div class="m-0">
                              <h4 class="mb-2 text-primary">$450.00</h4>
                              <h6 class="mb-1 fw-semibold">MSD Solutions</h6>
                              <p class="m-0 text-secondary">
                                Invoice #99885<span class="badge bg-info ms-2">Paid</span>
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="dropdown-item">
                          <div class="d-flex align-items-center py-2">
                            <img src="assets/images/user2.png" class="img-3x me-3 rounded-5" alt="Admin Theme" />
                            <div class="m-0">
                              <h4 class="mb-2 text-primary">$290.00</h4>
                              <h6 class="mb-1 fw-semibold">VK Inc</h6>
                              <p class="m-0 text-secondary">
                                Invoice #99887<span class="badge bg-info ms-2">Paid</span>
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="dropdown-item">
                          <div class="d-flex align-items-center py-2">
                            <img src="assets/images/user3.png" class="img-3x me-3 rounded-5" alt="Admin Theme" />
                            <div class="m-0">
                              <h4 class="mb-2 text-primary">$330.00</h4>
                              <h6 class="mb-1 fw-semibold">Sky Labs</h6>
                              <p class="m-0 text-secondary">
                                Invoice #99888<span class="badge bg-info ms-2">Paid</span>
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="dropdown-item">
                          <div class="d-flex align-items-center py-2">
                            <img src="assets/images/user4.png" class="img-3x me-3 rounded-5" alt="Admin Theme" />
                            <div class="m-0">
                              <h4 class="mb-2 text-primary">$380.00</h4>
                              <h6 class="mb-1 fw-semibold">Good Works Inc</h6>
                              <p class="m-0 text-secondary">
                                Invoice #99889<span class="badge bg-info ms-2">Paid</span>
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="d-grid m-3">
                        <a href="javascript:void(0)" class="btn btn-primary">View all</a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Header actions end -->

                <!-- User settings start -->
                <div class="dropdown ms-2">
                  <a id="userSettings" class="dropdown-toggle user-settings" href="#!" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="me-2 text-truncate d-lg-block d-none">Sally Esparza</span>
                    <div class="icon-box md rounded-4 fw-bold bg-primary-subtle text-primary">
                      SE
                    </div>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end shadow-lg">
                    <a class="dropdown-item d-flex align-items-center" href="profile.php"><i
                        class="bi bi-person fs-4 me-2"></i>My Profile</a>
                    <a class="dropdown-item d-flex align-items-center" href="settings.php"><i
                        class="bi bi-gear fs-4 me-2"></i>Account Settings</a>
                    <div class="mx-3 my-2 d-grid">
                      <a href="login.php" class="btn btn-warning">Logout</a>
                    </div>
                  </div>
                </div>
                <!-- User settings end -->

              </div>
              <!-- Header action bar ends -->

            </div>
            <!-- App header actions ends -->

          </div>