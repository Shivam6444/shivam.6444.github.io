<?php
    include "includes/header.php";
    include_once "backend/functions/functions.php";
    // echo "<br><br><br><br><br><br><br><br><br><br>";
   
    $items = get_scheduled_items_by_user($_SESSION['user_id']);

    // print_r($items);



?>

<div class="container">
<div class="row d-flex justify-content-center">
<div id="scheduled-heading" class="w-75" style="margin-top:7.5rem;">
<h2 class = "text-left text-dark mb-4" style="font-family:'Eina Regular',sans-serif; letter-spacing: 0rem;font-weight:bolder;">Upcoming meals</h2>
</div>
</diV>
</div>

<div class="container">
    <div class="row d-flex justify-content-center m-1">

        <div class="card mb-4 w-75 h-100 shadow-5-strong hover-shadow" style="background-color: rgb(38, 38, 38);border-radius:1rem;">
            <div class="row g-2">
                <div class="col-md-4" style="border-radius:1rem!important;" >
                    <img
                        src="./img/butter-chicken.png"
                        alt="..."
                        class="card-img-top mt-2 mb-2"
                        style="border-radius: .5rem .5rem .5rem .5rem;margin-left:-.2rem;"
                    />
                </div>

                <div class="col-sm-8">
                    <div class="card-body text-light pt-4" style="font-family:'Eina Regular',sans-serif;">
                    
                        <h5 class="card-title mb-1" style="font-family:'Eina Regular',sans-serif;color:#ffb22f;">Pick up until <strong style="color:white;font-family:'Eina Bold',sans-serif;">1:00pm</strong> from <strong style="color:white;font-family:'Eina Bold',sans-serif;">Nova Groceries</strong></h5>
                        
                        <hr style="border: 0;height: .8px;background-image: linear-gradient(to right, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.6));">
                        <h6 class="card-title text-light" style="font-family:'Eina Bold',sans-serif;"><span style="font-family:'Eina Regular',sans-serif;color:#ffb22f;">2x</span> Butter Chicken Naan</h6>
                            <h6>Butter chicken with naan, cilantro and yogurt garnish.</h6>
                            <button type="submit" name="submitLogin" class="btn mx-1 text-dark hover-shadow mt-2 text-center" style="font-family:'Eina Regular',sans-serif;font-size:1rem;text-transform:none;background-color:#ffd663!important;font-weight:bold;">                            
                            
                            <span>
                            <?xml version="1.0" encoding="iso-8859-1"?>
                            <!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                            <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                width="21px" height="21px" viewBox="0 0 97.713 97.713" style="enable-background:new 0 0 97.713 97.713;margin-bottom:.2rem;margin-left:-.2rem;margin-right:.2rem;"
                                xml:space="preserve">
                            <g>
                                <path d="M48.855,0C29.021,0,12.883,16.138,12.883,35.974c0,5.174,1.059,10.114,3.146,14.684
                                    c8.994,19.681,26.238,40.46,31.31,46.359c0.38,0.441,0.934,0.695,1.517,0.695s1.137-0.254,1.517-0.695
                                    c5.07-5.898,22.314-26.676,31.311-46.359c2.088-4.57,3.146-9.51,3.146-14.684C84.828,16.138,68.69,0,48.855,0z M48.855,54.659
                                    c-10.303,0-18.686-8.383-18.686-18.686c0-10.304,8.383-18.687,18.686-18.687s18.686,8.383,18.686,18.687
                                    C67.542,46.276,59.159,54.659,48.855,54.659z"/>
                            </g>
                            </svg>
                            </span>

                            View pickup point on map
                            </button>
                            
                    </div>
                    
                    </div>
                    
                </div>
        </div>

        <hr class="w-75" style="border: 0;height: .8px;background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, .6), rgba(0, 0, 0, 0));">  

        <div class="card mb-3 w-75 h-100 shadow-lg hover-shadow" style="border-radius:1rem;">
            <div class="row g-2">
                <div class="col-md-4" style="border-radius:1rem!important;" >
                    <img
                        src="./img/butter-chicken.png"
                        alt="..."
                        class="card-img-top m-2"
                        style="border-radius: .5rem .5rem .5rem .5rem;margin-left:-.2rem;"
                    />
                </div>

                <div class="col-md-8">
                    <div class="card-body text-dark pt-4" style="font-family:'Eina Regular',sans-serif;">
                    
                        <h5 class="card-title mb-1" style="font-family:'Eina Regular',sans-serif;">Your lunch order has been <strong style="font-family:'Eina Bold',sans-serif;color:#ffb22f;">scheduled</strong> for <strong style="font-family:'Eina Bold',sans-serif;color:#ffb22f;">23rd March</strong></h5>
                        
                        <hr style="border: 0;height: .8px;background-image: linear-gradient(to right, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.6));">
                        <h6 class="card-title text-dark" style="font-family:'Eina Bold',sans-serif;">2x Butter Chicken Naan</h6>
                            <h6>Butter chicken with naan, cilantro and yogurt garnish.</h6>
                            <button type="submit" name="submitCancel" class="btn mx-1 text-light hover-shadow mt-2 text-center" style="font-family:'Eina Regular',sans-serif;font-size:1rem;text-transform:none;background-color:#dd0000;">
                            <span><?xml version="1.0" encoding="UTF-8"?>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="23px" height="23px" viewBox="0 0 77 77" version="1.1" style="margin-bottom:.1rem;margin-left:-.2rem;margin-right:.2rem;">
                            <g id="surface1">
                            <path style=" stroke:none;fill-rule:nonzero;fill:rgb(80.076599%,0%,0%);fill-opacity:1;" d="M 71 38.5 C 71 56.449219 56.449219 71 38.5 71 C 20.550781 71 6 56.449219 6 38.5 C 6 20.550781 20.550781 6 38.5 6 C 56.449219 6 71 20.550781 71 38.5 "/>
                            <path style=" stroke:none;fill-rule:nonzero;fill:rgb(100%,100%,100%);fill-opacity:1;" d="M 45.550781 38.5 L 55.128906 28.921875 C 57.035156 27.015625 57.035156 23.898438 55.128906 21.988281 L 55.011719 21.871094 C 53.105469 19.964844 49.984375 19.964844 48.078125 21.871094 L 38.5 31.453125 L 28.921875 21.871094 C 27.015625 19.964844 23.898438 19.964844 21.988281 21.871094 L 21.871094 21.988281 C 19.964844 23.898438 19.964844 27.015625 21.871094 28.921875 L 31.449219 38.5 L 21.871094 48.078125 C 19.964844 49.984375 19.964844 53.105469 21.871094 55.011719 L 21.988281 55.128906 C 23.898438 57.035156 27.015625 57.035156 28.921875 55.128906 L 38.5 45.546875 L 48.078125 55.128906 C 49.984375 57.035156 53.105469 57.035156 55.011719 55.128906 L 55.128906 55.011719 C 57.035156 53.105469 57.035156 49.984375 55.128906 48.078125 L 45.550781 38.5 "/>
                            </g>
                            </svg></span>
                            Cancel order
                            </button>
                            
                    </div>
                    
                    </div>
                    
                </div>
        </div>

        <div class="card mb-3 w-75 h-100 shadow-lg hover-shadow" style="border-radius:1rem;">
            <div class="row g-2">
                <div class="col-md-4" style="border-radius:1rem!important;" >
                    <img
                        src="./img/butter-chicken.png"
                        alt="..."
                        class="card-img-top m-2"
                        style="border-radius: .5rem .5rem .5rem .5rem;margin-left:-.2rem;"
                    />
                </div>

                <div class="col-md-8">
                    <div class="card-body text-dark pt-4" style="font-family:'Eina Regular',sans-serif;">
                    
                        <h5 class="card-title mb-1" style="font-family:'Eina Regular',sans-serif;">Your lunch order has been <strong style="font-family:'Eina Bold',sans-serif;color:#ffb22f;">scheduled</strong> for <strong style="font-family:'Eina Bold',sans-serif;color:#ffb22f;">23rd March</strong></h5>
                        
                        <hr style="border: 0;height: .8px;background-image: linear-gradient(to right, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.6));">
                        <h6 class="card-title text-dark" style="font-family:'Eina Bold',sans-serif;">2x Butter Chicken Naan</h6>
                            <h6>Butter chicken with naan, cilantro and yogurt garnish.</h6>
                            <button type="submit" name="submitCancel" class="btn mx-1 text-light hover-shadow mt-2 text-center" style="font-family:'Eina Regular',sans-serif;font-size:1rem;text-transform:none;background-color:#dd0000;">
                            <span><?xml version="1.0" encoding="UTF-8"?>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="23px" height="23px" viewBox="0 0 77 77" version="1.1" style="margin-bottom:.1rem;margin-left:-.2rem;margin-right:.2rem;">
                            <g id="surface1">
                            <path style=" stroke:none;fill-rule:nonzero;fill:rgb(80.076599%,0%,0%);fill-opacity:1;" d="M 71 38.5 C 71 56.449219 56.449219 71 38.5 71 C 20.550781 71 6 56.449219 6 38.5 C 6 20.550781 20.550781 6 38.5 6 C 56.449219 6 71 20.550781 71 38.5 "/>
                            <path style=" stroke:none;fill-rule:nonzero;fill:rgb(100%,100%,100%);fill-opacity:1;" d="M 45.550781 38.5 L 55.128906 28.921875 C 57.035156 27.015625 57.035156 23.898438 55.128906 21.988281 L 55.011719 21.871094 C 53.105469 19.964844 49.984375 19.964844 48.078125 21.871094 L 38.5 31.453125 L 28.921875 21.871094 C 27.015625 19.964844 23.898438 19.964844 21.988281 21.871094 L 21.871094 21.988281 C 19.964844 23.898438 19.964844 27.015625 21.871094 28.921875 L 31.449219 38.5 L 21.871094 48.078125 C 19.964844 49.984375 19.964844 53.105469 21.871094 55.011719 L 21.988281 55.128906 C 23.898438 57.035156 27.015625 57.035156 28.921875 55.128906 L 38.5 45.546875 L 48.078125 55.128906 C 49.984375 57.035156 53.105469 57.035156 55.011719 55.128906 L 55.128906 55.011719 C 57.035156 53.105469 57.035156 49.984375 55.128906 48.078125 L 45.550781 38.5 "/>
                            </g>
                            </svg></span>
                            Cancel order
                            </button>
                            
                    </div>
                    
                    </div>
                    
                </div>
        </div>

        <div class="card mb-5 w-75 h-100 shadow-lg hover-shadow" style="border-radius:1rem;">
            <div class="row g-2">
                <div class="col-md-4" style="border-radius:1rem!important;" >
                    <img
                        src="./img/butter-chicken.png"
                        alt="..."
                        class="card-img-top m-2"
                        style="border-radius: .5rem .5rem .5rem .5rem;margin-left:-.2rem;"
                    />
                </div>

                <div class="col-md-8">
                    <div class="card-body text-dark pt-4" style="font-family:'Eina Regular',sans-serif;">
                    
                        <h5 class="card-title mb-1" style="font-family:'Eina Regular',sans-serif;">Your lunch order has been <strong style="font-family:'Eina Bold',sans-serif;color:#ffb22f;">scheduled</strong> for <strong style="font-family:'Eina Bold',sans-serif;color:#ffb22f;">23rd March</strong></h5>
                        
                        <hr style="border: 0;height: .8px;background-image: linear-gradient(to right, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.6));">
                        <h6 class="card-title text-dark" style="font-family:'Eina Bold',sans-serif;">2x Butter Chicken Naan</h6>
                            <h6>Butter chicken with naan, cilantro and yogurt garnish.</h6>
                            <button type="submit" name="submitCancel" class="btn mx-1 text-light hover-shadow mt-2 text-center" style="font-family:'Eina Regular',sans-serif;font-size:1rem;text-transform:none;background-color:#dd0000;">
                            <span><?xml version="1.0" encoding="UTF-8"?>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="23px" height="23px" viewBox="0 0 77 77" version="1.1" style="margin-bottom:.1rem;margin-left:-.2rem;margin-right:.2rem;">
                            <g id="surface1">
                            <path style=" stroke:none;fill-rule:nonzero;fill:rgb(80.076599%,0%,0%);fill-opacity:1;" d="M 71 38.5 C 71 56.449219 56.449219 71 38.5 71 C 20.550781 71 6 56.449219 6 38.5 C 6 20.550781 20.550781 6 38.5 6 C 56.449219 6 71 20.550781 71 38.5 "/>
                            <path style=" stroke:none;fill-rule:nonzero;fill:rgb(100%,100%,100%);fill-opacity:1;" d="M 45.550781 38.5 L 55.128906 28.921875 C 57.035156 27.015625 57.035156 23.898438 55.128906 21.988281 L 55.011719 21.871094 C 53.105469 19.964844 49.984375 19.964844 48.078125 21.871094 L 38.5 31.453125 L 28.921875 21.871094 C 27.015625 19.964844 23.898438 19.964844 21.988281 21.871094 L 21.871094 21.988281 C 19.964844 23.898438 19.964844 27.015625 21.871094 28.921875 L 31.449219 38.5 L 21.871094 48.078125 C 19.964844 49.984375 19.964844 53.105469 21.871094 55.011719 L 21.988281 55.128906 C 23.898438 57.035156 27.015625 57.035156 28.921875 55.128906 L 38.5 45.546875 L 48.078125 55.128906 C 49.984375 57.035156 53.105469 57.035156 55.011719 55.128906 L 55.128906 55.011719 C 57.035156 53.105469 57.035156 49.984375 55.128906 48.078125 L 45.550781 38.5 "/>
                            </g>
                            </svg></span>
                            Cancel order
                            </button>
                            
                    </div>
                    
                    </div>
                    
                </div>
        </div>

        <div class="card mb-5 w-75 h-100 shadow-lg hover-shadow" style="border-radius:1rem;">

                <div class="col">
                    <div class="card-body text-dark pt-4" style="font-family:'Eina Regular',sans-serif;">
                    
                        <h5 class="card-title mb-1" style="font-family:'Eina Regular',sans-serif;">No scheduled items found. <a href="home.php"><strong style="font-family:'Eina Bold',sans-serif;color:#ffb22f;">Schedule items</strong></a></h5>
                            
                    </div>
                    
                    </div>
                    
        </div>


    </div>
</div>

<?php
  include "includes/footer.php";
?>