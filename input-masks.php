<?php
include 'header.php';
?>
          <!-- App body starts -->
          <div class="app-body">

            <!-- Row starts -->
            <div class="row gx-4">
              <div class="col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="row gx-4">
                      <div class="col-sm-4 col-12">
                        <div class="mb-4">
                          <label class="form-label" for="input-credit-card">Credit Card Format</label>
                          <input type="text" class="form-control" placeholder="Enter credit card number"
                            id="input-credit-card" />
                          <div id="creditCardType">
                            <div class="visa credit-card">
                              <img src="assets/images/cards/mastercard.png" />
                            </div>
                            <div class="mastercard credit-card">
                              <img src="assets/images/cards/visa.png" />
                            </div>
                            <div class="amex credit-card">
                              <img src="assets/images/cards/american-express.png" />
                            </div>
                            <div class="jcb credit-card">
                              <img src="assets/images/cards/jcb.png" />
                            </div>
                            <div class="diners credit-card">
                              <img src="assets/images/cards/diners.png" />
                            </div>
                            <div class="discover credit-card">
                              <img src="assets/images/cards/discover.png" />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Row ends -->

            <!-- Row starts -->
            <div class="row gx-4">
              <div class="col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="row gx-4">
                      <div class="col-sm-4 col-12">
                        <div class="mb-4">
                          <label class="form-label" for="input-numeral-thousand">Input Numeral Thousand Format</label>
                          <input type="text" class="form-control" placeholder="Enter Number"
                            id="input-numeral-thousand" />
                        </div>
                      </div>
                      <div class="col-sm-4 col-12">
                        <div class="mb-4">
                          <label class="form-label" for="input-numeral-lakh">Input Numeral Lakh Format</label>
                          <input type="text" class="form-control" placeholder="Enter Number" id="input-numeral-lakh" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Row ends -->

            <!-- Row starts -->
            <div class="row gx-4">
              <div class="col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="row gx-4">
                      <div class="col-sm-4 col-12">
                        <div class="input-group mb-4">
                          <span class="input-group-text">US (+1)</span>
                          <input type="text" class="form-control" placeholder="Enter phone number"
                            id="phone-format-us" />
                        </div>
                      </div>
                      <div class="col-sm-4 col-12">
                        <div class="input-group mb-4">
                          <span class="input-group-text">IND (+91)</span>
                          <input type="text" class="form-control" placeholder="Enter phone number"
                            id="phone-format-in" />
                        </div>
                      </div>
                      <div class="col-sm-4 col-12">
                        <div class="input-group mb-4">
                          <span class="input-group-text">BRZ (+55)</span>
                          <input type="text" class="form-control" placeholder="Enter phone number"
                            id="phone-format-br" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Row ends -->

            <!-- Row starts -->
            <div class="row gx-4">
              <div class="col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="row gx-4">
                      <div class="col-sm-3 col-12">
                        <div class="mb-4">
                          <label class="form-label" for="date-formatting">Date Format</label>
                          <input type="text" class="form-control" placeholder="YYYY-MM-DD" id="date-formatting" />
                        </div>
                      </div>
                      <div class="col-sm-3 col-12">
                        <div class="mb-4">
                          <label class="form-label" for="date-formatting2">Date Format 2</label>
                          <input type="text" class="form-control" placeholder="MM-YY" id="date-formatting2" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Row ends -->

            <!-- Row starts -->
            <div class="row gx-4">
              <div class="col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="row gx-4">
                      <div class="col-sm-3 col-12">
                        <div class="mb-4">
                          <label class="form-label" for="time-formatting">Time Format</label>
                          <input type="text" class="form-control" placeholder="HH-MM-SS" id="time-formatting" />
                        </div>
                      </div>
                      <div class="col-sm-3 col-12">
                        <div class="mb-4">
                          <label class="form-label" for="time-formatting2">Time Format 2</label>
                          <input type="text" class="form-control" placeholder="HH-MM" id="time-formatting2" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Row ends -->

            <!-- Row starts -->
            <div class="row gx-4">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="row gx-4">
                      <div class="col-sm-3 col-12">
                        <div class="mb-4">
                          <label class="form-label" for="input-blocks">Blocks</label>
                          <input type="text" class="form-control" placeholder="Delimiters: [4444.333.333.4444]"
                            id="input-blocks" />
                        </div>
                      </div>
                      <div class="col-sm-3 col-12">
                        <div class="mb-4">
                          <label class="form-label" for="input-delimiter">Delimiter</label>
                          <input type="text" class="form-control" placeholder="Delimiters: [333.333.333]"
                            id="input-delimiter" />
                        </div>
                      </div>
                      <div class="col-sm-3 col-12">
                        <div class="mb-4">
                          <label class="form-label" for="input-delimiter2">Delimiter</label>
                          <input type="text" class="form-control" placeholder="Delimiters: [333.333.333.22]"
                            id="input-delimiter2" />
                        </div>
                      </div>
                      <div class="col-sm-3 col-12">
                        <div class="mb-4">
                          <label class="form-label" for="input-prefix">Prefix</label>
                          <input type="text" class="form-control" placeholder="Delimiters: [4444.4444.4444]"
                            id="input-prefix" />
                        </div>
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
     