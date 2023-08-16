<?php
require_once('./admin/models/connexion.php');

	if (isset($_POST['register'])) {

		if(!empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['c_password'])){
			$nom = htmlspecialchars($_POST['nom']);
			$email = htmlspecialchars($_POST['email']);
			$password = htmlspecialchars($_POST['password']);
			$c_password = htmlspecialchars($_POST['c_password']);

			if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$check = getUser($email);
				$row = $check->rowCount();            
				if ($row > 0) {
					$_SESSION['error'] = "Incorrect email or password";
				} else {
					if ($password === $c_password) {
						$stmt = addUser($nom, $email, sha1($password));
						if($stmt){
							$_SESSION['success'] = "Account created";
						}
						else{
							$_SESSION['error'] = "Account creation error";
						}
					} else {
						$_SESSION['error'] = "Passwords are not identical";
					}   
				}
			} else {
				$_SESSION['error'] = "Incorrect email address";
			}
		}else {
			$_SESSION['error'] = "Fill in all fields";
		}
	}