<?php

include "db.php";
// getting data from form
$id = $_POST['id'];




$name =mysqli_real_escape_string($conn, $_POST['name'] ?? "");
$email =mysqli_real_escape_string($conn, $_POST['email']?? "");
$password =mysqli_real_escape_string($conn, $_POST['password']?? "");
$user =mysqli_real_escape_string($conn, $_POST['user'] ?? "");
$image_name = $_FILES['image']['name'];

// getting dat from database

$q ="SELECT * FROM `UserStaafe` WHERE id = $id";

$res = mysqli_query($conn,$q);



$data=mysqli_fetch_assoc($res);
// spritting or getting old image for update data
$old_img ="../assets/images/".$data["image"];

if (!empty($image_name)) {
// getting image details
    $tmp_name = $_FILES["image"]["tmp_name"] ?? "";
    $size = $_FILES["image"]["size"] ?? "";
    $type = $_FILES["image"]["type"] ?? "";
    $folder = "../assets/images./".$image_name;
// removing old from the folder 
    if(file_exists($old_img)){
        unlink($old_img);
    }

     if($type == "image/png" || $type == "image/jpg" || $type == "image/jpeg" ){

        if($size <= 5000000){
           $q2 = "UPDATE `UserStaafe` SET `name`='$name',`email`='$email',`passwd`='$password',`roll`='$user',`image`='$image_name' WHERE id = $id";
            $res2 = mysqli_query($conn,$q2);
            if($res2){
                  move_uploaded_file($tmp_name,$folder);
                echo "<script>
                       alert('Data Successfully Update')
                       window.location.href='../user-list.php'
                   </script>";
            }else{
                echo "<script>
                       alert('Failed')
                       window.location.href='../updateuser.php'
                   </script>";
            }




            }else{
            echo "<script>
        alert('image size dose not supported')
        window.location.href='../updateuser.php'
        </script>";
        }



    }else{
        echo "<script>
        alert('image type dose not supported')
        window.location.href='../updateuser.php'
        </script>";
    }

    
}else{

   $q2 = "UPDATE `UserStaafe` SET `name`='$name',`email`='$email',`passwd`='$password',`roll`='$user',`image`='$image_name' WHERE id =$id";
   $res2 =mysqli_query($conn,$q2);

    if($res2){
                echo "<script>
                       alert('Data Successfully Update')
                       window.location.href='../user-list.php'
                   </script>";
            }else{
                echo "<script>
                       alert('Failed')
                       window.location.href='../updateuser.php'
                   </script>";
            }
}





?>

