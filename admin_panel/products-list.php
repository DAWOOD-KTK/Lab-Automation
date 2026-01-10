
<style>
     #image{
        height: 50px;
        width:50px;
        border-radius: 50%;
    }
  
</style>


<?php
include 'header.php';
include "backend/db.php";
// include "backend/getUsers.php";

$query =" SELECT * FROM products ";

$res = mysqli_query($conn,$query);

?>
<style>
    .title {
        font-size: 36px;
        background: #6f42c1;
        color: white;
        margin-left: 30%;
        margin-right: 30%;
        border-radius: 10px;
    }

    #th{
        background: #6f42c1;
        color : white;
        text-align:center;
        justify-content:center;
        flex-direction:
       
    }
    
    #image{
        height: 50px;
        width:50px;
        border-radius: 50%;
    }
    #td{
        width: 10%;
        /* background:skyblue; */
    }
    #td1{
         width: 35%; 
          /* background:blue; */
    }
    #id2{
          width: 20%; 
          /* background:black; */
        }
        #wid{
        width: 11%; 
        
    }
    #w5{
    
        width: 5%; 
    }
  
       
    
</style>
<div class="app-body">

<h1 class="title text-center my-5 p-1" >SRS Poducts</h1>








<div class="table-responsive rounded">
     <?php if($_SESSION['user']['roll'] == 'admin'){?>
    <a href="add-product.php" class="btn btn-primary d-block mb-3  "> Add Product</a>
    <?php }?>
    <table class="table  table-hover table-border shadow-lg p-3" >
        <thead>
            
            <tr>
                <th id="th" >ID</th>
                <th id="th"  class="font">Product ID</th>
                <th id="th"  class="font">Product Code</th>
                <th id="th" >Revision</th>
                <th id="th" class="font">Manufacture No</th>
                <th id="th"  class="font">Product Type</th>
                <th id="th"  class="font">Product Name</th>
                <th id="th"  class="font">Image</th>
                <th id="th" class="font" id="w5">Is Active</th>
                <?php if($_SESSION['user']['roll'] == 'admin'){?>
                <th id="th"  colspan="6">Actions</th>
                <?php }?>
            </tr>
        </thead>
        <tbody id="productsTableBody">
            <?php 
            if (mysqli_num_rows($res)>0) {

                while($data = mysqli_fetch_assoc($res)){
                
            
            ?>
            <tr>
                <td id="td" class="text-center" ><?= $data["id"] ?></td>
                <td ><?= $data["product_id"] ?></td>
                <td id="wid" class="text-center" ><?= $data["product_code"] ?></td>
                <td id="td" class="text-center" ><?= $data["rivision"] ?></td>
                <td id="wid" class="text-center" ><?= $data["manufacturing_no"] ?></td>
                <td ><?= $data["product_type"] ?></td>
                <td id="id2"><?= $data["product_name"] ?></td>
                <td><img src="assets/images/<?= $data["image"] ?>" style='width:50px;height:50px;border-radius:5px;'></td>
                <td id="td" class="text-center" id="w5"><?= $data["is_active"]; ?></td>
                <?php if($_SESSION['user']['roll'] == 'admin'){?>
                <td id="td1"colspan="6" class="text-center" >
<?php
if($data['is_active'] == 1){
    // ACTIVE PRODUCT
    ?>
   
    <a href="view-product.php?id=<?= $data['id']?>" class="btn btn-primary btn-sm">View</a>
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
<?php }?>

            </tr>
            <?php }}?>

        </tbody>
    </table>
</div>
</div>

<!-- JS: AJAX search -->
<script>
document.getElementById('searchData').addEventListener('keyup', function() {
    let query = this.value.trim();

    fetch('backend/search-products.php?q=' + encodeURIComponent(query))
        .then(response => response.text())
        .then(data => {
            document.getElementById('productsTableBody').innerHTML = data;
        });
});
</script>




<?php
include 'footer.php';
?>