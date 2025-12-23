<?php

include 'header.php';

?>

          <!-- App body starts -->
          <div class="app-body">

            <!-- Row starts -->
            <div class="row gx-4">

              <div class="col-sm-6 col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="m-0">
                      <label for="formFile" class="form-label">Default file input example</label>
                      <input class="form-control" type="file" id="formFile">
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="m-0">
                      <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                      <input class="form-control" type="file" id="formFileMultiple" multiple="">
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="m-0">
                      <label for="formFileDisabled" class="form-label">Disabled file input example</label>
                      <input class="form-control" type="file" id="formFileDisabled" disabled="">
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="m-0">
                      <label class="form-label">Upload</label>
                      <div class="input-group">
                        <label class="input-group-text" for="inputGroupFile01">Upload</label>
                        <input type="file" class="form-control" id="inputGroupFile01">
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="input-group m-0">
                      <input type="file" class="form-control" id="inputGroupFile02">
                      <label class="input-group-text" for="inputGroupFile02">Upload</label>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="input-group m-0">
                      <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon03">
                        Button
                      </button>
                      <input type="file" class="form-control" id="inputGroupFile03"
                        aria-describedby="inputGroupFileAddon03" aria-label="Upload">
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="input-group">
                      <input type="file" class="form-control" id="inputGroupFile04"
                        aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                      <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">
                        Button
                      </button>
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