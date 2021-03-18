<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    
    <title>Pay Page</title>
</head>

    <body>
        <form action="/charge" method="post" id="payment-form">
            <div class="form-row">
                <label for="card-element">
                    Credit or Debit card
                </label>
                <div id="card-element">
                <!-- a Stripe element will be inserted here -->
                </div>
                <!-- Used to display errors -->
                <div id="card-errors"></div>
            </div>
            <button>Submit Payment</button>
        </form>

        <script src="https://js.stripe.com/v3"></script>
        <script src="charge.js"></script>

    </body>
</html>