<?php
// echo "from controller <br>";
include "./models/home.model.php";
include "./views/home.view.php";

if(isset($userId)){
    echo '<h1 style="color:red"> '.$userId.' </h1>';
}