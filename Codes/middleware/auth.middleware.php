<?php
session_start();
$key = "token";
$sessionToken = isset($_SESSION[$key])?$_SESSION[$key]:null;
$cookieToken = isset($_COOKIE[$key])?$_COOKIE[$key]:null;
$token = null;
if($sessionToken!= null || $cookieToken != null){
    $token = ($sessionToken != null) ? $sessionToken : $cookieToken;
}else{
    echo "redirect 1";
    die;
    header("location: ./login");
}
try {
    $data = (object) fetchToken($token);
    if(!(getUserMac() == $data->mac)){
        print_r($data);
        echo "<br>";
        echo "getmacuser -".getUserMac()."<br>";
        echo "from token".$data->mac."<br>";
        echo "redirect 2";
        die;
        header("location: ./login");
    }
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