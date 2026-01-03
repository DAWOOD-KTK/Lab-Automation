<?php 
session_start();
 if (!isset($_SESSION['user'])) {
   header("Location: login.php");

 }

?> 

<!DOCTYPE html>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
  color: #5a32a3 !important;
  margin-left:-4px;
  
}
/*  */
      
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
  transition : 0.3s ease-in;
}
label{
color: #4f2d8fff !important;
}
select{
  color: #4f2d8fff !important;

}
.font{
  font-size: 10px;/
}
</style>
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
              <img src="assets/images/log9.png" class="logo" alt="Auto_logo" class="img-fluid " ><p class="mx-3 size "><h1 class="clr"><b>L</b></h1></P><p class=" size"> ab</p> <p> <h1 class="clr"> <b>A</b></h1></P><p class=" size"> utomation</p>
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
              <li  class="treeview">
                <a href="!#">
                 <i class="bi bi-person-badge"></i>
                  <span class="menu-text clr-nav">User / Admin</span>
                </a>
                <ul class="treeview-menu">
                  <?php if($_SESSION['user']['roll'] == 'admin'){?>
                  <li>
                    <a href="add-user.php">Add User</a>
                  </li>
                  <?php }?>
                  <li>
                    <a href="user-list.php">User List</a>
                  </li>
                </ul>
              </li>
              <li  class="treeview">
                <a href="!#">
                  <i class="bi bi-box-seam"></i>
                  <span class="menu-text">Product</span>
                </a>
                <ul class="treeview-menu">
                  <?php if($_SESSION['user']['roll'] == 'admin'){?>
                  <li>
                    <a href="add-product.php">Add Product</a>
                  </li>
                  <?php }?>
                  <li>
                    <a href="products-list.php">Product List</a>
                  </li>
                 
                </ul>
              </li>
               <?php if($_SESSION['user']['roll'] == 'admin'){?>
              <li>
                <a href="testing.php">
                 <i class="bi bi-clipboard-data"></i>
                  <span class="menu-text">Testing </span>
                </a>
               
              </li>
              <?php }?>
               <?php if($_SESSION['user']['roll'] == 'admin'){?>
              <li>
                <a href="testing-list.php">
                 <i class="bi bi-clipboard-data"></i>
                  <span class="menu-text">All Testing Record</span>
                </a>
               
              </li>
              <?php }?>
              
              <li  class="treeview">
                <a href="#!">
                <i class="bi bi-patch-check"></i>
                  <span class="menu-text">Testing Status</span>
                </a>
                <ul class="treeview-menu">
                  <li> <a href="send-to-cpri.php">ready for CPRI</a></li>
                  <li> <a href="remanufacturing-products.php">Send To Remanufacture</a></li>
                  <li> <a href="pending.php">Pennding For Test</a></li>
                      
                </ul>
              </li>
              
                  <li  class="treeview">
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
              
           
              
            
              <li >
                <a href="#!">
                  <i class="bi bi-pie-chart"></i>
                  <span class="menu-text">Graphs</span>
                </a>
                
              </li>
            
             
             
              
             
                
             
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
                <img src="assets/images/log9.png" class="logo" alt="Auto_logo" class="img-fluid " >
              </a>
              <!-- Logo sm end -->

            </div>
            <!-- App brand sm ends -->

            <!-- Page title starts -->
             <p class="mx-3 size "><h1 class="clr ms-2"><b>L</b></h1></P><p class=" size"> ab</p> <p> <h1 class="clr ms-2"> <b>A</b></h1></P><p class=" size"> utomation</p>
            <!-- <h5 class="m-0 ms-2 fw-semibold">Dashboard</h5> -->
            <!-- Page title ends -->

            <!-- App header actions starts -->
            <div class="header-actions">
              <?php if (basename($_SERVER['PHP_SELF']) == 'products-list.php') {?>
              <!-- Search container start -->
              <div class="search-container d-xl-block d-none me-3">
                <input type="text" class="form-control" id="searchData" placeholder="Search" />
                <i class="bi bi-search"></i>
              </div>
              <?php }?>
              <!-- Search container ends -->

              <!-- Header action bar starts -->
              <div class="bg-white p-2 rounded-4 d-flex align-items-center">

               

                <!-- User settings start -->
                <div class="dropdown ms-2">
                  <a id="userSettings" class="dropdown-toggle user-settings" href="#!" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="me-2 text-truncate clr d-lg-block d-none"><?php echo $_SESSION['user']['name']; ?></span>
                    <div class="icon-box md rounded-4 fw-bold bg-primary-subtle text-primary">
                       <img style="width: 100%; height: 100%;border-radius: 50%;" src="assets/images/<?php echo $_SESSION['user']['image']; ?>" alt="user pic">
                        
                    </div>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end shadow-lg">
                   
                  
                    <div class="mx-3 my-2 d-grid">
                      <a href="backend/logout.php?logout=logout" class="btn btn-warning">Logout</a>
                    </div>
                  </div>
                </div>
                <!-- User settings end -->

              </div>
              <!-- Header action bar ends -->

            </div>
            <!-- App header actions ends -->

          </div>
