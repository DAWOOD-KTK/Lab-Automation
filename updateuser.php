<?php
include "backend/db.php";

$gid = $_GET['id'];

$q ="SELECT * FROM `UserStaafe` WHERE id = $gid";
$res = mysqli_query($conn,$q);

$data=mysqli_fetch_assoc($res);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
    <meta name="description" content="Marketplace for Bootstrap Admin Dashboards" />
    <meta name="author" content="Bootstrap Gallery" />
    <link rel="canonical" href="https://www.bootstrap.gallery/">
    <meta property="og:url" content="https://www.bootstrap.gallery/">
    <meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
    <meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
    <meta property="og:type" content="Website">
    <meta property="og:site_name" content="Bootstrap Gallery">
    <link rel="shortcut icon" href="assets/images/favicon.svg" />
   <link rel="stylesheet" href="assets/vendor/calendar/css/custom.css" />
   <link rel="stylesheet" href="assets/css/main.min.css">
    <title>Update user</title>
</head>
<style>
    body{
        overflow-y: scroll;
    }
    #btn{
        font-size: 20px;
    }
   

</style>
<body>
         <a href="user-list.php" class="btn btn-primary">Back</a>

    <div class="container-fluid mt-5" >
    
    <div class="card col-md-8  mx-auto ">
        <div class="card-head">
            <h1 class="title bg-primary rounded text-center text-white p-1 m-1 testinheading " >UPDATE USER</h1>
            <hr>
        </div>
        <div class="card-body ">
           <form action="backend/updateuser.php" method="post" enctype="multipart/form-data">
               <input type="text" name="id" class="form-control mb-3 d-none" placeholder="Enter your name" required value="<?= $data['id'];?>" >
    <input type="text" name="name" class="form-control mb-3" placeholder="Enter your name" required value="<?= $data['name'];?>">
    <input type="email" name="email" class="form-control mb-3" placeholder="Enter your email" required value="<?= $data['email'];?>">
    <input type="password" name="password" class="form-control mb-3" placeholder="Make your password" required value="<?= $data['passwd'];?>">
    
    <select class="form-select mb-3" name="user" required>
        <option value="">Select User roll</option>
        <option value="admin" <?=  $data['roll'] == "admin" ? "Selected" : ""; ?> >Admin</option>
        <option value="subAdmin"  <?=  $data['roll'] == "Sub admin" ? "Selected" : ""; ?>>Sub Admin</option>
        <option value="manigar"  <?=  $data['roll'] == "manager" ? "Selected" : ""; ?>>Manager</option>
        <option value="user"  <?=  $data['roll'] == "user" ? "Selected" : ""; ?>>User</option>
    </select>

    <input id="img" type="file" name="image" class="form-control mb-3" value="<?= $data['image']?>">

    <div class="card-footer text-center">
        <button id="btn" type="submit" class="btn btn-primary w-100 m-0 p-2 testinheading">Submit</button>
    </div>
</form>

        </div>

      </div>
   



</div>

    
</body>
</html>
