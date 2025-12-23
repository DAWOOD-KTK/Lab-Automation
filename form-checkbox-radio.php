<?php

include 'header.php';

?>

          <!-- App body starts -->
          <div class="app-body">

            <!-- Row starts -->
            <div class="row gx-4">
              <div class="col-xl-4 col-sm-6 col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="d-grid gap-2">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">Default checkbox</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked="">
                        <label class="form-check-label" for="flexCheckChecked">Checked checkbox</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" disabled="">
                        <label class="form-check-label" for="flexCheckDisabled">Disabled checkbox</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled"
                          checked="" disabled="">
                        <label class="form-check-label" for="flexCheckCheckedDisabled">Disabled checked checkbox</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-6 col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="d-grid gap-2">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">Default radio</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                          checked="">
                        <label class="form-check-label" for="flexRadioDefault2">Default checked radio</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDisabled" id="flexRadioDisabled"
                          disabled="">
                        <label class="form-check-label" for="flexRadioDisabled">Disabled radio</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDisabled"
                          id="flexRadioCheckedDisabled" checked="" disabled="">
                        <label class="form-check-label" for="flexRadioCheckedDisabled">Disabled checked radio</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="d-grid gap-2">
                      <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Default switch</label>
                      </div>
                      <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked"
                          checked="">
                        <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch</label>
                      </div>
                      <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDisabled"
                          disabled="">
                        <label class="form-check-label" for="flexSwitchCheckDisabled">Disabled switch</label>
                      </div>
                      <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch"
                          id="flexSwitchCheckCheckedDisabled" checked="" disabled="">
                        <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Disabled checked
                          switch</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                      <label class="form-check-label" for="inlineCheckbox1">1</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" checked="">
                      <label class="form-check-label" for="inlineCheckbox2">2</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled="">
                      <label class="form-check-label" for="inlineCheckbox3">3 (Disabled)</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                        value="option1">
                      <label class="form-check-label" for="inlineRadio1">1</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                        value="option2" checked="">
                      <label class="form-check-label" for="inlineRadio2">2</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                        value="option3" disabled="">
                      <label class="form-check-label" for="inlineRadio3">3 (Disabled)</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="d-grid gap-2">
                      <div class="form-check form-check-reverse">
                        <input class="form-check-input" type="checkbox" value="" id="reverseCheck1">
                        <label class="form-check-label" for="reverseCheck1">
                          Reverse checkbox
                        </label>
                      </div>
                      <div class="form-check form-check-reverse">
                        <input class="form-check-input" type="checkbox" value="" id="reverseCheck2" disabled="">
                        <label class="form-check-label" for="reverseCheck2">
                          Disabled reverse checkbox
                        </label>
                      </div>
                      <div class="form-check form-switch form-check-reverse">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckReverse">
                        <label class="form-check-label" for="flexSwitchCheckReverse">Reverse switch checkbox
                          input</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="d-grid gap-2">
                      <div class="form-check form-check-reverse">
                        <input class="form-check-input" type="radio" name="flexRadioReverse" id="flexRadioReverse1">
                        <label class="form-check-label" for="flexRadioReverse1">Default radio</label>
                      </div>
                      <div class="form-check form-check-reverse">
                        <input class="form-check-input" type="radio" name="flexRadioReverse" id="flexRadioReverse2"
                          checked="">
                        <label class="form-check-label" for="flexRadioReverse2">Default checked radio</label>
                      </div>
                      <div class="form-check form-check-reverse">
                        <input class="form-check-input" type="radio" name="flexRadioReverseDisabled"
                          id="flexRadioReverseDisabled" disabled="">
                        <label class="form-check-label" for="flexRadioReverseDisabled">Disabled radio</label>
                      </div>
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