<?php
session_start();
//Connexion à la base de données
function dbConnect(){
    try{
        $db = new PDO('mysql:host=localhost;dbname=app_gestion_bœux;charset=utf8', 'djibril', 'tamou');
        return $db;
    }catch(Exception $e){
        die('Erreur : '.$e->getMessage());
    }
}

//Récupérer tous les users
function getAllDonneurs(){
    $db = dbConnect();

    $req = $db->query('SELECT * FROM donneurs ORDER BY id DESC');
    $req->execute();
    return $req;
}


//Récupérer un user
function getUser($email){
    $db = dbConnect();

    $req = $db->prepare('SELECT * FROM users WHERE email = ?');
    $req->execute(array($email));
    return $req;
}

//Récupérer un donneur
function getDonneur($nom){
    $db = dbConnect();

    $req = $db->prepare('SELECT * FROM donneurs WHERE nomRe = ?');
    $req->execute(array($nom));
    return $req;
}

//Ajouter un usr
function addUser($nom, $email, $password){
    $db = dbConnect();

    $req = $db->prepare('INSERT INTO users(nom,email,password) VALUES(?,?,?)');

    if($req->execute(array($nom, $email, $password)))
        return true;
    else
        return false;
}

//Ajouter un donneur
function addDonneur($nom, $sexe, $nbrB){
    $db = dbConnect();

    $req = $db->prepare('INSERT INTO donneurs(nomDon,sexe,nbrBoeu) VALUES(?,?,?)');

    if($req->execute(array($nom, $sexe, $nbrB)))
        return true;
    else
        return false;
}

//rechercher les candidats d'une filière
function rechercheCandidats($filiere) {
    $db = dbConnect();
    $req = $db->prepare('SELECT *, nom, prenom, sexe FROM candidat WHERE codefil LIKE :filiere');
    $req->execute(array(':filiere' => '%' . $filiere . '%'));
    return $req;
}

//select toutes les filières
function getFilieres(){
    $db = dbConnect();
    $req = $db->query('SELECT * FROM filiere ORDER BY codefil DESC');
    return $req;
}

//Compter le nombre de candidat
function countCandidats($filiere) {
    $db = dbConnect();
    $stmt = $db->prepare('SELECT COUNT(*) AS total_cadits FROM candidat WHERE codefil = ?');
    $stmt->execute(array($filiere));
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result['total_cadits'];
}

//Supprimer l'nfos user dans la table password_reset
function delUser($token){
    $db = dbConnect();

    $req = $db->prepare('DELETE FROM password_reset WHERE token_user = ?');

    if($req->execute(array($token)))
        return true;
    else
        return false;
}

//Modifier un info user
function updateUser($password, $token){
    $db = dbConnect();

    $req = $db->prepare('UPDATE users SET password = ? WHERE token = ?');

    if($req->execute(array($password, $token)))
        return true;
    else
        return false;
}

