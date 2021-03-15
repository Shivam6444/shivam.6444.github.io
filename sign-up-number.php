
<?php
  // session_start();
  include "./includes/header.php";

  print_r($_SESSION);

?>

  
    <div class="container-fluid">
       
      <div class="row d-flex justify-content-center">
        <div class="col-md-6 offset-2">   
          <div class="card mb-5 shadow-5">
            <div class="card-body">
              <h2 class="card-title text-center mb-3">We're almost there, you're a few steps away from a world of divine meals.</h2>
              <h6 class="card-title text-center">Enter your mobile number to get started</h6>
              <form method='post' action='./backend/register_user.php'>

                <input class="form-control" name="area_code"  placeholder="Phone number" required style="border-radius: .5em;" value="+1" readonly>
                    <!-- Email input -->
                <div class="form-floating mb-3">
                  <input type="integer" class="form-control" name="phone_number" id="floatingInput" placeholder="Phone number" required style="border-radius: .5em;"
                  <?php
                    
                    if(isset($_SESSION['phone'])){
                      if($_SESSION['phone'] != ""){
                        echo "readonly";
                        echo " value=".substr($_SESSION['phone'], 2);
                      }
                      
                    }
                  ?>
                  >
                  <label for="floatingInput">Mobile Number</label>
                </div>
    
                <!-- Submit button -->
                <div class="col d-flex mb-2 justify-content-center">
                    <?php
                      if(!isset($_SESSION['phone'])){
                        
                    ?>
                    
                  <button type="submit" name="phone_number_submit" id="login-button" class="btn btn-primary mx-1">Next
                  <span>
                  <?xml version="1.0" encoding="UTF-8"?>
                    <svg class="mb-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20pt" height="20pt" viewBox="0 0 900 899.99999" version="1.2">
                    <defs>
                    <clipPath id="clip1">
                      <path d="M 102.378906 210 L 797.628906 210 L 797.628906 690 L 102.378906 690 Z M 102.378906 210 "/>
                    </clipPath>
                    </defs>
                    <g id="surface1">
                    <g clip-path="url(#clip1)" clip-rule="nonzero">
                      <path style=" stroke:none;fill-rule:nonzero;fill:rgb(100%,100%,100%);fill-opacity:1;" d="M 788.160156 427.144531 L 581.265625 220.25 C 568.640625 207.625 548.167969 207.625 535.546875 220.25 C 522.921875 232.875 522.921875 253.339844 535.546875 265.96875 L 687.253906 417.675781 L 134.707031 417.675781 C 116.851562 417.675781 102.378906 432.152344 102.378906 450.003906 C 102.378906 467.851562 116.851562 482.332031 134.707031 482.332031 L 687.253906 482.332031 L 535.550781 634.039062 C 522.925781 646.664062 522.925781 667.132812 535.550781 679.757812 C 541.863281 686.066406 550.136719 689.226562 558.410156 689.226562 C 566.683594 689.226562 574.957031 686.066406 581.269531 679.757812 L 788.160156 472.863281 C 800.785156 460.238281 800.785156 439.769531 788.160156 427.144531 Z M 788.160156 427.144531 "/>
                    </g>
                    </g>
                    </svg>
                    </span>
                  </button>
                  <?php
                    }
                    else{
                      ?>
                      <div class="form-floating mb-3">
                  <input type="integer" class="form-control" name="otp" id="floatingInput" placeholder="OTP" required style="border-radius: .5em;">
                  <label for="floatingInput">OTP</label>
                </div>
                
                <a href="./backend/register_user.php?change_phone_number=true"  role="button" name="change_phone_number"  id="login-button" class="btn btn-primary mx-1">Change Phone number
                <span>
                  <?xml version="1.0" encoding="UTF-8"?>
                    <svg class="mb-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20pt" height="20pt" viewBox="0 0 900 899.99999" version="1.2">
                    <defs>
                    <clipPath id="clip1">
                      <path d="M 102.378906 210 L 797.628906 210 L 797.628906 690 L 102.378906 690 Z M 102.378906 210 "/>
                    </clipPath>
                    </defs>
                    <g id="surface1">
                    <g clip-path="url(#clip1)" clip-rule="nonzero">
                      <path style=" stroke:none;fill-rule:nonzero;fill:rgb(100%,100%,100%);fill-opacity:1;" d="M 788.160156 427.144531 L 581.265625 220.25 C 568.640625 207.625 548.167969 207.625 535.546875 220.25 C 522.921875 232.875 522.921875 253.339844 535.546875 265.96875 L 687.253906 417.675781 L 134.707031 417.675781 C 116.851562 417.675781 102.378906 432.152344 102.378906 450.003906 C 102.378906 467.851562 116.851562 482.332031 134.707031 482.332031 L 687.253906 482.332031 L 535.550781 634.039062 C 522.925781 646.664062 522.925781 667.132812 535.550781 679.757812 C 541.863281 686.066406 550.136719 689.226562 558.410156 689.226562 C 566.683594 689.226562 574.957031 686.066406 581.269531 679.757812 L 788.160156 472.863281 C 800.785156 460.238281 800.785156 439.769531 788.160156 427.144531 Z M 788.160156 427.144531 "/>
                    </g>
                    </g>
                    </svg>
                    </span>
                    </a>
                  <button type="submit" name="otp_submit" id="login-button" class="btn btn-primary mx-1">Confirm
                <span>
                  <?xml version="1.0" encoding="UTF-8"?>
                    <svg class="mb-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20pt" height="20pt" viewBox="0 0 900 899.99999" version="1.2">
                    <defs>
                    <clipPath id="clip1">
                      <path d="M 102.378906 210 L 797.628906 210 L 797.628906 690 L 102.378906 690 Z M 102.378906 210 "/>
                    </clipPath>
                    </defs>
                    <g id="surface1">
                    <g clip-path="url(#clip1)" clip-rule="nonzero">
                      <path style=" stroke:none;fill-rule:nonzero;fill:rgb(100%,100%,100%);fill-opacity:1;" d="M 788.160156 427.144531 L 581.265625 220.25 C 568.640625 207.625 548.167969 207.625 535.546875 220.25 C 522.921875 232.875 522.921875 253.339844 535.546875 265.96875 L 687.253906 417.675781 L 134.707031 417.675781 C 116.851562 417.675781 102.378906 432.152344 102.378906 450.003906 C 102.378906 467.851562 116.851562 482.332031 134.707031 482.332031 L 687.253906 482.332031 L 535.550781 634.039062 C 522.925781 646.664062 522.925781 667.132812 535.550781 679.757812 C 541.863281 686.066406 550.136719 689.226562 558.410156 689.226562 C 566.683594 689.226562 574.957031 686.066406 581.269531 679.757812 L 788.160156 472.863281 C 800.785156 460.238281 800.785156 439.769531 788.160156 427.144531 Z M 788.160156 427.144531 "/>
                    </g>
                    </g>
                    </svg>
                    </span>
                  </button>
                      <?php
                    }
                  ?>

                </div>
                </div>
              </form>

              <?php
                // MAKE THIS THE ALERT FROM BOOTSTRAP
                if(isset($_GET['phone_number_error'])){
                  echo "<p style='color: red;'>Invalid Phone number! Please try again</p>";
                }
                if(isset($_GET['otp_error'])){
                  echo "<p style='color: red;'>Invalid otp number! Please try again</p>";
                }

                if(isset($_GET['phone_exist'])){
                  echo "<p style='color: red;'>The phone number is already registered. Please <a href='./loginform.php'>Login</a></p>";
                }
              ?>
            </div>
          </div>
        </div>
        </div>
    </div>

    <!-- Footer -->
<footer class="bg-white text-dark">
    <!-- Grid container -->
    <div class="container p-4">

      <!-- Section: Social media -->
      <section class="mb-5 text-center" style="border-bottom: 1px 1px solid #202020;">
        <!-- Facebook -->
        <a class="btn btn-outline-dark btn-floating m-2" href="#!" role="button"
          ><i class="fab fa-facebook-f"></i
        ></a>
  
        <!-- Twitter -->
        <a class="btn btn-outline-dark btn-floating m-2" href="#!" role="button"
          ><i class="fab fa-twitter"></i
        ></a>
  
  
        <!-- Instagram -->
        <a class="btn btn-outline-dark btn-floating m-2" href="#!" role="button"
          ><i class="fab fa-instagram"></i
        ></a>
  
        <!-- Linkedin -->
        <a class="btn btn-outline-dark btn-floating m-2" href="#!" role="button"
          ><i class="fab fa-linkedin-in"></i
        ></a>
        <hr>
        </hr>
      </section>
      <!-- Section: Social media -->
  
  
  
      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5>Get to know us</h5>
  
            <ul class="list-unstyled text-left mb-0">
              <li>
                <a href="#!" class="text-dark">About us</a>
              </li>
              <li>
                <a href="#!" class="text-dark">Partners</a>
              </li>
              <li>
                <a href="#!" class="text-dark">Careers</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->
  
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5>Help</h5>
  
            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-dark">Account details</a>
              </li>
              <li>
                <a href="#!" class="text-dark">Order History</a>
              </li>
              <li>
                <a href="#!" class="text-dark">Customer Service</a>
              </li>
              <li>
                <a href="#!" class="text-dark">FAQs</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->
  
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5>Let's do business</h5>
  
            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-dark">Cook for us</a>
              </li>
              <li>
                <a href="#!" class="text-dark">Become a hub partner</a>
              </li>
              <li>
                <a href="#!" class="text-dark">General inquries</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->
  
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5>Sign up for our newsletter</h5>

          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
          
    <div class="text-left p-2" style="background-color: rgb(255, 255, 255);">
      <div class="container">
        <hr></hr>
        <a cfass="text-dark" style="font-family: 'DM Sans',sans-serif; font-size: 1rem;" href="https://mdbootstrap.com/">© 2021 Copyright: Mealful Inc.</a>
      </div>
    </div>
    </footer>
    <!-- Footer -->
    


    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="../js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
  </body>
</html>