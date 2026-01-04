
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<?php
include 'header.php';

include "backend/db.php";

if(!isset($_GET["testing_id"])){

  die("Invalid testing ID");
}
$testing_id = $_GET["testing_id"]?? "";
$query = mysqli_query($conn, "SELECT * FROM testing_data WHERE testing_id = '$testing_id'");
$row = mysqli_fetch_assoc($query);
// echo "<pre>";
// print_r($row);
// ?>
<style>
  .bg{
    background:lightgrey;
  }
</style>
<!-- App body starts -->
     <div class="app-body">
    
    <!-- Row starts -->
    <div class="container-fluid ">
      <div class="card col-md-10 mx-auto">
        <div class="card-head  ">

           <div class="row  ">
              <div class="col-9 col-sm-12 m-auto ">
                <div class="card mb-4 testinheading ">
                  <div class="card-body text-center">
                    <div class="m-0">
                    <h1 ><b>Upadate Remanufacturing Testing </b></h1>
                    </div>
                   </div>
            
                  </div>
                </div>
            </div>
        </div>
        <!-- <div class="card-body m-auto bg"> -->

            <form action="backend/Update-manufacture-test.php" id="testin_form" method="post">
            <div class="row gx-1 ">
            
              <div class=" col-sm-6  m-auto">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="m-0">
                          <input type="hidden" name="testing_id" value="<?= $row['testing_id'] ?>">
                      <label class="form-label" for="abc4">Product ID + Product</label>
                      <select class="form-select" name="product_id" required>
                            <!-- current product selected -->
                            
                            <?php
                        $query = mysqli_query($conn,"SELECT id,product_id, product_type FROM products WHERE is_active = 0");
                        
                       
                          $p = mysqli_fetch_assoc($query);
                            ?>
                            <option value="<?= $row['product_id'] ?>" selected>
                             <?= $row['product_id'] ?>-><?= $p['product_id']  ?>  <?= $p['product_type']  ?>
                            </option>
                 
                        
                      
                    </select>
                  </div>
                </div>
              </div>
            </div>
           <div class=" col-sm-6  m-auto">
              <div class="card mb-4">
                  
                <div class="card-body">
                  <div class="m-0">
                    <?php $testing_type = $row['testing_type'] ?? ''; ?>
                    <label class="form-label" for="testing">Testing</label>
                    <select class="form-select mb-3" name="testing_type" id="testing"  required>
                      <option value="" disabled selected>Select Testing Type</option>
                      <option value="Voltage Test"<?= ($testing_type=='Voltage Test')?'selected':'' ?>>Voltage Test</option>
                      <option value="Current Test"<?= ($testing_type=='Current Test')?'selected':'' ?>>Current Test</option>
                      <option value="Insulation Resistance"<?= ($testing_type=='Insulation Resistance')?'selected':'' ?>>Insulation Resistance</option>
                      <option value="Continuity Test"<?= ($testing_type=='Continuity Test')?'selected':'' ?>>Continuity Test</option>
                      
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row gx-1 ">
            <div class=" col-sm-6  m-auto">
              
              <div class="card mb-4">
                <div class="card-body">
                  <div class="m-0">
                    <?php $result_type = $row['result_type'] ?? ''; ?>
                    <label class="form-label" for="abc4">Result</label>
                    <select class="form-select" name="result_type" id="abc4" aria-label="Default select example" required>
                      <option selected="">Result Type</option>
                      <option value="Pass"<?= ($result_type =='Pass')?'selected':'' ?>>Pass</option>
                      <option value="Fail"<?= ($result_type =='Fail')?'selected':'' ?>>Fail</option>
                      <option value="Pending"<?= ($result_type =='Pending')?'selected':'' ?>>Pending</option>
                      
                      

                      </select>
                    </div>
                  </div>
                </div>
              </div>
               <!-- <div class="col-sm-4 col-12  ms-5"> -->
           <div class=" col-sm-6  m-auto">

                <div class="card mb-4">
                  <div class="card-body">
                    <div class="m-0">
                      <label class="form-label"  for="abc">Tested By</label>
                      <input type="text" name="tested_by" class="form-control" id="abc" value="<?= $row['tested_by'] ?? "" ;?>" placeholder="Enter Your Name" required>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           
            <div class="row gx-5 ">
              <div class="col-sm-12  m-auto">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="input-group ">
                      <span class="input-group-text clr">Remarks</span>
                      <textarea class="form-control" name="remarks" id="abc14" aria-label="With textarea"><?= $row['remarks'] ?? "" ;?></textarea>
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="d-flex gap-2 justify-content-end">
                     <button type="reset" class="btn btn-outline-primary" onclick="resetForm()">
                     Cancel
                    </button>
                      <button type="Submit" name="submit" class="btn w-100 btn-primary">
                       Save Testing
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </form>
        </div>
        </div>
        </div>
        </div>
            <!-- Row ends -->
<?php
include 'footer.php';
?>