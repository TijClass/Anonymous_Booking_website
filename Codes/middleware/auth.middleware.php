<?php
session_start();
if(!isset($_SESSION['logged'])){
    if(isset($_COOKIE['token'])){
        $token = fetchToken($_COOKIE['token']);
        if(getUserMac() == $token->mac){
            $_SESSION['logged'] = 1;
            $_SESSION['user_id'] = $token->id;

        }
    }else{
        header("location: ./login");
    }
}
echo "<pre>";
echo print_r(fetchToken($_COOKIE['token']));
echo "</pre>";