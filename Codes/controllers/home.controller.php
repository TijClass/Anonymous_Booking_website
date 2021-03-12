<?php
// echo "from controller <br>";
include "./models/home.model.php";
require "./models/agent.model.php";
include "./views/home.view.php";


// instances 
$agent = new Agent(); // Agent
$hom = new Home(); // Home

$top3Agents = $agent->getTop3(); // get Top 3 agents
$homes = $hom->all(); // get all homes

print_r($top3Agents);
echo "<br>";
print_r($homes);