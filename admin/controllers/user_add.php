<?php
require_once('../models/user.php');

	if(isset($_POST['add'])){
		$firstname = htmlspecialchars($_POST['nom']);
		$email = htmlspecialchars($_POST['email']);
		$password = htmlspecialchars($_POST['password']);
		$c_password = htmlspecialchars($_POST['c_password']);

		$check = getUser($email);
        $row = $check->rowCount();            
        if ($row > 0) {
		    $_SESSION['error'] = 'Email already taken';
		}
		else{
			$stmt = addUserAdmin($email, sha1($password), $type, $firstname, $lastname, $address, $contact, $filename, $status, $active, $reset, $now);
            if ($stmt) {
                $_SESSION['success'] = 'User added successfully';
            } else {
                $_SESSION['error'] = 'Error user added';
            }
		}
	}
	else{
		$_SESSION['error'] = 'Fill up user form first';
	}

	header('location: /register');
