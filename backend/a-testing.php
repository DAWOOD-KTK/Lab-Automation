<?php
include "db.php";

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['status'=>'error','message'=>'Invalid request']);
    exit;
}

$p_id         = $_POST['id'] ?? '';
$t_type       = $_POST['testing_type'] ?? '';
$testing_code = $_POST['testing_code'] ?? '';
$test_by      = $_POST['tested_by'] ?? '';
$remarks      = $_POST['remarks'] ?? '';
$result       = $_POST['result_type'] ?? '';

if(!$p_id || !$testing_code || !$result){
    echo json_encode(['status'=>'error','message'=>'Required fields missing']);
    exit;
}

/* Product snapshot */
$product_query = mysqli_query($conn,
    "SELECT product_type, product_code, rivision 
     FROM products 
     WHERE id='$p_id'"
);

if(!$product_query || mysqli_num_rows($product_query)==0){
    echo json_encode(['status'=>'error','message'=>'Product not found']);
    exit;
}

$p = mysqli_fetch_assoc($product_query);

/* Status logic */
if($result=='Pass'){
    $send_to='CPRI'; $is_locked=1;
}elseif($result=='Fail'){
    $send_to='Remanufacture'; $is_locked=0;
}else{
    $send_to='Pending'; $is_locked=0;
}

/* Roll generation */
$rq = mysqli_query($conn,
    "SELECT MAX(testing_roll) AS last_roll
     FROM testing_data
     WHERE testing_code='$testing_code'"
);
$rr = mysqli_fetch_assoc($rq);
$next = ($rr['last_roll'] ?? 0) + 1;
$roll = str_pad($next,6,'0',STR_PAD_LEFT);

/* Final Testing ID */
$testing_id = $p['product_code'].$p['rivision'].$testing_code.$roll;

/* Insert */
$insert = mysqli_query($conn,"
INSERT INTO testing_data
(testing_id, product_id, product_code, revision, product_type,
 testing_code, testing_roll, testing_type, result_type,
 send_to, is_locked, tested_by, remarks)
VALUES
('$testing_id','$p_id','{$p['product_code']}','{$p['rivision']}','{$p['product_type']}',
 '$testing_code','$roll','$t_type','$result',
 '$send_to','$is_locked','$test_by','$remarks')
");

if(!$insert){
    echo json_encode(['status'=>'error','message'=>mysqli_error($conn)]);
    exit;
}

/* Update product */
$active = ($result=='Pass') ? 1 : 0;
mysqli_query($conn,"UPDATE products SET is_active='$active' WHERE id='$p_id'");

echo json_encode([
    'status'=>'success',
    'message'=>'Testing saved successfully',
    'testing_id'=>$testing_id
]);
