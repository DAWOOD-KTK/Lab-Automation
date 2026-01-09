<?php
include "db.php";
header('Content-Type: application/json');

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




/* Roll generation: per product */
$rq = mysqli_query($conn,"
    SELECT MAX(testing_roll) AS last_roll
    FROM testing_data
    WHERE product_id='$p_id'
");
$rr = mysqli_fetch_assoc($rq);
$next = ($rr['last_roll'] ?? 0) + 1;
$roll = str_pad($next,6,'0',STR_PAD_LEFT);

/* Final Testing ID */
$testing_id = $p['product_code'].$p['rivision'].$testing_code.$roll;

/* Insert test */
$insert = mysqli_query($conn,"
INSERT INTO testing_data
(testing_id, product_id, product_code, revision, product_type,
 testing_code, testing_roll, testing_type, result_type,
 send_to, is_locked, tested_by, remarks)
VALUES
('$testing_id','$p_id','{$p['product_code']}','{$p['rivision']}','{$p['product_type']}',
 '$testing_code','$roll','$t_type','$result',
 'Pending','0','$test_by','$remarks')
");

if(!$insert){
    if(mysqli_errno($conn) == 1062){
        echo json_encode([
            'status'=>'error',
            'message'=>'This test is already completed for this product'
        ]);
        exit;
    }
    echo json_encode(['status'=>'error','message'=>mysqli_error($conn)]);
    exit;
}


/* Check all tests of this product */
$check = mysqli_query($conn,"
SELECT
SUM(result_type='Fail') AS fail_count,
SUM(result_type='Pending') AS pending_count,
COUNT(DISTINCT testing_code) AS total_tests
FROM testing_data
WHERE product_id='$p_id'
");

$c = mysqli_fetch_assoc($check);

if($c['fail_count'] > 0){
    $final_send_to = 'Remanufacture';
    $final_locked = 0;
}
elseif($c['pending_count'] > 0 OR $c['total_tests'] < 4){
    $final_send_to = 'Pending';
    $final_locked = 0;
}
else{
    $final_send_to = 'CPRI';
    $final_locked = 1;
}

/* Update all tests of this product */
mysqli_query($conn,"
UPDATE testing_data
SET send_to='$final_send_to', is_locked='$final_locked'
WHERE product_id='$p_id'
");

echo json_encode([
    'status'=>'success',
    'message'=>'Testing saved successfully',
    'testing_id'=>$testing_id,
    'final_status'=>$final_send_to
]);
