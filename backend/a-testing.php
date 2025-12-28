<?php
include "db.php";
if(isset($_POST["submit"])){

    //    if(empty($_POST['product_id'])){
    //     echo "<script>
    //         alert('Please select a product');
    //         window.location.href='../testing.php';
    //     </script>";
    //     exit;
    // }
    
    //   autogenerate testing idate

    function random_str($length = 6) {
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomString;
}

     // Current date
     $day = date('d');   // 2-digit day
     $month = date('m'); // 2-digit month
     $year = date('y');  // last 2 digits of year

// Combine random string + date → 12-character ID
     $testing_id = random_str(6) . $day . $month . $year;
     

    $p_id = $_POST['id'] ?? "";

    if(empty($p_id)){
    echo "<script>
        alert('Please select a product');
        window.location.href='../testing.php';
    </script>";
    exit;
    }

    $t_type = $_POST["testing_type"] ?? "";
    $test_by = $_POST["tested_by"] ?? "";
    $remarks = $_POST["remarks"] ?? "";
   $result = $_POST['result_type'];

if($result == 'Pass'){
    $send_to = 'CPRI';
    $is_locked = 1;
}elseif($result == 'Fail'){
    $send_to = 'Remanufacture';
    $is_locked = 0;
}else{
    $send_to = 'Pending';
    $is_locked = 0;
}


    
    // echo $p_id;
    // echo "<br>";
    // echo $t_type ;
    // echo "<br>";
    // echo  $r_type;
    // echo "<br>";
    // echo "<br>";
    // echo $test_by;
    // echo "<br>";
    // echo $remarks;
// echo "<pre>";
// print_r($_POST);
// exit;
$product_query = mysqli_query($conn, "SELECT product_type FROM products WHERE id = '$p_id'");

if(mysqli_num_rows($product_query) > 0){
    $fetch_product = mysqli_fetch_assoc($product_query);
    $product_type = $fetch_product["product_type"];
}
else{
    die("Product Not Found");
}

// echo print_r($_POST);


$query = "INSERT INTO testing_data 
(testing_id, product_type, testing_type, result_type, tested_by, remarks)
VALUES ('$testing_id', ' $product_type', '$t_type', '$send_to', '$test_by', '$remarks')";

$res = mysqli_query($conn,$query);
  if($res){
        echo "<script>
        alert('Testing Data Successfully inserted')
          window.location.href='../testing.php';
        </script>";
    }else{
          echo "Error: " . mysqli_error($conn);
    }

}