<?php
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
    echo "<script>
<<<<<<< HEAD
        alert('user remove successfuly..')
        window.location.href='../user-list.php'
    </script>";
    // header("location:index.php");
}else{
    echo "<script>
        alert('failed')
        window.location.href='.//user-list.php'
    </script>";
    // header("location:index.php");
=======
        Swal.fire({
            icon: 'success',
            title: 'Deleted',
            text: 'User successfully deleted'
        }).then(() => {
            window.location.href='../user-list.php';
        });
        </script>";
}
else {
        $error = mysqli_error($conn);
        echo "<script>
        Swal.fire({
            icon: 'error',
            title: 'Deletion Failed',
            text: '".addslashes($error)."'
        }).then(() => {
            window.location.href='../user-list.php';
        });
        </script>";
>>>>>>> refs/remotes/origin/main
}




?>