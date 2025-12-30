<?php
include "backend/db.php";
if(isset($_POST['submit'])){

    $id = $_POST["id"];

    //checking that is empty or not
    if(!$id){
        die("Invalid ID");
    }
    // inglate SQL Inject (saFTY)
    unset($_POST['manufacturing_no'], $_POST['product_id'], $_POST['product_code'] ,$_POST['is_active'],$_POST["product_type"] ,$_POST["product_name"] );


    $rivision = $_POST["rivision"] ?? "";
 
    // echo "<pre>";
    // print_r($_POST);
    // exit;


    $query = "UPDATE products SET 
    rivision = '$rivision'       
    WHERE id = '$id'";
    $res = mysqli_query($conn,$query);    
    if($res){
        echo "<script>
            alert('Product Updated Successfully');
            window.location.href='products-list.php';
        </script>";
    }else{
        echo "Error: " . mysqli_error($conn);
    }
    
}
// ?>