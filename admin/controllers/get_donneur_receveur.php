<?php
require_once('../models/connexion.php');

/*$donneurs_receveurs = getAllDonneursReceveurs();
echo json_encode($donneurs_receveurs->fetch(PDO::FETCH_ASSOC));*/

//récupération d'un donneur à afficher à partir de son id
if (isset($_POST['id'])){
    $id = htmlspecialchars($_POST['id']);

    $donneur_receveur = getDonneurReceveurInfo($id);
    echo json_encode($donneur_receveur->fetch(PDO::FETCH_ASSOC));
}