<?php
    session_start();
    ob_start();

    include "./functions/functions.php";
    include_once "./external_api_calls/stripeApi/stripeInclude.php";
    // Sanitize POST Array
    $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);
    // echo "<br>";
    // print_r($_POST);
    // print_r($_SESSION);
    // die();
  

    $email = $_SESSION['email'];
    $qty = $_SESSION['numOfMeals'];
    $numTokens = $qty * $numWeeks;
    $numWeeks = $_SESSION['numOfWeeks'];
    $user_id = $_SESSION['user_id'];
    $token = $POST['stripeToken'];
    $amount = $_SESSION['amount']; 
    $desc = "Number of meals =".$qty." and weeks =".$numWeeks."tokens=".$numTokens;
   

    // Create Customer In Stripe
    $customer = \Stripe\Customer::create(array(
        "email" => $email,
        "source" => $token
    ));
    
    // Charge Customer
    $charge = \Stripe\Charge::create(array(
        "amount" => $amount * 100,
        "currency" => "cad",
        "description" => $desc,
        "customer" => $customer->id
    ));

    
    // echo "<br>ID:    ".$charge->id."<br>";
    // echo "CUS_ID:   ".$charge->customer."<br>";
    // echo "status:    ".$charge->status;
    $cus_id = $charge->id;
    $customer = $charge->customer;
    $status = $charge->status;

    echo $status;

    if($charge->status != 'succeeded'){
        include "./functions/db.php";
        // Backend Email 
        $sql_trans_add = "INSERT INTO `transaction` 
        (`id`, `user_id`, `customer_id`, `token`, `amount`, `status`) VALUES 
        ($cus_id, '{$user_id}', '{$customer}', '{$numTokens}', '{$amount}', '{$status}')";
        if(!$conn->query($sql_trans_add)){
            // Email Backend to check stripe

            //======== DECIDE WHERE TO REDIRECT =======//
            die("Internal server error Please try again. Payment not processed");
        }
        //Redirect to Checkout page with a warning.
        die("Payment was rejected");

    }
    else if($charge->status == 'succeeded'){
        include "./functions/db.php";
        $conn->autocommit(FALSE);
        $sql_trans_add = "INSERT INTO `transaction` 
        (`id`, `user_id`, `customer_id`, `token`, `amount`, `status`) VALUES 
        ($cus_id, '{$user_id}', '{$customer}', '{$numTokens}', '{$amount}', '{$status}')";
        
        $sql_user_update = "UPDATE `user` SET 
        `availableTokens` = availableTokens + '{$numTokens}' 
        WHERE `user`.`user_id` = {$user_id}";

        $conn->query($sql_trans_add); 
        $conn->query($sql_user_update);
        // Commit transaction
        if (!$conn->commit()) {
            echo "Commit transaction failed";
            // Show Warning 
            //Send email in the back
            die("PAYMENT PROCESSED  -> TOKENS WOULD BE ALLOCATED SOON");
        }
        // Rollback transaction
        $conn->rollback();
        $conn->close();

        $_SESSION['available_tokens'] = $_SESSION['available_tokens'] + $numTokens;

        $res = add_oder($user_id, $_SESSION['ordering_item_id'], $_SESSION['ordering_hub_id'], $_SESSION['ordering_qty']);
        
        if($res == NULL){
            //Email in the Backend --> Payment Happened and Meal wasn't scheduled
            header('Location: ../home.php?mealscheduled=false');
            exit();
        }
        else{
            header('Location: ../home.php?mealscheduled=true&itemname=');
            exit();
        } 
    }
?>