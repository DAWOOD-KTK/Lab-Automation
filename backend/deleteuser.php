<?php

session_start();

include "db.php";

$id = $_GET['id'];

$q1 = "SELECT * FROM `userstaafe` WHERE id = '$id'";
$res = mysqli_query($conn,$q1);
$data = mysqli_fetch_assoc($res);

$imgpath = "../assets/images/".$data["image"];

if(file_exists($imgpath)){
    unlink($imgpath);
}

$q="DELETE FROM userstaafe WHERE id = '$id'";
$res1 = mysqli_query($conn,$q);
if($res1){
    $_SESSION['alert'] = [
       'type' => 'success',
           'title' => 'Delete user',
           'text' => 'User deleted successfully!'
    ];
header("Location: http://localhost/Lab-Automation/user-list.php");
            exit;
}
else {
        $error = mysqli_error($conn);
        $_SESSION['alert'] = [
       'type' => 'erorr',
           'title' => 'delete user ',
           'text' => 'User deleted unsuccessful!'
    ];
    header("Location: http://localhost/Lab-Automation/add-user.php");
            exit;

}




?>