<?php
    include "../../../../backend/functions/db.php";
    include "../../../../backend/functions/functions.php";
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

        $chefs = get_chefs();


?>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<html>

<!-- BELOW IS THE HTML FORM THAT ADD ITEMS -->

<div class="jumbotron">
    <h1>ADD NEW ITEMS HERE</h1>
    <form>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Item Heading - Title</label>
                <input type="text" class="form-control" id="inputEmail4" placeholder="Eg. Butter Chicken" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Item description </label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="Eg. Cooked With Spices" required>
            </div>
            
            <div class="form-group">
                <label for="inputAddress">Select the image for the item</label>
                <input type="file" name="user_image" required>
            </div>
            <div class="form-group col-md-10">
                <label for="inputAddress2">Select the Chef that provide the item</label>
                <select id="inputState" class="form-control" required>
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
                    <input type="date" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">Slot</label>
                    <select id="inputState" class="form-control">
                        <option value="L">Lunch</option>
                        <option value="D">Dinner</option>
                    </select>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Add Item</button>
    </form>

</div>

<!-- BELOW IS THE HTML FORM THAT FETCH THE ORDERS -->

<div class="jumbotron">
<h1>Fetch Orders - View the Orders</h1>
    <form>
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
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                <label class="form-check-label" for="flexRadioDefault1">
                    Hub
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
                <label class="form-check-label" for="flexRadioDefault2">
                    chef
                </label>
            </div>
            
        </div>

        <div>
        
        </div>
    </div>
    </form>


</div>



</html>


<?php








    }





?>