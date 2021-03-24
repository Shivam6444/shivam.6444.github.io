<?php
    session_start();
    include "./functions/functions.php";
    if(isset($_GET['order_id'])){
        if(!isset($_SESSION['user_id'])){
            die("ERROR");
        }

        
    }

?>