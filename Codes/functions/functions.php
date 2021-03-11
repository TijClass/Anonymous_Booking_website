<?php

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

    return json_decode($token);
}
// set token
function generateToken($id){
    // get client MAC adress
    $MAC = getUserMac();
    $token = Array(
        "id" => $id,
        "mac" => $MAC
    );
    return json_encode($token);
    
}