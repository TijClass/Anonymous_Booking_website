<?php
use \Firebase\JWT\JWT;
function getUserMac(){
    $cmd = "arp -a " . $_SERVER['REMOTE_ADDR'];
    $status = 0;
    $return = [];
    exec($cmd, $return, $status);
    if(isset($return[3])){
        return strtoupper(str_replace("-",":",substr($return[3],24,17))); 
    }else{
        $MAC = exec('getmac'); 
        $MAC = strtok($MAC, ' ');    
        return $MAC;
    }
}

// get & decript token
function fetchToken($token){

    $MAC = getUserMac();
    $data = Array(
        "id" => 1,
        "mac" => $MAC
    );
    return $data;
}
// set token
function generateToken($id){
    // get client MAC adress
    $MAC = getUserMac();
    $token = Array(
        "id" => $id,
        "mac" => $MAC
    );
    return JWT::encode($token, TOKEN_SECRET);    
}

// get time stamp
function getTimstamp(){
    $date = new DateTime();
    return $date->getTimestamp();
}