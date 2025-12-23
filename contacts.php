<?php
 include 'header.php';
 ?>

          <!-- App body starts -->
          <div class="app-body">

            <!-- Row starts -->
            <div class="row gx-4">
              <div class="col-sm-12">
                <div class="card mb-3">
                  <div class="card-body">

                    <!-- Search starts -->
                    <div class="row gx-3 justify-content-end">
                      <div class="col-sm-4">
                        <div class="d-flex gap-2">
                          <input type="text" class="form-control" id="searchContact" placeholder="Search Contact">
                          <button type="button" class="btn btn-info" data-bs-toggle="modal"
                            data-bs-target="#createNewContact">Add</button>
                        </div>
                      </div>
                    </div>

                    <!-- Search ends -->

                    <!-- Create New Contact Modal -->
                    <div class="modal fade" id="createNewContact" tabindex="-1" aria-labelledby="createNewContactLabel"
                      aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header flex-column">
                            <div class="text-center">
                              <h4 class="text-primary">Create New Contact</h4>
                              <p class="m-0">
                                Enter the contact's name and an email or phone number. To pick the account where you
                                want to save the contact.
                              </p>
                            </div>
                          </div>
                          <div class="modal-body">

                            <!-- Row starts -->
                            <div class="row gx-4">
                              <div class="col-sm-12">
                                <div class="mb-3">
                                  <label for="fullName" class="form-label">Full Name<span
                                      class="text-danger fs-5">*</span></label>
                                  <input type="text" class="form-control" id="fullName"
                                    placeholder="Enter your full name">
                                </div>
                              </div>
                              <div class="col-sm-12">
                                <div class="mb-3">
                                  <label for="yourEmail" class="form-label">Email <span
                                      class="text-danger fs-5">*</span></label>
                                  <input type="email" class="form-control" id="yourEmail"
                                    placeholder="Enter your email">
                                </div>
                              </div>
                              <div class="col-sm-12">
                                <div class="mb-3">
                                  <label for="yourPhone" class="form-label">Phone</label>
                                  <input type="text" class="form-control" id="yourPhone"
                                    placeholder="Enter your phone number">
                                </div>
                              </div>
                              <div class="col-sm-12">
                                <div class="mb-3">
                                  <label for="yourDesignation" class="form-label">Designation</label>
                                  <input type="text" class="form-control" id="yourDesignation"
                                    placeholder="Enter your designation">
                                </div>
                              </div>
                            </div>
                            <!-- Row ends -->

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                              Close
                            </button>
                            <button type="button" class="btn btn-primary">
                              Create
                            </button>
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
              <div class="col-xl-4 col-sm-6 col-12">
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="d-flex align-items-center flex-row">
                      <img src="assets/images/user2.png" alt="Bootstrap Themes" class="rounded-circle img-3xx">
                      <div class="ms-3">
                        <h5 class="mb-1">Myrtle Grant</h5>
                        <p class="mb-1">info@testing.com</p>
                        <p class="m-0 text-secondary small">Web Developer</p>
                      </div>
                      <div class="ms-auto">
                        <a href="#" class="icon-box sm bg-secondary-subtle rounded-circle"><i
                            class="bi bi-heart-fill lh-1 text-danger"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-6 col-12">
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="d-flex align-items-center flex-row">
                      <img src="assets/images/user3.png" alt="Bootstrap Themes" class="rounded-circle img-3xx">
                      <div class="ms-3">
                        <h5 class="mb-1">Thelma Lyons</h5>
                        <p class="mb-1">info@testing.com</p>
                        <p class="m-0 text-secondary small">Admin Developer</p>
                      </div>
                      <div class="ms-auto">
                        <a href="#" class="icon-box sm bg-secondary-subtle rounded-circle"><i
                            class="bi bi-heart-fill lh-1 text-secondary"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-6 col-12">
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="d-flex align-items-center flex-row">
                      <img src="assets/images/user4.png" alt="Bootstrap Themes" class="rounded-circle img-3xx">
                      <div class="ms-3">
                        <h5 class="mb-1">Pete Cuevas</h5>
                        <p class="mb-1">info@testing.com</p>
                        <p class="m-0 text-secondary small">Freelance Developer</p>
                      </div>
                      <div class="ms-auto">
                        <a href="#" class="icon-box sm bg-secondary-subtle rounded-circle"><i
                            class="bi bi-heart-fill lh-1 text-secondary"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-6 col-12">
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="d-flex align-items-center flex-row">
                      <img src="assets/images/user.png" alt="Bootstrap Themes" class="rounded-circle img-3xx">
                      <div class="ms-3">
                        <h5 class="mb-1">Christian Rosario</h5>
                        <p class="mb-1">info@testing.com</p>
                        <p class="m-0 text-secondary small">Web Developer</p>
                      </div>
                      <div class="ms-auto">
                        <a href="#" class="icon-box sm bg-secondary-subtle rounded-circle"><i
                            class="bi bi-heart-fill lh-1 text-secondary"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-6 col-12">
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="d-flex align-items-center flex-row">
                      <img src="assets/images/user1.png" alt="Bootstrap Themes" class="rounded-circle img-3xx">
                      <div class="ms-3">
                        <h5 class="mb-1">Efren Rice</h5>
                        <p class="mb-1">info@testing.com</p>
                        <p class="m-0 text-secondary small">HTML Developer</p>
                      </div>
                      <div class="ms-auto">
                        <a href="#" class="icon-box sm bg-secondary-subtle rounded-circle"><i
                            class="bi bi-heart-fill lh-1 text-danger"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-6 col-12">
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="d-flex align-items-center flex-row">
                      <img src="assets/images/user5.png" alt="Bootstrap Themes" class="rounded-circle img-3xx">
                      <div class="ms-3">
                        <h5 class="mb-1">Elaine Huynh</h5>
                        <p class="mb-1">info@testing.com</p>
                        <p class="m-0 text-secondary small">UX Designer</p>
                      </div>
                      <div class="ms-auto">
                        <a href="#" class="icon-box sm bg-secondary-subtle rounded-circle"><i
                            class="bi bi-heart-fill lh-1 text-danger"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-6 col-12">
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="d-flex align-items-center flex-row">
                      <img src="assets/images/user4.png" alt="Bootstrap Themes" class="rounded-circle img-3xx">
                      <div class="ms-3">
                        <h5 class="mb-1">Maura Woods</h5>
                        <p class="mb-1">info@testing.com</p>
                        <p class="m-0 text-secondary small">Freelance Developer</p>
                      </div>
                      <div class="ms-auto">
                        <a href="#" class="icon-box sm bg-secondary-subtle rounded-circle"><i
                            class="bi bi-heart-fill lh-1 text-secondary"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-6 col-12">
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="d-flex align-items-center flex-row">
                      <img src="assets/images/user.png" alt="Bootstrap Themes" class="rounded-circle img-3xx">
                      <div class="ms-3">
                        <h5 class="mb-1">Stacey Ross</h5>
                        <p class="mb-1">info@testing.com</p>
                        <p class="m-0 text-secondary small">Web Developer</p>
                      </div>
                      <div class="ms-auto">
                        <a href="#" class="icon-box sm bg-secondary-subtle rounded-circle"><i
                            class="bi bi-heart-fill lh-1 text-secondary"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-6 col-12">
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="d-flex align-items-center flex-row">
                      <img src="assets/images/user1.png" alt="Bootstrap Themes" class="rounded-circle img-3xx">
                      <div class="ms-3">
                        <h5 class="mb-1">Dale Osborn</h5>
                        <p class="mb-1">info@testing.com</p>
                        <p class="m-0 text-secondary small">HTML Developer</p>
                      </div>
                      <div class="ms-auto">
                        <a href="#" class="icon-box sm bg-secondary-subtle rounded-circle"><i
                            class="bi bi-heart-fill lh-1 text-secondary"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-6 col-12">
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="d-flex align-items-center flex-row">
                      <img src="assets/images/user.png" alt="Bootstrap Themes" class="rounded-circle img-3xx">
                      <div class="ms-3">
                        <h5 class="mb-1">Tonya Keller</h5>
                        <p class="mb-1">info@testing.com</p>
                        <p class="m-0 text-secondary small">Web Developer</p>
                      </div>
                      <div class="ms-auto">
                        <a href="#" class="icon-box sm bg-secondary-subtle rounded-circle"><i
                            class="bi bi-heart-fill lh-1 text-secondary"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-6 col-12">
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="d-flex align-items-center flex-row">
                      <img src="assets/images/user1.png" alt="Bootstrap Themes" class="rounded-circle img-3xx">
                      <div class="ms-3">
                        <h5 class="mb-1">Lina Snow</h5>
                        <p class="mb-1">info@testing.com</p>
                        <p class="m-0 text-secondary small">HTML Developer</p>
                      </div>
                      <div class="ms-auto">
                        <a href="#" class="icon-box sm bg-secondary-subtle rounded-circle"><i
                            class="bi bi-heart-fill lh-1 text-danger"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-6 col-12">
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="d-flex align-items-center flex-row">
                      <img src="assets/images/user2.png" alt="Bootstrap Themes" class="rounded-circle img-3xx">
                      <div class="ms-3">
                        <h5 class="mb-1">Yolanda Arnold</h5>
                        <p class="mb-1">info@testing.com</p>
                        <p class="m-0 text-secondary small">Web Developer</p>
                      </div>
                      <div class="ms-auto">
                        <a href="#" class="icon-box sm bg-secondary-subtle rounded-circle"><i
                            class="bi bi-heart-fill lh-1 text-danger"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-6 col-12">
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="d-flex align-items-center flex-row">
                      <img src="assets/images/user3.png" alt="Bootstrap Themes" class="rounded-circle img-3xx">
                      <div class="ms-3">
                        <h5 class="mb-1">Silas Patel</h5>
                        <p class="mb-1">info@testing.com</p>
                        <p class="m-0 text-secondary small">Admin Developer</p>
                      </div>
                      <div class="ms-auto">
                        <a href="#" class="icon-box sm bg-secondary-subtle rounded-circle"><i
                            class="bi bi-heart-fill lh-1 text-danger"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-6 col-12">
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="d-flex align-items-center flex-row">
                      <img src="assets/images/user5.png" alt="Bootstrap Themes" class="rounded-circle img-3xx">
                      <div class="ms-3">
                        <h5 class="mb-1">Noemi Silva</h5>
                        <p class="mb-1">info@testing.com</p>
                        <p class="m-0 text-secondary small">UX Designer</p>
                      </div>
                      <div class="ms-auto">
                        <a href="#" class="icon-box sm bg-secondary-subtle rounded-circle"><i
                            class="bi bi-heart-fill lh-1 text-secondary"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-6 col-12">
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="d-flex align-items-center flex-row">
                      <img src="assets/images/user3.png" alt="Bootstrap Themes" class="rounded-circle img-3xx">
                      <div class="ms-3">
                        <h5 class="mb-1">Ruth Thornton</h5>
                        <p class="mb-1">info@testing.com</p>
                        <p class="m-0 text-secondary small">Web Developer</p>
                      </div>
                      <div class="ms-auto">
                        <a href="#" class="icon-box sm bg-secondary-subtle rounded-circle"><i
                            class="bi bi-heart-fill lh-1 text-danger"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-6 col-12">
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="d-flex align-items-center flex-row">
                      <img src="assets/images/user3.png" alt="Bootstrap Themes" class="rounded-circle img-3xx">
                      <div class="ms-3">
                        <h5 class="mb-1">Kevin Spacey</h5>
                        <p class="mb-1">info@testing.com</p>
                        <p class="m-0 text-secondary small">Admin Developer</p>
                      </div>
                      <div class="ms-auto">
                        <a href="#" class="icon-box sm bg-secondary-subtle rounded-circle"><i
                            class="bi bi-heart-fill lh-1 text-secondary"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-6 col-12">
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="d-flex align-items-center flex-row">
                      <img src="assets/images/user4.png" alt="Bootstrap Themes" class="rounded-circle img-3xx">
                      <div class="ms-3">
                        <h5 class="mb-1">Ralph Waters</h5>
                        <p class="mb-1">info@testing.com</p>
                        <p class="m-0 text-secondary small">Freelance Developer</p>
                      </div>
                      <div class="ms-auto">
                        <a href="#" class="icon-box sm bg-secondary-subtle rounded-circle"><i
                            class="bi bi-heart-fill lh-1 text-secondary"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-6 col-12">
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="d-flex align-items-center flex-row">
                      <img src="assets/images/user5.png" alt="Bootstrap Themes" class="rounded-circle img-3xx">
                      <div class="ms-3">
                        <h5 class="mb-1">Elliott Hermans</h5>
                        <p class="mb-1">info@testing.com</p>
                        <p class="m-0 text-secondary small">UX Designer</p>
                      </div>
                      <div class="ms-auto">
                        <a href="#" class="icon-box sm bg-secondary-subtle rounded-circle"><i
                            class="bi bi-heart-fill lh-1 text-secondary"></i></a>
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
