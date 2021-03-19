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
    event.preventDefault();
    var payCard = document.getElementById("payment-card");
    payCard.style.display = '';
}
function change() {


    var select = document.getElementById("slct");
    var divv = document.getElementById("container");
    var value = select.value;
   
    if (value == 1) {
        toAppend = "<input type='textbox' >"; divv.innerHTML=toAppend; return;
        }
        if (value == 2) {
            toAppend = "<input type='textbox' >&nbsp;<input type='textbox' >";divv.innerHTML = toAppend;  return;
        }
        if (value = 3) {
            toAppend = "<input type='textbox' >&nbsp;<input type='textbox' >&nbsp;<input type='textbox' >";divv.innerHTML = toAppend;  return;

        }
    

}