<?php
require "./models/images.model.php";
include "./models/home.model.php"; // home model
require "./models/agent.model.php"; // agent model

// get home view
include "./views/home.view.php";


// instances 
$agent = new Agent(); // Agent
$hom = new Home(); // Home

$top3Agents = $agent->getTop3(); // get Top 3 agents
$homes = $hom->all(); // get all homes

echo "<pre>";
// print_r($top3Agents);
// echo "<br>";
print_r($homes);
echo "</pre>";