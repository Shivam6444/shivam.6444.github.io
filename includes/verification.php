<?php
//--- Required common variables


    date_default_timezone_set("America/Halifax");
    $current_file_name = basename($_SERVER['PHP_SELF']);
    $secretToken = hash('sha256', uniqid());

    $_SESSION['secret_token'] = $secretToken;

    $loggedIn = false;// By default person is not logged in
    $FILES_ACCESSIBLE_WITHOUT_LOGIN = array("loginform.php", "sign_up.php", "sign-up-number.php", "index.php");


//-------------------------------------------------Login verification----------------------//

    if(isset($_COOKIE['acc_tkn'])){
        
        //The function validate the cookie from database and returns the data if its active
        $data = verifyLogin($_COOKIE['acc_tkn']);
        if($data != false){
            $_SESSION['fname'] = $data['first_name'];
            $_SESSION['lname'] = $data['last_name'];
            $_SESSION['email'] = $data['email'];
            $_SESSION['phone'] = $data['phone'];
            $loggedIn = true;
        }
        else{
            // If token is invalid from the database, clear the cookies
            header("Location: ./includes/logout.php");
            die();
        }
    } 

//------------------------------------------------------------------------------------------------//
//--------------------------BELOW: VERIFICATION FOR PAGE AUTHORIZATION BASED ON LOGIN-------------//
//------------------------------------------------------------------------------------------------//

//---------------UNAUTHORIZED WHEN LOGGED IN-------------//

    // Cannot go to sign-up, and login pages, if already logged in
    if(
        ($loggedIn == true) &&
        (in_array($current_file_name, $FILES_ACCESSIBLE_WITHOUT_LOGIN))
    ){
        header("Location: ./home.php");
        die();
    }

    
//---------------UNAUTHORIZED WHEN NOT LOGGED IN-------------//
    if(
        ($loggedIn != true) &&
        (!(in_array($current_file_name, $FILES_ACCESSIBLE_WITHOUT_LOGIN)))
      ){
        // echo $current_file_name;
        // echo is_array($current_file_name, $FILES_ACCESSIBLE_WITHOUT_LOGIN);
        header("Location: ./includes/logout.php");
        die();
        
    }
    
//--------- For the sign-up-number page-------//
    if(
        ($current_file_name == 'sign-up-number.php')
    ){
        if(!(
            isset($_SESSION['user_first_name']) &&
            isset($_SESSION['user_last_name']) &&
            isset($_SESSION['user_email_address'])
        ))
        {
            
            header("Location: loginform.php");
            die();
        }
    }



?>