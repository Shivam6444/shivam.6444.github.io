<?php
  include "includes/header.php";
?>
<style>
  .StripeElement {
    background-color: white;
    height: 40px;
    padding: 10px 12px;
    border-radius: 4px;
    border: 1px solid transparent;
    box-shadow: 0 1px 3px 0 #e6ebf1;
    -webkit-transition: box-shadow 150ms ease;
    transition: box-shadow 150ms ease;
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
<!-- <div class="container-fluid text-start">
       
        <div class="row d-flex justify-content-center">
        <div class="card mb-5 shadow-lg">
        <div class="card-body">
        <h2 class="card-title text-center" style="font-family:'Eina Bold',sans-serif;">Checkout</h2>
        <form method="post"  id="payment-form"  class="row g-2">

      

            <div id="card-element" class="form-control">
           
            </div>

            <div id="card-errors" role="alert"></div>
          
            </div>

        </form>
          
        </div>
        </div>
     
        </div>
</div> -->
    
  <div class="container">
    <div class="row d-flex justify-content-center">
    <div class="card mb-5 shadow-lg">
    <div class="card-body">
    <h2 class="card-title text-center" style="font-family:'Eina Bold',sans-serif;">Checkout</h2>
    <form action="./charge.php" method="post" id="payment-form">
      <div class="form-row">
       <input type="text" name="first_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="First Name">
       <input type="text" name="last_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Last Name">
        <div id="card-element" class="form-control">
          <!-- a Stripe Element will be inserted here. -->
        </div>

        <!-- Used to display form errors -->
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

