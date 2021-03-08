<?php
include './router/Router.php';
include './router/Request.php';

$router = new Router(new Request());


$router->get("/", function ($request) {
    include "./controllers/home.controller.php";
});
$router->get("/route", function ($request) {
    echo "from another route";
});
$router->post("/route", function ($request) {
    echo "from another route";
});
