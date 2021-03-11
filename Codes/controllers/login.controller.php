<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    // check for empty values
    if(empty($email) || empty($password)){
        $error = "The information that you have submitted are not enough!";
        include "./views/login.view.php";
    }else{
        // get user data from database
        $userData = (object)[];
        $userData->id = 1;
        $userData->name = "Abby";
        $userData->email = "abby@email.com";
        $userData->password = password_hash("1234",PASSWORD_DEFAULT);

        // verify password if a user found
        if(password_verify($password,$userData->password)){
            // check if remember me is checked
            if(isset($_POST['rememberme'])){
                
                // Set login cookie
                    $key = "token";
                    $val = generateToken($userData->id);
                    $exp = time() + 86400 * 30;
                    setcookie($key,$val,$exp);
            }
            // Set login session
                session_start();
                $_SESSION['logged'] = 1;
                $_SESSION['id'] = 1;
                // Got to home page
                header("location: ./");
        }else{
            $error = "That's not your password, please resubmit your correct password";
            include "./views/login.view.php";
        }
    }
}else{
    // include "./models/login.model.php";
    include "./views/login.view.php";
}



