<?php
  include "includes/header.php";
?>

<div class="container-fluid">
       
        <div class="row d-flex justify-content-center g-2">
        <div class="card mb-5 shadow-lg">
        <div class="card-body mr-2 ml-2 mb-2">
        <h2 class="card-title text-center mb-2" style="font-family:'Eina Bold',sans-serif;margin-top:-.5rem">Checkout</h2>
        <form method="post" novalidate autocomplete="on" action="backend/register_user.php" class="row g-3">

            <!-- Email input -->
            <div class="form-outline">
              <i class="fas fa-credit-card trailing"></i>
              <input type="text" id="form1" class="form-control form-control-lg form-icon-trailing cc-number" placeholder="1234 1234 1234 1234" style="border-radius: .5em;"/>
              <label class="form-label" for="form1">Card number</label>
            </div>

            <!-- LastName input -->
            <div class="form-outline col-md-4 mr-3 mb-1">
              <input type="text" id="form1" class="form-control form-control-lg cc-exp" placeholder="MM/YYYY" style="border-radius: .5em;"/>
              <label class="form-label" for="form1">Expiry Date</label>
            </div>

            <div class="form-outline col-md-3 mr-3 mb-1">
              <input type="text" id="form1" class="form-control form-control-lg cc-cvc" placeholder="123" style="border-radius: .5em;"/>
              <label class="form-label" for="form1">CVV</label>
            </div>

            <div class="form-outline col-md-4 mb-1">
              <input type="text" id="form1" class="form-control form-control-lg cc-exp" placeholder="A1A 1A1" style="border-radius: .5em;"/>
              <label class="form-label" for="form1">Postal Code</label>
            </div>

              
            <script>
                $('.cc-number').on('keypress change blur', function () {
                    $(this).val(function (index, value) {
                        return value.replace(/[^a-z0-9]+/gi, '').replace(/(.{4})/g, '$1 ');
                    });
                });
                // $('.form-control-lg').keyup(function() {
                // var foo = $(this).val().split("-").join(""); // remove hyphens
                // if (foo.length > 0) {
                //   foo = foo.match(new RegExp('.{1,4}', 'g')).join("-");
                // }
                // $(this).val(foo);
                // });
                $(function ($) {
                  $('[data-numeric]').payment('restrictNumeric');
                  $('.cc-exp').payment('formatCardExpiry');
                  $('.cc-cvc').payment('formatCardCVC');

                  $.fn.toggleInputError = function (erred) {
                      this.parent('.form-group').toggleClass('has-error', erred);
                      return this;
                  };
 
                  $('form').submit(function (e) {
                      e.preventDefault();

                      var cardType = $.payment.cardType($('.cc-number').val());
                      $('.cc-number').toggleInputError(!$.payment.validateCardNumber($('.cc-number').val()));
                      $('.cc-exp').toggleInputError(!$.payment.validateCardExpiry($('.cc-exp').payment('cardExpiryVal')));
                      $('.cc-cvc').toggleInputError(!$.payment.validateCardCVC($('.cc-cvc').val(), cardType));
                      $('.cc-brand').text(cardType);

                      $('.validation').removeClass('text-danger text-success');
                      $('.validation').addClass($('.has-error').length ? 'text-danger' : 'text-success');
                  });

              });
            </script>
          
          
            </div>
          
            <!-- Submit button -->
            <div class="col d-flex mb-2 justify-content-center">
            <button type="submit" id="login-button" name="registerUser" class="btn btn-primary mx-1 mb-3" style="font-family:'Eina Bold',sans-serif!important;">Continue</button>
            </div>
          
            
            <input type="hidden" name="loginToken" value="<?php echo $_SESSION['secret_token']; ?>">
            
          </form>
        </div>
        </div>
     
        </div>
    </div>

    <?php
  include "includes/footer_nl.php";
?>

