<?php
require_once('../models/connexion.php');

if (isset($_POST['ok'])) {
    if (!empty($_POST['filiere'])) {
        $filiere = htmlspecialchars($_POST['filiere']);

        $candidats = rechercheCandidats($filiere);        
        
        //compter le numbre candidats par filere
        $total_cadits = countCandidats($filiere);
       
    } else {
        $_SESSION['error'] = 'Indiquez la filière svp';
    } 
}

//recuperer les filieres
$filieres = getFilieres();