<?php 

if (isset($_POST['register'])) 

{
	$nom=htmlspecialchars($_POST['nom']);
	$prenom=htmlspecialchars($_POST['prenom']);

	
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact</title>
	<link rel="stylesheet" type="text/css" href="assets/css/styleContact.css">
	<link href="https://fonts.googleapis.com/css?family=Bungee+Inline|Cherry+Cream+Soda|Faster+One|Frijole|Poller+One|Salsa|Sonsie+One|Titan+One|Zilla+Slab+Highlight" rel="stylesheet">
</head>
<body>
	<!-- <h1 class="titre_contact">Contact</h1> -->
	<div class="gridContact">
		<h1 class="titre_contact">Contact</h1>
		<div class="contactMe">
			<h1>Contact me</h1><br><br>
			<p>mail: soleilrare@gmail.com<br><br>
				youtube: tafuturechaineyoutube<br><br>
				facebook: Monsieur Smith
			</p>
		</div>
		<div class="formulaire">
			<div class="styleFormulaire">
				<div class="titre">
					<h1>Send me a message directly here</h1><br>
				</div>
				<div class="infosVisiteur">
					<p><form method="post" action="user_1.php">
						<input class="infos" type="text" name="nom" placeholder=" firstname" required="true"><br>
						<input class="infos" type="text" name="prenom" placeholder=" name" required="true"><br>
						<input class="infos" type="email" name="email" placeholder=" email" required="true">
					</form></p>
				</div>
				<div class="messageVisiteur">
					<form method="post" action="user_1.php">
						<textarea class="message" type="text" name="message" rows="6"></textarea>
					</form>
				</div>
				<div class="envoi">
					<form class="form_contact" method="post" action="user_1.php">
						<input class="bouton" type="submit" name="register" value="register">
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>