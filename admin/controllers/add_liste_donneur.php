<?php
require_once('./admin/models/connexion.php');

if(isset($_POST['add'])){

    if (!empty($_POST['nom']) && !empty($_POST['sexe']) && !empty($_POST['nombre'])) {
        $nom = htmlspecialchars($_POST['nom']);
        $sexe = htmlspecialchars($_POST['sexe']);
        $nombre = htmlspecialchars($_POST['nombre']);

        $stmt = getDonneur($nom);
        $row = $stmt->rowCount(); 

        if($row > 0){
            $_SESSION['error'] = 'Donneur already exist';
        }
        else{

            $stmt = addDonneur($nom, $sexe, $nombre);
            if ($stmt) {
                $_SESSION['success'] = 'Donneur added successfully';
            } else {
                $_SESSION['error'] = 'Error donneur added';
            }	
        }
    }
    else{
        $_SESSION['error'] = 'Fill up donneur form first';
    }
    header('location: ./donneurs');
}


//recuperation des donneurs
$donneurs = getAllDonneurs();