var meal_pricing = {
        "5" : {
                "1" : "8.00",
                "2" : "7.95",
                "4" : "7.90"
            },
        "7": {  "1" : "7.90",
                "2" : "7.85",
                "4" : "7.80"
            },
        "10": {  "1" : "7.80",
                 "2" : "7.80",
                 "4" : "7.77"
            },
        "14": {  "1" : "7.75",
                 "2" : "7.74",
                 "4" : "7.60"
            }
    };


var SINGLE_MEAL_PRICE = 8.49;

function selected(){
    var numWeeks = document.getElementById("num-weeks").value;
    var numMeals = document.getElementById("num-meals").value;
    var price = meal_pricing[numMeals][numWeeks];

    document.getElementById("price-para").innerHTML = "$"+price;
    var totalPrice = SINGLE_MEAL_PRICE * numMeals;
    var totalSaving = (totalPrice - (price * numMeals)).toFixed(2);
    var totalDiscount = Math.floor((totalSaving / totalPrice) * 100);
    
    document.getElementById("total-save").innerHTML = "$"+totalSaving;
    document.getElementById("percent-discount-para").innerHTML = "("+ totalDiscount +"% discount)";
}

function formChosen(){
    // event.preventDefault();
    // var payCard = document.getElementById("payment-card");
    // payCard.style.display = '';
}

function get_price($ever_subscribed, $eligible_for__ind_meal_discount, $qty, $weeks){
    // $ever_subscribed
    // $eligible_for__ind_meal_discount
    // $qty
    // $weeks
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
