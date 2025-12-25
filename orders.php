<?php
include 'header.php';
?>


          <!-- App body starts -->
          <div class="app-body">

            <!-- Row starts -->
            <div class="row gx-4">
              <div class="col-xl-3 col-sm-6 col-12">
                <div class="card mb-4 bg-primary">
                  <div class="card-body">
                    <div class="m-0 text-white">
                      <div class="fw-semibold mb-3">New Orders</div>
                      <div class="position-relative">
                        <h2 class="m-0">300</h2>
                        <span class="badge bg-secondary-subtle text-body small mb-2">
                          <i class="bi bi-exclamation-circle-fill me-1 text-warning"></i>8 new orders
                        </span>
                        <div class=""><span class="badge bg-danger me-1">+28%</span>Compared to
                          last week</div>
                        <i class="bi bi-box-seam display-3 opacity-25 position-absolute end-0 top-0 me-2"></i>
                      </div>
                      <div class="mt-3">
                        <div class="small">Last updated on <span class="opacity-50">Jan 10, 6:30:59 AM</span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 col-12">
                <div class="card mb-4 bg-primary">
                  <div class="card-body">
                    <div class="m-0 text-white">
                      <div class="fw-semibold mb-3">Orders Delivered</div>
                      <div class="position-relative">
                        <h2 class="m-0">600</h2>
                        <span class="badge bg-secondary-subtle text-body small mb-2">
                          <i class="bi bi-exclamation-circle-fill me-1 text-warning"></i>4 orders delivered
                        </span>
                        <div class=""><span class="badge bg-danger me-1">+20%</span>Compared to
                          last week</div>
                        <i class="bi bi-bar-chart display-3 opacity-25 position-absolute end-0 top-0 me-2"></i>
                      </div>
                      <div class="mt-3">
                        <div class="small">Last updated on <span class="opacity-50">Jan 12, 8:20:30 AM</span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 col-12">
                <div class="card mb-4 bg-primary">
                  <div class="card-body">
                    <div class="m-0 text-white">
                      <div class="fw-semibold mb-3">Orders Pending</div>
                      <div class="position-relative">
                        <h2 class="m-0">900</h2>
                        <span class="badge bg-secondary-subtle text-body small mb-2">
                          <i class="bi bi-exclamation-circle-fill me-1 text-warning"></i>5 pending orders
                        </span>
                        <div class=""><span class="badge bg-danger me-1">+36%</span>Compared to
                          last week</div>
                        <i class="bi bi-sticky display-3 opacity-25 position-absolute end-0 top-0 me-2"></i>
                      </div>
                      <div class="mt-3">
                        <div class="small">Last updated on <span class="opacity-50">Jan 14, 9:45:35 AM</span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 col-12">
                <div class="card mb-4 bg-primary">
                  <div class="card-body">
                    <div class="m-0 text-white">
                      <div class="fw-semibold mb-3">Orders Cancelled</div>
                      <div class="position-relative">
                        <h2 class="m-0">200</h2>
                        <span class="badge bg-light-subtle text-danger small mb-2">
                          <i class="bi bi-exclamation-circle-fill me-1 text-warning"></i>7 orders cancelled
                        </span>
                        <div class=""><span class="badge bg-danger me-1">+39%</span>Compared to last week</div>
                        <i class="bi bi-wallet2 display-3 opacity-25 position-absolute end-0 top-0 me-2"></i>
                      </div>
                      <div class="mt-3">
                        <div class="small">Last updated on <span class="opacity-50">Jan 18, 9:29:59 AM</span></div>
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
                <!-- Card starts -->
                <div class="card mb-4">
                  <div class="card-header">
                    <h5 class="card-title">Orders Summary</h5>
                  </div>
                  <div class="card-body">

                    <div class="graph-body auto-align-graph">
                      <div id="orders"></div>
                    </div>

                  </div>
                </div>
                <!-- Card ends -->

              </div>
            </div>
            <!-- Row ends -->

            <!-- Row starts -->
            <div class="row gx-4">
              <div class="col-xl-12 col-sm-12">
                <!-- Card start -->
                <div class="card">
                  <div class="card-header">
                    <h5 class="card-title">Order History</h5>
                  </div>
                  <div class="card-body">

                    <!-- Table start -->
                    <div class="table-outer">
                      <div class="table-responsive">
                        <table class="table truncate align-middle">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Product</th>
                              <th>Status</th>
                              <th>Payment</th>
                              <th>Order Date</th>
                              <th>Delivery Date</th>
                              <th>Priority</th>
                              <th>Category</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>Alignment UI issue fix</td>
                              <td><span class="badge bg-primary">In Progress</span></td>
                              <td>
                                <span class="badge border border-primary text-primary">Paid by wallet</span>
                              </td>
                              <td>2023/04/25</td>
                              <td>2 mins ago</td>
                              <td><span class="badge bg-primary">High</span></td>
                              <td>Books</td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>Responsive Design Issues Fix</td>
                              <td><span class="badge bg-danger">Delivered</span></td>
                              <td>
                                <span class="badge border border-primary text-primary">Paid by wallet</span>
                              </td>
                              <td>2023/02/12</td>
                              <td>7 mins ago</td>
                              <td><span class="badge bg-primary">Medium</span></td>
                              <td>Electronics</td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td>Unit Testing</td>
                              <td><span class="badge bg-danger">Delivered</span></td>
                              <td>
                                <span class="badge border border-primary text-primary">Paid by card</span>
                              </td>
                              <td>2023/03/16</td>
                              <td>12 mins ago</td>
                              <td><span class="badge bg-primary">Low</span></td>
                              <td>Mobiles</td>
                            </tr>
                            <tr>
                              <td>4</td>
                              <td>Validations</td>
                              <td><span class="badge bg-primary">In Progress</span></td>
                              <td>
                                <span class="badge border border-primary text-primary">Paid by wallet</span>
                              </td>
                              <td>2023/04/25</td>
                              <td>45 mins ago</td>
                              <td><span class="badge bg-primary">High</span></td>
                              <td>Games</td>
                            </tr>
                            <tr>
                              <td>5</td>
                              <td>Testing and UI Issues Fix</td>
                              <td><span class="badge bg-primary">In Progress</span></td>
                              <td>
                                <span class="badge border border-primary text-primary">Paid by card</span>
                              </td>
                              <td>2023/02/12</td>
                              <td>58 mins ago</td>
                              <td><span class="badge bg-danger">Low</span></td>
                              <td>Gadgets</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <!-- Table end -->

                  </div>
                </div>
                <!-- Card end -->
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
    <script src="assets/js/moment.min.js"></script>

    <!-- *************
			************ Vendor Js Files *************
		************* -->

    <!-- Overlay Scroll JS -->
    <script src="assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js"></script>
    <script src="assets/vendor/overlay-scroll/custom-scrollbar.js"></script>

    <!-- Apex Charts -->
    <script src="assets/vendor/apex/apexcharts.min.js"></script>
    <script src="assets/vendor/apex/custom/orders/orders.js"></script>

    <!-- Custom JS files -->
    <script src="assets/js/custom.js"></script>
  </body>


<!-- Mirrored from bootstrapget.com/demos/cube-admin-template/orders.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Feb 2025 22:03:24 GMT -->
</html>