<?php
include 'header.php';

include "backend/db.php";
// table join query///
$query = "SELECT
    t.testing_id,
    p.id as product_db_id,
    p.product_id ,
    p.product_type ,
    t.testing_type,
    t.result_type,
    t.tested_by,
    t.remarks,
    t.is_locked
FROM testing_data t
JOIN products p ON t.product_id = p.id
WHERE
    t.send_to = 'Remanufacture'
    AND t.is_locked = 0
ORDER BY t.testing_id DESC;

";

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

<h1 class="title text-center my-5 p-1" >Send to Remanufacture</h1>
<div class="table-responsive rounded">
    <table class="table  table-hover table-border shadow-lg p-3" >
        <thead>
            
            <tr>
                <th id="th" >Testing ID</th>
                <th id="th"  class="font">Product ID</th>
                <th id="th"  class="font">Product Unique ID</th>
                <th id="th"  class="font">Product Type</th>
                <th id="th" class="font">Testing Type</th>
                <th id="th" class="font">Testing Type</th>
                <th id="th" class="font">Result</th>
                <th id="th"  class="font">remarks</th>
                <th id="th"  >is_locked</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            if (mysqli_num_rows($res)>0) {

                while($data = mysqli_fetch_assoc($res)){
                
            
            ?>
            <tr>
                <td id="td" class="text-center " ><?= $data["testing_id"] ?></td>
                <td class="text-center"><?= $data["product_db_id"] ?></td>
                <td class="text-center"><?= $data["product_id"] ?></td>
                <td id="wid" class="text-center" ><?= $data["product_type"] ?></td>
                <td id="td" class="text-center" ><?= $data["testing_type"] ?></td>
                <td class="text-center"><?= $data["tested_by"] ?></td>
                <td class="text-center"><?= $data["result_type"] ?></td>
                <td id="id2" class="text-center"><?= $data["remarks"] ?></td>
                            <td class="text-center">
                                <?php 
                                if($data['is_locked'] == 0){
                                    ?>
                                    <span class="badge bg-warning text-dark">Unlocked</span>
                                    <a href="testing.php?id=<?= $data['product_id']?>" class="btn my-1 btn-warning  btn-sm">Re-Test</a>
                                       <?php
                                } else {
                                    ?>
                                    echo '<span class="badge bg-success">Locked</span>';
                                    <?php
                                }
                                ?>
                            </td>
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
include 'footer.php';
?>