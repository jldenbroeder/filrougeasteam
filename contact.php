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
</head>
<body>
	<div id="contact">
		<div>
			<p>mail:soleilrare@gmail.com<br>youtube:tafuturechaineyoutube<br>facebook
			</p>
		<div id="formulaire">
			<form method="post" action="user_1.php">
				<input type="text" name="nom" value="firstname" required="true">
				<input type="text" name="prenom" value="name" required="true">
				<input type="submit" name="register" value="register">
			</form>
		</div>
	</div>
</body>
</html>