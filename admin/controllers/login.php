<?php
require_once('./admin/models/connexion.php');

//login user in db
if (isset($_POST['login'])) {

    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $check = getUser($email);
            $data = $check->fetch();
            $row = $check->rowCount(); 
            if ($row) {
                if (hash_equals($data['email'], $email) && hash_equals($data['password'], sha1($password))) {
                  if ($data['statut'] === 1) {
                    $_SESSION['admin'] = [
                        'id' => $data['id'],
                        'name' => $data['nom'],
                        'email' => $data['email'],
                        'status' => $data['status']
                    ];
                    header('location: ./home');
                  } else {
                    $_SESSION['success'] = 'BIENVENUE  '.$data['firstname'].'';
                    $_SESSION['user'] = [
                        'id' => $data['id'],
                        'firstname' => $data['firstname'],
                        'lastname' => $data['lastname'],
                        'email' => $data['email'],
                        'photo' => $data['photo'],
                        'status' => $data['status']
                    ];
                    header('location: ./');
                  }
                } else {
                    $_SESSION['error'] = "Incorrect email or password";
                    //header('location: ./login');
                }
            } else {
                $_SESSION['error'] = "Incorrect email or password";
                //header('location: ./login');
            }
        } else {
            $_SESSION['error'] = "Incorrect email address";
            //header('location: ./login');
        }
    }else {
        $_SESSION['error'] = "Fill in all fields";
        //header('location: ./login');
    }
}