<?php
  include "includes/header.php";
  include "backend/functions/payment_functions.php"

?>
<style>
  @font-face {
      font-family: 'Eina Regular';
      src: url(../fonts/Eina01-Regular.ttf);
  }

  @font-face {
      font-family: 'Eina Bold';
      src: url(../fonts/Eina01-SemiBold.ttf);
  }

  @font-face {
      font-family: 'Eina XBold';
      src: url(../fonts/Eina01-Bold.ttf);
  }

  .StripeElement {
    background-color: white;
    height: 40px;
    padding: 10px 12px;
    border-radius: 4px;
    border: 1px solid transparent;
    box-shadow: 0 1px 3px 0 #e6ebf1;
    -webkit-transition: box-shadow 150ms ease;
    transition: box-shadow 150ms ease;
    font-family:'Eina Regular',sans-serif;
  }



  .StripeElement--focus {
    box-shadow: 0 1px 3px 0 #cfd7df;
  }

  .StripeElement--invalid {
    border-color: #fa755a;
  }

  .StripeElement--webkit-autofill {
    background-color: #fefde5 !important;
  }
</style>

  <?php

    $amount = get_price($_SESSION['user_id'], $_POST['numOfMeals'], $_POST['numOfWeeks']);

    if($amount == NULL){
      #500 PAGE
      die("INTERNAL SERVER ERROR");
    }
    else{
      /**SANITIZE */
      $_SESSION['amount'] = $amount;
      $_SESSION['numOfMeals'] = $_POST['numOfMeals'];
      $_SESSION['numOfWeeks'] = $_POST['numOfWeeks'];
    }
  ?>

  <div class="container">
    <div class="row d-flex justify-content-center">
    <div class="card mb-5 shadow-lg">
    <div class="card-body">
   
    <h2 class="card-title text-center" style="font-family:'Eina Bold',sans-serif;">Checkout</h2>
    <form action="./backend/charge.php" method="post" id="payment-form">
    <input type="hidden" name="numOfMeals" value="<?php echo $_POST['numOfMeals'] ?>">
    <input type="hidden" name="numOfWeeks" value="<?php echo $_POST['numOfWeeks'] ?>">
      <div class="form-row">
       <input type="text" name="first_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="First Name">
       <input type="text" name="last_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Last Name">
        <div id="card-element" class="form-control">
        </div>
        <div id="card-errors" role="alert"></div>
      </div>

      <button>Submit Payment</button>
    </form>
  </div>
    </div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://js.stripe.com/v3/"></script>
  <script src="./js/charge.js"></script>



<?php
  include "includes/footer_nl.php";
?>

