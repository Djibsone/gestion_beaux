<?php include 'header.php' ?>

	<div class="container">
		<p>Formulaire de connection</p>
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

<?php include 'footer.php' ?>