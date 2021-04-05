
<div class="container">

  <div class="row row-cols-1 row-cols-md-3 g-4 mb-5" style="font-family: 'Eina Regular', sans-serif;">
           <?php
              if($active_slot == "lunch"){
                $HUBS = get_hubs(true, false); // Lunch is true
              }
              else if($active_slot == "dinner"){
                $HUBS = get_hubs(false, true); // Dinner is true
              }
              
              // echo $HUBS;
              // print_r($HUBS);
              if(sizeof($HUBS) == 0){
                die();
                 // Raise a warning on the backend
              }
              
              $chefs = get_chefs();
              if($chefs == NULL || $chefs == false){
                die("INTERNAL SERVER ERROR PLEASE TRY AGAIN");
              }
              $items = get_items($current_date, $active_slot);
          ?> 
          <?php
              foreach($items as $item){
          ?>
                <div class="col mb-3">
                  <div class="card h-100 shadow-lg" style="border-radius: 1rem; cursor:pointer;">
                    <img
                      src="<?php echo $item['item_img'];  ?>"
                      class="card-img-top"
                      alt="..."
                      style="border-radius: 1rem 1rem 0rem 0rem;"
                    />
                    <div class="card-body hover-shadow" style="border-radius: 0rem 0rem 1rem 1rem;">
                      <h5 class="card-title text-dark" style="font-weight: bolder;" ><?php  echo $item['item_heading']; ?></h5>
                      <p class="card-title text-dark">by <span style="font-weight: bold;"><?php echo $chefs[$item['chef_id']]; ?></span></a></p>
                      <p class="card-text text-dark">
                        <?php 
                            echo $item['item_desc'];
                        ?>
                      </p>
                      
                      <div class="col text-center">

                      <button type="button" 
                      class="btn btn-lg btn-black btn-rounded"   
                      data-mdb-toggle="modal"
                      data-mdb-target="#exampleModal"
                      style="text-transform:initial; width:100%; font-size:1.1rem;font-weight:bold;letter-spacing:.05rem;">Schedule</button>
                      <form method="post" action="./backend/schedule_meal.php">
                        <div
                          class="modal fade"
                          id="exampleModal"
                          tabindex="-1"
                          aria-labelledby="exampleModalLabel"
                          aria-hidden="true"
                      
                        >
                          <input type="hidden" value="" />
                          <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
                            <div class="modal-content text-dark">

                              <div class="modal-header">
                                <h4 class="modal-title" id="exampleModalLabel" style="font-weight:bold;"><?php echo ucfirst($active_slot); ?></h4>
                              

                                <button
                                  type="button"
                                  class="btn-close"
                                  data-mdb-dismiss="modal"
                                  aria-label="Close"
                                  
                                >
                                </button> 

                              </div>
                              <div class="modal-body">
                                <div class="col">
                                  <img
                                    src="<?php echo $item['item_img']; ?>"
                                    class="card-img-top"
                                    alt="..."
                                    style="border-radius: .5rem;height:100%;width:100%"
                                  />

                                <div class="justify-content-left">
                                <h2 class="modal-title text-start text-dark" style="font-weight:bold;margin-bottom:-1rem;">
                                  <?php echo $item['item_heading'] ?>
                                </h2>

                                <p class="modal-title text-start text-dark">
                                  <?php echo $item['item_desc']; ?>
                                </p>

                                
                                <hr class="mb-3" style="background-color:black;"></hr>

                                <p class="text-dark text-left mb-2" style="font-family:'Eina Regular',sans-serif;margin-top:1rem;font-weight:bolder;font-size:1.1rem;">
                                  
                                  <?php 

                                        if($active_slot == 'lunch'){ echo "Pick up your meal between 1pm to 4pm from:"; }
                                        else if($active_slot == 'dinner') { echo "Pick up your meal between 5pm to 8pm from:"; }
                                  ?>

                                  </p>
                                
                                  <div class="row" style="height:100%;">
                                    <div class="col-md-12">
                                      <div class="form-group" style="height:100%;">

                                        <select 
                                            class="selectpicker mb-3 show-menu-arrow show-tick shadow-0 text-lowercase" 
                                            data-width="100%" 
                                            data-style="text-capitalize"
                                            data-live-search="true" 
                                            style="font-size:1.1rem;text-transform:none!important;"
                                            name="hub_id"
                                          >
                                          <?php
                                              foreach($HUBS as $hub){
                                                echo $hub;
                                          ?>
                                              <option 
                                                  value="<?php echo $hub['hub_id']; ?>"
                                                  style="font-weight:bold;font-size:1rem;text-transform:none;" 
                                                  data-tokens="<?php echo $hub['locationTags']; ?>"
                                                  >
                                                  <?php 
                                                    echo $hub['hub_name'].", ". $hub['location'];
                                                  ?>
                                                  
                                              </option>
                                          <?php
                                              }

                                          ?>
                                        </select>

                                        <hr class="mb-3" style="background-color:black;"></hr>

                                        <p class="text-dark text-center mb-2" style="font-family:'Eina Regular',sans-serif;margin-top:1rem;font-size:1.1rem;">You have <strong style="color:#ffb22f;">17 meals</strong> remaining</p>

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
                                            class="btn value-control w-auto" 
                                            style="background-color:#000000" 
                                            data-action="minus" data-min="0"  
                                            data-target="font-size"
                                            onclick="incrementQty()"
                                            style="border-radius:.8rem!important;"
                                        >
                                      <span><img src="./img/minus.svg" alt="a vector graphic" />
                                      </span></button></span>
                                      <input 
                                        name="qty"
                                        type="text" 
                                        value="1" 
                                        class="form-control text-center" 
                                        id="font-size"
                                        style="margin-left:.2rem;margin-right:.2rem;"
                                      />
                                      <span class="input-group-btn">
                                        <button 
                                          class="btn value-control w-auto"  
                                          style="background-color:#000000" 
                                          data-action="plus" data-max="9" 
                                          data-target="font-size"
                                          style="border-radius:.8rem!important;">
                                          <span>
                                          <img src="./img/plus.svg" alt="a vector graphic" />
                                          </span>
                                        </button>
                                      </span>
                                    </div>
                                  </div>
                                  <div class="col-md-7">
                                    <input name="item_id" value="<?php echo $item['item_id']; ?>" hidden>
                                  <button
                                  
                                    type="submit" 
                                    class="btn btn-lg btn-black text-light" 
                                    style="font-family:'Eina Regular',sans-serif;text-transform:initial; width:100%; font-size:1.1rem;letter-spacing:.05rem;font-weight:bold;"
                                    name="schedule_item"
                                    >
                                    Schedule 1 item
                                  </button>
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


            <?php
            }
            ?>
  </div>
</div>








