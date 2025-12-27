<?php
include 'header.php';
include "backend/getUsers.php";
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
    }
    
    #image{
        height: 50px;
        width:50px;
        border-radius: 50%;
    }
  
       
    
</style>
<div class="app-body">

<h1 class="title text-center my-5 p-1" > 🧑🏾‍🔧 👩🏽‍🔧  Users</h1>


<div class="table-responsive mx-5 rounded">
    <a href="add-user.php" class="btn btn-primary d-block mb-3  "> Create User</a>
    <table class="table  table-hover table-border " >
        <thead>
            
            <tr>
                <th id="th">id</th>
                <th id="th">image</th>
                <th id="th">Name</th>
                <th id="th">email</th>
                <th id="th">Roll</th>
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
                <td><img src="assets/images/<?= $data["image"] ?>" id="image"></td>
                <td><?= $data["name"] ?></td>
                <td><?= $data["email"] ?></td>
                <td><?= $data["roll"] ?></td>
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