<?php

session_start();




require_once "./backend/functions/functions.php";

require_once "./includes/verification.php";
// die();

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Mealful</title>
    <!-- MDB -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/mdb.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/3.0.0/jquery.payment.min.js"></script>
    <!-- Classes based on the file -->
    <?php
        
        if($current_file_name == 'loginform.php' || $current_file_name == 'sign-up-number.php' || $current_file_name == 'sign_up.php'){
            echo "<link rel=\"stylesheet\" href=\"css/login-form.css\" />";
        }
        else if($current_file_name == 'home.php'){
            echo "<link rel=\"stylesheet\" href=\"css/home.css\" />";
        }
        else if($current_file_name == 'plans.php'){
            echo "<link rel=\"stylesheet\" href=\"css/plans_page.css\" />";
        }
        else if($current_file_name == 'checkout.php'){
            echo "<link rel=\"stylesheet\" href=\"css/checkout.css\" />";
        }
    ?>

  </head>
  <body>

<header>


<!-- CONDITION BASED NAV BAR CODE BELOW -->

    <?php
       


        if(!$loggedIn){
            ?>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="../home.html" id="nav-logo">
                    <img
                    src="./img/mealful-22.svg"
                    height="38"
                    alt="" 
                    />
                </a>
            </div>
        </nav>

        <?php
        }
        else{
            //Cannot go to login i
            if($current_file_name == 'loginform.php'){
                header("Location: ./home.php");
            }
            if($current_file_name == 'index.php'){
                header("Location: ./home.php");
            }
    ?>
            <!--Navbar and Logo-->
            <nav class="navbar navbar-expand-lg navbar-white bg-white fixed-top shadow-md">
                <div class="container">
                <a class="navbar-brand" href="#" id="nav-logo-home">
                    <img
                    src="./img/mealful-22.svg"
                    height="38"
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
                    <li class="nav-item" id="calendar-upcoming">
                        <a class="nav-link text-dark btn-rounded waves-effect" href="#" id="" style="font-family:'Eina Regular', sans-serif;margin-top:.5rem;margin-right:2rem;padding-left:1rem;padding-right:1rem;border-radius:10rem;">Scheduled
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a
                        class="nav-link dropdown-toggle d-flex align-items-center text-dark"
                        href="#"
                        id="navbarDropdownMenuLink"
                        role="button"
                        data-mdb-toggle="dropdown"
                        aria-expanded="false"
                        >
                        <img
                            src="./img/users.svg"
                            class="rounded-circle"
                            height="45"
                            width="45"
                            alt=""
                            loading="lazy"
                            id="profile-img"
                        />
                        <!--Extract first name using string trim in PHP? Function to limit name size to 16 so that it doesnt push the margin way beyond, if first name more than 16 characters, add ........-->
                        Hello, <?php echo $_SESSION['fname']; ?>
                        </a>
                        <ul class="dropdown-menu shadow-lg" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#" id="menu-link1">Profile</a></li>
                        <li><a class="dropdown-item" href="#" id="menu-link1">Account Settings</a></li>
                        <li><a class="dropdown-item" href="#" id="menu-link1">Order History</a></li>
                        <li><a class="dropdown-item" href="./includes/logout.php" id="menu-link2">Logout</a></li>
                        </ul>
                    </li>
                    </ul>
                   
                    </div>
                </div>
            </nav>
                
    <?php
        }
    ?>
</header>  
