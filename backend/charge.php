<?php
    session_start();
    include "./functions/functions.php";
    include_once "./external_api_calls/stripeApi/stripeInclude.php";
    // Sanitize POST Array
    $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);


    print_r($_POST);
    print_r($_SESSION);

    // validate_price_token_user($price, $token_num, $user_email);


    $first_name = "Shivam";
    $last_name = "Mahajan";
    $email = "shivammahajan100@gmail.com";
    $token = $POST['stripeToken'];

    // Create Customer In Stripe
    $customer = \Stripe\Customer::create(array(
    "email" => $email,
    "source" => $token
    ));

    
    // Charge Customer
    // $charge = \Stripe\Charge::create(array(
    // "amount" => 100,
    // "currency" => "cad",
    // "description" => "Test Payment By Shivam",
    // "customer" => $customer->id
    // ));
    
    echo "<br>ID:    ".$charge->id."<br>";
    echo "CUS_ID:   ".$charge->customer."<br>";
    echo "status:    ".$charge->status;
// // Customer Data
// $customerData = [
//   'id' => $charge->customer,
//   'first_name' => $first_name,
//   'last_name' => $last_name,
//   'email' => $email
// ];

// Instantiate Customer
// $customer = new Customer();

// Add Customer To DB
// $customer->addCustomer($customerData);


// // Transaction Data
/*
    Insert the Id, userId, token_numbers, 
*/

// $transactionData = [
//   'id' => $charge->id,
//   'customer_id' => $charge->customer,
//   'product' => $charge->description,
//   'amount' => $charge->amount,
//   'currency' => $charge->currency,
//   'status' => $charge->status,
// ];

// // Instantiate Transaction
// $transaction = new Transaction();

// // Add Transaction To DB
// $transaction->addTransaction($transactionData);

// Redirect to success
// header('Location: success.php?tid='.$charge->id.'&product='.$charge->description);

?>