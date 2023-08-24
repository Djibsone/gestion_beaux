<?php
require_once('./admin/models/connexion.php');
$table = '';

if(isset($_POST['add'])){

    if (!empty($_POST['nom_don']) && !empty($_POST['nom_re']) && !empty($_POST['nombre'])) {
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
                    $_SESSION['success'] = 'Added successfully';

                } else {
                    // Ajouter une nouvelle entrée
                    $retireB = $data['nbrB'] - $nombre;
                    //$ajoutB = $result['nbreB'] + $nombre;

                    $stmt = addDonneurReceveur($nom_don, $nom_re, $nombre);
                    if ($stmt) {
                        $_SESSION['success'] = 'Added successfully';
                        updateDonne($retireB, $nom_don);
                    } else {
                        $_SESSION['error'] = 'Error the added';
                    }	
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
$donnes_receves = getAllDonneursReceveurs();

//recuperation des donneurs
$donneurs = getAllDonneurs();
$donnes = getAllDonneurs();

//recuperation des donneurs
$receveurs = getAllReceveurs();
$receves = getAllReceveurs();

//count nbrtotal de boeu du systeme
$nbr_total_boeu = countTotatBoeux();

//count nbr de donneur
$total_donneur = countDonneurs();

//count nbr de receveur
$total_receveur = countReceveurs();

//table
foreach($donneurs_receveurs as $donneur_receveur) {
    $table .= '
        <tr>
            <td><?= $i += 1 ?></td>
            <td>'. $donneur_receveur['nomDon'] .'</td>
            <td class="text-fuscha">'. $donneur_receveur['nbrB'] .'</td>
            <td>'. $donneur_receveur['sexe'] .'</td>
            <td>'. $donneur_receveur['nomRe'] .'</td>
            <td class="text-fuscha">'. $donneur_receveur['nbreB'] .'</td>
            <td>'. $donneur_receveur['sexeR'] .'</td>
            <td>'. $donneur_receveur['localite'] .'</td>
            <td>
                <button class="edit_btn edit" data-id='. $donneur_receveur['id'] .' title="Edit">Edit</button>
                <button class="del_btn delete" data-id='. $donneur_receveur['id'] .' title="Delete">Delete</button>
            </td>
        </tr>
    ';
}