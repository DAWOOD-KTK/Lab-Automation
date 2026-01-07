<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "db.php";
header('Content-Type: application/json');

$id      = mysqli_real_escape_string($conn, $_POST['id'] ?? '');
$r_type  = mysqli_real_escape_string($conn, $_POST['result_type'] ?? '');
$remarks = mysqli_real_escape_string($conn, $_POST['remarks'] ?? '');
$t_by    = mysqli_real_escape_string($conn, $_POST['tested_by'] ?? '');

if(!$id){
    echo json_encode(['status'=>'error','message'=>'Invalid ID']);
    exit;
}

/* Update single test */
$u = mysqli_query($conn,"
UPDATE testing_data SET
    result_type='$r_type',
    remarks='$remarks',
    tested_by='$t_by'
WHERE id='$id'
");

if(!$u){
    echo json_encode(['status'=>'error','message'=>mysqli_error($conn)]);
    exit;
}

/* get product */
$pq = mysqli_query($conn,"SELECT product_id FROM testing_data WHERE id='$id'");
$p  = mysqli_fetch_assoc($pq);

if(!$p){
    echo json_encode(['status'=>'error','message'=>'Product not found']);
    exit;
}

$product_id = $p['product_id'];

/* aggregate */
$check = mysqli_query($conn,"
SELECT
    COUNT(DISTINCT testing_code) total_tests,
    SUM(result_type='Pass') pass_count,
    SUM(result_type='Fail') fail_count,
    SUM(result_type='Pending') pending_count
FROM testing_data
WHERE product_id='$product_id'
");

$c = mysqli_fetch_assoc($check);

/* decision */
if($c['fail_count'] > 0){
    $send_to='Remanufacture'; $is_locked=0;
}
elseif($c['pending_count'] > 0 || $c['total_tests'] < 4){
    $send_to='Pending'; $is_locked=0;
}
else{
    $send_to='CPRI'; $is_locked=1;
}

/* update all */
mysqli_query($conn,"
UPDATE testing_data
SET send_to='$send_to', is_locked='$is_locked'
WHERE product_id='$product_id'
");

echo json_encode([
    'status'=>'success',
    'final_status'=>$send_to,
    'message'=>'Testing updated successfully'
]);
exit;
