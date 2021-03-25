<?php

if(isset($_POST['email'])){
    if(!empty($_POST['email'])){     
        $email = $_POST['email'];
        echo 3;
        require "./models/newslleter.model.php"; // newsletters
        // instance
        $newsleter = new NewsLetter();//newsletter
        // calls
        $newsletters = $newsleter->setEmail($email);
        if($newsletters = $newsleter->new()){
            echo "1";
        }else{
            header('HTTP/1.1 500 Internal Server Error');
        }
    }else{
        header('HTTP/1.1 401 Unauthorized');
    }
}else{
    header('HTTP/1.1 401 Unauthorized');
}