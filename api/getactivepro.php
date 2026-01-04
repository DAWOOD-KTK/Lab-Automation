<?php
header('Countent-Type: application/json');
header('Acess-Control-Allow-Origin: *');

include "db.php";


$q = " SELECT * FROM `products` WHERE is_active = 1";

$res = mysqli_query($conn,$q);

if (mysqli_num_rows($res) > 0) {

    $data = mysqli_fetch_all($res,MYSQLI_ASSOC);
    echo json_encode($data);

}else{
    echo json_encode(array('message' => '404 page not found' , 'status' => false ));
}





?>