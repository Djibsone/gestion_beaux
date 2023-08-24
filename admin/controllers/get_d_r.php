<?php
require_once('../models/connexion.php');

//recuperation des donneurs
$donneurs = getAllDonneurs();
echo json_encode($donneurs->fetchAll(PDO::FETCH_ASSOC));


//recuperation des receveurs
$receveurs = getAllReceveurs();
echo json_encode($receveurs->fetchAll(PDO::FETCH_ASSOC));
