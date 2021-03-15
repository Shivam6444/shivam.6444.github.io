<?php

    include "./external_api_calls/facebookLoginApi/config.php";
    require_once "./functions/functions.php";
    $facebook_output = '';

    $facebook_helper = $facebook->getRedirectLoginHelper();

    if(isset($_GET['code'])){
        if(isset($_SESSION['third_party_access_token'])){
            $access_token = $_SESSION['third_party_access_token'];
        }
        else{
            $access_token = $facebook_helper->getAccessToken();
            $_SESSION['third_party_access_token'] = $access_token;
            $facebook->setDefaultAccessToken($_SESSION['third_party_access_token']);
        }

        $graph_response = $facebook->get("/me?fields=first_name,last_name,email", $access_token);

        $facebook_user_info = $graph_response->getGraphUser();

        if(!empty($facebook_user_info['id'])){
            $_SESSION['user_image'] = 'http://graph.facebook.com/'.$facebook_user_info['id'].'/picture';
        }

        if(!empty($facebook_user_info['name'])){
            $_SESSION['user_name'] = $facebook_user_info['name'];
        }
        if(!empty($facebook_user_info['first_name'])){
            $_SESSION['user_first_name'] = $facebook_user_info['first_name'];
        }
        if(!empty($facebook_user_info['last_name'])){

            $_SESSION['user_last_name'] = $facebook_user_info['last_name'];
            
        }
        if(!empty($facebook_user_info['email'])){
            $_SESSION['user_email_address'] = $facebook_user_info['email'];

        }

       

        $_SESSION['password'] = 'NULL';
        $_SESSION['login_type'] = 2;
        // --- Loging In the User or Signing them up ---//
        if(new_user_by_email($_SESSION['user_email_address'])){
            header("Location: ../sign-up-number.php");
            die();
          }
          // For the old user
          else{
              $_SESSION['third_party_request'] = true;
              login_third_party($_SESSION['user_email_address'], $_SESSION['third_party_access_token']);
              die();
          }
       
    }
?>