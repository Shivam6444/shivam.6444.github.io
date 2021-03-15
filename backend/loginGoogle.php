<?php

// This script handles the login from google
session_start();

require_once "functions/functions.php";
require_once "./external_api_calls/googleLoginApi/config.php";

//Login with google 
if(isset($_GET["code"]))
{
  //To access the authorization code for an access token
  $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);
  if(!isset($token['error']))
  {
  
      $google_client->setAccessToken($token['access_token']);

      //Setting the $_SESSION_TOKEN
      $_SESSION['third_party_access_token'] = $token['access_token'];


      $google_service = new Google_Service_Oauth2($google_client);

      // Getting user info
      $data = $google_service->userinfo->get();

  
      if(!empty($data['given_name']))
      {
      $_SESSION['user_first_name'] = $data['given_name'];
      }

      if(!empty($data['family_name']))
      {
      $_SESSION['user_last_name'] = $data['family_name'];
      }

      if(!empty($data['email']))
      {
      $_SESSION['user_email_address'] = $data['email'];
      }

      if(!empty($data['gender']))
      {
      $_SESSION['user_gender'] = $data['gender'];
      }

      if(!empty($data['picture']))
      {
        $_SESSION['user_image'] = $data['picture'];
      }

      $_SESSION['password'] = 'NULL';
      $_SESSION['login_type'] = 1;
      //--- Loging In the User or Signing them up ---//
      if(new_user_by_email($data['email'])){
        header("Location: ../sign-up-number.php");
        die();
      }
      // For the old user
      else{
          $_SESSION['third_party_request'] = true;
          // header("Location: ./includes/login.php");
          login_third_party($_SESSION['user_email_address'], $_SESSION['third_party_access_token']);
          
          die();
      }
  }
  header("Location: ../loginform.php");
  die();
}

?>