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
else if ($route === '/logout') {
    require './admin/controllers/logout.php';
}
else if ($route === '/donneurs') {
    require './admin/views/liste_donneur.php';
}
else if ($route === '/receveurs') {
    require './admin/views/liste_receveur.php';
}
else if ($route === '/users') {
    require './admin/views/user.php';
}
else if ($route === '/edit_user') {
    require './admin/controllers/edit_delete_user.php';
}
else if ($route === '/delete_user') {
    require './admin/controllers/edit_delete_user.php';
}
else if ($route === '/active') {
    require './admin/controllers/active_desactive.php';
}
else if ($route === '/desactive') {
    require './admin/controllers/active_desactive.php';
}
else if ($route === '/add') {
    require './admin/controllers/add_liste_donneur.php';
}
else if ($route === '/edit') {
    require './admin/controllers/edit_delete_donneur.php';
}
else if ($route === '/delete') {
    require './admin/controllers/edit_delete_donneur.php';
}
else if ($route === '/add_receve') {
    require './admin/controllers/add_liste_receveur.php';
}
else if ($route === '/edit_receve') {
    require './admin/controllers/edit_delete_receveur.php';
}
else if ($route === '/delete_receve') {
    require './admin/controllers/edit_delete_receveur.php';
}
else if ($route === '/add_home') {
    require './admin/controllers/add_liste_home.php';
}
else if ($route === '/edit_home') {
    require './admin/controllers/edit_delete_home.php';
}
else if ($route === '/delete_home') {
    require './admin/controllers/edit_delete_home.php';
}
else {
    echo '<h1>Page introuvable !</h1>';
}