<?php

include "db.php";

$name =$_POST["name"] ;
$email =$_POST["email"] ;
$password =$_POST["password"] ;
$roll =$_POST["user"] ;



$imagename =$_FILES["image"]["name"] ;
$tmp_image =$_FILES["image"]["tmp_name"] ;
$type_image =$_FILES["image"]["type"] ;
$image_size =$_FILES["image"]["size"] ;
$folder ="../images/" . $imagename;
$max = 1024*1024*5 ;

    if ($type_image == "image/png" || $type_image == "image/jpg" || $type_image == "image/jpeg" ) {

        if ($image_size < $max) {
    
            $q = "INSERT INTO `UserStaafe`(`id`, `name`, `email`, `passwd`, `roll`, `image`) VALUES (Null,'$name','$email','$password','$roll','$folder')";
            $res = mysqli_query($conn,$q);

            if ($res) {
                move_uploaded_file($tmp_image,$folder);
                echo "<script>
                alert('User added successfully');
                window.location.href='../add-user.php';
            </script>";
            }else{
                echo "MySQL Error: " . mysqli_error($conn);
            }

           
        }else{
            echo "<script>
        alert('image size dose not supported');
        window.location.href='../add-user.php'
        </script>";
        }  
    }else{
       echo "<script>
        alert('image type dose not supported');
        window.location.href='../add-user.php'
        </script>";
    }
    

?>