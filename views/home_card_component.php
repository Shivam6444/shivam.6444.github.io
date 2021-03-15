
<div class="container">

  <div class="row row-cols-1 row-cols-md-3 g-4 mb-5" style="font-family: 'DM Sans', sans-serif;">
          <?php
            $data = get_items($current_date, $active_slot);
            
            if($data == false){
              echo  "No items for this slot & date";
            }
            else{
              print_r($data);
            }

          ?>

            <div class="col mb-3">
              <div class="card h-100 shadow-lg" style="border-radius: 1rem; cursor:pointer;">
                <img
                  src="./img/butter-chicken.png"
                  class="card-img-top"
                  alt="..."
                  style="border-radius: 1rem 1rem 0rem 0rem;"
                />
                <div class="card-body hover-shadow" style="border-radius: 0rem 0rem 1rem 1rem;">
                  <h5 class="card-title text-black" style="font-weight: bolder;" >Butter Chicken Naan</h5>
                  <p class="card-title text-dark">by <span style="font-weight: bold;">Khana Khazana</span></a></p>
                  <p class="card-text text-dark">
                    Butter Chicken cooked with traditional indian spices served with tandoori naan.
                  </p>
                  
                  <div class="col text-center">

                  <button type="button" 
                  class="btn btn-lg btn-black btn-rounded"   
                  data-mdb-toggle="modal"
                  data-mdb-target="#exampleModal"
                  style="text-transform:initial; width:100%; font-size:1.1rem;">Schedule</button>

                  <div
                    class="modal fade"
                    id="exampleModal"
                    tabindex="-1"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true"
                  >

                  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen-sm-down">
                    <div class="modal-content text-black">
                    <div class="text-center">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Butter Chicken and Naan</h5>
                      </div>
                        <button
                          type="button"
                          class="btn-close"
                          data-mdb-dismiss="modal"
                          aria-label="Close"
                          style=""
                        ></button>
                      </div>
                      <div class="modal-body">
                        <div class="col">
                          <img
                            src="./img/butter-chicken.png"
                            class="card-img-top mb-3"
                            alt="..."
                            style="border-radius: .5rem;"
                          />
                        <div class="text-left">
                        <p class="modal-title text-dark text-left">
                          Butter Chicken cooked with traditional indian spices served with tandoori naan.
                        </p>
                        </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-lg btn-black" style="text-transform:initial; width:100%; font-size:1.1rem;">Schedule 1 item</button>
                      </div>
                    </div>
                  </div>
                </div>

                  </div>
                </div>
              </div>
            </div>

            
            <div class="col mb-3">
              <div class="card h-100 shadow-lg" style="border-radius: 1rem; cursor:pointer;">
                <img
                  src="./img/chicken-noodle.png"
                  class="card-img-top"
                  alt="..."
                  style="border-radius: 1rem 1rem 0rem 0rem;"
                />
                <div class="card-body hover-shadow" style="border-radius: 0rem 0rem 1rem 1rem;">
                  <h5 class="card-title text-black" style="font-weight: bolder;" >Chicken Noodles Udon</h5>
                  <p class="card-title text-dark">by <span style="font-weight: bold;">Buddah Ramen</span></a></p>
                  <p class="card-text text-dark">
                    Chicken Udon with soup and noodles and cracked poached eggs and curry.



                  </p>
                  
                  <div class="col text-center">

                  <button type="button" 
                  class="btn btn-lg btn-black btn-rounded"   
                  data-mdb-toggle="modal"
                  data-mdb-target="#exampleModal"
                  style="text-transform:initial; width:100%; font-size:1.1rem;">Schedule</button>

                  <div
                    class="modal fade"
                    id="exampleModal"
                    tabindex="-1"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true"
                  >

                  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen-sm-down">
                    <div class="modal-content text-black">
                    <div class="text-center">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Butter Chicken and Naan</h5>
                      </div>
                        <button
                          type="button"
                          class="btn-close"
                          data-mdb-dismiss="modal"
                          aria-label="Close"
                          style=""
                        ></button>
                      </div>
                      <div class="modal-body">
                        <div class="col">
                          <img
                            src="./img/butter-chicken.png"
                            class="card-img-top mb-3"
                            alt="..."
                            style="border-radius: .5rem;"
                          />
                        <div class="text-left">
                        <p class="modal-title text-dark text-left">
                          Butter Chicken cooked with traditional indian spices served with tandoori naan.
                        </p>
                        </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-lg btn-black" style="text-transform:initial; width:100%; font-size:1.1rem;">Schedule 1 item</button>
                      </div>
                    </div>
                  </div>
                </div>

                  </div>
                </div>
              </div>
            </div>

            
            <div class="col mb-3">
              <div class="card h-100 shadow-lg" style="border-radius: 1rem; cursor:pointer;">
                <img
                  src="./img/butter-chicken.png"
                  class="card-img-top"
                  alt="..."
                  style="border-radius: 1rem 1rem 0rem 0rem;"
                />
                <div class="card-body hover-shadow" style="border-radius: 0rem 0rem 1rem 1rem;">
                  <h5 class="card-title text-black" style="font-weight: bolder;" >Butter Chicken Naan</h5>
                  <p class="card-title text-dark">by <span style="font-weight: bold;">Khana Khazana</span></a></p>
                  <p class="card-text text-dark">
                    Butter Chicken cooked with traditional indian spices served with tandoori naan.
                  </p>
                  
                  <div class="col text-center">

                  <button type="button" 
                  class="btn btn-lg btn-black btn-rounded"   
                  data-mdb-toggle="modal"
                  data-mdb-target="#exampleModal"
                  style="text-transform:initial; width:100%; font-size:1.1rem;">Schedule</button>

                  <div
                    class="modal fade"
                    id="exampleModal"
                    tabindex="-1"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true"
                  >

                  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen-sm-down">
                    <div class="modal-content text-black">
                    <div class="text-center">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Butter Chicken and Naan</h5>
                      </div>
                        <button
                          type="button"
                          class="btn-close"
                          data-mdb-dismiss="modal"
                          aria-label="Close"
                          style=""
                        ></button>
                      </div>
                      <div class="modal-body">
                        <div class="col">
                          <img
                            src="./img/butter-chicken.png"
                            class="card-img-top mb-3"
                            alt="..."
                            style="border-radius: .5rem;"
                          />
                        <div class="text-left">
                        <p class="modal-title text-dark text-left">
                          Butter Chicken cooked with traditional indian spices served with tandoori naan.
                        </p>
                        </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-lg btn-black" style="text-transform:initial; width:100%; font-size:1.1rem;">Schedule 1 item</button>
                      </div>
                    </div>
                  </div>
                </div>

                  </div>
                </div>
              </div>
            </div>

            
            <div class="col mb-3">
              <div class="card h-100 shadow-lg" style="border-radius: 1rem; cursor:pointer;">
                <img
                  src="./img/butter-chicken.png"
                  class="card-img-top"
                  alt="..."
                  style="border-radius: 1rem 1rem 0rem 0rem;"
                />
                <div class="card-body hover-shadow" style="border-radius: 0rem 0rem 1rem 1rem;">
                  <h5 class="card-title text-black" style="font-weight: bolder;" >Butter Chicken Naan</h5>
                  <p class="card-title text-dark">by <span style="font-weight: bold;">Khana Khazana</span></a></p>
                  <p class="card-text text-dark">
                    Butter Chicken cooked with traditional indian spices served with tandoori naan.
                  </p>
                  
                  <div class="col text-center">

                  <button type="button" 
                  class="btn btn-lg btn-black btn-rounded"   
                  data-mdb-toggle="modal"
                  data-mdb-target="#exampleModal"
                  style="text-transform:initial; width:100%; font-size:1.1rem;">Schedule</button>

                  <div
                    class="modal fade"
                    id="exampleModal"
                    tabindex="-1"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true"
                  >

                  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen-sm-down">
                    <div class="modal-content text-black">
                    <div class="text-center">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Butter Chicken and Naan</h5>
                      </div>
                        <button
                          type="button"
                          class="btn-close"
                          data-mdb-dismiss="modal"
                          aria-label="Close"
                          style=""
                        ></button>
                      </div>
                      <div class="modal-body">
                        <div class="col">
                          <img
                            src="./img/butter-chicken.png"
                            class="card-img-top mb-3"
                            alt="..."
                            style="border-radius: .5rem;"
                          />
                        <div class="text-left">
                        <p class="modal-title text-dark text-left">
                          Butter Chicken cooked with traditional indian spices served with tandoori naan.
                        </p>
                        </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-lg btn-black" style="text-transform:initial; width:100%; font-size:1.1rem;">Schedule 1 item</button>
                      </div>
                    </div>
                  </div>
                </div>

                  </div>
                </div>
              </div>
            </div>

            
            <div class="col mb-3">
              <div class="card h-100 shadow-lg" style="border-radius: 1rem; cursor:pointer;">
                <img
                  src="./img/butter-chicken.png"
                  class="card-img-top"
                  alt="..."
                  style="border-radius: 1rem 1rem 0rem 0rem;"
                />
                <div class="card-body hover-shadow" style="border-radius: 0rem 0rem 1rem 1rem;">
                  <h5 class="card-title text-black" style="font-weight: bolder;" >Butter Chicken Naan</h5>
                  <p class="card-title text-dark">by <span style="font-weight: bold;">Khana Khazana</span></a></p>
                  <p class="card-text text-dark">
                    Butter Chicken cooked with traditional indian spices served with tandoori naan.
                  </p>
                  
                  <div class="col text-center">

                  <button type="button" 
                  class="btn btn-lg btn-black btn-rounded"   
                  data-mdb-toggle="modal"
                  data-mdb-target="#exampleModal"
                  style="text-transform:initial; width:100%; font-size:1.1rem;">Schedule</button>

                  <div
                    class="modal fade"
                    id="exampleModal"
                    tabindex="-1"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true"
                  >

                  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen-sm-down">
                    <div class="modal-content text-black">
                    <div class="text-center">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Butter Chicken and Naan</h5>
                      </div>
                        <button
                          type="button"
                          class="btn-close"
                          data-mdb-dismiss="modal"
                          aria-label="Close"
                          style=""
                        ></button>
                      </div>
                      <div class="modal-body">
                        <div class="col">
                          <img
                            src="./img/butter-chicken.png"
                            class="card-img-top mb-3"
                            alt="..."
                            style="border-radius: .5rem;"
                          />
                        <div class="text-left">
                        <p class="modal-title text-dark text-left">
                          Butter Chicken cooked with traditional indian spices served with tandoori naan.
                        </p>
                        </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-lg btn-black" style="text-transform:initial; width:100%; font-size:1.1rem;">Schedule 1 item</button>
                      </div>
                    </div>
                  </div>
                </div>

                  </div>
                </div>
              </div>
            </div>

            
            <div class="col mb-3">
              <div class="card h-100 shadow-lg" style="border-radius: 1rem; cursor:pointer;">
                <img
                  src="./img/butter-chicken.png"
                  class="card-img-top"
                  alt="..."
                  style="border-radius: 1rem 1rem 0rem 0rem;"
                />
                <div class="card-body hover-shadow" style="border-radius: 0rem 0rem 1rem 1rem;">
                  <h5 class="card-title text-black" style="font-weight: bolder;" >Butter Chicken Naan</h5>
                  <p class="card-title text-dark">by <span style="font-weight: bold;">Khana Khazana</span></a></p>
                  <p class="card-text text-dark">
                    Butter Chicken cooked with traditional indian spices served with tandoori naan.
                  </p>
                  
                  <div class="col text-center">

                  <button type="button" 
                  class="btn btn-lg btn-black btn-rounded"   
                  data-mdb-toggle="modal"
                  data-mdb-target="#exampleModal"
                  style="text-transform:initial; width:100%; font-size:1.1rem;">Schedule</button>

                  <div
                    class="modal fade"
                    id="exampleModal"
                    tabindex="-1"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true"
                  >

                  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen-sm-down">
                    <div class="modal-content text-black">
                    <div class="text-center">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Butter Chicken and Naan</h5>
                      </div>
                        <button
                          type="button"
                          class="btn-close"
                          data-mdb-dismiss="modal"
                          aria-label="Close"
                          style=""
                        ></button>
                      </div>
                      <div class="modal-body">
                        <div class="col">
                          <img
                            src="./img/butter-chicken.png"
                            class="card-img-top mb-3"
                            alt="..."
                            style="border-radius: .5rem;"
                          />
                        <div class="text-left">
                        <p class="modal-title text-dark text-left">
                          Butter Chicken cooked with traditional indian spices served with tandoori naan.
                        </p>
                        </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-lg btn-black" style="text-transform:initial; width:100%; font-size:1.1rem;">Schedule 1 item</button>
                      </div>
                    </div>
                  </div>
                </div>

                  </div>
                </div>
              </div>
            </div>

            
            <div class="col mb-3">
              <div class="card h-100 shadow-lg" style="border-radius: 1rem; cursor:pointer;">
                <img
                  src="./img/butter-chicken.png"
                  class="card-img-top"
                  alt="..."
                  style="border-radius: 1rem 1rem 0rem 0rem;"
                />
                <div class="card-body hover-shadow" style="border-radius: 0rem 0rem 1rem 1rem;">
                  <h5 class="card-title text-black" style="font-weight: bolder;" >Butter Chicken Naan</h5>
                  <p class="card-title text-dark">by <span style="font-weight: bold;">Khana Khazana</span></a></p>
                  <p class="card-text text-dark">
                    Butter Chicken cooked with traditional indian spices served with tandoori naan.
                  </p>
                  
                  <div class="col text-center">

                  <button type="button" 
                  class="btn btn-lg btn-black btn-rounded"   
                  data-mdb-toggle="modal"
                  data-mdb-target="#exampleModal"
                  style="text-transform:initial; width:100%; font-size:1.1rem;">Schedule</button>

                  <div
                    class="modal fade"
                    id="exampleModal"
                    tabindex="-1"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true"
                  >

                  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen-sm-down">
                    <div class="modal-content text-black">
                    <div class="text-center">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Butter Chicken and Naan</h5>
                      </div>
                        <button
                          type="button"
                          class="btn-close"
                          data-mdb-dismiss="modal"
                          aria-label="Close"
                          style=""
                        ></button>
                      </div>
                      <div class="modal-body">
                        <div class="col">
                          <img
                            src="./img/butter-chicken.png"
                            class="card-img-top mb-3"
                            alt="..."
                            style="border-radius: .5rem;"
                          />
                        <div class="text-left">
                        <p class="modal-title text-dark text-left">
                          Butter Chicken cooked with traditional indian spices served with tandoori naan.
                        </p>
                        </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-lg btn-black" style="text-transform:initial; width:100%; font-size:1.1rem;">Schedule 1 item</button>
                      </div>
                    </div>
                  </div>
                </div>

                  </div>
                </div>
              </div>
            </div>


            

  </div>
</div>








