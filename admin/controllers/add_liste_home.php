<?php
require_once('./admin/models/connexion.php');

if(isset($_POST['add'])){

    if (!empty($_POST['nom_don']) && !empty($_POST['nom_re']) && !empty($_POST['nombre'])) {
        $nom_don = htmlspecialchars($_POST['nom_don']);
        $nom_re = htmlspecialchars($_POST['nom_re']);
        $nombre = htmlspecialchars($_POST['nombre']);
        

        $stmt = getDonneurInfo($nom_don);
        //$row = $stmt->rowCount(); 
        $data = $stmt->fetch(); 

        if($nombre <= 0){
            $_SESSION['error'] = 'Invalid number';
        }
        else {
            if ($data['nbrB'] < $nombre) {
                $_SESSION['error'] = 'Insufficiant number';
            } else {

                $stmt = addDonneurReceveur($nom_don, $nom_re, $nombre);
                if ($stmt) {
                    $_SESSION['success'] = 'Added successfully';
                } else {
                    $_SESSION['error'] = 'Error the added';
                }	
            }
        }
    }
    else{
        $_SESSION['error'] = 'Fill up donneur & receveur form first';
    }
    header('location: ./home');
}


//recuperation des donneurs & receveurs
$donneurs_receveurs = getAllDonneursReceveurs();

//recuperation des donneurs
$donneurs = getAllDonneurs();
$donnes = getAllDonneurs();

//recuperation des donneurs
$receveurs = getAllReceveurs();
$receves = getAllReceveurs();