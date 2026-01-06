<?php
include "db.php";
header('Content-Type: application/json');

$product_id = $_POST['product_id'] ?? 0;
$completed = [];

if($product_id){
    $q = mysqli_query($conn,"
        SELECT testing_code 
        FROM testing_data 
        WHERE product_id='$product_id' AND result_type IS NOT NULL
    ");

    while($row = mysqli_fetch_assoc($q)){
        $completed[] = $row['testing_code'];
    }
}

echo json_encode(['completed'=>$completed]); // [] if no tests done
