<?php
require_once('./admin/models/connexion.php');

//edit donneur
if(isset($_POST['edit'])){
    
    if (!empty($_POST['id']) && !empty($_POST['nom_don']) && !empty($_POST['nom_re']) && !empty($_POST['nombre'])) {
        $id = htmlspecialchars($_POST['id']);
        $nom_don = htmlspecialchars($_POST['nom_don']);
        $nom_re = htmlspecialchars($_POST['nom_re']);
        $nombre = htmlspecialchars($_POST['nombre']);

        $stmt = updateDonneurReceveur($nom_don, $nom_re, $nombre, $id);
        if ($stmt) {
            $_SESSION['success'] = 'Updated successfully';
            
        } else {
            $_SESSION['error'] = 'Error the updated';
        }  
    }
    else{
        $_SESSION['error'] = 'Fill up edit donneur & receveur form first';
    }
    header('location: ./home');
}


//delete donneur
if(isset($_POST['delete'])){

    if (!empty($_POST['id'])) {
        $id = htmlspecialchars($_POST['id']);

        $stmt = delDonneurReceveur($id);
        if ($stmt) {
            $_SESSION['success'] = 'Deleted successfully';
        } else {
            $_SESSION['error'] = 'Error the deleted';
        }  
    }
    else{
        $_SESSION['error'] = 'Select donneur & receveur to delete first';
    }
    header('location: ./home');
}