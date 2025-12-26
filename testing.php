<?php

// include "db.php";
include "backend/db.php";
include 'header.php';
?>

<!-- App body starts -->
     <div class="app-body">
    
    <!-- Row starts -->

          <div class="row gx-5 ms-5">
              <div class="col-9  ms-4">
                <div class="card mb-4 testinheading ">
                  <div class="card-body text-center">
                    <div class="m-0">
                    <h1 ><b>Add Testing Record</b></h1>
                    </div>
                  </div>
            
                  </div>
                </div>
            </div>
            <form action="backend/a-testing.php" method="post">
            <div class="row gx-1 ms-5 ">
            
              <div class="col-sm-4 col-12 ms-5">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="m-0">
                      <label class="form-label" for="abc4">Product ID + Product</label>
                      <select class="form-select" name="product_id" id="abc4" aria-label="Default select example" required>
                        <option value="" >Product Type</option>
                        <?php
                        $query = mysqli_query($conn,"SELECT id, product_name FROM product");
                        
                        if(mysqli_num_rows($query ) >0){
                          while($data = mysqli_fetch_assoc($query)){
                            ?>
                          <option value="<?= $data['id'] ?>">
                           <?= $data['id'] ?> => <?= $data['product_name'] ?>
                          </option>
                          <?php
                          }
                        }
                        ?>
                      
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-12  ms-5">
              <div class="card mb-4">
                  
                <div class="card-body">
                  <div class="m-0">
                    <label class="form-label" for="testing">Testing</label>
                    <select class="form-select" name="testing_type" id="testing" aria-label="Default select example">
                       <option selected="">Testing Type</option>
                       <option value="1">Voltage Test</option>
                       <option value="2">Current Test</option>
                       <option value="3">Insulation Resistance</option>
                       <option value="4">Continuity Test</option>

                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row gx-1 ms-5">
           
                <div class="col-sm-4 col-12 ms-5">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="m-0">
                      <label class="form-label" for="abc4">Result</label>
                      <select class="form-select" name="result_type" id="abc4" aria-label="Default select example">
                        <option selected="">Result Type</option>
                        <option value="1">Pass</option>
                        <option value="2">Fail</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
               <div class="col-sm-4 col-12  ms-5">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="m-0">
                      <label class="form-label"  for="abc">Tested By</label>
                      <input type="text" name="tested_by" class="form-control" id="abc" placeholder="Enter text">
                    </div>
                  </div>
                </div>
              </div>
            </div>
           
            <div class="row gx-5 ms-5">
              <div class="col-9  ms-4">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="input-group">
                      <span class="input-group-text">Remarks</span>
                      <textarea class="form-control" name="remarks" id="abc14" aria-label="With textarea"></textarea>
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="d-flex gap-2 justify-content-end">
                      <button type="button" class="btn btn-outline-secondary">
                        Cancel
                      </button>
                      <button type="Submit" name="submit" class="btn btn-primary">
                       Save Testing
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </form>
        </div>
            <!-- Row ends -->
<?php
include 'footer.php';
?>