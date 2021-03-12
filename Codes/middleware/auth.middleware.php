<?php
session_start();
$key = "token";
$sessionToken = isset($_SESSION[$key])?$_SESSION[$key]:null;
$cookieToken = isset($_COOKIE[$key])?$_COOKIE[$key]:null;
$token = null;
$userId = null;
if($sessionToken!= null || $cookieToken != null){
    $token = ($sessionToken != null) ? $sessionToken : $cookieToken;
}else{
    header("location: ./login");
}
try {
    $data = (object) fetchToken($token);
    if(getUserMac() != $data->mac){
        header("location: ./login");
    }
    $userId = $data->id;
} catch (Exception $e){
    echo $e->getMessage();
    die;
}


/*if(!isset($_SESSION[$key])){
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
echo "</pre>";*/