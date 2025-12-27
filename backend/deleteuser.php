<?php
include "db.php";

$id = $_GET['id'];

$q1 = "SELECT * FROM `UserStaafe` WHERE id = '$id'";
$res = mysqli_query($conn,$q1);
$data = mysqli_fetch_assoc($res);

$imgpath = "../assets/images/".$data["image"];

if(file_exists($imgpath)){
    unlink($imgpath);
}

$q="DELETE FROM UserStaafe WHERE id = '$id'";
$res1 = mysqli_query($conn,$q);
if($res1){
    echo "<script>
        alert('Data Successfully Deleted')
        window.location.href='../user-list.php'
    </script>";
    // header("location:index.php");
}else{
    echo "<script>
        alert('failed')
        window.location.href='.//user-list.php'
    </script>";
    // header("location:index.php");
}





?>