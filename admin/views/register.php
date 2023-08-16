<?php 
	session_start();
	include './admin/controllers/register.php' 
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./admin/assets/css/style.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <title>Gestion des boeux</title>
</head>
<body>

	<div class="container">
		<p>Formulaire d'inscription</p>
		<?php include 'includes/msg_error_success.php' ?>
		<form action="" method="post">
			<div class="inputIcon">
				<label>Nom :</label>
				<input type="text" id="nom" name="nom" placeholder="votre nom cmplet">
				<i class="fa fa-user"></i>
			<div>
			<div class="inputIcon">
				<label>Email :</label>
				<input type="email" id="email" name="email" placeholder="name@gmail.com">
				<i class="fa fa-envelope"></i>	
			<div>
			<div class="inputIcon">
				<label>Mot de passe :</label>
				<input type="password" id="password" name="password" placeholder="***********">
				<i class="fa fa-lock"></i>
				<span class="eye">
					<i class="fa fa-eye"></i>
					<i class="fa fa-eye-slash"></i>
				</span>	
			<div>
			<div class="inputIcon">
				<label>Confirmer le mot de passe :</label>
				<input type="password" id="c_password" name="c_password" placeholder="***********">
				<i class="fa fa-lock"></i>
				<span class="eye">
					<i class="fa fa-eye"></i>
					<i class="fa fa-eye-slash"></i>
				</span>	
			<div>
			<br>
			<button type="submit" name="register">S'inscrire</button>
            <a href="/login">Connectez-vous ici</a>
		</form>
	</div>

<?php include 'includes/footer.php' ?>