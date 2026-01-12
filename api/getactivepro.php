<?php
//  headers:
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

include "db.php";

$q = "SELECT * FROM `products` WHERE is_active = 1";

$res = mysqli_query($conn,$q);

if (mysqli_num_rows($res) > 0) {
    $data = mysqli_fetch_all($res,MYSQLI_ASSOC);
    echo json_encode($data);
} else {
    echo json_encode(array('message' => '404 page not found' , 'status' => false));
}
?>
