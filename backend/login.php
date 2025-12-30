<?php 
include "db.php";
if (isset($_POST['login'])) {
    $email =myqsli_real_escape_string($conn, $_POST['email']);
    $password =myqsli_real_escape_string($conn, $_POST['password']);

    $q ="SELECT * FROM WHERE 'email' = {'$email'} AND 'passwd' = {'$password'} ";

    $res= mysqli_query($conn,$q) or die("query failed");

    if (mysqli_num_rows($res) > 0) {
        while ($data = mysqli_fetch_assoc($res)) {
            session_start();
            $_SESSION['username'] = $data['name'];
            $_SESSION['userID'] = $data['id'];
            $_SESSION['UserRoll'] = $data['roll'];

            header("location:../index.php ");
        }
        
    }else{
        echo "<div class='alert alert-danger'>USER NAME AND PASSWORD are not match</div>";
    }
     
}


?>