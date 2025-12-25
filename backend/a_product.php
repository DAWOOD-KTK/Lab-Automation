<?php

include "db.php";
// if(isset($_POST["submit"])){

    $p_id = $_POST["id"];
    $p_code = $_POST["product_code"];
    $rivision = $_POST["rivision"];
    $m_number = $_POST["manufacturing_number"];
    $p_name = $_POST["product_name"];
   
    echo $p_id;
    echo "</br>";
    echo $p_code;
    echo "</br>";
    echo $rivision;
    echo "</br>";
    echo $m_number  ;
    echo "</br>";
    echo $p_name ;



// $query = "INSERT INTO product VALUES (' $p_id ','$product_code','$rivision','$manufacturing_number','$product_name','$manufacturing_number','$product_name')";
// $res = mysqli_query($conn,$query);
//  echo $res;

//  if($res){
              
//    echo "<script>
//         alert('Product Successfully added')
//         </script>";
//         }else{
//         echo "<script>
//         alert('fialed')
//         </script>";
//         }
// }







?>