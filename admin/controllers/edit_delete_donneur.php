<?php
require_once('./admin/models/connexion.php');

//edit donneur
if(isset($_POST['edit'])){
    
    if (!empty($_POST['id']) && !empty($_POST['nom']) && !empty($_POST['sexe']) && !empty($_POST['nombre'])) {
        $id = htmlspecialchars($_POST['id']);
        $nom = htmlspecialchars($_POST['nom']);
        $sexe = htmlspecialchars($_POST['sexe']);
        $nombre = htmlspecialchars($_POST['nombre']);

        $stmt = updateDonneur($nom, $sexe, $nombre, $id);
        if ($stmt) {
            $_SESSION['success'] = 'Donneur updated successfully';
            
        } else {
            $_SESSION['error'] = 'Error donneur updated';
        }  
    }
    else{
        $_SESSION['error'] = 'Fill up edit donneur form first';
    }
    header('location: ./donneurs');
}


//delete donneur
if(isset($_POST['delete'])){

    if (!empty($_POST['id'])) {
        $id = htmlspecialchars($_POST['id']);

        $stmt = delDonneur($id);
        if ($stmt) {
            $_SESSION['success'] = 'Donneur deleted successfully';
        } else {
            $_SESSION['error'] = 'Error donneur deleted';
        }  
    }
    else{
        $_SESSION['error'] = 'Select donneur to delete first';
    }
    header('location: ./donneurs');
}


/*if(isset($_POST['delete'])){

    if (!empty($_POST['id'])) {
        $id = htmlspecialchars($_POST['id']);

        $chek = getDonneur($id);
        $data = $chek->fetch();

        if (hash_equals($data['id_don'], $id)) {
            $_SESSION['error'] = 'Impossible donneur deleted !';
        }
        else {
            
            $stmt = delDonneur($id);
            if ($stmt) {
                $_SESSION['success'] = 'Donneur deleted successfully';
            } else {
                $_SESSION['error'] = 'Error donneur deleted';
            }  
        }  
    }
    else{
        $_SESSION['error'] = 'Select donneur to delete first';
    }
    header('location: ./donneurs');
}*/