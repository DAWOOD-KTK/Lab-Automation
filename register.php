<?php

session_start();
if (isset($_SESSION['webuser'])) {
  header("Location: index.php");
}
?>
<?php
if (isset($_SESSION['alert'])):
?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
Swal.fire({
    icon: '<?= $_SESSION['alert']['type'] ?>',
    title: '<?= $_SESSION['alert']['title'] ?>',
    text: '<?= $_SESSION['alert']['text'] ?>',
    confirmButtonColor: '#6f42c1'
}).then(() => {
    window.location.href =  'login.php';  // alert ke baad reload ya redirect
});
</script>
<?php
unset($_SESSION['alert']);

endif;
?>
<!DOCTYPE html>
<html lang="en">

  
<!-- Mirrored from bootstrapget.com/demos/cube-admin-template/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Feb 2025 22:03:55 GMT -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Admin Templates & Dashboards - Cube Admin Template</title>
  <link rel="stylesheet" href="backend/logout.php">
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

    <!-- *************
			************ CSS Files *************
		************* -->
    <link rel="stylesheet" href="assets/fonts/bootstrap/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="admin_panel/assets/css/main.min.css" />

  </head>

  <body>
 

    <!-- Page wrapper starts -->
    <div class="page-wrapper">

      <!-- Auth container starts -->
      <div class="auth-container">
       
        <div class="d-flex justify-content-center">
          
          <!-- Form starts -->
          <form action="registerSub.php" method="post" enctype="multipart/form-data">

            <!-- Logo starts -->
            <a href="index.html" class="auth-logo mt-5 mb-3">
              <img src="admin_panel/assets/images/logo.svg" alt="Bootstrap Gallery" />
            </a>
            <!-- Logo ends -->
             

            <!-- Authbox starts -->
            <div class="auth-box">
              <h3 class="title bg-primary rounded text-light text-center p-2 mb-4 mx-auto">Register</h3>

              <div class="mb-3">
                        <form action="backend/cuser.php" method="post" enctype="multipart/form-data">
    <input type="text" name="name" class="form-control mb-3" placeholder="Enter your name" required>
    <input type="email" name="email" class="form-control mb-3" placeholder="Enter your email" required>
    <input type="password" name="password" class="form-control mb-3" placeholder="Make your password" required>
     <input id="img" type="file" name="image" class="form-control mb-3" required>
              <div class="d-grid gap-2">
                <button type="submit" name="login" class="btn btn-primary">Register</button>
               <span class='text-center'>Already I have an <a href="login.php" class='text-info'>Account.</a></span>
                
              </div>

            </div>
            <!-- Authbox ends -->

          </form>
          <!-- Form ends -->

        </div>

      </div>
      <!-- Auth container ends -->

    </div>
    <!-- Page wrapper ends -->

  </body>


<!-- Mirrored from bootstrapget.com/demos/cube-admin-template/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Feb 2025 22:03:55 GMT -->
</html>