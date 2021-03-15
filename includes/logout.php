<?php
    //Change the active attribute to 0 in database
    //unset session
    //destroy session
    //redirect to the home page
    session_start();
    include "../backend/functions/db.php"; // Change this
    if(isset($_COOKIE['acc_tkn'])){
        $token = $_COOKIE['acc_tkn'];
        $sql =  "UPDATE `login` SET `active` = '0' WHERE `login`.`token` = '{$token}'";
        if(!$conn->query($sql)){
            //Raise warning on backend
        }
        
    }

    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie('acc_tkn', '', time() - 420000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );

    }
    session_destroy();
	
    header("Location: ../loginform.php");




?>