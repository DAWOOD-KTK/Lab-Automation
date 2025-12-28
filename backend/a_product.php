<?php



include "db.php";

if(isset($_POST["submit"])){

    $p_id = $_POST["product_uinque_id"] ?? "" ;
    $p_code = $_POST["product_code"] ?? "";
    $rivision = $_POST["rivision"] ?? ""; 
    $m_number =!empty($_POST['manufacturing_no']) ? str_pad($_POST['manufacturing_no'], 4, '0', STR_PAD_LEFT) : "";
    $p_type = $_POST["product_type"] ?? "";
    $p_name = $_POST["product_name"] ?? "";






    // echo print_r($_POST);
    //checking that fields should not be empty

    if(empty($p_code) || empty($rivision) || empty($m_number) || empty($p_type) || empty($p_name)) {
    echo "<script>alert('Please fill all required fields');
    window.location.href='../add-product.php';
    </script>";
    exit;
    }

    $p_id = $p_code . $rivision . $m_number ;

    $query = "INSERT INTO products 
    ( product_uinque_id, product_code, rivision, manufacturing_no,product_type, product_name)
    VALUES 
    ( '$p_id', '$p_code', '$rivision', '$m_number', '$p_type','$p_name')";

    $res = mysqli_query($conn, $query);

    if($res){
        echo "<script>alert('Product Successfully added')
        window.location.href='../add-product.php';
        </script>";
    }else{
         if (mysqli_errno($conn) == 1062) {
        echo "<script>alert('Duplicate entry: manufacturing number already exists')
         window.location.href='../add-product.php';
        </script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
        // echo "<script>alert('Failed')
        //   window.location.href='../add-product.php';
        //   </script>";
        // echo mysqli_error($conn);
        //  echo "<pre>$query</pre>";  // debugging 
}
}
// ?>
