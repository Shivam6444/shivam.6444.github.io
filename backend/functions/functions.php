<?php



/*
    * returns:  
    - session object if the session is valid
    - False is session is invalid

*/
function verifyLogin($access_token){
    include "db.php";
    $sql = "SELECT * from login WHERE token = '{$access_token}' && active = '1'";
    $login_result = $conn->query($sql);
    $result = $conn->query($sql);

    if($result->num_rows == 1){
        $user_id = $result->fetch_assoc()['user_id'];
 
        $sql = "SELECT `user_id`,`first_name`, `last_name`, `email`, `phone` from user WHERE user_id = '{$user_id}'";
        $result = $conn->query($sql);

        if($result->num_rows == 0){
            //Raise a backend warning -- admin side
            return false;
        }
        else{

            $data = $result->fetch_assoc();
            return $data;
        }
    
    }
    else{
        //
        return false;
    }
 
}

/*
    Takes in email
    Returns:
    - true if user is new
    - False if user is old
*/

function new_user_by_email($email){
    include "db.php";
    $sql = "SELECT * from user WHERE email = '{$email}'";
    $result = $conn->query($sql);
    if($result->num_rows == 1){
        return false;
    }else{
        return true;
    }
}
/*
    Takes in email
    Returns:
    - true if user is new
    - False if user is old
*/
function new_user_by_phone($phone){
    include "db.php";
    $sql = "SELECT * from user WHERE phone = '{$phone}'";
    $result = $conn->query($sql);
    if($result->num_rows == 1){
        return false;
    }else{
        return true;
    }
}
/*
    Adds a user and logs him in

    Params: 
    First name, Last Name, Email, Phone Number, Password, Login Type, access token for login
    Login Type: 
                0 -> Native
                1 -> Google
                2 -> Facebook

    NOTES:
    1- Functions require a valid email address, caller need to provide a valid email
    2- Same for phone number
*/

function add_user($fname, $lname, $email, $phone_number, $password, $login_type, $access_token, $secret_token){
    include "db.php";
    
    $fname =  adjust_length(sanitize($fname));
    $lname = adjust_length(sanitize($lname));
    $email = sanitize($email);
    $phone_number = sanitize($phone_number);
    $login_type = sanitize($login_type);


    //if its not coming from a third party
    if($password != 'NULL'){
        //hash the password
        $password = hash('sha256', $password);

    }

    // ---- SET THE NULL CONDITIONS

    $sql = "INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `email`, `phone`, `password`, 
    `login_type`) VALUES (NULL, '{$fname}', '{$lname}', '{$email}', '{$phone_number}', '{$password}', '{$login_type}')";
    
    if($conn->query($sql)){
        login_third_party($phone_number, $access_token);
        die();
    }
    else{
        // RAISE A TECH ISSUE EMAIL -- DB connection error
        echo "WARNING";
        header("../loginform.php?loginError=true");
        die();
    }
    

}

//------------------LOGIN HANDLERS FOR NATIVE AND THIRD PARTIES---------------------//

/*
    When this function is called the user is already authenticated from a thrid party

    params:


    Return:
    Null, Redirection to Home.php

*/

function login_third_party($username, $access_token){
    session_start();
   
    include "db.php";
    unset($_SESSION['third_party_access_token']);
    $sql = "SELECT * from user WHERE email ='{$username}' OR phone = '{$username}'"; // -- Check whether its phone or email
    $login_result = $conn->query($sql);
    
    
    while($row = $login_result->fetch_assoc()){
        
        $db_id = $row['user_id'];
        $db_email = $row['email'];
        $db_password = $row['password'];
        $db_fname = $row['first_name'];
        $db_lname = $row['last_name'];
        


        date_default_timezone_set("America/Halifax");
        $current_time = date("d-M-Y") . ", at " . date("h:i:sa");

        $cookie_value = hash('sha256', $db_id . $db_email . $current_time); // Hashing cookie for every user

        $cookie_name = "acc_tkn";
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); //--Increase the time -- Its one day
        
        //Create entry of the userlogin in the database
        $sql = "INSERT INTO `login` (`id`, `user_id`, `token`, `time`, `active`) VALUES (NULL, '{$db_id}', '{$cookie_value}', '{$current_time}', '1');";
        if($conn->query($sql)){
            header("Location: ../home.php");
            die();
        }
        else{
            header("Location: ../loginform.php?loginError=true"); 
            die();
        }
    }
    
}

/*
    Login function logs in the user and redirect to the home page

    THIS LOGIN FUNCTION IS USED WHEN SOMEONE IS MAKING REQUEST FROM OUR LOGIN FORM
    NOT GOOGLE OR FB

    Params:
        $username -> Belongs to either phone number or email
        $password

    Return:
        NULL, Redirect to the homepage and sets required cookies
*/

function login($username, $password, $secret_token){
    session_start();
    include "db.php";

    if(isset($_SESSION['secret_token'])){
        
        if(hash_equals($_SESSION['secret_token'], $secret_token)){
            $username = sanitize($username);
            $password = sanitize($password);
            
            if($username != "" || $password != ""){
                
                $sql = "SELECT * from user WHERE email ='{$username}' OR phone = '{$username}'"; // -- Check whether its phone or email
                $login_result = $conn->query($sql);
                
                if(!$login_result){
                    //RAISE A WARNING ON THE BACKEND -- Connection fail to database
                    header("Location: ../loginform.php?loginError=true");
                    die();

                }
                //Username or password incorrect warning
                if($login_result->num_rows == 0){
                    // Incorrect username or password
                    header("Location: ../loginform.php?loginError=true");
                    die();
                }
                if($login_result->num_rows > 1){
                    //RAISE A WARNING ON THE BACKEND -- Multiple users with same ID
                    header("Location: ../loginform.php?loginError=true");
                    die();
                }
                
             
                // Native login
                while($row = $login_result->fetch_assoc()){
                    $db_id = $row['user_id'];
                    $db_email = $row['email'];
                    $db_password = $row['password'];
                    $db_fname = $row['first_name'];
                    $db_lname = $row['last_name'];
                    $login_type = $row['login_type'];
                    
                    if($login_type == 0){
                    //----- CODE FOR MATCHING THE PASSWORD AND  SETTING COOKIES ---//
                        $password_compare = password_verify($password, $db_password);
                        if(!hash_equals($db_password, hash('sha256', $password)) ){
                            // Username or Password is incorrect
                            header("Location: ../loginform.php?loginError=true");
                            die();
                        }
                        else{
                            date_default_timezone_set("America/Halifax");
                            $current_time = date("d-M-Y") . ", at " . date("h:i:sa");
            
    
                            $cookie_value = hash('sha256', $db_id . $db_email . $current_time); // Hashing cookie for every user
                    
                            $cookie_name = "acc_tkn";
                            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); //--Increase the time -- Its one day
                            
                            //Create entry of the userlogin in the database
                            $sql = "INSERT INTO `login` (`id`, `user_id`, `token`, `time`, `active`) VALUES (NULL, '{$db_id}', '{$cookie_value}', '{$current_time}', '1');";
                            if($conn->query($sql)){
                                header("Location: ../home.php");
                                die();
                            }
                            else{
                                //DB ERROR WARNING ON BACKEND
                                header("Location: ../loginform.php?loginError=true");
                                die();
                            }
                        }
                    }
                    // IF THE PERSON DID NOT LOGIN NATIVELY BUT THE PASSWORD IS SET FOR HIM
                    else if($login_type == 1 || $login_type == 2){
                        // echo "THE USER DID NOT LOGIN WITH US ";
                        // die();
                        
                        if($db_password == 'NULL'){
                            // Redirect the user to login page with Redirect message
                            if($login_type == 1){
                                header("Location: ../loginform.php?thirdParty=Ggl");
                                die();
                            }
                            else if($login_type == 2){
                                header("Location: ../loginform.php?thirdParty=fb");
                                die();
                            }  
                            header("Location: ../loginform.php?loginError=true");
                            die();
                        }
        
                        //----- CODE FOR MATCHING THE PASSWORD AND  SETTING COOKIES ---//
                        $password_compare = password_verify($password, $db_password);
    
                        if(!hash_equals($db_password, hash('sha256', $password)) ){
                            //Incorrect Username or password
                            header("Location: ../loginform.php?loginError=true");
                            die();
                        }
                        else{
                            date_default_timezone_set("America/Halifax");
                            $current_time = date("d-M-Y") . ", at " . date("h:i:sa");
            
    
                            $cookie_value = hash('sha256', $db_id . $db_email . $current_time); // Hashing cookie for every user
                    
                            $cookie_name = "acc_tkn";
                            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); //--Increase the time -- Its one day
                            
                            //Create entry of the userlogin in the database
                            $sql = "INSERT INTO `login` (`id`, `user_id`, `token`, `time`, `active`) VALUES (NULL, '{$db_id}', '{$cookie_value}', '{$current_time}', '1');";
                            if($conn->query($sql)){
                                header("Location: ../home.php");
                                die();
                            }
                            else{
                                // RAISE A WARNING ON BACKEND -- DB ERROR
                                header("Location: ../loginform.php?loginError=true");
                                die(); 
                            }
                        }
                    }
                }
    
                
            }
                


        }

    }
    
       
    
    header("Location: ../loginform.php?loginError=true");
    die();
   
}



//------------------LOGIN HANDLERS FOR NATIVE AND THIRD PARTIES -- END---------------------//




/*
    Twilio API call

*/
function send_sms($phone_number, $message){

    require('./external_api_calls/twilioApi/vendor/autoload.php');
    $twilioAccountSid = 'AC8f15cb22042f498a9b50d6bd3ebbdfa7';
    $twilioAccountToken = '750bebe47a413c69132130a598e06d50';
    
    $fromNumber = '+19027060143'; // From Twilio
    $toNumber = sanitize($phone_number);

    $message = sanitize($message);

    $client = new Twilio\Rest\Client($twilioAccountSid, $twilioAccountToken);

    // echo $message;
    // echo $toNumber;
    // $client->messages->create($toNumber, [
    //     'from' => $fromNumber,
    //     'body' => $message
    // ]);


}




/*

    This function fixes the phone number.
    1- it make sure the phone number is 10 digits

    params:
    area code, phone number

    return:
    fixed phone number if valid

    false if not valid

*/

function fix_phone_number($area_code, $phone_number){
    
    echo "The request has been made";

    // echo $phone;
    // echo $area_code;
    if($area_code == '+1'){

        $phone = sanitize(str_replace("-", "", $phone_number));

        if(strlen($phone) == 10){
            if(is_numeric($phone)){
                return $area_code.$phone;
            }
            else{
                return false;
            }
            
        }
        else{
            return false;
        }
        
    }
    else{
        return false;
    }
}




//----- View fetch calls ---//

//Verify the dates, such that old menu is not fetched
function get_items($date, $slot){

    include "db.php";
    
    $date = sanitize($date);
    $slot = sanitize($slot);
    $slot = strtoupper($slot[0]);
    
    if($date != "" && $slot != ""){

        $start_date = (string)date("Ymd", time()+(86400 * 0)); //Get today's date
        $end_date = (string)date("Ymd", time()+(86400 * 6));
       
        
        //Date have to be in the range of 7 days
        if(($date >= $start_date) && ($date <= $end_date)){
          
            if(is_numeric($date) && (strlen((string)$date) == 8)){
                //Slot data check
                
                if($slot == 'L' || $slot == 'D'){
                    $sql = "SELECT * from Menu where date='{$date}' and slot='{$slot}'";
                    $result = $conn->query($sql);

                    if($result->num_rows != 0){
                        return $result->fetch_assoc();
                    }
                }
            }
        }
    }
    return false;
}


//--------- HELPER FUNCTIONS ---------//
function sanitize ($sanitizeThisThing) {
    $sanitizedThing = trim($sanitizeThisThing);
    $sanitizedThing = stripslashes($sanitizedThing);
    $sanitizedThing = htmlspecialchars($sanitizedThing);

    return $sanitizedThing;
}

// Decrease the len if its too big for the database
function adjust_length($input){
    if(strlen($input) > 12){
        $input = substr($input, -11);
        $input += ".";
    }
    return $input;
}

//------------END HELPER FUNCTIONS ----------//




?>