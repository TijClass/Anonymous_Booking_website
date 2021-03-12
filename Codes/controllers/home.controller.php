<?php
// echo "from controller <br>";
include "./models/home.model.php";
include "./views/home.view.php";

require "./models/agent.model.php";
$agent = new Agent();
print_r($agent->getTop3());
if(isset($userId)){
    echo '<h1 style="color:red"> '.$userId.' </h1>';
}