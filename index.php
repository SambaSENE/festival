<?php
require_once "./vendor/autoload.php";
include "./includes/head.php";
include "./includes/navbar.php";
$router =  new AltoRouter();


$router->map('GET', '/festival/', function () {
    require_once "./src/Views/home.php";
});
$router->map('GET', '/festival/inscription', function () {
    require_once "./src/Views/inscription.php";
});
$router->map('GET', '/festival/login', function () {
    require_once "./src/Views/login.php";
});
$router->map('GET', '/festival/profil', function () {
    require_once "./src/Views/profil.php";
});

$match = $router->match();

// call closure or throw 404 status
if (is_array($match) && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
} else {
    // no route was matched
    echo ' 404 Not Found';
}

include "./includes/footer.php";