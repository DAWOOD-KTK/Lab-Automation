<?php
session_start();
include "db.php";
?>
<?php
$q = isset($_GET['q']) ? mysqli_real_escape_string($conn, $_GET['q']) : "";

$sql = "SELECT * FROM products WHERE product_id LIKE '%$q%' OR product_code LIKE '%$q%'";
$result = mysqli_query($conn, $sql);
?>
<?php 
            if (mysqli_num_rows($result)>0) {

                while($data = mysqli_fetch_assoc($result)){
                
            
            ?>
            <tr>
                <td id="td" class="text-center" ><?= $data["id"] ?></td>
                <td ><?= $data["product_id"] ?></td>
                <td id="wid" class="text-center" ><?= $data["product_code"] ?></td>
                <td id="td" class="text-center" ><?= $data["rivision"] ?></td>
                <td id="wid" class="text-center" ><?= $data["manufacturing_no"] ?></td>
                <td ><?= $data["product_type"] ?></td>
                <td id="id2"><?= $data["product_name"] ?></td>
                <td><img src="assets/images/<?= $data["image"] ?>" id="image"></td>
                <td id="td" class="text-center" id="w5"><?= $data["is_active"]; ?></td>
                <?php if($_SESSION['user']['roll'] == 'admin'){?>
                <td id="td1"colspan="6" class="text-center" >
<?php
if($data['is_active'] == 1){
    // ACTIVE PRODUCT
    ?>
   
    <a href="view-product.php?id=<?= $data['id']?>" class="btn btn-info btn-sm">View</a>
    <a href="edit-products.php?id=<?= $data['id']?>" class="btn btn-warning btn-sm">Update</a>
    <a href="backend/deactivate-product.php?id=<?= $data['id']?>"
       class="btn btn-danger btn-sm"
       onclick="return confirm('Deactivate this product?')">Deactivate</a>
    
    <?php
}else{
    // INACTIVE PRODUCT
    ?>
   
    <a href="view-product.php?id=<?= $data['id']?>" class="btn btn-info btn-sm">View</a>
    <a href="backend/reactivate-product.php?id=<?= $data['id']?>" 
       class="btn btn-success btn-sm">Reactivate</a>
      
    <?php
}
?>
</td>
<?php 
}?> 

            </tr>
<?php 
else {
    <tr><td colspan='10' class='text-center'>No products found</td></tr>

?>
            <?php }}?>
            <?php }}?>

