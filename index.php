<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Mealful</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@500;600&display=swap" rel="stylesheet">
    <!-- MDB -->

    <link rel="stylesheet" href="css/mdb.min.css" />
    <link rel="stylesheet" href="css/home.css" />
  </head>
  <body>
 
    <header>
        <!--Navbar and Logo-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
          <div class="container">
            <a class="navbar-brand" href="#" id="nav-logo">
              <img
                src="img/mealful (1).svg"
                height="50"
                alt="" 
              />
            </a>
            <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <i class="fas fa-bars"></i>
          </button>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <!--Avatar-->
              <ul class="navbar-nav d-flex flex-row ms-auto mb-2 mb-lg-0" id="avatar-menu">
                <li class="nav-item" id="login-link">
                  <a class="nav-link text-black" href="./loginform.php" id="login-link-edit" style="font-family: 'DM Sans',sans-serif; font-weight:bold; font-size: 1.1rem; margin-right: .5rem;">Log in
                  </a>
                </li>
                <li>
                  <button class="btn btn-black" href="#!" style="font-family: 'DM Sans';text-transform: initial;font-size:1rem;border-radius:.5rem;font-weight: bold;color: white;">Sign up</button>
                </li>
              </ul>
            </nav>
          </div>
        </div>
    </header>  


    <!--Banner-image-->
        <div class = 'container'>
          <div
          class="p-5 text-left bg-image mb-5"
          id="jumbotron"
          style="
            background-image: url('./img/b.png');
            width: 100%;
            height: 300px;
            background-position: bottom;
          "
        >
            <div class="d-flex justify-content-left align-items-center h-100">
              <div class="text-black text-left" style="font-family: 'DM Sans', sans-serif;">
                <h1 class="mb-2" style="font-weight: 500; margin-left: 3rem; font-size:2.rem;" id="banner-image-heading">It's on us, enjoy your first week for $5.99 a meal</h1>
                
                <p class="mb-3" 
                style="margin-left: 3rem; 
                font-size:1.25rem;"
                >Valid only for new users.
                </p>

                <a class="btn btn-lg text-black" id="single-meal-button" href="#!" role="button" style="margin-left: 3rem;text-transform: initial;font-size:1.25rem;border-radius:.5rem; background-color: #ffd663;font-weight: bold;" id="banner-btn">Sign up to start ordering</a
                >
              </div>
          </div>
        </div>
        </div>



          <div class="container">
          <h5 class = "text-left text-black mb-2" style="font-size: 2.5rem; letter-spacing: -.05rem; font-weight: 500;">Lunch menu</h5>
          <hr class ="mb-3" id="menu-divider"></hr>

          <div class="row row-cols-1 row-cols-md-4 g-4 mb-5" style="font-family: 'DM Sans', sans-serif;">

            <div class="col">
              <div class="card h-100" style="border-radius: .5rem; cursor:pointer;">
                <img
                  src="./img/butter-chicken.png"
                  class="card-img-top"
                  alt="..."
                  style="border-radius: .5rem .5rem 0rem 0rem;"
                />
                <div class="card-body hover-shadow" style="border-radius: 0rem 0rem .5rem .5rem;">
                  <h5 class="card-title text-black"style="font-weight: bold;" >Butter Chicken Naan</h5>
                  <p class="card-title text-dark">by <span style="font-weight: bold;">Khana Khazana</span></a></p>
                  <p class="card-text text-dark">
                    Butter Chicken cooked with traditional indian spices served with tandoori naan.
                  </p>
                  <div class="col text-center">
                  <button type="button" class="btn btn-lg btn-black btn-rounded" style="text-transform:initial;width:100%;font-size: 1rem;">Schedule</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card h-100" style="border-radius: .5rem; cursor:pointer;">
                <img
                  src="./img/chicken-noodle.png"
                  class="card-img-top"
                  alt="..."
                  style="border-radius: .5rem .5rem 0rem 0rem;"
                />
                <div class="card-body hover-shadow" style="border-radius: 0rem 0rem .5rem .5rem;" >
                  <h5 class="card-title text-black" style="font-weight: bold;">Chicken Udon Noodle Soup</h5>
                  <p class="card-title text-dark">by <span style="font-weight: bold;">Buddah Ramen</span></a></p>
                  <p class="card-text text-dark">
                    Chicken Udon Noodle served with a poached eggs and vegetables and rice.
                  </p>
                  <div class="col text-center">
                  <button type="button" class="btn btn-lg btn-black btn-rounded" style="text-transform:initial;width:100%; font-size: 1rem;">Schedule</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card h-100" style="border-radius: .5rem; cursor:pointer;">
                <img
                  src="./img/butter-chicken.png"
                  class="card-img-top"
                  alt="..."
                  style="border-radius: .5rem .5rem 0rem 0rem;"
                />
                <div class="card-body hover-shadow" style="border-radius: 0rem 0rem .5rem .5rem;">
                  <h5 class="card-title text-black"style="font-weight: bold;" >Butter Chicken Naan</h5>
                  <p class="card-title text-dark">by <span style="font-weight: bold;">Khana Khazana</span></p>
                  <p class="card-text text-dark">
                    Butter Chicken cooked with traditional indian spices served with tandoori naan.
                  </p>
                  <div class="col text-center">
                  <button type="button" class="btn btn-lg btn-black btn-rounded" style="text-transform:initial;width:100%; font-size: 1rem;">Schedule</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card h-100" style="border-radius: .5rem; cursor:pointer;">
                <img
                  src="./img/chicken-noodle.png"
                  class="card-img-top"
                  alt="..."
                  style="border-radius: .5rem .5rem 0rem 0rem ;"
                />
                <div class="card-body hover-shadow" style="border-radius: 0rem 0rem .5rem .5rem;">
                  <h5 class="card-title text-black" style="font-weight: bold;">Chicken Udon Noodle Soup</h5>
                  <p class="card-title text-dark">by <span style="font-weight: bold;">Khana Khazana</span></p>
                  <p class="card-text text-dark" style="font-weight: 1rem;">
                    Chicken Udon Noodle served with a poached eggs and vegetables and rice.
                  </p>
                  <div class="col text-center">
                  <button type="button" class="btn btn-lg btn-black btn-rounded" style="text-transform:initial;width:100%; font-size: 1rem;">Schedule</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card h-100" style="border-radius: .5rem; cursor:pointer;">
                <img
                  src="./img/butter-chicken.png"
                  class="card-img-top"
                  alt="..."
                  style="border-radius: .5rem .5rem 0rem 0rem ;"
                />
                <div class="card-body hover-shadow" style="border-radius: 0rem 0rem .5rem .5rem;">
                  <h5 class="card-title text-black" style="font-weight: bold;" >Butter Chicken Naan</h5>
                  <p class="card-title text-dark">by <span style="font-weight: bold;">Khana Khazana</span></p>
                  <div class="col text-center">
                  <button type="button" class="btn btn-lg btn-black btn-rounded" style="text-transform:initial;width:100%; font-size: 1rem;">Schedule</button>
                  </div>
                </div>
              </div>
            </div>



          </div>
          </div>


        <!-- Footer -->
        <footer class="text-light footer" style="background-color: rgb(31, 31, 31);">
          <!-- Grid container -->
          <div class="container p-4">

            <a class="navbar-brand" href="#" id="footer-logo">
              <img
                src="img/MEALFUL (2).svg"
                height="40"
                alt="" 
              />
            </a>
            <hr>
          </hr>



            <!-- Section: Links -->
            <section class="">
              <!--Grid row-->
              <div class="row">
                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                  <h5>Get to know us</h5>

                  <ul class="list-unstyled text-left mb-0">
                    <li>
                      <a href="#!" class="text-white">About us</a>
                    </li>
                    <li>
                      <a href="#!" class="text-white">Partners</a>
                    </li>
                    <li>
                      <a href="#!" class="text-white">Careers</a>
                    </li>
                  </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                  <h5>Help</h5>

                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#!" class="text-white">Account details</a>
                    </li>
                    <li>
                      <a href="#!" class="text-white">Order History</a>
                    </li>
                    <li>
                      <a href="#!" class="text-white">Customer Support</a>
                    </li>
                    <li>
                      <a href="#!" class="text-white">FAQS</a>
                    </li>

                  </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                  <h5>Let's do business</h5>

                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#!" class="text-white">Cook for us</a>
                    </li>
                    <li>
                      <a href="#!" class="text-white">Become a hub partner</a>
                    </li>
                    <li>
                      <a href="#!" class="text-white">General inquries</a>
                    </li>
                  </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                  <h5>Sign up for our newsletter</h5>
                                        <!-- Section: Social media -->
                      <section class="mb-5 text-left" style="border-bottom: 1px 1px solid #202020;">
                        <!-- Facebook -->
                        <a class="btn btn-outline-white btn-floating m-2" href="#!" role="button"
                          ><i class="fab fa-facebook-f"></i
                        ></a>

                        <!-- Twitter -->
                        <a class="btn btn-outline-white btn-floating m-2" href="#!" role="button"
                          ><i class="fab fa-twitter"></i
                        ></a>


                        <!-- Instagram -->
                        <a class="btn btn-outline-white btn-floating m-2" href="#!" role="button"
                          ><i class="fab fa-instagram"></i
                        ></a>

                        <!-- Linkedin -->
                        <a class="btn btn-outline-white btn-floating m-2" href="#!" role="button"
                          ><i class="fab fa-linkedin-in"></i
                        ></a>
                      </section>

                </div>
                <!--Grid column-->
              </div>
              <!--Grid row-->
            </section>
            <!-- Section: Links -->
          </div>
          <!-- Grid container -->

          <!-- Copyright -->
          
          <div class="text-left p-2" style="background-color: rgb(24, 24, 24);">
          <div class="container">
            <h6 class="text-white" style="font-family: 'DM Sans',sans-serif; font-size: 1rem;" href="https://mdbootstrap.com/">© 2021 Copyright: Mealful Inc.</h6>
            </div>
          </div>
          <!-- Copyright -->
        </footer>
        <!-- Footer -->





    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
  </body>
</html>
