<?php
session_start();
include "admin_panel/backend/db.php";


if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: login.php");
    exit;
}

$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = $_POST['password'];


$q = "SELECT id, name, email, passwd, roll, image 
      FROM userstaafe 
      WHERE email = '$email' 
      LIMIT 1";

$res = mysqli_query($conn, $q);

if ($res && mysqli_num_rows($res) === 1) {

    $user = mysqli_fetch_assoc($res);

    /* Verify password */
    if (password_verify($password, $user['passwd'])) {

       
        $_SESSION['webuser'] = [
            'id'    => $user['id'],
            'name'  => $user['name'],
            'email' => $user['email'],
            'roll'  => $user['roll'],
            'image' => $user['image']
        ];

        $_SESSION['alert'] = [
            'type'  => 'success',
            'title' => 'Login Successful',
            'text'  => 'Welcome back, ' . $user['name']
        ];

        header("Location: index.php");
        exit;

    } else {

        $_SESSION['alert'] = [
            'type'  => 'error',
            'title' => 'Login Failed',
            'text'  => 'Incorrect password'
        ];

        header("Location: login.php");
        exit;
    }

} else {

    $_SESSION['alert'] = [
        'type'  => 'error',
        'title' => 'Login Failed',
        'text'  => 'Email address not found'
    ];

    header("Location: login.php");
    exit;
}
