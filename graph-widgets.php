<?php
include 'header.php';
?>


          <!-- App body starts -->
          <div class="app-body">

            <!-- Row starts -->
            <div class="row gx-4">
              <div class="col-sm-12">
                <div class="card mb-4">
                  <div class="card-header">
                    <h5 class="card-title">Widget</h5>
                  </div>
                  <div class="card-body">

                    <!-- Row starts -->
                    <div class="row gx-4">
                      <div class="col-sm-12 col-12">

                        <div class="d-flex gap-3">
                          <div class="position-relative">
                            <h2 class="m-0">2000</h2>
                            <span class="badge bg-secondary-subtle text-dark small mb-2">
                              <i class="bi bi-exclamation-circle-fill me-1 text-primary"></i>3 new customers
                            </span>
                            <div class=""><span class="badge bg-primary-subtle text-primary me-1">+33%</span>Compared to
                              last week</div>
                          </div>
                          <div class="position-relative">
                            <h2 class="m-0">3000</h2>
                            <span class="badge bg-secondary-subtle text-dark small mb-2">
                              <i class="bi bi-exclamation-circle-fill me-1 text-primary"></i>6 customers online
                            </span>
                            <div class=""><span class="badge bg-primary-subtle text-primary me-1">+26%</span>Compared to
                              last week</div>
                          </div>
                          <div class="position-relative">
                            <h2 class="m-0">6000</h2>
                            <span class="badge bg-secondary-subtle text-dark small mb-2">
                              <i class="bi bi-exclamation-circle-fill me-1 text-primary"></i>8 active customers
                            </span>
                            <div class=""><span class="badge bg-primary-subtle text-primary me-1">+22%</span>Compared to
                              last week</div>
                          </div>
                          <div class="position-relative">
                            <h2 class="m-0">4000</h2>
                            <span class="badge bg-secondary-subtle text-dark small mb-2">
                              <i class="bi bi-exclamation-circle-fill me-1 text-primary"></i>3 inactive customers
                            </span>
                            <div class=""><span class="badge bg-danger me-1">+32%</span>Compared to last week</div>
                          </div>
                        </div>

                      </div>
                      <div class="col-sm-12 col-12">
                        <div class="graph-body">
                          <div id="widget1"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Row ends -->
                </div>
              </div>
            </div>
            <!-- Row ends -->

            <!-- Row starts -->
            <div class="row gx-4">
              <div class="col-xl-3 col-sm-6 col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="p-1 border border-primary rounded-circle me-3">
                        <div id="radial1"></div>
                      </div>
                      <div class="d-flex flex-column">
                        <h2 class="lh-1">3300</h2>
                        <p class="m-0 opacity-50">Items</p>
                      </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mt-1">
                      <a class="text-primary" href="javascript:void(0);">
                        <span>View All</span>
                        <i class="bi bi-arrow-right ms-2"></i>
                      </a>
                      <div class="text-end">
                        <p class="mb-0 text-primary">+40%</p>
                        <span class="badge bg-primary-subtle text-primary small">this month</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="p-1 border border-primary rounded-circle me-3">
                        <div id="radial2"></div>
                      </div>
                      <div class="d-flex flex-column">
                        <h2 class="lh-1">6600</h2>
                        <p class="m-0 opacity-50">Orders</p>
                      </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mt-1">
                      <a class="text-primary" href="javascript:void(0);">
                        <span>View All</span>
                        <i class="bi bi-arrow-right ms-2"></i>
                      </a>
                      <div class="text-end">
                        <p class="mb-0 text-primary">+30%</p>
                        <span class="badge bg-primary-subtle text-primary small">this month</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="p-1 border border-primary rounded-circle me-3">
                        <div id="radial3"></div>
                      </div>
                      <div class="d-flex flex-column">
                        <h2 class="lh-1">9900</h2>
                        <p class="m-0 opacity-50">Themes</p>
                      </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mt-1">
                      <a class="text-primary" href="javascript:void(0);">
                        <span>View All</span>
                        <i class="bi bi-arrow-right ms-2"></i>
                      </a>
                      <div class="text-end">
                        <p class="mb-0 text-primary">+60%</p>
                        <span class="badge bg-primary-subtle text-primary small">this month</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 col-12">
                <div class="card mb-4 bg-primary">
                  <div class="card-body text-white">
                    <div class="d-flex align-items-center">
                      <div class="p-1 border border-danger rounded-circle me-3">
                        <div id="radial4"></div>
                      </div>
                      <div class="d-flex flex-column">
                        <h2 class="m-0 lh-1">8800</h2>
                        <p class="m-0 opacity-50">Payments</p>
                      </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mt-1">
                      <a class="text-white" href="javascript:void(0);">
                        <span>View All</span>
                        <i class="bi bi-arrow-right ms-2"></i>
                      </a>
                      <div class="text-end">
                        <p class="mb-0 text-warning">+90%</p>
                        <span class="badge bg-danger text-white small">this month</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Row ends -->

            <!-- Row starts -->
            <div class="row gx-4">
              <div class="col-sm-12">
                <div class="card mb-4">
                  <div class="card-header">
                    <h5 class="card-title">Widget</h5>
                  </div>
                  <div class="card-body">

                    <!-- Row starts -->
                    <div class="row gx-4">
                      <div class="col-sm-12 col-12">

                        <div class="d-flex flex-wrap gap-3">
                          <div class="d-flex align-items-center mb-2">
                            <img src="assets/images/flags/1x1/us.svg" class="img-4x rounded-circle border"
                              alt="United States">
                            <div class="ms-3">
                              <h2 class="mb-1">200M</h2>
                              <h6 class="mb-2">United States</h6>
                              <div class="badge bg-primary-subtle text-primary me-1 d-flex">+38% high than last week
                              </div>
                            </div>
                          </div>
                          <div class="d-flex align-items-center mb-2">
                            <img src="assets/images/flags/1x1/au.svg" class="img-4x rounded-circle border"
                              alt="Australia">
                            <div class="ms-3">
                              <h2 class="mb-1">300M</h2>
                              <h6 class="mb-2">Australia</h6>
                              <span class="badge bg-secondary-subtle text-dark mb-3">
                                <div class="badge bg-primary-subtle text-primary me-1 d-flex">+66% high than last week
                                </div>
                            </div>
                          </div>
                          <div class="d-flex align-items-center mb-2">
                            <img src="assets/images/flags/1x1/in.svg" class="img-4x rounded-circle border" alt="India">
                            <div class="ms-3">
                              <h2 class="mb-1">400M</h2>
                              <h6 class="mb-2">India</h6>
                              <div class="badge bg-danger-subtle text-danger me-1 d-flex">+89% high than last week
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                      <div class="col-sm-12 col-12">
                        <div class="graph-body">
                          <div id="widget3"></div>
                        </div>
                      </div>
                    </div>
                    <!-- Row ends -->

                  </div>
                </div>
              </div>
            </div>
            <!-- Row ends -->

            <!-- Row starts -->
            <div class="row gx-4">
              <div class="col-sm-12">
                <div class="card mb-4">
                  <div class="card-header">
                    <h5 class="card-title">Widget</h5>
                  </div>
                  <div class="card-body">

                    <!-- Row starts -->
                    <div class="row gx-4">
                      <div class="col-sm-4">

                        <!-- Graph starts -->
                        <div class="graph-body-xl">
                          <div id="income"></div>
                        </div>
                        <!-- Graph ends -->

                        <!-- Stats starts -->
                        <div class="text-center mb-5">
                          <h2 class="m-0">580</h2>
                          <span class="badge bg-primary-subtle text-primary small mb-2">
                            <i class="bi bi-exclamation-circle-fill me-1 text-warning"></i>3 higher income
                          </span>
                          <div class=""><span class="badge bg-primary me-1">+26% Compared to last week</span></div>
                        </div>
                        <!-- Stats ends -->

                      </div>
                      <div class="col-sm-4">

                        <!-- Graph starts -->
                        <div class="graph-body-xl">
                          <div id="expenses"></div>
                        </div>
                        <!-- Graph ends -->

                        <!-- Stats starts -->
                        <div class="text-center mb-5">
                          <h2 class="m-0">680</h2>
                          <span class="badge bg-primary-subtle text-primary small mb-2">
                            <i class="bi bi-exclamation-circle-fill me-1 text-warning"></i>6 higher expenses
                          </span>
                          <div class=""><span class="badge bg-primary me-1">+33% Compared to last week</span></div>
                        </div>
                        <!-- Stats ends -->

                      </div>
                      <div class="col-sm-4">

                        <!-- Graph starts -->
                        <div class="graph-body-xl">
                          <div id="revenue"></div>
                        </div>
                        <!-- Graph ends -->

                        <!-- Stats starts -->
                        <div class="text-center mb-5">
                          <h2 class="m-0">930</h2>
                          <span class="badge bg-primary-subtle text-primary small mb-2">
                            <i class="bi bi-exclamation-circle-fill me-1 text-warning"></i>9 higher revenue
                          </span>
                          <div class=""><span class="badge bg-danger me-1">+49% compared to last week</span></div>
                        </div>
                        <!-- Stats ends -->

                      </div>
                    </div>
                    <!-- Row ends -->

                  </div>
                </div>
              </div>
            </div>
            <!-- Row ends -->

            <!-- Row starts -->
            <div class="row gx-4">
              <div class="col-lg-4 col-sm-6 col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div class="m-0">
                        <h5 class="mb-3">Sales</h5>
                        <h2 class="mb-3 fw-bold">5800</h2>
                        <h5 class="mb-3 fw-light">Click Through</h5>
                        <h6 class="m-0 fw-light">No. of clicks to ad that consist of a single
                          impression.
                        </h6>
                      </div>
                      <div class="position-absolute top-50 end-0 me-3" id="option1"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-sm-6 col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div class="m-0">
                        <h5 class="mb-3">Customers</h5>
                        <h2 class="mb-3 fw-bold">3900</h2>
                        <h5 class="mb-3 fw-light">Click Through</h5>
                        <h6 class="m-0 fw-light">No. of clicks to ad that consist of a single
                          impression.
                        </h6>
                      </div>
                      <div class="position-absolute top-50 end-0 me-3" id="option2"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-sm-12 col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div class="m-0">
                        <h5 class="mb-3">Reviews</h5>
                        <h2 class="mb-3 fw-bold">6600</h2>
                        <h5 class="mb-3 fw-light">Click Through</h5>
                        <h6 class="m-0 fw-light">No. of clicks to ad that consist of a single
                          impression.
                        </h6>
                      </div>
                      <div class="position-absolute top-50 end-0 me-3" id="option3"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Row ends -->

          </div>
          <!-- App body ends -->

          <!-- App footer starts -->
          <div class="app-footer">
            <span class="small">© Bootstrap Gallery 2024</span>
          </div>
          <!-- App footer ends -->

        </div>
        <!-- App container ends -->

      </div>
      <!-- Main container ends -->

    </div>
    <!-- Page wrapper ends -->

    <!-- *************
			************ JavaScript Files *************
		************* -->
    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- *************
			************ Vendor Js Files *************
		************* -->

    <!-- Overlay Scroll JS -->
    <script src="assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js"></script>
    <script src="assets/vendor/overlay-scroll/custom-scrollbar.js"></script>

    <!-- Apex Charts -->
    <script src="assets/vendor/apex/apexcharts.min.js"></script>
    <script src="assets/vendor/apex/custom/graph-widgets/widget1.js"></script>
    <script src="assets/vendor/apex/custom/graph-widgets/widget2.js"></script>
    <script src="assets/vendor/apex/custom/graph-widgets/widget3.js"></script>
    <script src="assets/vendor/apex/custom/graph-widgets/widget4.js"></script>
    <script src="assets/vendor/apex/custom/graph-widgets/widget5.js"></script>

    <!-- Custom JS files -->
    <script src="assets/js/custom.js"></script>
  </body>


<!-- Mirrored from bootstrapget.com/demos/cube-admin-template/graph-widgets.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Feb 2025 22:03:28 GMT -->
</html>