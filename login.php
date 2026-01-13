<?php
session_start();

/* If already logged in, redirect */
if (isset($_SESSION['webuser'])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Login</title>

    <link rel="shortcut icon" href="assets/images/favicon.svg">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/fonts/bootstrap/bootstrap-icons.min.css">
    <link rel="stylesheet" href="admin_panel/assets/css/main.min.css">

    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

<?php if (isset($_SESSION['alert'])): ?>
<script>
Swal.fire({
    icon: <?= json_encode($_SESSION['alert']['type']) ?>,
    title: <?= json_encode($_SESSION['alert']['title']) ?>,
    text: <?= json_encode($_SESSION['alert']['text']) ?>,
    confirmButtonColor: '#6f42c1'
}).then(() => {
    <?php if ($_SESSION['alert']['type'] === 'success'): ?>
        window.location.href = "index.php";
    <?php else: ?>
        window.location.href = "login.php";
    <?php endif; ?>
});
</script>
<?php unset($_SESSION['alert']); endif; ?>

<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="auth-container">
        <div class="d-flex justify-content-center">

            <!-- Login Form -->
            <form action="loginSub.php"
                  method="POST"
                  class="w-100"
                  style="max-width:420px;">

                <!-- Logo -->
                <a href="index.php" class="auth-logo mt-5 mb-3  text-center d-flex">
                   <img src="img/srs3-removebg-preview.png" width="50" style="margin-left:90px">
                   <p class="mt-2 ms-2" style="color:#5a32a3; font-weight:900;font-size:20px">Manufacture</p>
                </a>

                <!-- Box -->
                <div class="auth-box">

                    <h3 class="title bg-primary rounded text-light text-center p-2 mb-4">
                        Login
                    </h3>

                    <!-- Email -->
                    <div class="mb-3">
                        <label class="form-label">Email <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="bi bi-envelope"></i>
                            </span>
                            <input type="email"
                                   name="email"
                                   class="form-control"
                                   placeholder="Enter your email"
                                   required>
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="mb-3">
                        <label class="form-label">Password <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="bi bi-lock"></i>
                            </span>
                            <input type="password"
                                   name="password"
                                   class="form-control"
                                   placeholder="Enter password"
                                   required>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="d-grid gap-2">
                        <button type="submit"
                                name="login"
                                class="btn btn-primary">
                            Login
                        </button>

                        <span class="text-center">
                            Create new
                            <a href="register.php" class="text-info">Account?</a>
                        </span>
                    </div>

                </div>
                <!-- /Box -->

            </form>
            <!-- /Login Form -->

        </div>
    </div>
</div>
<!-- /Page Wrapper -->

</body>
</html>
