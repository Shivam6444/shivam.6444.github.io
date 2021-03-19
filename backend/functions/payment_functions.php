<?php

/************ NOTICE::: IF YOU UPDATE THIS THEN UPDATE THE CHARGE.JS AS WELL *********************/
$GLOBALS["SINGLE_MEAL_PRICE"] = 8.29;
$GLOBALS["PRICING"] = 
[
    "5" => [
        "1" => "8.0",
        "2" => "7.95",
        "4" => "7.90"
    ],
    "7" =>[
        "1" => "7.90",
        "2" => "7.85",
        "4" => "7.80",
    ],
    "10" => [
        "1" =>"7.80",
        "2" => "7.80", 
        "4" => "7.77"
    ],
    "14" => [
        "1" => "7.75",
        "2" => "7.74",
        "4" => "7.60"
    ]

];

$GLOBALS["INDIVIDUAL_MEAL_DISCOUNT"] = 20;
$GLOBALS["MEAL_PLAN_DISCOUNT"] = 23;

/************ NOTICE::: IF YOU UPDATE THIS THEN UPDATE THE CHARGE.JS AS WELL *********************/

/*

This function might be redundant.
It make sure that the number of tokens for the payment being received at stripe api is valid in terms of money
If the price coming from front-end does not match the back-end then this function would return false

*/

function validate_price_token_user($user_id, $qty, $weeks,$price){
    $is_new = is_first_time_user($user_id);
    if($is_new == NULL){
        return NULL;
    }
    /* User is First time */
    if($is_new == true){
        $actual_price = get_price(false, false, $qty, $weeks);
        if($actual_price == $price){
            return true;
        }
        else{
            return false;
        }
    }
    else{
        $ever_subscribed = $is_new["ever_subscribed"];
        $eligible_for__ind_meal_discount = $is_new["individual_discount_elegibility"];
        $actual_price = get_price($ever_subscribed, $eligible_for__ind_meal_discount, $qty, $weeks);
        if($actual_price == $price){
            return true;
        }
        else{
            return false;
        }
    }
}

/*

    Gets the price based on the case of user

*/
function get_price($ever_subscribed, $eligible_for__ind_meal_discount, $qty, $weeks){
    $price = $GLOBALS["PRICING"][$weeks][$qty];

    if($qty == 1 && $eligible_for__ind_meal_discount == true){
        //send the price 
        return round(($price *  (1 - ($GLOBALS["INDIVIDUAL_MEAL_DISCOUNT"] / 100))), 2);
    }
    else if($qty == 1 && $eligible_for__ind_meal_discount == false){
        // send the price of individual meal without discount
        return $price;
    }

    else if($qty > 1 && $ever_subscribed == true){
        // send usual meal prices
        return $price;
    }
    else if($qty > 1 && $ever_subscribed == false){
        //Send the price of discounted meal plan 
        // return $qty *  * (.80) 
        return round(($price *  (1 - ($GLOBALS["MEAL_PLAN_DISCOUNT"] / 100))), 2);
    }
}



function is_first_time_user($user_email_or_phone){
    include "db.php";
    $user_id = get_user_id($user_email_or_phone);

    if($user_id == false){
        return NULL;
    }
    
    $sql = "SELECT * from transaction where user_id = '{$user_id}'";
    $result = $conn->query($sql);

    if(!$result){
        return NULL;
    }
    //User is new
    if($result->num_rows == 0){
        return true;
    }
    //Old user
    else{
        $ever_subscribed = false;
        $eligible_for__ind_meal_discount = true;
        $total_number_of_tokens = 0;
        while($row = $result->fetch_assoc()){
            $total_number_of_tokens += $row['token'];
            if($row['token'] > 1){
                $ever_subscribed = true;
            }
            if($total_number_of_tokens > 5){
                $eligible_for__ind_meal_discount = false;
                break;
            }
        }
        
        return [
            "ever_subscribed" => $ever_subscribed, 
            "individual_discount_elegibility" => $eligible_for__ind_meal_discount
        ];
    }
}



/* 
    Helper methods
*/

function get_user_id($user_email_or_phone){
    include "db.php";
    $sql = "SELECT * from user where email = '{$user_email_or_phone}' or phone = '{$user_email_or_phone}'";

    $result = $conn->query($sql);
    if(!$result){
        return false;
    }
    if($result->num_rows == 1){
        $user = $result->fetch_assoc();
        return $user['user_id'];
    }
    else{
        return false;
    }
}

?>