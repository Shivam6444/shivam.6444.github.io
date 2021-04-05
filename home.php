<?php
  include "includes/header.php";



  //-- Getting values for calendar, and Mapping the exact date to days
  $calendar_data = array();
  for($i = 0; $i < 7; $i++){
    $day_alpha = (string)date("l", time()+(86400 * $i)); 
    $calendar_data[$day_alpha]  = (string)date("d", time()+(86400 * $i)); 
    $mapped_date[$day_alpha] = (string)date("Ymd", time() + (86400 * $i));
  }
  

  //Selecting the active class
  $all_possible_days = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
  $all_possible_slots = array("lunch","dinner");
  if(!isset($_GET['day'])){
    $active_day = (string)date("l", time()+(86400 * 1));
    $current_date = $mapped_date[$active_day]; 
  }
  else{
    $active_day = $_GET['day'];
    $current_date = $mapped_date[$active_day];
    /* Just a check -- if someone is messing with the get query */
    if(!(in_array($active_day, $all_possible_days))){
      $active_day = (string)date("l", time()+(86400 * 1)); 
      $current_date = $mapped_date[$active_day];
    }
  }

  if(!isset($_GET['slot'])){
    $active_slot = 'lunch';
  }
  else{
    $active_slot = $_GET['slot'];
    /* Just a check if someone is messing with the get query */
    if(!(in_array($active_slot, $all_possible_slots))){
      $active_slot = 'lunch';
    }
  }
  //--- Active classes selected-----//




?>

<body>





<div class="container text-center">
  <div class="btn-toolbar mb-1" role="toolbar" aria-label="Toolbar with button groups" style="font-family:'Eina Regular',sans-serif;">
<?php 
  foreach($calendar_data as $day => $date_num){
    //--- Modify styles here for active and normal anchors ---//
    if($day == $active_day){
      $styles= "font-size:1.1rem;text-transform:initial;font-weight:bold;";
      $classes= "btn btn-white text-black active";
    }
    else{
      $styles="font-size:1.1rem;text-transform:initial;";
      $classes="btn btn-white text-dark";
    }
?>
  <div class="btn-group me-2 shadow-0 text-dark text-center" role="group" aria-label="First group" style="width:13.669%;">
    <a href="<?php echo './home.php?day='.$day.'&slot='.$active_slot; ?>" type="button" id="calendar-btn" class="<?php echo $classes; ?>" style="<?php echo $styles; ?>">
      <?php echo substr($day, 0,3); ?>
      <br><strong><h4 style="margin-top:.5rem;font-weight:bold;"><?php echo $date_num; ?></h4></strong>
    </a>
  </div>
<?php
  }
?>
</div>
</div>



<?php
  // The bottom HTML code is commented, make sure the classes are fine

?>

<div class="container">
  <hr class ="mb-4" id="menu-divider"></hr>
</div>

<div class="container">

<div class="btn-toolbar mb-0 mt-3 float-end" role="group" aria-label="Basic radio toggle button group" style="font-family:'Eina Regular',sans-serif;border-radius:.5rem;">

<div class="btn-group shadow-0 text-center" role="group" aria-label="First group" style="width:auto;">
    <a href="<?php echo './home.php?day='.$active_day.'&slot=lunch'; ?>" id="calendar-btn" class="btn btn-white text-black <?php if($active_slot == 'lunch'){ echo 'active'; }?>"  style="font-family:'Eina Regular',sans-serif;font-size:1rem;text-transform:initial;">Lunch</a>
  </div>
  <div class="btn-group shadow-0 text-center" role="group" aria-label="First group" style="width:auto;">
    <a href="<?php echo './home.php?day='.$active_day.'&slot=dinner'; ?>" id="calendar-btn" class="btn btn-white text-black <?php if($active_slot == 'dinner'){ echo 'active'; }?>" style="font-family:'Eina Regular',sans-serif; font-size:1rem;text-transform:initial;">Dinner</a>
  </div>
  </div>



  <h2 class = "text-left text-dark mb-0" style="font-family:'Eina Regular',sans-serif; letter-spacing: 0rem;font-weight:bolder;">Lunch Menu</h2>
  <div class="alert dialog alert-warning" role="alert" style="border-radius: 1.1rem;margin-bottom:2rem;">
    <p class="card-text text-dark">
      <span><?xml version="1.0" encoding="iso-8859-1"?>
        <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;padding-bottom: .1rem;" height="22" width="22" xml:space="preserve">
        <g>
          <g>
            <path d="M256,0C114.497,0,0,114.507,0,256c0,141.503,114.507,256,256,256c141.503,0,256-114.507,256-256
              C512,114.497,397.492,0,256,0z M256,472c-119.393,0-216-96.615-216-216c0-119.393,96.615-216,216-216
              c119.393,0,216,96.615,216,216C472,375.393,375.384,472,256,472z"/>
          </g>
        </g>
        <g>
          <g>
            <path d="M256,214.33c-11.046,0-20,8.954-20,20v128.793c0,11.046,8.954,20,20,20s20-8.955,20-20.001V234.33
              C276,223.284,267.046,214.33,256,214.33z"/>
          </g>
        </g>
        <g>
          <g>
            <circle cx="256" cy="162.84" r="27"/>
          </g>

        </svg>
        </span>     
        <strong>&nbspNote:</strong>  Lunch is to be picked up from 12:00pm to 4:00pm and dinner is to be picked up between 5:00pm to 9:00pm from your designated hub.
    </p>
  </div>

  <?php  if(isset($_GET['mealscheduled']) || isset($_GET['orderedSuccessfully'])){ ?>
    <div class="alert dialog alert-info" role="alert" style="border-radius: 1.1rem;margin-bottom:2rem;">
      <p class="card-text text-dark">
        <span><?xml version="1.0" encoding="iso-8859-1"?>
          <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
          <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
              viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;padding-bottom: .1rem;" height="22" width="22" xml:space="preserve">
          <g>
            <g>
              <path d="M256,0C114.497,0,0,114.507,0,256c0,141.503,114.507,256,256,256c141.503,0,256-114.507,256-256
                C512,114.497,397.492,0,256,0z M256,472c-119.393,0-216-96.615-216-216c0-119.393,96.615-216,216-216
                c119.393,0,216,96.615,216,216C472,375.393,375.384,472,256,472z"/>
            </g>
          </g>
          <g>
            <g>
              <path d="M256,214.33c-11.046,0-20,8.954-20,20v128.793c0,11.046,8.954,20,20,20s20-8.955,20-20.001V234.33
                C276,223.284,267.046,214.33,256,214.33z"/>
            </g>
          </g>
          <g>
            <g>
              <circle cx="256" cy="162.84" r="27"/>
            </g>

          </svg>
          </span>     
          <strong>&nbspNote:</strong> Your meal is scheduled. <a href="./scheduled.php">View scheduled meals</a>
      </p>
    </div>
  <?php } ?>
      <?php
        include "./views/home_card_component.php";
      ?>
    </div>
  </div>


  </body>
<?php
  include "includes/footer.php";
?>