<?php

  include "includes/header.php";

  include "backend/external_api_calls/googleLoginApi/config.php";

  $login_button = '';

  

  //--- Use a function to retrieve this info ---//
  include "./backend/external_api_calls/googleLoginApi/config.php";
  include "./backend/external_api_calls/facebookLoginApi/config.php";

  $login_button = '';

  

  //-- Getting the login URLs for Facebook and Google --//
  if(!isset($_SESSION['access_token']))
  {
    $login_url = $google_client->createAuthUrl();
    
  }
  if(!isset($_GET['code'])){
    $facebook_output = '';
    $facebook_helper = $facebook->getRedirectLoginHelper();

  
    $facebook_permissions = ['email'];

    $facebook_login_url = $facebook_helper->getLoginUrl(
      'http://localhost:8888/mealful-web-app/backend/loginFacebook.php', 
      $facebook_permissions
    );
  }

  //----------//

?>

  
    
    <div class="container-fluid">
       
        <div class="row d-flex justify-content-center">
    
        <div class="card mb-5 shadow-lg">
        <div class="card-body">
        <h2 class="card-title text-center">Sign up</h2>
        <form method="post" action="backend/register_user.php" class="row g-2">

            <!-- First Name -->
            <div class="form-floating col-md-6 mb-3">
              <input name="first_name"  class="form-control" id="floatingInput" placeholder="Name" required style="border-radius: .5em;">
              <label for="floatingInput">First Name</label>
            </div>

            <!-- LastName input -->
            <div class="form-floating col-md-6 mb-3">
              <input name="last_name" type="name" class="form-control " id="floatingInput" placeholder="Name" required style="border-radius: .5em;">
              <label for="floatingInput">Last Name</label>
            </div>
                  
            <!-- Email input -->
            <div class="form-floating mb-3">
              <input name="email" type="email" class="form-control" id="floatingInput" placeholder="Email" required style="border-radius: .5em;">
              <label for="floatingInput">Email</label>
            </div>

          
            <!-- Password input -->
            <div class="form-floating mb-3">
              <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required style="border-radius: .5em;">
              <label for="floatingPassword">Password</label>
            </div>
          
          
            </div>
          
            <!-- Submit button -->
            <div class="col d-flex mb-2 justify-content-center">
            <button type="submit" id="login-button" name="registerUser" class="btn btn-primary mx-1">Continue</button>
            </div>
          
            <!-- Register buttons -->
            <div class="text-center">
            <fieldset class="title">
                <legend style="font-size:1.25rem;">or</legend>
            </fieldset>

              <div class="row mb-3">
              <div class="col d-flex justify-content-center">
              <a href=<?php echo $facebook_login_url; ?> id="login-facebook" class="btn text-white mx-1" style="background-color:#1976D2">
                <span>
                    <?xml version="1.0" encoding="iso-8859-1"?>
                    <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	                viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;padding-bottom: 0.3em;" height="37" width="37" xml:space="preserve">
                    <path style="fill:#1976D2;" d="M448,0H64C28.704,0,0,28.704,0,64v384c0,35.296,28.704,64,64,64h384c35.296,0,64-28.704,64-64V64
	                C512,28.704,483.296,0,448,0z"/>
                    <path style="fill:#FAFAFA;" d="M432,256h-80v-64c0-17.664,14.336-16,32-16h32V96h-64l0,0c-53.024,0-96,42.976-96,96v64h-64v80h64
	                v176h96V336h48L432,256z"/><g></g></svg>
                </span>
                Sign up with Facebook
              </a>
              </div>
              </div>

              <div class="row mb">
                <div class="col d-flex justify-content-center">
                <a href=<?php echo $login_url; ?> id="login-google" class="btn btn-transparent mx-1 border border-dark" style="text-decoration:none;">
                    <span>
                    <?xml version="1.0" encoding="iso-8859-1"?>
                    <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;padding-bottom: 0.1em;" height="30" width="30" xml:space="preserve">
                    <path style="fill:#FBBB00;" d="M113.47,309.408L95.648,375.94l-65.139,1.378C11.042,341.211,0,299.9,0,256
                        c0-42.451,10.324-82.483,28.624-117.732h0.014l57.992,10.632l25.404,57.644c-5.317,15.501-8.215,32.141-8.215,49.456
                        C103.821,274.792,107.225,292.797,113.47,309.408z"/>
                    <path style="fill:#518EF8;" d="M507.527,208.176C510.467,223.662,512,239.655,512,256c0,18.328-1.927,36.206-5.598,53.451
                        c-12.462,58.683-45.025,109.925-90.134,146.187l-0.014-0.014l-73.044-3.727l-10.338-64.535
                        c29.932-17.554,53.324-45.025,65.646-77.911h-136.89V208.176h138.887L507.527,208.176L507.527,208.176z"/>
                    <path style="fill:#28B446;" d="M416.253,455.624l0.014,0.014C372.396,490.901,316.666,512,256,512
                        c-97.491,0-182.252-54.491-225.491-134.681l82.961-67.91c21.619,57.698,77.278,98.771,142.53,98.771
                        c28.047,0,54.323-7.582,76.87-20.818L416.253,455.624z"/>
                    <path style="fill:#F14336;" d="M419.404,58.936l-82.933,67.896c-23.335-14.586-50.919-23.012-80.471-23.012
                        c-66.729,0-123.429,42.957-143.965,102.724l-83.397-68.276h-0.014C71.23,56.123,157.06,0,256,0
                        C318.115,0,375.068,22.126,419.404,58.936z"/><g></g></svg>
                   </span>              
                  Sign up with Google
                </a>
                </div>
                </div>

              <p class ="text-black" id="register-link">Already have an account with us?
              <a href="loginform.php" style="text-decoration:none">Log in</a></p>

            </div>
            
            <input type="hidden" name="loginToken" value="<?php echo $_SESSION['secret_token']; ?>">
            
          </form>


          <?php
            if(isset($_GET['user_exist'])){
              echo "<p style='color:red'>The email already exists, please login from <a href='./loginform.php'>Login</a></p>";
            }
            //-----MAKE AN ALERT OF THIS ----//;
            
          ?>
        </div>
        </div>
     
        </div>
    </div>

<?php
  include "includes/footer_nl.php";
?>
