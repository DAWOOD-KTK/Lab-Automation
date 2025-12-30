<?php
include "backend/db.php";
if(isset($_POST['submit'])){

    $id = $_POST["id"];
    if(!$id){
        die("Invalid ID");
    }
    // inglate SQL Inject (saFTY)
    unset($_POST['manufacturing_no'], $_POST['product_id'], $_POST['product_code'] ,$_POST['is_active']);


    $rivision = $_POST["rivision"] ?? "";
    $product_type = $_POST["product_type"] ?? "";
    $product_name = $_POST["product_name"] ?? "";
 
    // echo "<pre>";
    // print_r($_POST);
    // exit;


    $query = "UPDATE products SET 
        rivision = '$rivision',
        product_type = '$product_type',
        product_name = '$product_name'
    WHERE id = '$id'";
    $res = mysqli_query($conn,$query);
    // $data = mysqli_fetch_assoc($res);

    
    if($res){
        echo "<script>
            alert('Product Updated Successfully');
            window.location.href='products.php';
        </script>";
    }else{
        echo "Error: " . mysqli_error($conn);
    }
    
}
// ?>