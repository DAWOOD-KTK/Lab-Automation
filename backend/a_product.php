<?php
include "db.php";

if(isset($_POST["submit"])){

    $p_code   = $_POST["product_code"] ?? "";
    $rivision = $_POST["rivision"] ?? ""; 
    $m_number = !empty($_POST['manufacturing_no']) 
                ? str_pad($_POST['manufacturing_no'], 4, '0', STR_PAD_LEFT) 
                : "";
    $p_type   = $_POST["product_type"] ?? "";
    $p_name   = $_POST["product_name"] ?? "";

    if(empty($p_code) || empty($rivision) || empty($m_number) || empty($p_type) || empty($p_name)) {
        echo "<script>
            Swal.fire({
                icon: 'warning',
                title: 'Missing Fields',
                text: 'Please fill all required fields'
            }).then(() => {
                window.location.href = '../add-product.php';
            });
        </script>";
        exit;
    }

    $p_id = $p_code . $rivision . $m_number;

    $query = "INSERT INTO products 
        (product_id, product_code, rivision, manufacturing_no, product_type, product_name)
        VALUES 
        ('$p_id', '$p_code', '$rivision', '$m_number', '$p_type', '$p_name')";

    $res = mysqli_query($conn, $query);

    if($res){
        echo "<script>
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: 'Product successfully added',
                timer: 2000,
                showConfirmButton: false
            }).then(() => {
                window.location.href = '../add-product.php';
            });
        </script>";
        exit;
    } else {
        if(mysqli_errno($conn) == 1062){
            $error = 'Manufacturing number already exists';
        } else {
            $error = 'Something went wrong. Please try again.';
        }

        echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Insert Failed',
                text: '".addslashes($error)."'
            }).then(() => {
                window.location.href = '../add-product.php';
            });
        </script>";
        exit;
    }
}
?>
