<?php
$route = $_SERVER['REQUEST_URI'];

if ($route === '/') {
    require './views/home.php';
}
else if ($route === '/login') {
    require './views/login.php';
}
else if ($route === '/register') {
    require './views/register.php';
}