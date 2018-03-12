<?php 
include ('verificationDeConnexion.php');

//si il a cliqué sur le bouton 

if(isset($_POST['buttonajouter'])){
	$mylink=htmlspecialchars($_POST['mylink']);




	//On insert maintenant dans notre table ce qu'on a complété ainsi que leurs valeurs pour les ettiqueter 
	$req=$bdd->prepare('INSERT INTO links (url) VALUES (:mylink) ') ;
	


	//On execute l'ajout avec les valeurs
	$req->execute(array(
		
		'mylink'=> $mylink
		
	));

	header('Location: link_read.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>create</title>
</head>
<body>
	<?php 
	include ('navbar.php');
	?>

<form method="post" action="">
	<input type="text" name="mylink" placeholder="ton lien url" size="65"><br><br>
	<button type="submit" name="buttonajouter">Ajouter lien</button>
</form>

	
</body>
</html>