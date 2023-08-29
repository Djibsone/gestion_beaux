<?php
require_once('./admin/models/connexion.php');

//edit donneur
if(isset($_POST['edit'])){
    
    if (!empty($_POST['id']) && !empty($_POST['nom']) && !empty($_POST['password'])) {
        $id = htmlspecialchars($_POST['id']);
        $nom = htmlspecialchars($_POST['nom']);
        $curr_password = htmlspecialchars($_POST['curr_password']);
        $password = htmlspecialchars($_POST['password']);
    
        $stmt = getUserInfo($id);
        $row = $stmt->fetch();
    
        if(hash_equals($row['password'], sha1($curr_password))){
            if($password == $row['password']){
                $password = $row['password'];
            }
            else{
                $password = sha1($password);
            }
    
            $stmt = updateUser($nom, $password, $id);
            if ($stmt) {
                $_SESSION['success'] = 'Account updated successfully';
                header('location: ./login');
            } else {
                $_SESSION['error'] = 'Error account updated';
            }	
        }
        else{
            $_SESSION['error'] = 'You are not eligible for this account';
        }
    }
    else{
        $_SESSION['error'] = 'Fill up required details first';
    }
    
    header('location: ./users');
    
}


//delete donneur
if(isset($_POST['delete'])){

    if (!empty($_POST['id'])) {
        $id = htmlspecialchars($_POST['id']);

        $stmt = delUser($id);
        if ($stmt) {
            $_SESSION['success'] = 'Deleted successfully';
        } else {
            $_SESSION['error'] = 'Error the deleted';
        }  
    }
    else{
        $_SESSION['error'] = 'Select user to delete first';
    }
    header('location: ./users');
}