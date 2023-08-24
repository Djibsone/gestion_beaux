<?php
require_once('../models/connexion.php');

if(isset($_POST['q'])) {
    $q = $_POST['q'];

    // Requête SQL pour la recherche
    $stmt = search($q);

    // Récupération des résultats
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Affichage des résultats en JSON
    echo json_encode($results);
}

/*require_once('./admin/models/connexion.php');

// Récupérer la requête de recherche envoyée par Ajax
if(isset($_POST['q'])) {
    $q = $_POST['q'];

    // Requête SQL pour la recherche
    $stmt = search($q);

    // Récupération des résultats
    echo json_encode($stmt->fetch(PDO::FETCH_ASSOC));
    //$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Affichage des résultats
    if(count($results) > 0) {
        foreach($results as $result) {
            echo '<li>' . $result['nomDon'] . ' a donné ' . $result['nombre_de_boeux'] . ' boeux à ' . $result['id_re'] . '</li>';
        }
    } else {
        echo '<li>Aucun résultat trouvé.</li>';
    }
}*/