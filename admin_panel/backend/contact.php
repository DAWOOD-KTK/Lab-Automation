<?php
include "db.php"; // database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name    = mysqli_real_escape_string($conn, $_POST['name']);
    $email   = mysqli_real_escape_string($conn, $_POST['email']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    if ($name == "" || $email == "" || $message == "") {
        echo "Please fill required fields";
        exit;
    }

    $query = "INSERT INTO contact_messages 
              (name, email, subject, message) 
              VALUES ('$name', '$email', '$subject', '$message')";

    if (mysqli_query($conn, $query)) {
     header("Location: ../../index.php?contact=success");
    exit;

        exit;
    } else {
        echo "Something went wrong!";
    }
}
?>
