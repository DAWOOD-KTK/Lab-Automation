<?php
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
            <div class="row gx-1 ms-5 ">
            
              <div class="col-sm-4 col-12  ms-5">
                <div class="card mb-4">
                    
                  <div class="card-body">
                    <div class="m-0">
                      <label class="form-label" for="abc">Product ID</label>
                      <input type="text" class="form-control" id="abc" placeholder="Enter text">
                    </div>
                  </div>
                </div>
              </div>
                <div class="col-sm-4 col-12 ms-5">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="m-0">
                      <label class="form-label" for="abc4">Select Product</label>
                      <select class="form-select" id="abc4" aria-label="Default select example">
                        <option selected="">Product Type</option>
                        <option value="1">switchgear</option>
                        <option value="2">Fuse</option>
                        <option value="3">Capacitor</option>
                        <option value="3">Resistance</option>
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
                      <label class="form-label" for="abc4">Testing</label>
                      <select class="form-select" id="abc4" aria-label="Default select example">
                        <option selected="">Testing Type</option>
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
                      <label class="form-label" for="abc">Tested By</label>
                      <input type="text" class="form-control" id="abc" placeholder="Enter text">
                    </div>
                  </div>
                </div>
              </div>
            </div>
             <!-- <div class="col-lg-4 col-sm-6 col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="m-0">
                      <label class="form-label" for="abc">Input Field</label>
                      <input type="text" class="form-control" id="abc" placeholder="Enter text">
                    </div>
                  </div>
               </div>
            </div> -->
            <div class="row gx-5 ms-5">
              <div class="col-9  ms-4">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="input-group">
                      <span class="input-group-text">Remarks</span>
                      <textarea class="form-control" id="abc14" aria-label="With textarea"></textarea>
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="d-flex gap-2 justify-content-end">
                      <button type="button" class="btn btn-outline-secondary">
                        Cancel
                      </button>
                      <button type="Submit" class="btn btn-primary">
                       Save Testing
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
            <!-- Row ends -->
<?php
include 'footer.php';
?>