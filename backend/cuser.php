<?php

include "db.php";

$name =$_POST["name"] ;
$email =$_POST["email"] ;
$password =$_POST["password"] ;

$image = $_FILES['image'];
// $imagename =$_FILES["image"]["name"] ;
// $tmp_image =$_FILES["image"]["tmp_name"] ;
// $type_image =$_FILES["image"]["type"] ;
// $image_size =$_FILES["image"]["size"] ;
// $folder ="./images/" . $imagename;

echo $name;
echo $email;
echo $password;
echo $image;

    // if ($type_image == "image/png" || $type_image == "image/jpg" || $type_image == "image/jpeg" ) {
    //     if ($image_size > 1024*5) {
            
    //     }

        
    // }else{
    //    echo "
    //    <script>
    //         alert('images type doesn't supported')
    //         windows.location.href='add-user.php';
    //    </script>";

    // }
    


?>