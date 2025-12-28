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
        font-size:11px;
    }
    
    #image{
        height: 50px;
        width:50px;
        border-radius: 50%;
    }
  
       
    
</style>
<div class="app-body">

<h1 class="title text-center my-5 p-1" > 🧑🏾‍🔧 👩🏽‍🔧  Users</h1>








<div class="table-responsive rounded">
    <a href="add-product.php" class="btn btn-primary d-block mb-3  "> Add Product</a>
    <table class="table  table-hover table-border shadow-lg" >
        <thead>
            
            <tr>
                <th id="th">ID</th>
                <th id="th">Product ID</th>
                <th id="th">Product Code</th>
                <th id="th">Revision</th>
                <th id="th">Manufacture No</th>
                <th id="th">Product Type</th>
                <th id="th">Product Name</th>
                <th id="th" colspan="2">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            if (mysqli_num_rows($res)>0) {

                while($data = mysqli_fetch_assoc($res)){
                
            
            ?>
            <tr>
                <td><?= $data["id"] ?></td>
                <td><?= $data["product_id"] ?></td>
                <td><?= $data["product_code"] ?></td>
                <td><?= $data["rivision"] ?></td>
                <td><?= $data["manufacturing_no"] ?></td>
                <td><?= $data["product_type"] ?></td>
                <td><?= $data["product_name"] ?></td>
                <td><a href="updateuser.php?id=<?= $data['id']?>" class="btn btn-warning" >EDIT USER</a></td>
                <td><a href="backend/deleteuser.php?id=<?= $data['id']?>" class="btn btn-danger" >REMOVE USER</a></td>
            </tr>
            <?php }}?>

        </tbody>
    </table>
</div>
</div>


<?php
include 'footer.php';
?>