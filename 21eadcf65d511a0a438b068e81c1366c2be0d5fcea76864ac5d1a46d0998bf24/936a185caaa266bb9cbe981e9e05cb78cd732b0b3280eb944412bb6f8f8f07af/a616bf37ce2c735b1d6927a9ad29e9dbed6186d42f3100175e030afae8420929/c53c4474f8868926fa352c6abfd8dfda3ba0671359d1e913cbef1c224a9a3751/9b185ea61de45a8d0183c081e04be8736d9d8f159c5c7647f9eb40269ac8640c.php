<?php
    include "../../../../backend/functions/db.php";
    // include ""
    include "../../../../backend/functions/functions.php";
    include "./functions.php";
    session_start();
    $access_granted = false;
    if(isset($_POST['pass'])){
        sanitize($_POST['pass']);
        if($_POST['pass'] != '4UtDZ5bKZ8wzR4T6'){
            die();
        }
        else{
            
            $_SESSION['admin_access_allocated'] = true;
            echo "Welcome Admin";
        }
    }

    if(!isset($_SESSION['admin_access_allocated'])){
        ?>
            <form method="post" action="">
                <label>Enter Password:</label>
                <input name="pass" type="pass">
                <button type="submit" name="pass_submit">Submit</button>
            </form>
        <?php
        die();
    }


    if($_SESSION['admin_access_allocated'] == true){

        $error = false;
        if(isset($_POST['fetch_order_submit'])){
            //Sanitize
            
            $start_date = $_POST['sDate'];
            $end_date = $_POST['eDate'];
            $sql = "";
            $val = $_POST['flexRadioDefault'];
            echo $val;
            // print_r($_POST);
            if($val == "hub"){
                $hubid = $_POST['hubid'];
                $sql = "SELECT distinct * from Menu, chef, order_table, user, hub
                where date between '{$start_date}' and '{$end_date}' 
                AND Menu.chef_id = chef.chef_id 
                AND Menu.item_id = order_table.item_id
                AND order_table.user_id = user.user_id
                AND order_table.hub_id = hub.hub_id
                AND hub_id = '{$hubid}'
                "
                ;
            }
            else if($val == "chef"){
                $chefid = $_POST['chefid'];
                $sql = "SELECT distinct * from Menu, chef, order_table, user, hub
                where date between '{$start_date}' and '{$end_date}' 
                AND Menu.chef_id = chef.chef_id 
                AND Menu.item_id = order_table.item_id
                AND order_table.user_id = user.user_id
                AND order_table.hub_id = hub.hub_id
                AND chef_id = '{$chefid}'
                "
                ;
            }
            else{
                $sql = "SELECT distinct * from Menu, chef, order_table, user, hub
                where date between '{$start_date}' and '{$end_date}' 
                AND Menu.chef_id = chef.chef_id 
                AND Menu.item_id = order_table.item_id
                AND order_table.user_id = user.user_id
                AND order_table.hub_id = hub.hub_id
                "
                ;
            }

            $res = $conn->query($sql);
            $data_of_fetch_order = array();
            while($row = $res->fetch_assoc()){
                array_push($data_of_fetch_order, $row);
            }

        }

        if(isset($_POST['insert_item_submit'])){
            $item_heading =     sanitize($_POST['item_heading']);
            $item_desc =        sanitize($_POST['item_desc']);
            $chefid =           sanitize($_POST['chefid']);
            $date =             sanitize($_POST['date']);
            $slot   =           sanitize($_POST['slot']);
            $img_name = uniqid().".png";
            $target_file     = "../../../../img/". $img_name;

            $post_image_filetype = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


            if($_FILES['item_image']['name'] == ""){
                $error = true;
            }
            
            $item_image = $_FILES['item_image']['name'];
            $item_image_temp = $_FILES['item_image']['tmp_name'];
            $item_image_size = $_FILES['item_image']['size'];

            if(!move_uploaded_file($item_image_temp, $target_file)){
                  $error = true;
            }
            
            $status = insert_item($conn,$item_heading, $item_desc, $img_name, $chefid, $date, $slot);
            if($status != true){
                $error = true;
            }

        }

        if(isset($_POST['search_customer_submit'])){
            $cus_name = sanitize($_POST['cusId']);
            print_r($_POST);
            if(isset($_POST['orderSchedulingDate']) && !empty($_POST['orderSchedulingDate'])){
            
                $schedule_date = sanitize($_POST['orderSchedulingDate']);
            }
            if(isset($_POST['orderDate']) && !empty($_POST['orderDate'])){
                $order_date = sanitize($_POST['orderDate']);
            }
            
                
            
            $customer_order_data = get_customer_data($cus_name, $order_date, $schedule_date);

            if($customer_order_data == false){
                $error = true;
            }
        }
        $chefs = get_chefs();
        $hubs = get_hubs(true, true);
?>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<html>

<!-- BELOW IS THE HTML FORM THAT ADD ITEMS -->

<div class="jumbotron">
    <h1>ADD NEW ITEMS HERE</h1>
    
    <form method="post" action="" enctype="multipart/form-data">

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Item Heading - Title</label>
                <input type="text" name="item_heading" class="form-control" id="inputEmail4" placeholder="Eg. Butter Chicken" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Item description </label>
                <input type="text" name="item_desc" class="form-control" id="inputPassword4" placeholder="Eg. Cooked With Spices" required>
            </div>
            
            <div class="form-group">
                <label for="inputAddress">Select the image for the item</label>
                <input type="file" name="item_image" required>
            </div>
            <div class="form-group col-md-10">
                <label for="inputAddress2">Select the Chef that provide the item</label>
                <select id="inputState" class="form-control" name="chefid" required>
                    <?php
                        foreach($chefs as $id => $name){

                    ?>  
                        <option value="<?php echo $id; ?>"><?php echo $id." - ".$name; ?></option>
                    <?php
                        }
                    ?>
                </select>
            </div>
            <div class="form-row">
                <div class="form-group col-md-8">
                    <label for="inputCity">Date</label>
                    <input type="date" name="date" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">Slot</label>
                    <select id="inputState" name="slot" class="form-control">
                        <option value="L">Lunch</option>
                        <option value="D">Dinner</option>
                    </select>
                </div>
            </div>
        </div>
        <p style="color:red">Note: Only PNG files for image</p>
        <button type="submit" name="insert_item_submit" class="btn btn-primary">Add Item</button>
    </form>

</div>

<!-- BELOW IS THE HTML FORM THAT FETCH THE ORDERS -->

<div class="jumbotron">
    <h1>Fetch Orders - View the Orders</h1>
    <form method="post" action="">
        <div class="form-row">
            <div class="col">
                <label>Start Date:</label>
                <input name="sDate" type="date" class="form-control" required>

                <label>End Date:</label>
                <input name="eDate" type="date" class="form-control" required>
            </div>
            
            <div class="col">
                <label>Search By:</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="hub">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Hub
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="chef">
                    <label class="form-check-label" for="flexRadioDefault2">
                        chef
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="none" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        None
                    </label>
                </div>
                <div class="form-group col-md-4">
                        <label for="inputState"><strong>Slot</strong></label>
                        <select id="inputState" class="form-control">
                            <option value="L">Lunch</option>
                            <option value="D">Dinner</option>
                        </select>
                </div>
            </div>

            <div class="form-group col-md-10">
                    <label for="inputAddress2">Select the hub if Searching by hub:</label>
                    <select id="inputState" class="form-control" name="hubid" required>
                    <option value="ALL" selected>--ALL HUBS--</option>
                        <?php
                            foreach($hubs as $hub){
                        ?>  
                            <option value="<?php echo $hub['hub_id']; ?>"><?php echo $hub['hub_id']." - ".$hub['name']." - ". $hub['location']; ?></option>
                        <?php
                            }
                        ?>
                    </select>
            </div>

            <div class="form-group col-md-10">
                    <label for="inputAddress2">Select the Chef if Searching by Chef:</label>
                    <select id="inputState" class="form-control" name="chefid" required>
                        <option value="ALL" selected>--ALL CHEFS--</option>
                        <?php
                            foreach($chefs as $id => $name){

                        ?>  
                            <option value="<?php echo $id; ?>"><?php echo $id." - ".$name; ?></option>
                        <?php
                            }
                        ?>
                    </select>
            </div>
            <input type="submit" name="fetch_order_submit" class="btn btn-primary">
        </div>
    </form>

    <table class="table table-hover table-dark">
        <thead>
            <tr>
            <th scope="col">order_no</th>
            <th scope="col">user_name(u.id)</th>
            <th scope="col">Item Name</th>
            <th scope="col">Chef name</th>
            <th scope="col">Hub Name</th>
            <th scope="col">qty#</th>
            </tr>
        </thead>
        <tbody>
        <?php
            if(isset($data_of_fetch_order)){
            
            foreach($data_of_fetch_order as $order){
        ?>
            <tr>
                <th scope="row"><?php  echo $order['order_id']; ?></th>
                <td><?php  echo $order['first_name']." ".$order['last_name']; ?></td>
                <td><?php  echo $order['item_heading']; ?></td>
                <td><?php  echo $order['chef_name']; ?></td>
                <td><?php  echo $order['hub_name']; ?></td>
                <td><?php  echo $order['qty']; ?></td>
            </tr>
        <?php 
            }
        }

        ?>
            <tr>
        </tbody>
    </table>
    
    
</div>

<div class="jumbotron">
    <h1>Search Customer History</h1>
    
    <form class="form-row" method="post" action="">
        <input type="text" name="cusId" class="form-control" placeholder="Phone number or email" required>
        <label>Date of Scheduling:(Optional)</label>
        <input type="date" name="orderSchedulingDate">
        <label>Order Date:(Optional)</label>
        <input type="date" name="orderDate">
        <button type="submit" class="btn btn-primary" name="search_customer_submit">Search</button>
    </form>
    <?php if(isset($customer_order_data)){  if(sizeof($customer_order_data) == 0){ echo "No data to fetch"; } ?>

        
        <div>
            <p>Customer Name: <?php echo $customer_order_data[0]['first_name']." ".$customer_order_data[0]['last_name']; ?><br></p>
            <p>Email: <?php echo $customer_order_data[0]['email']; ?><br></p>
            <p>Phone Number: <?php echo $customer_order_data[0]['phone']; ?><br></p>
            <p>Login Type: <?php echo $customer_order_data[0]['login_type']; ?><br></p>
            <p>Available Tokens: <?php echo $customer_order_data[0]['availableTokens']; ?><br></p>
            <p>Earned Tokens: <?php echo $customer_order_data[0]['earnedTokens']; ?><br></p>
        </div>
    <?php } ?>

    <h2>Customer Orders</h2>
    <table class="table table-hover table-dark">
        <thead>
            <tr>
                <th scope="col">Order ID</th>
                <th scope="col">item_heading(Chef Name)</th>
                <th scope="col">Hub Name</th>
                <th scope="col">QTY #</th>
                <th scope="col">Slot</th>
                <th scope="col">Order Date</th>
                <th scope="col">Scheduled On</th>
                <th scope="col">Cancled</th>
            </tr>
        </thead>
        <tbody>
        <?php
            // print_r($customer_data);
            if(isset($customer_order_data)){
            foreach($customer_order_data as $order){
        ?>
            <tr>
                <th scope="row"><?php  echo $order['order_id']; ?></th>
                <td><?php  echo $order['item_heading']."(".$order['chef_id'].")"; ?></td>
                <td><?php  echo $order['hub_id']; ?></td>
                <td><?php  echo $order['qty']; ?></td>
                <td><?php  echo $order['slot']; ?></td>
                <td><?php  echo $order['date']; ?></td>
                <td><?php  echo $order['schedule_time']; ?></td>
                <td><?php  if(empty($order['cancelTime'])) { echo "False"; } else { echo $order['cancelTime']; }?></td>
            </tr>
        <?php 
            }
        }
        ?>
            <tr>
        </tbody>
    </table>
</div>

</html>


<?php








    }





?>