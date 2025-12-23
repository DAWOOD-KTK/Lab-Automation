<?php
include 'header.php';

?>
          <!-- App body starts -->
          <div class="app-body">

            <!-- Row starts -->
            <div class="row gx-4">
              <div class="col-12">
                <div class="card mb-4">
                  <div class="card-header">
                    <h5 class="card-title">Default</h5>
                  </div>
                  <div class="card-body">
                    <div class="form-group m-0">
                      <input type="text" class="form-control" value="Amsterdam,Washington,Sydney,Beijing,Cairo"
                        data-role="tagsinput">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="card mb-4">
                  <div class="card-header">
                    <h5 class="card-title">Type Ahead</h5>
                  </div>
                  <div class="card-body">
                    <div class="form-group m-0">
                      <input id="typeahead" type="text" class="form-control" value="Amsterdam, Washington">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Row ends -->

          </div>
          <!-- App body ends -->
<?php
include 'footer.php';
?>