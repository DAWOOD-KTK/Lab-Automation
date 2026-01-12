<?php
session_start();

/* If user already logged in, redirect */
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
    <title>User Registration</title>

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
        window.location.href = 'login.php';
    <?php else: ?>
        window.location.href = 'register.php';
    <?php endif; ?>
});
</script>
<?php unset($_SESSION['alert']); endif; ?>

<!-- Page Wrapper -->
<div class="page-wrapper">

    <!-- Auth Container -->
    <div class="auth-container">
        <div class="d-flex justify-content-center">

            <!-- Register Form -->
            <form action="registerSub.php" method="POST" enctype="multipart/form-data" class="w-100" style="max-width: 420px;">

                <!-- Logo -->
                <a href="index.php" class="auth-logo mt-5 mb-3 d-block text-center">
                    <img src="admin_panel/assets/images/logo.svg" alt="Logo">
                </a>

                <!-- Box -->
                <div class="auth-box">

                    <h3 class="title bg-primary rounded text-light text-center p-2 mb-4">
                        Register
                    </h3>

                    <!-- Name -->
                    <input type="text"
                           name="name"
                           class="form-control mb-3"
                           placeholder="Enter your name"
                           required>

                    <!-- Email -->
                    <input type="email"
                           name="email"
                           class="form-control mb-3"
                           placeholder="Enter your email"
                           required>

                    <!-- Password -->
                    <input type="password"
                           name="password"
                           class="form-control mb-3"
                           placeholder="Create a password"
                           required>

                    <!-- Image -->
                    <input type="file"
                           name="image"
                           class="form-control mb-3"
                           accept="image/png, image/jpeg"
                           required>

                    <!-- Button -->
                    <div class="d-grid gap-2">
                        <button type="submit" name="register" class="btn btn-primary">
                            Register
                        </button>

                        <span class="text-center">
                            Already have an
                            <a href="login.php" class="text-info">Account?</a>
                        </span>
                    </div>

                </div>
                <!-- /Box -->

            </form>
            <!-- /Register Form -->

        </div>
    </div>
    <!-- /Auth Container -->

</div>
<!-- /Page Wrapper -->

</body>
</html>
