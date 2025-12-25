<?php

include "db.php";
// if(isset($_POST["submit"])){
$name = mysqli_real_escape_string($conn, $_POST["name"]);
$email = mysqli_real_escape_string($conn, $_POST["email"]);
$password = password_hash($_POST["password"], PASSWORD_BCRYPT);
$roll = mysqli_real_escape_string($conn, $_POST["user"]);
$email = mysqli_real_escape_string($conn, $_POST['email']);
//email validation
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<script>
    alert('Invalid email address');
    window.location.href='../add-user.php';
    </script>";
    exit();
}

//unique email validation
$check = mysqli_query($conn, "SELECT * FROM UserStaafe WHERE email='$email'");
if(mysqli_num_rows($check) > 0){
    echo "<script>
        alert('Email already exists!');
        window.location.href='../add-user.php';
    </script>";
    exit();
}




$imagename =$_FILES["image"]["name"] ;
$tmp_image =$_FILES["image"]["tmp_name"] ;
$type_image =$_FILES["image"]["type"] ;
$image_size =$_FILES["image"]["size"] ;
$folder ="../assets/images/" . $imagename;
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
// }
    

?>