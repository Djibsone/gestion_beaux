<?php
require_once('./admin/models/connexion.php');

//edit donneur
if(isset($_POST['edit'])){
    
    if (!empty($_POST['id']) && !empty($_POST['nom']) && !empty($_POST['sexe']) && !empty($_POST['localite'])) {
        $id = htmlspecialchars($_POST['id']);
        $nom = htmlspecialchars($_POST['nom']);
        $sexe = htmlspecialchars($_POST['sexe']);
        $localite = htmlspecialchars($_POST['localite']);

        $stmt = updateReceveur($nom, $sexe, $localite, $id);
        if ($stmt) {
            $_SESSION['success'] = 'Receveur updated successfully';
            
        } else {
            $_SESSION['error'] = 'Error receveur updated';
        }  
    }
    else{
        $_SESSION['error'] = 'Fill up edit receveur form first';
    }
    header('location: ./receveurs');
}


//delete receveur
if(isset($_POST['delete'])){

    if (!empty($_POST['id'])) {
        $id = htmlspecialchars($_POST['id']);

        $stmt = delReceveur($id);
        if ($stmt) {
            $_SESSION['success'] = 'Receveur deleted successfully';
        } else {
            $_SESSION['error'] = 'Error receveur deleted';
        }  
    }
    else{
        $_SESSION['error'] = 'Select receveur to delete first';
    }
    header('location: ./receveurs');
}