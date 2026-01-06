<?php
include "db.php";

$product_id   = $_POST['product_id'] ?? '';
$testing_code = $_POST['testing_code'] ?? '';

if(!$product_id || !$testing_code){
    exit;
}

// product snapshot
$q = mysqli_query($conn,
    "SELECT product_code, revision 
     FROM products 
     WHERE id='$product_id'"
);

$p = mysqli_fetch_assoc($q);

// roll generate
$rq = mysqli_query($conn,
    "SELECT MAX(testing_roll) AS last_roll
     FROM testing_data
     WHERE testing_code='$testing_code'"
);

$rr = mysqli_fetch_assoc($rq);
$next = ($rr['last_roll'] ?? 0) + 1;
$roll = str_pad($next, 6, '0', STR_PAD_LEFT);

// FINAL ID
echo $p['product_code'].$p['revision'].$testing_code.$roll;
