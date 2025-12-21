
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="stylesheet" href="assets/bootstrap-5.3.8-dist/css/bootstrap.min.css">
  
  <title>
    Material Dashboard 3 by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" />
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/material-dashboard.css?v=3.2.0" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-100">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-start ms-2  bg-white my-2" id="sidenav-main">
    <div class="sidenav-header">
        
        <div class="text-center">
          <span class="ms-1 text-md text-dark "> lab - automtion </span>
        </div>
    
    </div>
    <hr class="horizontal dark mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-dark <?= (basename($_SERVER['PHP_SELF'])=="dashboard.php")? "active": "";?> " href="dashboard.php">
            <!-- <i class="material-symbols-rounded opacity-5">dashboard</i> -->
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark <?= (basename($_SERVER['PHP_SELF'])=="tables.php")? "active": "";?>" href="tables.php">
            <!-- <i class="material-symbols-rounded opacity-5">table_view</i> -->
            <span class="nav-link-text ms-1">all pruducts</span>
          </a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link text-dark <?= (basename($_SERVER['PHP_SELF'])=="profile.php")? "active": "";?>" href="profile.php">
            <!-- <i class="material-symbols-rounded opacity-5">person</i> -->
            <span class="nav-link-text ms-1">Users</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark <?= (basename($_SERVER['PHP_SELF'])=="profile.php")? "active": "";?>" href="profile.php">
            <!-- <i class="material-symbols-rounded opacity-5">person</i> -->
            <span class="nav-link-text ms-1">Users</span>
          </a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link text-dark" href="sign-in.php">
            <!-- <i class="material-symbols-rounded opacity-5">assignment</i> -->
            <span class="nav-link-text ms-1">Log out</span>
          </a>
        </li>
      </ul>
    </div>
   
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-3 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
          
          </ol>
        </nav>
       
      </div>
    </nav>
    <!-- End Navbar -->