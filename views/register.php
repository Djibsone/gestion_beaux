<?php include 'header.php' ?>

	<div class="container">
		<p>Formulaire d'inscription</p>
		<form action="../controllers/registerController.php" method="post">
			<div class="inputIcon">
				<label>Nom :</label>
				<input type="text" id="pseudo" name="pseudo" placeholder="votre nom cmplet">
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
				<input type="password" id="confirm_password" name="confirm_password" placeholder="***********">
				<i class="fa fa-lock"></i>
				<span class="eye">
					<i class="fa fa-eye"></i>
					<i class="fa fa-eye-slash"></i>
				</span>	
			<div>
			<br>
			<button type="submit" name="inscrit">S'inscrire</button>
            <a href="../login">Connectez-vous ici</a>
		</form>
	</div>

<?php include 'footer.php' ?>