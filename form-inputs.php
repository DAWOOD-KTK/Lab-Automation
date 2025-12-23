<?php
include 'header.php';
?>


          <!-- App body starts -->
          <div class="app-body">

            <!-- Row starts -->
            <div class="row gx-4">
              <div class="col-sm-4 col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="m-0">
                      <label class="form-label" for="abc">Input Field</label>
                      <input type="text" class="form-control" id="abc" placeholder="Enter text">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="m-0">
                      <label class="form-label" for="abc1">Disabled Input Field</label>
                      <input type="text" class="form-control" id="abc1" value="Disabled Field" disabled="">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="m-0">
                      <label class="form-label" for="abc2">Readonly Input Field</label>
                      <input type="text" class="form-control" id="abc2" value="Readonly Field" readonly="">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6 col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="m-0">
                      <label class="form-label" for="abc3">Password Input Field</label>
                      <input type="password" class="form-control" id="abc3" value="12345">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6 col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="m-0">
                      <label class="form-label" for="abc4">Selcet Field</label>
                      <select class="form-select" id="abc4" aria-label="Default select example">
                        <option selected="">Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6 col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="m-0">
                      <label class="form-label" for="abc5">Disabled Selcet</label>
                      <select class="form-select" id="abc5" aria-label="Default select example" disabled="">
                        <option>Open this select menu</option>
                        <option selected="" value="1">Disabled</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6 col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="m-0">
                      <label class="form-label" for="exampleColorInput">Select Color</label>
                      <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#35bbed"
                        title="Choose your color">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="m-0">
                      <label class="form-label" for="abc6">Textarea</label>
                      <textarea class="form-control" id="abc6" rows="3"></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="m-0">
                      <label for="exampleDataList" class="form-label">Datalist example</label>
                      <input class="form-control" list="datalistOptions" id="exampleDataList"
                        placeholder="Type to search...">
                      <datalist id="datalistOptions">
                        <option value="San Francisco"></option>
                        <option value="New York"></option>
                        <option value="Seattle"></option>
                        <option value="Los Angeles"></option>
                        <option value="Chicago"></option>
                      </datalist>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-4 col-sm-6 col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="input-group">
                      <span class="input-group-text">@</span>
                      <input type="text" class="form-control" id="abc7" placeholder="Username">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-4 col-sm-6 col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="input-group">
                      <input type="text" class="form-control" id="abc8" placeholder="Name">
                      <span class="input-group-text">@test.com</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-4 col-sm-6 col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="input-group">
                      <span class="input-group-text">$</span>
                      <input type="text" class="form-control" id="abc9">
                      <span class="input-group-text">.00</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-4 col-sm-6 col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="input-group">
                      <span class="input-group-text">$</span>
                      <span class="input-group-text">0.00</span>
                      <input type="text" class="form-control" id="abc10">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-4 col-sm-6 col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="input-group">
                      <input type="text" class="form-control" id="abc11">
                      <span class="input-group-text">$</span>
                      <span class="input-group-text">0.00</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-4 col-sm-6 col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="input-group">
                      <input type="text" class="form-control" id="abc12" placeholder="Username">
                      <span class="input-group-text">@</span>
                      <input type="text" class="form-control" id="abc13" placeholder="Server">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="input-group">
                      <span class="input-group-text">Textarea</span>
                      <textarea class="form-control" id="abc14" aria-label="With textarea"></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-4 col-sm-6 col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="input-group">
                      <button class="btn btn-outline-secondary" type="button">
                        Button
                      </button>
                      <input type="text" class="form-control" id="abc15" placeholder="">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-4 col-sm-6 col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="input-group">
                      <input type="text" class="form-control" id="abc16" placeholder="">
                      <button class="btn btn-outline-secondary" type="button">
                        Button
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-4 col-sm-6 col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="input-group">
                      <button class="btn btn-outline-secondary" type="button">
                        Button
                      </button>
                      <input type="text" class="form-control" id="abc17" placeholder="">
                      <button class="btn btn-outline-secondary" type="button">
                        Button
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-4 col-sm-6 col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="input-group">
                      <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Dropdown
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li>
                          <a class="dropdown-item" href="#">Another action</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">Separated link</a>
                        </li>
                      </ul>
                      <input type="text" class="form-control" id="abc18" aria-label="Text input with dropdown button">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-4 col-sm-6 col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="input-group">
                      <input type="text" class="form-control" id="abc19" aria-label="Text input with dropdown button">
                      <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Dropdown
                      </button>
                      <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li>
                          <a class="dropdown-item" href="#">Another action</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">Separated link</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-4 col-sm-6 col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="input-group">
                      <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Dropdown
                      </button>
                      <ul class="dropdown-menu">
                        <li>
                          <a class="dropdown-item" href="#">Action before</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">Another action before</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">Separated link</a>
                        </li>
                      </ul>
                      <input type="text" class="form-control" id="abc20"
                        aria-label="Text input with 2 dropdown buttons">
                      <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Dropdown
                      </button>
                      <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li>
                          <a class="dropdown-item" href="#">Another action</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">Separated link</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-4 col-sm-6 col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="input-group">
                      <button type="button" class="btn btn-outline-secondary">
                        Action
                      </button>
                      <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="visually-hidden">Toggle Dropdown</span>
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li>
                          <a class="dropdown-item" href="#">Another action</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">Separated link</a>
                        </li>
                      </ul>
                      <input type="text" class="form-control" id="abc21"
                        aria-label="Text input with segmented dropdown button">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-4 col-sm-6 col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="input-group">
                      <input type="text" class="form-control" id="abc22"
                        aria-label="Text input with segmented dropdown button">
                      <button type="button" class="btn btn-outline-secondary">
                        Action
                      </button>
                      <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="visually-hidden">Toggle Dropdown</span>
                      </button>
                      <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li>
                          <a class="dropdown-item" href="#">Another action</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">Separated link</a>
                        </li>
                      </ul>
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
