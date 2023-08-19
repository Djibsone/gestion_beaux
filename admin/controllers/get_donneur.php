<?php
require_once('../models/connexion.php');

//récupération d'un donneur à afficher à partir de son id
if (isset($_POST['id'])){
    $id = htmlspecialchars($_POST['id']);

    $donneur = getDonneurInfo($id);
    echo json_encode($donneur->fetch(PDO::FETCH_ASSOC));
}