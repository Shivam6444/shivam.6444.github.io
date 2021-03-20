<?php

session_start();
include "functions/payment_functions.php";

if(isset($_SESSION['user_id']) && (isset($_SESSION['email']))){
    
    $ind_meal_discount_eligibility = false;
    $mealplan_discount_eligibility = false;
    $result = is_first_time_user($_SESSION['user_id']);
    echo "GOT THE VALUES";
    if($result == NULL) {
        die("SERVER ERROR PLEASE TRY AGAIN: 505");
    }
    else if($result == true){
        $ind_meal_discount_eligibility = true;
        $mealplan_discount_eligibility = true;
    }
    else{
        $ind_meal_discount_eligibility = $result['individual_discount_elegibility'];
        $mealplan_discount_eligibility == !($result['ever_subscribed']); 
    }

    echo "<br>MEAL PLAN ELEGIBILITY: ".$mealplan_discount_eligibility."<br>";
    echo "IND MEAL DISCOUNT ELIGIBILITY". $ind_meal_discount_eligibility;

}
else{
    echo "CANNOT FETCH PAYMENT INFO";
    die();
}


?>