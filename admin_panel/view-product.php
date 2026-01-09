<?php
include 'header.php';
include "backend/db.php";
// table join query///
$id = $_GET['id'];

$q = "SELECT * FROM products WHERE id = '$id'";

$result = mysqli_query($conn, $q);

// if (!$result) {
//     die("Query Failed: " . mysqli_error($conn));
// }


$data = mysqli_fetch_assoc($result);



// echo '<pre>';
// echo print_r($data);
?>

        <!-- App body starts -->
        <div class="app-body">
            <div class="container-fluid justify-content-center align-items-center">
        <div class="row  justify-content-center align-items-center">
        <div class="col-10 m-auto">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-6">
                       <img src="assets/images/<?= $data['image'] ?: 'no-image.png' ?>" class="img-fluid rounded-2" alt="Product image" />
                      </div>
                      <div class="col-sm-6">
                        <div class="align-items-center">
                          <h5 class="clr mt-3">Product Type : <?= $data['product_type'] ?></h5>
                          <h5 class="clr">Product Name : <?= $data['product_name'] ?></h5>
                          <h5 class="clr">Product ID : <?= $data['product_id'] ?></h5>
                          <h5 class="clr">Manufacturing No : <?= $data['manufacturing_no'] ?></h5>
                          <h5 class="clr">Product Code : <?= $data['product_code'] ?></h5>
                          <h5 class="clr">Revision : <?= $data['rivision'] ?></h5>
                        <?php 
                         if($data['is_active'] == 1){
    // ACTIVE PRODUCT
    ?>
   
    <a href="edit-products.php?id=<?= $data['id']?>" class="btn btn-warning btn-sm">Update</a>
    <a href="backend/deactivate-product.php?id=<?= $data['id']?>"
    class="btn btn-danger btn-sm"
    onclick="return confirm('Deactivate this product?')">Deactivate</a>
    <a href="products-list.php?id=<?= $data['id']?>" class="btn btn-dark btn-sm">Back </a>
    
    <?php
}else{
    // INACTIVE PRODUCT
    ?>
   
   <a href="view-product.php?id=<?= $data['id']?>" class="btn btn-info btn-sm">View</a>
   <a href="backend/reactivate-product.php?id=<?= $data['id']?>" 
   class="btn btn-success btn-sm">Reactivate</a>
   <a href="products-list.php?id=<?= $data['id']?>" class="btn btn-dark btn-sm">Back </a>
      
    <?php
}
?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              </div>
              </div>

        </div>
        <?php
        include 'footer.php';