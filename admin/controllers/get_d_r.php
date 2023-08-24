<?php
require_once('../models/connexion.php');

$donneurs_receveurs = getAllDonneursReceveurs();
echo json_encode($donneurs_receveurs->fetch(PDO::FETCH_ASSOC));