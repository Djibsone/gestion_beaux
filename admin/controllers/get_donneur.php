<?php
require_once('../models/connexion.php');

//récupération d'un produit à afficher à partir de son id
if (isset($_GET['id'])){

    $id = htmlspecialchars(base64_decode($_GET['id']));
    $check = getDonneurInfo($id);
    $product = $check->fetch();
} 

//récupération d'un donneur à afficher à partir de son id
if (isset($_POST['id'])){
    $id = htmlspecialchars($_POST['id']);

    $donneur = getDonneurInfo($id);
    echo json_encode($donneur->fetch(PDO::FETCH_ASSOC));
}