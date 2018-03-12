
<?php 
include ('verificationDeConnexion.php');

//si il a cliqué sur le bouton 

if(isset($_POST['buttonajouter'])){
	$mycategorie=htmlspecialchars($_POST['mycategorie']);




	//On insert maintenant dans notre table ce qu'on a complété ainsi que leurs valeurs pour les ettiqueter 
	$req=$bdd->prepare('INSERT INTO categories (titre) VALUES (:mycategorie) ') ;
	


	//On execute l'ajout avec les valeurs
	$req->execute(array(
		
		'mycategorie'=> $mycategorie
		
	));

	header('Location: categorie_read.php');
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
	<input type="text" name="mycategorie" placeholder="ton nom de catégorie" size="65"><br><br>
	<button type="submit" name="buttonajouter">Ajouter catégorie</button>
</form>

	
</body>
</html>