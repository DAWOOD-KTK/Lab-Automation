
<?php
session_start();

include "db.php";
// getting data from form
$id = $_POST['id'];




$name =mysqli_real_escape_string($conn, $_POST['name'] ?? "");
$email =mysqli_real_escape_string($conn, $_POST['email']?? "");
$password = password_hash($_POST["password"], PASSWORD_BCRYPT);
$user =mysqli_real_escape_string($conn, $_POST['user'] ?? "");
$image_name = $_FILES['image']['name'];

// getting dat from database

$q ="SELECT * FROM `userstaafe` WHERE id = $id";

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
           $q2 = "UPDATE `userstaafe` SET `name`='$name',`email`='$email',`passwd`='$password',`roll`='$user',`image`='$image_name' WHERE id = $id";
            $res2 = mysqli_query($conn,$q2);
            if($res2){
                  move_uploaded_file($tmp_name,$folder);
                $_SESSION['alert'] = [
               'type' => 'success',
               'title' => 'update user',
               'text' => 'User updated successfully!'
              ];
           header("Location: http://localhost/Lab-Automation/admin_panel/user-list.php");
            exit;
            }else{
                $_SESSION['alert'] = [
           'type' => 'erorr',
           'title' => 'Update user',
           'text' => 'Update uuser unsuccessful!'
           ];
            header("Location: http://localhost/Lab-Automation/admin_panel/updateuser.php");
            exit;
            }




            }else{
            $_SESSION['alert'] = [
           'type' => 'erorr',
           'title' => 'image ',
           'text' => 'image size should be less then 5mb'
           ];
            header("Location: http://localhost/Lab-Automation/admin_panel/updateuser.php");
            exit;
        }



    }else{
        $_SESSION['alert'] = [
           'type' => 'erorr',
           'title' => 'image',
           'text' => 'image type not supported'
           ];
            header("Location: http://localhost/Lab-Automation/admin_panel/updateuser.php");
            exit;
    }

    
}else{

   $q2 = "UPDATE `userstaafe` SET `name`='$name',`email`='$email',`passwd`='$password',`roll`='$user',`image`='$image_name' WHERE id =$id";
   $res2 =mysqli_query($conn,$q2);

    if($res2){
                $_SESSION['alert'] = [
               'type' => 'success',
               'title' => 'Delete user',
               'text' => 'User deleted successfully!'
              ];
           header("Location: http://localhost/Lab-Automation/admin_panel/add-user.php");
            exit;
            }else{
               $_SESSION['alert'] = [
           'type' => 'erorr',
           'title' => 'Update user',
           'text' => 'Update uuser unsuccessful!'
           ];
            header("Location: http://localhost/Lab-Automation/admin_panel/updateuser.php");
            exit;
            }
}





?>

