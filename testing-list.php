
<?php
include 'header.php';
include "backend/db.php";
// table join query///
$query = "SELECT * FROM testing_data";

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
  
       
    
</style>
<div class="app-body">

<h1 class="title text-center my-5 p-1" >All Testing Record</h1>








<div class="table-responsive rounded">
      <?php if($_SESSION['user']['roll'] == 'admin'){?>
    <a href="testing.php" class="btn btn-primary d-block mb-3  "> Add Testing</a>
    <?php }?>

    <table class="table  table-hover table-border shadow-lg p-3" >
        <thead>
            
            <tr>
                <th id="th"class="font" >ID</th>
                <th id="th" class="font">T ID</th>
                <th id="th"  class="font">P ID</th>
                <th id="th"  class="font">P Code </th>
                <th id="th"  class="font">T Code </th>
                <th id="th"  class="font">T Roll</th>
                <th id="th"  class="font">revisio</th>
                <th id="th"  class="font">P Type</th>
                <th id="th" class="font">T Type</th>
                <th id="th"  class="font">Result</th>
                <th id="th" class="font">T By</th>
                <th id="th" class="font">Remarks</th>
                <th id="th" class="font">Send To</th>
                <th id="th" class="font" >locked
                <br>unlocked</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            if (mysqli_num_rows($res)>0) {

                while($data = mysqli_fetch_assoc($res)){
                
            
            ?>
            <tr>
                <td class="text-center"><?= $data["id"] ?></td>
                <td id="td" class="text-center " ><?= $data["testing_id"] ?></td>
                <td id="td" class="text-center " ><?= $data["product_id"] ?></td>
                <td id="td" class="text-center " ><?= $data["product_code"] ?></td>
                <td id="td" class="text-center " ><?= $data["testing_code"] ?></td>
                <td id="td" class="text-center " ><?= $data["testing_roll"] ?></td>
                <td id="td" class="text-center " ><?= $data["revision"] ?></td>
                <td id="wid" class="text-center" ><?= $data["product_type"] ?></td>
                <td id="td" class="text-center" ><?= $data["testing_type"] ?></td>
                <td id="td" class="text-center" ><?= $data["result_type"] ?></td>
                <td class="text-center"><?= $data["tested_by"] ?></td>
                <td id="id2" class="text-center"><?= $data["remarks"] ?></td>
                <td class="text-center"><?= $data["send_to"] ?></td>
                <td class="text-center"><?= $data["is_locked"] ?></td>
                        </tr>
                        <?php
                    }
                } else {
                    echo '<tr><td colspan="8" class="text-center">No records found</td></tr>';
                }
                ?>

        </tbody>
    </table>
</div>
</div>


<?php
include "footer.php";
?>
