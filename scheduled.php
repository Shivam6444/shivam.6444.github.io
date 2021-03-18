<?php
  include "includes/header.php";
?>

<div class="container">
<div class="row d-flex justify-content-center">
<div class="w-75">
<h2 class = "text-left text-dark mb-4" style="font-family:'Eina Regular',sans-serif; letter-spacing: 0rem;font-weight:bolder;margin-top:7rem;">Upcoming meals</h2>
</div>
</diV>
</div>

<div class="container">
<div class="row d-flex justify-content-center m-1">

    <div class="card mb-5 w-75 shadow-5-strong hover-shadow" style="background-color: rgb(20, 20, 20);border-radius:1rem;">
        <div class="row g-0">
            <div class="col-md-4" style="border-radius:1rem!important;" >
                <img
                    src="./img/butter-chicken.png"
                    alt="..."
                    class="card-img"
                    style="border-radius: 1rem 0rem 0rem 1rem;margin-left:-1rem;"
                />
            </div>

            <div class="col-md-8">
                <div class="card-body text-light pt-4" style="font-family:'Eina Regular',sans-serif;">
                    <h5 class="card-title mb-3" style="font-family:'Eina Regular',sans-serif;color:#ffd663;">Pick up until <strong style="color:white;font-family:'Eina Bold',sans-serif;">1:00pm</strong> from <strong style="color:white;font-family:'Eina Bold',sans-serif;">Nova Groceries</strong></h5>
                    <h5 class="card-title text-light" style="font-family:'Eina Bold',sans-serif;">Butter Chicken Naan</h5>
                        <h6 class="card-text">
                        Butter Chicken cooked with traditional indian spices served with tandoori naan.</h6>
                        <hr style="border: 0;height: .8px;background-image: linear-gradient(to right, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.6));">
                        <button type="submit" name="submitLogin" class="btn mx-1 text-dark float-right hover-shadow" style="font-family:'Eina Regular',sans-serif;font-size:1rem;text-transform:none;background-color:#ffd663!important;font-weight:bold;">View on map</button>
                        <p class="card-text mt-0">
                        
                        <strong>Quantity:</strong> 1<br>
                        </p>
                        


                </div>
                
                </div>
                
            </div>
            </div>

            <hr class="w-75" style="border: 0;height: .8px;background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, .6), rgba(0, 0, 0, 0));">          

            
        <div class="card mt-3 mb-5 w-75 shadow-5-strong" style="background-color: #fff;border-radius:1rem;">
        <div class="row g-0">
            <div class="col-md-4" style="border-radius:1.5rem!important;" >
                <img
                    src="./img/butter-chicken.png"
                    alt="..."
                    class="card-img card-2"
                    style="border-radius: 1rem 0rem 0rem 1rem;margin-left:-1rem;"
                />
            </div>

            <div class="col-md-8">
                <div class="card-body text-dark pt-4" style="font-family:'Eina Regular',sans-serif;">
                    <h5 class="card-title" style="font-family:'Eina Bold',sans-serif;font-weight:bold;">Butter Chicken Naan</h5>
                        <p class="card-text">
                        Butter Chicken cooked with traditional indian spices served with tandoori naan.
                        </p>
                        <p class="card-text mt-0">
                        Quantity: <strong>x4</strong><br>
                        Status: 
                        </p>
                </div>
                </div>
            </div>
            </div>
</div>
</div>

<?php
  include "includes/footer.php";
?>