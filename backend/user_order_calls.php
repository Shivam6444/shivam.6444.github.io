<?php
    ob_start();
    session_start();
    include "./functions/functions.php";
    if(isset($_GET['order_id'])){
        $order_id = sanitize($_GET['order_id']);
        if(!isset($_SESSION['user_id'])){
            die("ERROR");
        }

        $status = cancel_order($_SESSION['user_id'],$order_id);

        if($status == false){
            header("Location: ../scheduled.php?canceled=false");
            die();
        }
        else{
            header("Location: ../scheduled.php?canceled=true");
            die();
        }
    }

?>