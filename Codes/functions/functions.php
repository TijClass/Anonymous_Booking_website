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
function generateId(){
    $min = pow(10,6);
    $max = pow(10,10);
    $timeStampHex = dechex(time());
    $firstRandomHex = dechex(rand($min,$max));
    $secondRandomHex = dechex(rand($min,$max));
    return $timeStampHex."-".$firstRandomHex."-".$secondRandomHex;
}