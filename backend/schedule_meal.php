<?php

// ADD VERIFICATION FOR ALL THE REQUESTS AND SET THE LOGIN IN CONDITION
    session_start();
    include "./functions/functions.php";
    
    // This page handles the Scheduling of a meal

    if(!isset($_SESSION['user_id'])){
        die("404 Page Cannot be loaded - user_id");
    }
    
    if(isset($_POST['schedule_item'])){

        

        if(!(isset($_POST['item_id'])) && (!(isset($_POST['hub_id'])))){
            //Please select an item
   
            die("404 Page not found");
        }

        
        $user_id = $_SESSION['user_id'];
        $hub_id = sanitize($_POST['hub_id']);
        $item_id = sanitize($_POST['item_id']);
        $qty = sanitize($_POST['qty']);
        
        //-------Request check----//
        if($hub_id == "" || $item_id == "" || $qty == ""){
            die();
        }
        
        if(!(is_numeric($hub_id)  && is_numeric($item_id) && is_numeric($qty))){
            die();
        }
        

        /* Checking if user have enough tokens */
        if($_SESSION['available_tokens'] < $qty){
            if($_SESSION['available_tokens'] == 0){
                $_SESSION['scheduling_meal'] = true;
                $_SESSION['ordering_qty'] = $qty;
                $_SESSION['ordering_item_id'] = $item_id;
                $_SESSION['ordering_hub_id'] = $hub_id;
                header("Location: ../plans.php");
                die();
            }
            //== This happens if someone tries to manipulate front-end to send a request where the number
            //== of tokens is less than the qty wanted. In this case, person have tokens
            // if this happen the backend will enforce to schedule items worth all the tokens
            
            if($_SESSION['available_tokens'] > 1){
                if(add_oder($user_id, $item_id, $hub_id, $_SESSION['available_tokens']) == true){
                    header("Location: ../home.php?overQty=".$_SESSION['available_tokens']);
                    die();
                }
            }
        }

        add_oder($user_id, $item_id, $hub_id, $qty);
        header("Location: ../home.php?orderedSuccessfully=true");
        die();
        // add_order($user_id, $item_id, $hub_id, $qty);

    }
?>