<?php
require_once('./admin/models/connexion.php');

//edit donneur
if(isset($_POST['edit'])){
    
    if (!empty($_POST['id']) && !empty($_POST['nom_don']) && !empty($_POST['nom_re']) && !empty($_POST['nombre'])) {
        $id = htmlspecialchars($_POST['id']);
        $nom_don = htmlspecialchars($_POST['nom_don']);
        $nom_re = htmlspecialchars($_POST['nom_re']);
        $nombre = htmlspecialchars($_POST['nombre']);

        $stmt = getDonneurInfo($nom_don);
        $data = $stmt->fetch(); 

        $check = getNbrBReceveur($nom_re);
        $result = $check->fetch();

        $verify = getAllD_R($nom_don, $nom_re);
        $row = $verify->rowCount();
        //$row = $verify->fetch();

        if($nombre <= 0){
            $_SESSION['error'] = 'Invalid number';
        }
        else {
            if ($data['nbrB'] < $nombre) {
                $_SESSION['error'] = 'Insufficiant number';
            } 
            else {
                if ($row) {
                    // Mettre à jour les informations existantes
                    $retireB = $data['nbrB'] - $nombre;
                    $ajoutB = $result['nbreB'] + $nombre;

                    updateDonneReceve($ajoutB, $nom_don, $nom_re);
                    updateDonne($retireB, $nom_don);
                    $_SESSION['success'] = 'Updated successfully';

                } else {
                    // Ajouter une nouvelle entrée
                    $retireB = $data['nbrB'] - $nombre;
                    $ajoutB = $result['nbreB'] + $nombre;

                    $stmt = updateDonneurReceveur($nom_don, $nom_re, $ajoutB, $id);
                    if ($stmt) {
                        $_SESSION['success'] = 'Updated successfully';
                        updateDonne($retireB, $nom_don);
                    } else {
                        $_SESSION['error'] = 'Error the updated';
                    }	
                }
            }
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