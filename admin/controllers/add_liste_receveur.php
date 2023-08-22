<?php
require_once('./admin/models/connexion.php');

if(isset($_POST['add'])){

    if (!empty($_POST['nom']) && !empty($_POST['sexe']) && !empty($_POST['localite'])) {
        $nom = htmlspecialchars($_POST['nom']);
        $sexe = htmlspecialchars($_POST['sexe']);
        $localite = htmlspecialchars($_POST['localite']);

        $stmt = getReceveur($nom);
        $row = $stmt->rowCount(); 

        if($row > 0){
            $_SESSION['error'] = 'Receveur already exist';
        }
        else{

            $stmt = addReceveur($nom, $sexe, $localite);
            if ($stmt) {
                $_SESSION['success'] = 'Receveur added successfully';
            } else {
                $_SESSION['error'] = 'Error receveur added';
            }	
        }
    }
    else{
        $_SESSION['error'] = 'Fill up receveur form first';
    }
    header('location: ./receveurs');
}


//recuperation des donneurs
$receveurs = getAllReceveurs();

//count nbrtotal de boeu du systeme
$nbr_total_boeu = countTotatBoeux();

//count nbr de donneur
$total_donneur = countDonneurs();

//count nbr de receveur
$total_receveur = countReceveurs();