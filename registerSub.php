<?php
session_start();
include "admin_panel/backend/db.php";

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: register.php");
    exit;
}

$name  = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$roll  = 'user';
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

/* Email validation */
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['alert'] = [
        'type' => 'error',
        'title' => 'Invalid Email',
        'text' => 'Please enter a valid email address'
    ];
    header("Location: register.php");
    exit;
}

/* Unique email */
$check = mysqli_query($conn, "SELECT id FROM userstaafe WHERE email='$email' LIMIT 1");
if (mysqli_num_rows($check) > 0) {
    $_SESSION['alert'] = [
        'type' => 'error',
        'title' => 'Duplicate Email',
        'text' => 'This email already exists'
    ];
    header("Location: register.php");
    exit;
}

/* Image validation */
if (!isset($_FILES['image']) || $_FILES['image']['error'] != 0) {
    $_SESSION['alert'] = [
        'type' => 'error',
        'title' => 'Image Required',
        'text' => 'Please upload an image'
    ];
    header("Location: register.php");
    exit;
}

$imagename = $_FILES['image']['name'];
$tmp_image = $_FILES['image']['tmp_name'];
$size = $_FILES['image']['size'];
$ext = strtolower(pathinfo($imagename, PATHINFO_EXTENSION));
$allowed = ['jpg','jpeg','png'];
$max = 5 * 1024 * 1024;

if (!in_array($ext, $allowed)) {
    $_SESSION['alert'] = [
        'type' => 'error',
        'title' => 'Invalid Image Type',
        'text' => 'Only JPG, JPEG, PNG allowed'
    ];
    header("Location: register.php");
    exit;
}

if ($size > $max) {
    $_SESSION['alert'] = [
        'type' => 'error',
        'title' => 'Image Too Large',
        'text' => 'Max size is 5MB'
    ];
    header("Location: register.php");
    exit;
}

$imagename = time() . '_' . $imagename;
$folder = "admin_panel/assets/images/" . $imagename;
move_uploaded_file($tmp_image, $folder);

/* Insert user */
$q = "INSERT INTO userstaafe (name, email, passwd, roll, image)
      VALUES ('$name', '$email', '$password', '$roll', '$imagename')";

if (mysqli_query($conn, $q)) {
    $_SESSION['alert'] = [
        'type' => 'success',
        'title' => 'Success',
        'text' => 'Registered successfully!'
    ];
    header("Location: index.php");
} else {
    $_SESSION['alert'] = [
        'type' => 'error',
        'title' => 'Database Error',
        'text' => mysqli_error($conn)
    ];
    header("Location: register.php");
}
exit;
