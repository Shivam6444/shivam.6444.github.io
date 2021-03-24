<?php

function insert_item($conn, $item_heading, $item_desc, $img_name, $chefid, $date, $slot){
    if($slot == 'L'){
        $slot_time = "14:00:00";
    }
    else if($slot == 'D'){
        $slot_time = "20:00:00";
    }
    else{
        return false;
    }
    $img_name = "./img/".$img_name;
    
    $sql = "INSERT INTO `Menu` (`item_id`, `date`, `slot`, `slot_time`, `item_heading`, `item_desc`, `chef_id`, `item_img`, `is_Active`) 
    VALUES (NULL, '{$date}', '{$slot}', '{$slot_time}', '{$item_heading}', '{$item_desc}', '{$chefid}', '{$img_name}', '1');";

    if(!$conn->query($sql)){
        return false;
    }

    return true;
}


function get_customer_data($cus_id, $order_date, $schedule_date){
    include "../../../../backend/functions/db.php";
    echo $cus_id;
    echo "ORD DATE:".$order_date."<br>";
    echo $schedule_date;
    $cus_id = sanitize($cus_id);

    $sql = "SELECT * from Menu, user, order_table WHERE 
                 (user.phone like '%{$cus_id}%' OR user.email like '%{$cus_id}%') 
                and Menu.item_id = order_table.item_id 
                and order_table.user_id = user.user_id
                ";
    if(!empty($order_date)){
        echo "-----IN ORDER----";
        $sql = "SELECT * from Menu, user, order_table WHERE 
                Menu.date = '{$order_date}' 
                and (user.phone like '%{$cus_id}%' OR user.email like '%{$cus_id}%') 
                and Menu.item_id = order_table.item_id 
                and order_table.user_id = user.user_id
                ";
    }

    if(!empty($schedule_date)){
        $sql = "SELECT * from Menu, user, order_table WHERE 
                date(order_table.schedule_time) = '{$schedule_date}' 
                and (user.phone like '%{$cus_id}%' OR user.email like '%{$cus_id}%') 
                and Menu.item_id = order_table.item_id 
                and order_table.user_id = user.user_id
                ";
    }
    $res = $conn->query($sql);
    $data = array();
    while($row = $res->fetch_assoc()){
        array_push($data, $row);
    }

    if(!$res){
        
        return false;
    }
    $conn->close();
    return $data;
        
  
}

?>