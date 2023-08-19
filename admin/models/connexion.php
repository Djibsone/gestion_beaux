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

    $req = $db->prepare("SELECT * FROM donneurs WHERE id = ?");
    $req->execute(array($id));
    return $req;
}

//Récupérer un donneur avant suppression
function getDonneur($id){
    $db = dbConnect();

    $req = $db->prepare('SELECT DISTINCT d.id, a.id_don FROM donneurs d, avoir a WHERE d.id=a.id_don AND d.id = ?');
    $req->execute(array($id));
    return $req;
}

//Récupérer un donneur avant suppression
function getUser($id){
    $db = dbConnect();

    $req = $db->prepare('SELECT * FROM users WHERE id = ?');
    $req->execute(array($id));
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

//Compter le nombre de donneurs
function countDonneurs() {
    $db = dbConnect();

    $stmt = $db->query('SELECT COUNT(*) AS total_donneurs FROM donneurs');
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result['total_donneurs'];
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

//Modifier un info donneur
function updateDonneur($nom, $sexe, $nombre, $id){
    $db = dbConnect();

    $req = $db->prepare('UPDATE donneurs SET nomDon = ?, sexe = ?, nbrB = ? WHERE id = ?');

    if($req->execute(array($nom, $sexe, $nombre, $id)))
        return true;
    else
        return false;
}

//Modifier un info donneur apres la mise a jour
function updateDonne($retire, $id){
    $db = dbConnect();

    $req = $db->prepare('UPDATE donneurs SET nbrB = ? WHERE id = ?');

    if($req->execute(array($retire, $id)))
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

    $req = $db->prepare('INSERT INTO receveurs(nomRe,sexeR,localite) VALUES(?,?,?)');

    if($req->execute(array($nom, $sexe, $localite)))
        return true;
    else
        return false;
}

//Compter le nombre de donneurs
function countReceveurs() {
    $db = dbConnect();

    $stmt = $db->query('SELECT COUNT(*) AS total_receveurs FROM receveurs');
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result['total_receveurs'];
}

//Modifier un info receveur
function updateReceveur($nom, $sexe, $localite, $id){
    $db = dbConnect();

    $req = $db->prepare('UPDATE receveurs SET nomRe = ?, sexeR = ?, localite = ? WHERE id = ?');

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


/*====================== POUR LES DONNEURS & RECEVEURS ===================*/
// Récuperer tous les avoir
function getAllDonneursReceveurs(){
    $db = dbConnect();

    //$req = $db->query('SELECT *, a.id as id_a FROM donneurs d, receveurs r, avoir a WHERE d.id=a.id_don AND r.id=a.id_re ORDER BY a.id DESC');
    $req = $db->query('SELECT a.*, d.nomDon, d.sexe, d.nbrB, r.nomRe, r.sexeR, r.localite FROM donneurs d, receveurs r, avoir a WHERE d.id=a.id_don AND r.id=a.id_re ORDER BY id DESC');
    $req->execute();
    return $req;
}

// Récuperer tous les avoir
function getAllD_R($id){
    $db = dbConnect();

    //$req = $db->query('SELECT *, a.id as id_a FROM donneurs d, receveurs r, avoir a WHERE d.id=a.id_don AND r.id=a.id_re ORDER BY a.id DESC');
    $req = $db->prepare('SELECT * FROM avoir  WHERE id_re = ?');
    $req->execute(array($id));
    return $req;
}

// Récuếrer un receveur en fction de l'id
function getDonneurReceveurInfo($id){
    $db = dbConnect();

    $req = $db->prepare('SELECT * FROM donneurs d, receveurs r, avoir a WHERE d.id=a.id_don AND r.id=a.id_re AND a.id = ?');
    //$req = $db->prepare('SELECT *, d.nomDon as nomdonneur, r.nomRe as nomreceveur FROM donneurs d, receveurs r, avoir a WHERE d.id=a.id_don AND r.id=a.id_re AND a.id = ?');
    //$req = $db->prepare('SELECT *, d.id as idDonneur, r.id as idReceveur FROM donneurs d, receveurs r, avoir a WHERE d.id=a.id_don AND r.id=a.id_re AND a.id = ?');
    //$req = $db->prepare("SELECT * FROM avoir WHERE id = ?");
    $req->execute(array($id));
    return $req;
}

//Récupérer un receveur
function getNbrBReceveur($id_re){
    $db = dbConnect();

    $req = $db->prepare('SELECT * FROM avoir WHERE id_re = ?');
    $req->execute(array($id_re));
    return $req;
}

//Ajouter un receveur
function addDonneurReceveur($id_don, $id_re, $nombre){
    $db = dbConnect();

    $req = $db->prepare('INSERT INTO avoir(id_don,id_re,nbreB) VALUES(?,?,?)');

    if($req->execute(array($id_don, $id_re, $nombre)))
        return true;
    else
        return false;
}

//Modifier un info receveur
function updateDonneurReceveur($id_don, $id_re, $nombre, $id){
    $db = dbConnect();

    $req = $db->prepare('UPDATE avoir SET id_don = ?, id_re = ?, nbreB = ? WHERE id = ?');

    if($req->execute(array($id_don, $id_re, $nombre, $id)))
        return true;
    else
        return false;
}

//Modifier un info receveur
function updateDonneReceve($nombre, $id){
    $db = dbConnect();

    $req = $db->prepare('UPDATE avoir SET nbreB = ? WHERE id_re = ?');

    if($req->execute(array($nombre, $id)))
        return true;
    else
        return false;
}

//Supprimer l'nfos receveur
function delDonneurReceveur($id){
    $db = dbConnect();

    $req = $db->prepare('DELETE FROM avoir WHERE id = ?');

    if($req->execute(array($id)))
        return true;
    else
        return false;
}
/*
SELECT nomDon, count(nbrB) as "nombere de beou par donneur" from donneurs group by nomDon; */