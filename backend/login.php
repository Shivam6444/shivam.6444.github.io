
<?php
// This handles the login from native login form
    session_start();
    require_once "./functions/functions.php";

  
    if(isset($_SESSION['secret_token']) && isset($_POST['loginToken']) ){
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        $secret_token = $_POST['loginToken'];
        login($username, $password, $secret_token);
        die(); 
    }
?>