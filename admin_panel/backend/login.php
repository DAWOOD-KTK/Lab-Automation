<?php 

session_start();
include "db.php";

$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = $_POST['password'];


$q = "SELECT * FROM `userstaafe` WHERE `email` = '$email'";
$res = mysqli_query($conn, $q);

if ($res && mysqli_num_rows($res) > 0) {
    $data = mysqli_fetch_assoc($res);
    
    //  Verify the hashed password 
    if (password_verify($password, $data['passwd'])) {
        $_SESSION['user'] = $data;
        header("Location: ../index.php");
        exit();
    } else {
        // Password did not match
        echo "<script>alert('Invalid password'); window.location.href='../login.php';</script>";
    }
} else {
    // Email not found
    echo "<script>alert('Email not found'); window.location.href='../login.php';</script>";
}

     



?>