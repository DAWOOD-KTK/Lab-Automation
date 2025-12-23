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
                    <h5 class="card-title">Accordion</h5>
                  </div>
                  <div class="card-body">
                    <div class="accordion" id="accordionSpecialTitle">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSpecialTitleOne">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSpecialTitleOne" aria-expanded="true"
                            aria-controls="collapseSpecialTitleOne">
                            <div class="d-flex flex-column">
                              <h5 class="m-0">Accordion #1</h5>
                            </div>
                          </button>
                        </h2>
                        <div id="collapseSpecialTitleOne" class="accordion-collapse collapse show"
                          aria-labelledby="headingSpecialTitleOne" data-bs-parent="#accordionSpecialTitle">
                          <div class="accordion-body">
                            <div class="display-6">Hello,</div>
                            <p class="mb-3">
                              This is the first item's accordion body. It is shown by default, until the collapse plugin
                              adds the appropriate classes that we use to style each element. These classes control the
                              overall appearance, as well as the showing and hiding via CSS transitions. You can modify
                              any of this with custom CSS or overriding our default variables. It's also worth noting
                              that just about any HTML can go within the <code>.accordion-body</code>, though the
                              transition does limit overflow.
                            </p>

                            <div class="d-flex gap-2">
                              <a href="#" class="btn btn-outline-primary">Card link</a>
                              <a href="#" class="btn btn-primary">Another link</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSpecialTitleTwo">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSpecialTitleTwo" aria-expanded="false"
                            aria-controls="collapseSpecialTitleTwo">
                            <div class="d-flex flex-column">
                              <h5 class="m-0">Accordion #2</h5>
                            </div>
                          </button>
                        </h2>
                        <div id="collapseSpecialTitleTwo" class="accordion-collapse collapse"
                          aria-labelledby="headingSpecialTitleTwo" data-bs-parent="#accordionSpecialTitle">
                          <div class="accordion-body">
                            <!-- Row starts -->
                            <div class="row gx-4">
                              <div class="col">
                                <div class="card card-cover rounded-2"
                                  style="background-image: url('assets/images/thumbs/img6.jpg');">
                                  <div class="p-3 text-white">
                                    <h4 class="fw-bold">
                                      Another longer title belongs here
                                    </h4>
                                  </div>
                                </div>
                              </div>
                              <div class="col">
                                <div class="card card-cover rounded-2"
                                  style="background-image: url('assets/images/thumbs/img9.jpg');">
                                  <div class="p-3 text-white">
                                    <h4 class="fw-bold">
                                      Another longer title belongs here
                                    </h4>
                                  </div>
                                </div>
                              </div>

                              <div class="col">
                                <div class="card card-cover rounded-2"
                                  style="background-image: url('assets/images/thumbs/img7.jpg');">
                                  <div class="p-3 text-white">
                                    <h4 class="fw-bold">
                                      Another longer title belongs here
                                    </h4>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- Row ends -->
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSpecialTitleThree">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSpecialTitleThree" aria-expanded="false"
                            aria-controls="collapseSpecialTitleThree">
                            <div class="d-flex flex-column">
                              <h5 class="m-0">Accordion #3</h5>
                            </div>
                          </button>
                        </h2>
                        <div id="collapseSpecialTitleThree" class="accordion-collapse collapse"
                          aria-labelledby="headingSpecialTitleThree" data-bs-parent="#accordionSpecialTitle">
                          <div class="accordion-body">
                            <strong>This is the third item's accordion body.</strong>
                            It is hidden by default, until the collapse plugin
                            adds the appropriate classes that we use to style
                            each element. These classes control the overall
                            appearance, as well as the showing and hiding via
                            CSS transitions. You can modify any of this with
                            custom CSS or overriding our default variables. It's
                            also worth noting that just about any HTML can go
                            within the <code>.accordion-body</code>, though the
                            transition does limit overflow.
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
              <div class="col-sm-12">
                <div class="card mb-4">
                  <div class="card-header">
                    <h5 class="card-title">Accordion</h5>
                  </div>
                  <div class="card-body">
                    <div class="accordion" id="accordionExample2">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOneLight">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOneLight" aria-expanded="true" aria-controls="collapseOneLight">
                            Accordion Item #1
                          </button>
                        </h2>
                        <div id="collapseOneLight" class="accordion-collapse collapse show"
                          aria-labelledby="headingOneLight" data-bs-parent="#accordionExample2">
                          <div class="accordion-body">
                            <!-- Row starts -->
                            <div class="row gx-4">
                              <div class="col">
                                <div class="card card-cover rounded-2"
                                  style="background-image: url('assets/images/thumbs/img8.jpg');">
                                  <div class="p-5 text-white">
                                    <h4 class="fw-bold">
                                      Another longer title belongs here
                                    </h4>
                                  </div>
                                </div>
                              </div>
                              <div class="col">
                                <div class="card card-cover rounded-2"
                                  style="background-image: url('assets/images/thumbs/img4.jpg');">
                                  <div class="p-5 text-white">
                                    <h4 class="fw-bold">
                                      Another longer title belongs here
                                    </h4>
                                  </div>
                                </div>
                              </div>

                              <div class="col">
                                <div class="card card-cover rounded-2"
                                  style="background-image: url('assets/images/thumbs/img6.jpg');">
                                  <div class="p-5 text-white">
                                    <h4 class="fw-bold">
                                      Another longer title belongs here
                                    </h4>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- Row ends -->
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwoLight">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwoLight" aria-expanded="false" aria-controls="collapseTwoLight">
                            Accordion Item #2
                          </button>
                        </h2>
                        <div id="collapseTwoLight" class="accordion-collapse collapse" aria-labelledby="headingTwoLight"
                          data-bs-parent="#accordionExample2">
                          <div class="accordion-body">
                            <div class="row gx-4">
                              <div class="col">
                                <img src="assets/images/user1.png" class="img-fluid mb-2" alt="Bootstrap Gallery" />
                              </div>
                              <div class="col">
                                <img src="assets/images/user2.png" class="img-fluid mb-2" alt="Bootstrap Gallery" />
                              </div>
                              <div class="col">
                                <img src="assets/images/user3.png" class="img-fluid mb-2" alt="Bootstrap Gallery" />
                              </div>
                              <div class="col">
                                <img src="assets/images/user4.png" class="img-fluid mb-2" alt="Bootstrap Gallery" />
                              </div>
                              <div class="col">
                                <img src="assets/images/user5.png" class="img-fluid mb-2" alt="Bootstrap Gallery" />
                              </div>
                              <div class="col">
                                <img src="assets/images/user1.png" class="img-fluid mb-2" alt="Bootstrap Gallery" />
                              </div>
                              <div class="col">
                                <img src="assets/images/user2.png" class="img-fluid mb-2" alt="Bootstrap Gallery" />
                              </div>
                              <div class="col">
                                <img src="assets/images/user3.png" class="img-fluid mb-2" alt="Bootstrap Gallery" />
                              </div>
                              <div class="col">
                                <img src="assets/images/user4.png" class="img-fluid mb-2" alt="Bootstrap Gallery" />
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThreeLight">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThreeLight" aria-expanded="false"
                            aria-controls="collapseThreeLight">
                            Accordion Item #3
                          </button>
                        </h2>
                        <div id="collapseThreeLight" class="accordion-collapse collapse"
                          aria-labelledby="headingThreeLight" data-bs-parent="#accordionExample2">
                          <div class="accordion-body">
                            <strong>This is the third item's accordion body.</strong>
                            It is hidden by default, until the collapse plugin
                            adds the appropriate classes that we use to style
                            each element. These classes control the overall
                            appearance, as well as the showing and hiding via
                            CSS transitions. You can modify any of this with
                            custom CSS or overriding our default variables. It's
                            also worth noting that just about any HTML can go
                            within the <code>.accordion-body</code>, though the
                            transition does limit overflow.
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
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <h5 class="card-title">Accordion Always Open</h5>
                  </div>
                  <div class="card-body">
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                            aria-controls="panelsStayOpen-collapseOne">
                            Accordion Item #1
                          </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                          aria-labelledby="panelsStayOpen-headingOne">
                          <div class="accordion-body">
                            <div class="row gx-4">
                              <div class="col">
                                <img src="assets/images/user1.png" class="img-fluid mb-2" alt="Bootstrap Gallery" />
                              </div>
                              <div class="col">
                                <img src="assets/images/user2.png" class="img-fluid mb-2" alt="Bootstrap Gallery" />
                              </div>
                              <div class="col">
                                <img src="assets/images/user3.png" class="img-fluid mb-2" alt="Bootstrap Gallery" />
                              </div>
                              <div class="col">
                                <img src="assets/images/user4.png" class="img-fluid mb-2" alt="Bootstrap Gallery" />
                              </div>
                              <div class="col">
                                <img src="assets/images/user5.png" class="img-fluid mb-2" alt="Bootstrap Gallery" />
                              </div>
                              <div class="col">
                                <img src="assets/images/user1.png" class="img-fluid mb-2" alt="Bootstrap Gallery" />
                              </div>
                              <div class="col">
                                <img src="assets/images/user2.png" class="img-fluid mb-2" alt="Bootstrap Gallery" />
                              </div>
                              <div class="col">
                                <img src="assets/images/user3.png" class="img-fluid mb-2" alt="Bootstrap Gallery" />
                              </div>
                              <div class="col">
                                <img src="assets/images/user4.png" class="img-fluid mb-2" alt="Bootstrap Gallery" />
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseTwo">
                            Accordion Item #2
                          </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                          aria-labelledby="panelsStayOpen-headingTwo">
                          <div class="accordion-body">
                            <strong>This is the second item's accordion body.</strong>
                            It is hidden by default, until the collapse plugin
                            adds the appropriate classes that we use to style
                            each element. These classes control the overall
                            appearance, as well as the showing and hiding via
                            CSS transitions. You can modify any of this with
                            custom CSS or overriding our default variables. It's
                            also worth noting that just about any HTML can go
                            within the <code>.accordion-body</code>, though the
                            transition does limit overflow.
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseThree">
                            Accordion Item #3
                          </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                          aria-labelledby="panelsStayOpen-headingThree">
                          <div class="accordion-body">
                            The Elite admin dashboard is the best choice for building powerful, modern web applications.
                            It is built with the latest Bootstrap 5 and features a unique and comprehensive UI kit.
                          </div>
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
