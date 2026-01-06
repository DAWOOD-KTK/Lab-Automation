<?php
session_start(); 
include "db.php";
// if(isset($_POST["submit"])){
$name = mysqli_real_escape_string($conn, $_POST["name"]);
$password = password_hash($_POST["password"], PASSWORD_BCRYPT);
$roll = mysqli_real_escape_string($conn, $_POST["user"]);
$email = mysqli_real_escape_string($conn, $_POST['email']);

 //email validation
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         $_SESSION['alert'] = [
        'type' => 'error',
        'title' => 'Invalid Email',
        'text' => 'Please enter a valid email address'
     ];
    header( "Location: http://localhost/Lab-Automation/add-user.php");
    exit;
}

//unique email validation
$check = mysqli_query($conn, "SELECT * FROM userstaafe WHERE email='$email'");
if(mysqli_num_rows($check) > 0){
         $_SESSION['alert'] = [
        'type' => 'error',
        'title' => 'Duplicate Email',
        'text' => 'This email already exists!'
    ];
    header("Location: http://localhost/Lab-Automation/add-user.php");
    exit;
}




$imagename =$_FILES["image"]["name"] ;
$tmp_image =$_FILES["image"]["tmp_name"] ;
$type_image =$_FILES["image"]["type"] ;
$image_size =$_FILES["image"]["size"] ;
// $folder ="../assets/images/" . $imagename;
$max = 1024*1024*5 ;

    if ($type_image == "image/png" || $type_image == "image/jpg" || $type_image == "image/jpeg" ) {

        if ($image_size < $max) {
            $imagename = time() . '_' . $imagename;
            $folder = "../assets/images/" . $imagename;
            move_uploaded_file($tmp_image,$folder);
            $q = "INSERT INTO `userstaafe`(`id`, `name`, `email`, `passwd`, `roll`, `image`) VALUES (Null,'$name','$email','$password','$roll','$imagename')";
            $res = mysqli_query($conn,$q);
            if ($res) {
            $_SESSION['alert'] = [
           'type' => 'success',
           'title' => 'User Added',
           'text' => 'User added successfully!'
            ];
            header("Location: http://localhost/Lab-Automation/add-user.php");
            exit;
            }else{
            $error = mysqli_error($conn);
            $_SESSION['alert'] = [
           'type' =>'error',
           'title' => 'Database Error',
           'text' => addslashes($error)
            ];
            header("Location: http://localhost/Lab-Automation/add-user.php");
            exit;
            }
            }else{
            $_SESSION['alert'] = [
           'type' => 'error',
           'title' => 'Image Too Large',
           'text' => 'Image size is greater than 5MB'
            ];
            header("Location: ../add-user.php");
            exit;
           }  
           }else{
           $_SESSION['alert'] = [
           'type' => 'error',
           'title' =>  'Invalid Image Type',
           'text' => 'Only PNG, JPG, and JPEG files are supported'
            ];
            header("Location: http://localhost/Lab-Automation/add-user.php");
            exit;
           }
// }
    

?>