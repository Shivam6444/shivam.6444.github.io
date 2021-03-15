<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Mealful</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@500;600&display=swap" rel="stylesheet">
    <!-- MDB -->

    <link rel="stylesheet" href="css/mdb.min.css" />
    <link rel="stylesheet" href="css/login-form.css" />
  </head>
  <body>
 
    <header>
        <!--Navbar and Logo-->
        <nav class="navbar mb-5 navbar-expand-lg navbar-light bg-light fixed-top">
          <div class="container">
            <a class="navbar-brand" href="#" id="nav-logo">
              <img
                src="img/MEALFUL.svg"
                height="50"
                alt="" 
              />
            </a>
            <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <i class="fas fa-bars"></i>
          </button>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <!--Avatar-->
              <ul class="navbar-nav d-flex flex-row ms-auto mb-2 mb-lg-0" id="avatar-menu">
                <li class="nav-item" id="login-link">
                  <a class="nav-link text-black" href="./loginform.php" id="login-link-edit" style="font-family: 'DM Sans',sans-serif; font-weight:bold; font-size: 1.1rem; margin-right: .5rem;">Log in
                  </a>
                </li>
                <li>
                  <button class="btn btn-black" href="#!" style="font-family: 'DM Sans';text-transform: initial;font-size:1rem;border-radius:.5rem;font-weight: bold;color: white;">Sign up</button>
                </li>
              </ul>
            </nav>
          </div>
        </div>
    </header> 

    <div class="container">
        <div class="row d-flex justify-content-center">
        <div class="card mb-5 shadow-lg" style="margin-top:7rem;width:75%;">

        <h1 class="text-black text-center mb-3" style="font-family:'DM Sans',sans-serif;margin-top:2rem;font-weight:bold;">
        <span>
                  <?xml version="1.0" encoding="iso-8859-1"?>
          <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
          <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" height="42" width="42" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 384 384" style="enable-background:new 0 0 384 384;" xml:space="preserve">
          <g>
            <g>
              <path d="M341.333,0H42.667C19.093,0,0,19.093,0,42.667v298.667C0,364.907,19.093,384,42.667,384h298.667
                C364.907,384,384,364.907,384,341.333V42.667C384,19.093,364.907,0,341.333,0z M234.667,298.667H192V128h-42.667V85.333h85.333
                V298.667z"/>
            </g>
          </g>
          </svg>
        </span>

        Choose your meal plan</h1>
        <div class="card-body">
        <div class="row">

        <div class="row text-black text-center justify-content-center mb-5" style="font-size:2rem;margin-top:0rem;margin:0 auto;">
        I want
          <select class="form-select text-center w-auto form-select-lg mb-1 border-0" style="font-size:2rem;margin-top:-.5rem;color:#ffb22f;font-weight:bold;" aria-label=".form-select-lg example">
            <option class="text-center" selected>5 meals</option>
                <option value="1">7 meals</option>
                  <option value="2">10 meals</option>
                    <option value="3">14 meals</option>
                      </select> per week for
                      <select class="form-select text-center w-auto form-select-lg mb-2 border-0" style="font-size:2rem;margin-top:-.5rem;color:#ffb22f;font-weight:bold;" aria-label=".form-select-lg example">
                    <option class="text-center" selected>a week</option>
                <option value="1">2 weeks</option>
            <option value="2">a month</option>
          </select>

        </div>
        <hr>
        </div>
  
        <div class = "row g-2">
          <div class="col-md-6 mb-3 text-black text-center" style="font-size:2rem;margin-top:0rem;">
          <h3 class="text-black mb-4" style="font-family:'DM Sans',sans-serif;margin-top:2rem;font-weight:bold;">
          <span>
                  <?xml version="1.0" encoding="iso-8859-1"?>
          <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
          <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" height="30" width="30" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 384 384" style="enable-background:new 0 0 384 384;" xml:space="preserve">
          <g>
            <g>
              <path d="M341.333,0H42.667C19.093,0,0,19.093,0,42.667v298.667C0,364.907,19.093,384,42.667,384h298.667
                C364.907,384,384,364.907,384,341.333V42.667C384,19.093,364.907,0,341.333,0z M234.667,298.667H192V128h-42.667V85.333h85.333
                V298.667z"/>
            </g>
          </g>
          </svg>

        </span>
          Get 'em for:</h3>
          <p class="text-black mb-0" style="font-family:'DM Sans',sans-serif;font-size:1.5rem;font-weight:bold;"><del>$7.49</del></p>
          <p class="mb-0" style="font-family:'DM Sans',sans-serif;color:#ffb22f;font-size:3rem;font-weight:bold;">$5.99</p>
          <p style="font-family:'DM Sans',sans-serif;font-size:1rem;margin-top:-1rem">per meal</p>
          <button type="submit" id="login-button" name="submitLogin" class="btn btn-primary w-50 mb-5 mx-1 text-white"  style="margin-left: 3rem;text-transform: initial;font-size:1.5rem;border-radius:.5rem;font-weight: bold;">Buy meal plan</button>
            <p class ="text-black" id="register-link" style="font-size:1rem;">Not sure yet?
            <a href="sign_up.php" style="text-decoration:none;color:#ffb22f;font-weight:bold;">Try out a free meal, it is on us.</a>
            </p>
          </div>


          <div class="col-md-6 mb-3 text-black text-center" style="font-size:2rem;margin-top:.5rem;">
          <h3 class="text-black" style="font-family:'DM Sans',sans-serif;margin-top:2rem;font-weight:bold;">

          <span>
          <?xml version="1.0" encoding="iso-8859-1"?>
          <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
          <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" height="30" width="30" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 384 384" style="enable-background:new 0 0 384 384;" xml:space="preserve">
          <g>
            <g>
              <path d="M341.333,0H42.667C19.093,0,0,19.093,0,42.667v298.667C0,364.907,19.093,384,42.667,384h298.667
                C364.907,384,384,364.907,384,341.333V42.667C384,19.093,364.907,0,341.333,0z M234.667,298.667H192V128h-42.667V85.333h85.333
                V298.667z"/>
            </g>
          </g>
          </svg>
        </span>

          Find a hub location</h3>
  
          <div id="map-container-google-11" class="z-depth-3-full map-container-5" style="height: 200px">
          <iframe src="https://maps.google.com/maps?q=Barcelona&t=&z=13&ie=UTF8&iwloc=&output=embed"
            frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
          </div>
        </div>

        <div class = "text-center">

        </div>



  
            <!-- Submit button -->


            
            <input type="hidden" name="loginToken" value="<?php echo $_SESSION['secret_token']; ?>">
            
          </form>
          <?php
            if(isset($_GET['thirdParty'])){
              if($_GET['thirdParty'] == 'fb'){
                $message = "Please login with Facebook.";

              }
              else if($_GET['thirdParty'] == 'Ggl'){
                $message = "Please login with Google.";
              }
            }
          ?>
        </div>
        </div>
     
        </div>
    </div>

<?php
  include "includes/footer_nl.php";
?>
