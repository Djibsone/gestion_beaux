<?php
require_once('./admin/models/connexion.php');

//active user
if(isset($_POST['active'])){
    
    if (!empty($_POST['id'])) {
        $id = htmlspecialchars($_POST['id']);

        $stmt = updateUserActive($id);
        ($stmt) ? $_SESSION['success'] = 'Active user successfully' : $_SESSION['error'] = 'Error the active user';
    }
    header('location: ./users');
}

//desactive user
if(isset($_POST['desactive'])){
    
    if (!empty($_POST['id'])) {
        $id = htmlspecialchars($_POST['id']);

        $stmt = updateUserDesactive($id);
        ($stmt) ? $_SESSION['success'] = 'Desactive user successfully' : $_SESSION['error'] = 'Error the desactive user';
    }
    header('location: ./users');
}

/*//active user
if (isset($_POST['id'])){
    $id = htmlspecialchars($_POST['id']);

    $stmt = updateUserActive($id);
    echo json_encode($stmt->fetch(PDO::FETCH_ASSOC));
}

//desactive user
if (isset($_POST['id_d'])){
    $id = htmlspecialchars($_POST['id_d']);

    $stmt = updateUserDesactive($id);
    echo json_encode($stmt->fetch(PDO::FETCH_ASSOC));
}*/