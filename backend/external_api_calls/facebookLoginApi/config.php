<?php
    // session_start();
    require_once 'vendor/autoload.php';
    

    $facebook = new \Facebook\Facebook(([
        'app_id'    => '521208529041533',
        'app_secret' => '3e5402239cb42daf469fc995910deba0',
        'default_graph_version' => 'v2.10'

    ]));

?>