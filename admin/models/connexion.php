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

//Récupérer tous les donneurs
function getAllDonneurs(){
    $db = dbConnect();

    $req = $db->query('SELECT * FROM donneurs ORDER BY id DESC');
    $req->execute();
    return $req;
}

// Récuếrer un donneur en fction de l'id
function getDonneurInfo($id){
    $db = dbConnect();

    //$req = $db->prepare("SELECT *, donneurs.nomDon AS donneurname FROM donneurs WHERE id = ?");
    $req = $db->prepare("SELECT * FROM donneurs WHERE id = ?");
    $req->execute(array($id));
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

    $req = $db->prepare('SELECT * FROM donneurs WHERE nomDon = ?');
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
function addDonneur($nom, $sexe, $nombre){
    $db = dbConnect();

    $req = $db->prepare('INSERT INTO donneurs(nomDon,sexe,nbrB) VALUES(?,?,?)');

    if($req->execute(array($nom, $sexe, $nombre)))
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

//Supprimer l'nfos donneur
function delDonneur($id){
    $db = dbConnect();

    $req = $db->prepare('DELETE FROM donneurs WHERE id = ?');

    if($req->execute(array($id)))
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

//Modifier un info donneur
function updateDonneur($nom, $sexe, $nombre, $id){
    $db = dbConnect();

    $req = $db->prepare('UPDATE donneurs SET nomDon = ?, sexe = ?, nbrB = ? WHERE id = ?');

    if($req->execute(array($nom, $sexe, $nombre, $id)))
        return true;
    else
        return false;
}


/*====================== POUR LES RECEVEURS ===================*/
// Récuperer tous les receveurs
function getAllReceveurs(){
    $db = dbConnect();

    $req = $db->query('SELECT * FROM receveurs ORDER BY id DESC');
    $req->execute();
    return $req;
}

// Récuếrer un receveur en fction de l'id
function getReceveurInfo($id){
    $db = dbConnect();

    $req = $db->prepare("SELECT * FROM receveurs WHERE id = ?");
    $req->execute(array($id));
    return $req;
}

//Récupérer un receveur
function getReceveur($nom){
    $db = dbConnect();

    $req = $db->prepare('SELECT * FROM receveurs WHERE nomRe = ?');
    $req->execute(array($nom));
    return $req;
}

//Ajouter un receveur
function addReceveur($nom, $sexe, $localite){
    $db = dbConnect();

    $req = $db->prepare('INSERT INTO receveurs(nomRe,sexe,localite) VALUES(?,?,?)');

    if($req->execute(array($nom, $sexe, $localite)))
        return true;
    else
        return false;
}

//Modifier un info receveur
function updateReceveur($nom, $sexe, $localite, $id){
    $db = dbConnect();

    $req = $db->prepare('UPDATE receveurs SET nomRe = ?, sexe = ?, localite = ? WHERE id = ?');

    if($req->execute(array($nom, $sexe, $localite, $id)))
        return true;
    else
        return false;
}

//Supprimer l'nfos receveur
function delReceveur($id){
    $db = dbConnect();

    $req = $db->prepare('DELETE FROM receveurs WHERE id = ?');

    if($req->execute(array($id)))
        return true;
    else
        return false;
}
/*
SELECT nomDon, count(nbrB) as "nombere de beou par donneur" from donneurs group by nomDon; */