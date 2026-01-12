<?php
   include 'header.php';
   include "backend/db.php";
   $q = " SELECT COUNT(*) as active FROM `products` WHERE is_active = 1 ";

   $res = mysqli_query($conn,$q);
   if (mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);
    $active = $row['active'];
   }
    
   $q1 = " SELECT COUNT(*) as pending FROM `products` WHERE is_active = 0 ";

   $res1 = mysqli_query($conn,$q1);
   if (mysqli_num_rows($res1) > 0) {
    $row1 = mysqli_fetch_assoc($res1);
    $pending = $row1['pending'];
   }
    
   $q2 = " SELECT COUNT(*) as aall FROM `products` ";

   $res2 = mysqli_query($conn,$q2);
   if (mysqli_num_rows($res2) > 0) {
    $row2 = mysqli_fetch_assoc($res2);
    $all = $row2['aall'];
   }
    
  
   

          ?>

          <!-- App body starts -->
          <div class="app-body">

            <!-- Row starts -->
            <div class="row gx-4">
              <div class="col-xxl-3 col-sm-6 col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="p-1 border border-primary rounded-circle me-3">
                        <div id="radial1"></div>
                      </div>
                      <div class="d-flex flex-column">
                        <h2 class="lh-1"><?php  echo $active;?></h2>
                        <p class="m-0 opacity-50">Active</p>
                      </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mt-1">
                      
                      
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-3 col-sm-6 col-12">
                  <div class="card mb-4">
                    <div class="card-body">
                      <div class="d-flex align-items-center">
                        <div class="p-1 border border-success rounded-circle me-3">
                          <div id="radial2"></div>
                        </div>
                        <div class="d-flex flex-column">
                          <h2 class="lh-1"><?php  echo $pending;?></h2>
                          <p class="m-0 opacity-50">Pending</p>
                        </div>
                      </div>
                      <div class="d-flex align-items-center justify-content-between mt-1">
                      
                        
                        </div>
                      </div>
                </div>
              </div>
              
              <div class="col-xxl-12 col-sm- col-12">
                <div class="card mb-4 bg-primary">
                  <div class="card-body text-white">
                    <div class="d-flex align-items-center">
                      <div class="p-1 border border-white rounded-circle me-3">
                        <div id="radial4"></div>
                      </div>
                      <div class="d-flex flex-column">
                        <h2 class="m-0 lh-1"><?php  echo $all;?></h2>
                        <p class="m-0 opacity-50">All Products</p>
                      </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mt-1">
                      
                    
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Row ends -->
              
              
              
              
    
            <div class="row gx-4 my-1">

  <!-- Product-wise Report -->
  <div class="col-xxl-3 col-sm-6 col-12">
    <div class="card mb-4 bg-info text-white">
      <div class="card-body">
        <p class="m-0 opacity-75">Product-wise Report</p>
        <a href="product-revise-report.php" class="text-white">View Report →</a>
      </div>
    </div>
  </div>

  <!-- Testing Status Report -->
  <div class="col-xxl-3 col-sm-6 col-12">
    <div class="card mb-4 bg-warning text-dark">
      <div class="card-body">
        <p class="m-0 opacity-75">Testing Status Report</p>
        <a href="testing-status-report.php" class="text-dark">View Report →</a>
      </div>
    </div>
  </div>

  <!-- Date-wise Report -->
  <div class="col-xxl-3 col-sm-6 col-12">
    <div class="card mb-4 bg-secondary text-white">
      <div class="card-body">
        <p class="m-0 opacity-75">Date-wise Report</p>
        <a href="date-report.php" class="text-white">View Report →</a>
      </div>
    </div>
  </div>

  <!-- CPRI Approval Report -->
  <div class="col-xxl-3 col-sm-6 col-12">
    <div class="card mb-4 bg-success text-white">
      <div class="card-body">
        <p class="m-0 opacity-75">CPRI Approval Report</p>
        <a href="cpri-aproved-report.php" class="text-white">View Report →</a>
      </div>
    </div>
  </div>

</div>

          </div>
          </div>
          <!-- App body ends -->
  <?php
          include 'footer.php';

          ?>