<?php


//include Google client library for PHP autoload file

require_once 'vendor/autoload.php';

//Make object of Google API client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('128786457084-dd546o24dunl4g4eebmng8sf165pcvsv.apps.googleusercontent.com');

//Set the oAuth 2.0 Client Secre
$google_client->setClientSecret('JU31mOWW1NmSCwZG5ZfGct6u');

//Set the OAuth 2.0 Redrict URI
$google_client->setRedirectUri('http://localhost:8888/mealful-web-app/backend/loginGoogle.php');

//to get the email and profile
$google_client->addScope('email');

$google_client->addScope('profile');

?>