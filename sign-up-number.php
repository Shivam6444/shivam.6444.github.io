<?php
  // session_start();
  include "./includes/header.php";
  // print_r($_SESSION);
?>
    <div class="container-fluid">
      <div class="row d-flex justify-content-center">
          <div class="card mb-5 shadow-lg" style=:height:auto;>
            <div class="card-body">
              <h2 class="card-title text-center text-dark mb-0">Almost there, a few steps from delicious meals.</h2><hr>
              <?php
                // MAKE THIS THE ALERT FROM BOOTSTRAP
                if(isset($_GET['phone_number_error'])){
                  echo "
                  <div class=\"alert alert-danger mt-2 alert-dismissible fade show\" role=\"alert\">
                    <button type=\"button\" class=\"btn-close\" data-dismiss=\"alert\" aria-label=\"Close\"></button>
                    Please enter a valid phone number.
                  </div>
                  ";
                }
                if(isset($_GET['otp_error'])){
                  echo "
                  <div class=\"alert alert-danger mt-2 alert-dismissible fade show\" role=\"alert\">
                    <button type=\"button\" class=\"btn-close\" data-dismiss=\"alert\" aria-label=\"Close\"></button>
                    Incorrect code, please try again.
                  </div>
                  ";
                }
                if(isset($_GET['phone_exist'])){
                  echo "
                  <div class=\"alert alert-danger mt-2 alert-dismissible fade show\" role=\"alert\">
                    <button type=\"button\" class=\"btn-close\" data-dismiss=\"alert\" aria-label=\"Close\"></button>
                    An account exists with this phone number. Please try logging in.<a href='./loginform.php'> Login</a>
                  </div>
                  ";
                }
              ?>
              <h6 class="card-title text-center mb-0 mt-4">Enter your mobile number to get started</h6>
              <form method='post' action='./backend/register_user.php'>
                  <!-- Email input -->
                  <div class="form-outline mt-4 mb-3">
                    <input type="tel" name="phone_number" id="formControlLg" class="form-control form-control-lg" placeholder="123-123-1234" title="Please enter a phone number in the requested format" style="border-radius:.5rem"
                        <?php
                          if(isset($_SESSION['phone'])){
                            if($_SESSION['phone'] != ""){
                              echo "readonly";
                              echo " value=".substr($_SESSION['phone'], 2);
                            }
                          }
                        ?>
                  >
                  <label class="form-label" for="formControlLg">Mobile number</label>
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
                    else
                    {
                  ?>
                  <div class="row d-flex justify-content-center">
                    <h6 class="card-title text-center mb-0 mt-2">Enter the code sent to your mobile number</h6><br>
                      <div class="form-outline mt-4 mb-4" style="width:25%;">
                        <input type="integer" name="otp" id="formControlLg" class="form-control form-control-lg text-center" placeholder="* * * *" title="Please enter a phone number in the requested format" style="border-radius:.5rem; font-size:1.1rem">
                      <!-- <label class="form-label" for="formControlLg" style="font-size:0.7rem;">Code</label> -->
                  </div>
                  <div class="row d-flex justify-content-center">
                  <button type="submit" name="otp_submit" id="login-button" class="btn w-100 btn-primary mx-1 mb-5">Confirm
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
                    </div>
                      <p class ="text-dark text-center" id="register-link">Entered the wrong phone number?
                      <a href="./backend/register_user.php?change_phone_number=true" style="text-decoration:none">Change</a></p>
                      <p class ="text-dark text-center" id="register-link">Didn't receive a code?
                      <a href="loginform.php" style="text-decoration:none">Resend it</a></p>
                          <?php
                        }
                      ?>
                  </div>
                </div>
                <input class="form-control" name="area_code" type="hidden" placeholder="Phone number" required style="border-radius: .5em;" value="+1" readonly>
              </form>
            </div>
          </div>
        </div>
        </div>
    </div>
    <?php
          include "includes/footer_nl.php";
    ?>