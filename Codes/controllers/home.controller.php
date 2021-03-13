<?php
require "./models/images.model.php";
include "./models/home.model.php"; // home model
require "./models/agent.model.php"; // agent model
require "./models/features.model.php"; // features


// instances 
$agent = new Agent(); // Agent
$hom = new Home(); // Home
$Feature = new Feature(); // Feature

$top3Agents = $agent->getTop3(); // get Top 3 agents
$homes = $hom->all(); // get all homes
$features = $Feature->get(1);

echo "<pre>";
print_r($top3Agents);
echo "<br>";
print_r($homes);
echo "<br>";
print_r($features);
echo "</pre>";


// get home view
include "./views/home.view.php";