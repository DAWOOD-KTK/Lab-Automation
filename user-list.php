<?php
include 'header.php';
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
    
  
       
    
</style>

<h1 class="title text-center my-5 p-1" > 🧑🏾‍🔧 👩🏽‍🔧  Users</h1>

   <a href="add-user.php" class="btn btn-primary mb-3 ms-5 "> create User</a>

<div class="table-responsive mx-5 rounded">
    <table class="table  table-hover table-border " >
        <thead>
            
            <tr>
                <th id="th">id</th>
                <th id="th">Name</th>
                <th id="th">email</th>
                <th id="th">Roll</th>
            </tr>
        </thead>
        <tbody>
            <tr class="">
                <td>1</td>
                <td>Dawood</td>
                <td>dawood@gmail.com</td>
                <td>Admin</td>
            </tr>

        </tbody>
    </table>
</div>



<?php
include 'footer.php';
?>