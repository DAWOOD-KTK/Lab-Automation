<?php
include "db.php";

$id = $_GET['id'];

if(!$id){
    die("Invalid product");
}

// Product ko deactivate karo (DELETE NAHI)
$query = "UPDATE products SET is_active = 0 WHERE id = '$id'";
mysqli_query($conn, $query);

header("Location: ../products.php");
exit;
