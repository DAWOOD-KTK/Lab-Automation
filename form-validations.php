<?php

include 'header.php';
?>
          <!-- App body starts -->
          <div class="app-body">

            <!-- Row starts -->
            <div class="row">
              <div class="col-sm-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <form class="row g-3 needs-validation" novalidate>
                      <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">First name</label>
                        <input type="text" class="form-control" id="validationCustom01" value="Mark" required />
                        <div class="valid-feedback">Looks good!</div>
                      </div>
                      <div class="col-md-4">
                        <label for="validationCustom02" class="form-label">Last name</label>
                        <input type="text" class="form-control" id="validationCustom02" value="Otto" required />
                        <div class="valid-feedback">Looks good!</div>
                      </div>
                      <div class="col-md-4">
                        <label for="validationCustomUsername" class="form-label">Username</label>
                        <div class="input-group has-validation">
                          <span class="input-group-text" id="inputGroupPrepend">@</span>
                          <input type="text" class="form-control" id="validationCustomUsername"
                            aria-describedby="inputGroupPrepend" required />
                          <div class="invalid-feedback">
                            Please choose a username.
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <label for="validationCustom03" class="form-label">City</label>
                        <input type="text" class="form-control" id="validationCustom03" required />
                        <div class="invalid-feedback">
                          Please provide a valid city.
                        </div>
                      </div>
                      <div class="col-md-3">
                        <label for="validationCustom04" class="form-label">State</label>
                        <select class="form-select" id="validationCustom04" required>
                          <option selected disabled value="">Choose...</option>
                          <option>...</option>
                        </select>
                        <div class="invalid-feedback">
                          Please select a valid state.
                        </div>
                      </div>
                      <div class="col-md-3">
                        <label for="validationCustom05" class="form-label">Zip</label>
                        <input type="text" class="form-control" id="validationCustom05" required />
                        <div class="invalid-feedback">
                          Please provide a valid zip.
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required />
                          <label class="form-check-label" for="invalidCheck">
                            Agree to terms and conditions
                          </label>
                          <div class="invalid-feedback">
                            You must agree before submitting.
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <button class="btn btn-primary" type="submit">
                          Submit form
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- Row ends -->

            <!-- Row starts -->
            <div class="row">
              <div class="col-sm-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <form class="row g-3 needs-validation" novalidate>
                      <div class="col-md-4 position-relative">
                        <label for="validationTooltip01" class="form-label">First name</label>
                        <input type="text" class="form-control" id="validationTooltip01" value="Mark" required />
                        <div class="valid-tooltip">Looks good!</div>
                      </div>
                      <div class="col-md-4 position-relative">
                        <label for="validationTooltip02" class="form-label">Last name</label>
                        <input type="text" class="form-control" id="validationTooltip02" value="Otto" required />
                        <div class="valid-tooltip">Looks good!</div>
                      </div>
                      <div class="col-md-4 position-relative">
                        <label for="validationTooltipUsername" class="form-label">Username</label>
                        <div class="input-group has-validation">
                          <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                          <input type="text" class="form-control" id="validationTooltipUsername"
                            aria-describedby="validationTooltipUsernamePrepend" required />
                          <div class="invalid-tooltip">
                            Please choose a unique and valid username.
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 position-relative">
                        <label for="validationTooltip03" class="form-label">City</label>
                        <input type="text" class="form-control" id="validationTooltip03" required />
                        <div class="invalid-tooltip">
                          Please provide a valid city.
                        </div>
                      </div>
                      <div class="col-md-3 position-relative">
                        <label for="validationTooltip04" class="form-label">State</label>
                        <select class="form-select" id="validationTooltip04" required>
                          <option selected disabled value="">Choose...</option>
                          <option>...</option>
                        </select>
                        <div class="invalid-tooltip">
                          Please select a valid state.
                        </div>
                      </div>
                      <div class="col-md-3 position-relative">
                        <label for="validationTooltip05" class="form-label">Zip</label>
                        <input type="text" class="form-control" id="validationTooltip05" required />
                        <div class="invalid-tooltip">
                          Please provide a valid zip.
                        </div>
                      </div>
                      <div class="col-12">
                        <button class="btn btn-primary" type="submit">
                          Submit form
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- Row ends -->

            <!-- Row starts -->
            <div class="row">
              <div class="col-xl-4 col-sm-6 col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="was-validated">
                      <label for="validationCustom01" class="form-label">First Name</label>
                      <input type="text" class="form-control" id="validationCustom01" value="Mark" required="" />
                      <div class="valid-feedback">Looks good!</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-6 col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div>
                      <div class="was-validated">
                        <label for="validationCustom02" class="form-label">Zip</label>
                        <input type="text" class="form-control" id="validationCustom02" required="" />
                        <div class="invalid-feedback">
                          Please provide a valid zip.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-6 col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="was-validated">
                      <label for="validationCustom04" class="form-label">State</label>
                      <select class="form-select" id="validationCustom04" required="">
                        <option selected="" disabled="" value="">
                          Choose...
                        </option>
                        <option>...</option>
                      </select>
                      <div class="invalid-feedback">
                        Please select a valid state.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-12 col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="was-validated">
                      <label for="validationTextarea" class="form-label">Textarea</label>
                      <textarea class="form-control is-invalid" id="validationTextarea"
                        placeholder="Required example textarea" required=""></textarea>
                      <div class="invalid-feedback">
                        Please enter a message in the textarea.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-12 col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="was-validated">
                      <label for="validationTextarea2" class="form-label">Textarea</label>
                      <textarea class="form-control" id="validationTextarea2"
                        placeholder="Required example textarea"></textarea>
                      <div class="valid-feedback">Looks good!</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-12 col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="was-validated">
                      <input type="file" class="form-control" aria-label="file example" required="" />
                      <div class="invalid-feedback">
                        Example invalid form file feedback
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-12 col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="was-validated">
                      <input type="file" class="form-control" aria-label="file example" />
                      <div class="valid-feedback">Looks good!</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-12 col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="form-check was-validated">
                      <input type="checkbox" class="form-check-input" id="validationFormCheck1" required="" />
                      <label class="form-check-label" for="validationFormCheck1">Check this checkbox</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-12 col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="form-check was-validated">
                      <input type="checkbox" class="form-check-input" id="validationFormCheck2" />
                      <label class="form-check-label" for="validationFormCheck2">Check this checkbox</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-12 col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="form-check was-validated">
                      <input type="radio" class="form-check-input" id="validationFormCheck3" name="radio-stacked"
                        required="" />
                      <label class="form-check-label" for="validationFormCheck3">Toggle this radio</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-12 col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="form-check was-validated">
                      <input type="radio" class="form-check-input" id="validationFormCheck4" name="radio-stacked2" />
                      <label class="form-check-label" for="validationFormCheck4">Toggle this radio</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Row ends -->

          </div>
          <!-- App body ends -->

         <?php

include 'header.php';
?>