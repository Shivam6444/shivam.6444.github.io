<?php
  include "includes/header.php";
  include "backend/payment_information.php";
  if(!isset($_SESSION['available_tokens'])){
    die();
  }


  $is_first_time_user = is_first_time_user($_SESSION['user_id']);



?>

    <div class="container">
      <div class="row d-flex justify-content-center">
      <?php
        if($is_first_time_user == true){
          include "./views/payment_card.php";
          echo '<h3 class="text-dark"><span>or</span></h3>';
          include "./views/single_meal_card.php";
        }
        else{
          include "./views/single_meal_card.php";
          echo '<h3 class="text-dark"><span>or</span></h3>';
          include "./views/payment_card.php";
          
        }
      ?>
      
        
      </div>

        
        <div class="container">
          <div class="row d-flex justify-content-center">
          <h2 class="text-dark text-center mb-4" style="font-family:'Eina Bold',sans-serif;margin-top:2rem;font-weight:bold;color:rgb(66,66,66);">
            Common questions</h2>
          <div class="accordion accordion-flush w-75" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingOne">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-mdb-toggle="collapse"
                  data-mdb-target="#flush-collapseOne"
                  aria-expanded="false"
                  aria-controls="flush-collapseOne"
                  style="font-family:'Eina Regular',sans-serif;color:rgb(66,66,66);font-size:1.5rem;font-weight:bold;"
                >
                How does the subscription work?
                </button>
              </h2>
              <div
                id="flush-collapseOne"
                class="accordion-collapse collapse"
                aria-labelledby="flush-headingOne"
                data-mdb-parent="#accordionFlushExample"
              >
                <div class="accordion-body"
                style="font-family:'Eina Regular',sans-serif;color:rgb(66,66,66);font-size:1.1rem;"
                >
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                  richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                  brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                  sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch
                  et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                  sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat
                  craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                  heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingTwo">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-mdb-toggle="collapse"
                  data-mdb-target="#flush-collapseTwo"
                  aria-expanded="false"
                  aria-controls="flush-collapseTwo"
                  style="font-family:'Eina Regular',sans-serif;color:rgb(66,66,66);font-size:1.5rem;font-weight:bold;"
                >
                  Accordion Item #2
                </button>
              </h2>
              <div
                id="flush-collapseTwo"
                class="accordion-collapse collapse"
                aria-labelledby="flush-headingTwo"
                data-mdb-parent="#accordionFlushExample"
              >
                <div class="accordion-body" 
                style="font-family:'Eina Regular',sans-serif;color:rgb(66,66,66);font-size:1.1rem;"
                >
                  
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                  richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                  brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                  sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch
                  et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                  sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat
                  craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                  heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingThree">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-mdb-toggle="collapse"
                  data-mdb-target="#flush-collapseThree"
                  aria-expanded="false"
                  aria-controls="flush-collapseThree"
                  style="font-family:'Eina Bold',sans-serif;color:rgb(66,66,66);font-size:1.5rem;"
                >
                  Accordion Item #3
                </button>
              </h2>
              <div
                id="flush-collapseThree"
                class="accordion-collapse collapse"
                aria-labelledby="flush-headingThree"
                data-mdb-parent="#accordionFlushExample"
              >
                <div class="accordion-body"
                style="font-family:'Eina Regular',sans-serif;color:rgb(66,66,66);font-size:1.1rem;">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                  richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                  brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                  sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch
                  et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                  sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat
                  craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                  heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
          </div>
    
          <!-- <div class = "row">
          <div class="col mb-5 text-dark text-center" style="font-size:2rem;margin-top:0rem;">
          <h2 class="text-dark text-center mb-3" style="font-family:'Eina Bold',sans-serif;margin-top:2rem;font-weight:bold;">
            Our hubs around Halifax <hr class="w-75" style="margin: 0 auto;margin-top:1rem;"></hr></h2>
            <div id="map-container-google-11" class="z-depth-3-full map-container-5" style="height: 200px">
            <iframe src="https://maps.google.com/maps?q=Barcelona&t=&z=13&ie=UTF8&iwloc=&output=embed"
              frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            </div>
              
            <input type="hidden" name="loginToken" value="<?php echo $_SESSION['secret_token']; ?>">
              
            </form>
          </div> -->
          </div>
      
        </div>
      </div>

    
    <script src="js/mealplan-calculator.js" type="text/javascript"></script>
</body>
<?php
  include "includes/footer_nl.php";
?>
