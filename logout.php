<?php
session_start();

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Logout</title>

    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

<script>
    Swal.fire({
        icon: 'success',
        title: 'Logged Out',
        text: 'You have been logged out successfully!',
        showConfirmButton: false,
        timer: 2000
    }).then(() => {
        window.location.href = 'login.php';
    });
</script>

</body>
</html>
