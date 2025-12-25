<?php



include "db.php";

if(isset($_POST["submit"])){

    $p_id = $_POST["id"];
    $p_code = $_POST["product_code"];
    $rivision = $_POST["rivision"];
    $m_number = $_POST["manufacturing_number"];
    $p_name = $_POST["product_name"];

    $query = "INSERT INTO product 
    (id, product_code, rivision, manufacturing_number, product_name)
    VALUES 
    ('$p_id', '$p_code', '$rivision', '$m_number', '$p_name')";

    $res = mysqli_query($conn, $query);

    if($res){
        echo "<script>alert('Product Successfully added')
        window.location.href='../add-product.php';
        </script>";
    }else{
        echo "<script>alert('Failed')
          window.location.href='../add-product.php';
          </script>";
        echo mysqli_error($conn); // debugging 
    }
}
?>
