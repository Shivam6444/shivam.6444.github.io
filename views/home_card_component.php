
<div class="container">

  <div class="row row-cols-1 row-cols-md-3 g-4 mb-5" style="font-family: 'Eina Regular', sans-serif;">
           <?php
            // $data = get_items($current_date, $active_slot);
            
            // if($data == false){
            //   echo  "No items for this slot & date";
            // }
            // else{
            //   print_r($data);
            // }

            $HUBS = 
            [
              "1" => "1333 South Park St.",
              "2" => "Nova Groceries",
              "3" => "Jerry's Kwikway, 2122 Inglis Street B3J 0C5",
              "4" => "1333 South Park St.",
              "5" => "1333 South Park St.",
              "6" => "1333 South Park St."
            ];

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
                  style="text-transform:initial; width:100%; font-size:1.1rem;font-weight:bold;letter-spacing:.05rem;">Schedule</button>

                  <div
                    class="modal fade"
                    id="exampleModal"
                    tabindex="-1"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true"
                
                  >

                  <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
                    <div class="modal-content text-black">

                      <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel" style="font-weight:bold;">Lunch Menu</h4>
                      

                        <button
                          type="button"
                          class="btn-close"
                          data-mdb-dismiss="modal"
                          aria-label="Close"
                          style=""
                        >
                        </button> 

                      </div>
                      <div class="modal-body">
                        <div class="col">
                          <img
                            src="./img/butter-chicken.png"
                            class="card-img-top mb-0"
                            alt="..."
                            style="border-radius: .5rem;"
                          />

                        <div class="justify-content-left">
                        <h2 class="modal-title text-start text-black" style="font-weight:bold;">
                          Butter Chicken Naan
                        </h2>

                        <p class="modal-title text-start text-black">
                          Butter Chicken cooked with traditional indian spices served with tandoori naan.
                        </p>

                        
                        <hr class="mb-3" style="background-color:black;"></hr>

                        <p class="text-black text-center mb-2" style="font-family:'Eina Regular',sans-serif;margin-top:1rem;font-weight:bolder;font-size:1.1rem;">
                          Pick up your meal between 1pm to 4pm from:</p>
                          <form>
                              <div class="row" style="height:auto;">
                                <div class="col-md-12">
                                  <div class="form-group" style="height:auto;">

                                    <select class="selectpicker show-menu-arrow show-tick shadow-lg" data-width="auto" data-live-search="true" style="font-size:1.1rem;text-transform:unset!important;background-color:gray;">
                                      <option style="font-weight:bold;font-size:1rem;text-transform:none;" data-tokens="ketchup mustard">
                                        Nova Groceries, 1333 South Park St
                                      </option>
                                      <option style="font-weight:bold;font-size:1rem;text-transform:none;" data-tokens="ketchup mustard">
                                        Big's General Store, 1243 University Ave.
                                      </option>
                                      <option style="font-weight:bold;font-size:1rem;text-transform:none;" data-tokens="ketchup mustard">
                                        Big's General Store, 1243 University Ave.
                                      </option>
                                      <option style="font-weight:bold;font-size:1rem;text-transform:none;" data-tokens="ketchup mustard">
                                        Big's General Store, 1243 University Ave.
                                      </option>
                                      <option style="font-weight:bold;font-size:1rem;text-transform:none;" data-tokens="ketchup">
                                        Big's General Store, 1243 University Ave.
                                      </option>
                                    </select>

                                  </div>
                                </div>
                              </div>
                        

                        </div>
                        </div>
                      </div>

                      <div class="modal-footer">
                      <div class="row g-3">

                        <div class="col-md-5 p-2">
                        <div class="input-group">
                          <span class="input-group-btn">
                            <button 
                                class="btn btn-floating value-control" 
                                style="background-color:#DBDBDB" 
                                data-action="minus" data-min="0"  
                                data-target="font-size"
                                onclick="incrementQty()"
                            >
                          <span class="glyphicon glyphicon-minus"></span>-</button></span>
                          <input type="text" value="1" class="form-control text-center" id="font-size"/>
                          <span class="input-group-btn"><button class="btn btn-floating value-control"  style="background-color:#DBDBDB" data-action="plus" data-max="9" data-target="font-size"><span class="glyphicon glyphicon-plus"></span>+</button></span>
                        </div>
                        </div>
                        <div class="col-md-7">
                        <a href="scheduled.php" type="button" class="btn btn-lg btn-black text-light" style="font-family:'Eina Bold',sans-serif;text-transform:initial; width:100%; font-size:1.1rem;letter-spacing:.1rem;">Schedule 1 item</a>
                        </div>
                      </div>
                      </div>
                    
                    </div>
                  </div>
                </div>
                </form>
            </div>


                </div>
              </div>
            </div>
            
            <!-- <div class="col mb-3">
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


             -->

  </div>
</div>








