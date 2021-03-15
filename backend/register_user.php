<?php
    session_start();

    /**
     * Write a procedure to validate the request
     */

    require_once "./functions/functions.php";

    //Order of request matter 

    if(isset($_GET['change_phone_number'])){
        unset($_SESSION['phone']);
        unset($_SESSION['otp_code']);
        header("Location: ../sign-up-number.php");
    }

    //-- When OTP is submitted --//
    if(isset($_POST['otp'])){
        //-- MATCH the input PHONE Number with Session phone number
        $otp = sanitize($_POST['otp']);
        if((strlen($otp) == 4) && (is_numeric($otp)) && ($otp == $_SESSION['otp_code'])){
            
            $login_type = $_SESSION['login_type']; // GOOGLE LOGIN TYPE
            $fname = $_SESSION['user_first_name'];
            $lname = $_SESSION['user_last_name'];
            $email = $_SESSION['user_email_address'];
            $password = $_SESSION['password'];
            $phone_number = $_SESSION['phone'];
            $access_token = $_SESSION['third_party_access_token'];
            
            unset($_SESSION['otp_code']);
            
            add_user($fname, $lname, $email, $phone_number, $password, $login_type, $access_token, $_SESSION['secret_token']);
            
            die();
            
        }
        else{
            header('Location: ../sign-up-number.php?otp_error=true');
            die();
        }

     
    }



    //-- This should be in the last -- add one more condition here
    if(isset($_POST['phone_number'])){

        $phone = $_POST['phone_number'];
        $area_code = $_POST['area_code'];
        $phone = fix_phone_number($area_code, $phone);
        if($phone == false){
         
            header('Location: ../sign-up-number.php?phone_number_error=true');
            die();
        }
        
     
        $_SESSION['phone'] = $phone;
        
        if(new_user_by_phone($phone)){

            /* ============  Messaging ===============*/
            $digits = 4;
            //-- STORE THE OTP in THE SESSION
            $_SESSION['otp_code'] = rand(pow(10, $digits-1), pow(10, $digits)-1);
            

            $message = $_SESSION['otp_code']." is your Mealful verfication code.";

            //--Make a Twilio message request Here
            send_sms($_SESSION['phone'], $message);
            
            /* =====================================*/

            header("Location: ../sign-up-number.php");
            die();
            
        }
        else{

            unset($_SESSION['phone']);
            unset($_SESSION['otp_code']);
            header("Location: ../sign-up-number.php?phone_exist=true");
            die();
        }

  
    }


    //--------- Native form login ------//
    if(isset($_POST['registerUser'])){
        if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['password'])){
            if(new_user_by_email($_POST['email'])){
                $_SESSION['user_first_name'] = $_POST['first_name'];
                $_SESSION['user_last_name'] = $_POST['last_name'];
                $_SESSION['user_email_address'] = $_POST['email'];
                $_SESSION['password'] = $_POST['password'];  //====Should not get in plain text for future====//
                $_SESSION['login_type'] = 0;
                header("Location: ../sign-up-number.php");
            }
            else{
                header("Location: ../sign_up.php?user_exist=true");
                die();
            }
        }
        
    }
    
?>