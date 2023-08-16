<?php
$route = $_SERVER['REQUEST_URI'];

if ($route === '/') {
    require './home.php';
}
else if ($route === '/home') {
    require './admin/views/home.php';
}
else if ($route === '/login') {
    require './admin/views/login.php';
}
else if ($route === '/register') {
    require './admin/views/register.php';
}
else if ($route === '/donneurs') {
    require './admin/views/liste_donneur.php';
}
else if ($route === '/receveurs') {
    require './admin/views/liste_receveur.php';
}