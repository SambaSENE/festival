<?php
require_once "./vendor/autoload.php";
include "./includes/head.php";
include "./includes/navbar.php";


//-----------------
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();
//-----------------
$router = new AltoRouter();
$baseUrl = isset($_SERVER['BASE_URI']) ? $_SERVER['BASE_URI'] : '';
$router->setBasePath($baseUrl);
// map homepage
$router->map(
    'GET',
    '/',
    function () {
        require "./src/Views/home.php";
    }
);
$router->map(
    'GET',
    '/login',
    function () {
        require "./src/Views/login.php";
    }
);
$router->map(
    'GET',
    '/inscription',
    function () {
        require "./src/Views/inscription.php";
    }
);
$match =$router->match () ;

if($match){
    $match['target']();
}else {
    echo '404';
}


include "./includes/footer.php";
