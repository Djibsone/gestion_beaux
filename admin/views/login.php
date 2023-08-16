<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./admin/assets/css/style.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
  <title>Gestion des boeux</title>
</head>
<body>

	<div class="container">
		<p>Formulaire de connection</p>
		<?php include 'includes/msg_error_success.php' ?>
		<form action="controllers/indexController.php" method="post">
			<div class="inputIcon">
				<label>Email :</label>
				<input type="email" id="email" name="email" placeholder="name@gmail.com">
				<i class="fa fa-envelope"></i>
			</div>
			<div class="inputIcon">
				<label>Mot de passe :</label>
				<input type="password" id="password" name="password" placeholder="***********">
				<i class="fa fa-lock"></i>
				<span class="eye">
					<i class="fa fa-eye"></i>
					<i class="fa fa-eye-slash"></i>
				</span>
			</div>
			<div>
				<button type="submit" name="connecte">Se connecter</button>
				<a href="#">Mot de passe oublié?</a>
				<br><br>
				<a href="./register">Inscrivez-vous ici</a>
			</div>
		</form>
	</div>

<?php include 'includes/footer.php' ?>