<?php 
	include ('verificationDeConnexion.php');

	//On récupère et identifie l'id via le GET
	if (isset($_GET['id']))

	{

		$id=$_GET['id'];

	
	//on selectionne  dans toutes les données(*) l'id correspondant (=) à notre GETid (celui qui nous intéresse, celui qui est juste au dessus).  
	$req = $bdd->prepare ('SELECT * FROM categories WHERE id_categorie= :id');
	$req->execute( array('id'=>$id) );


//on récupère les données correspondants au titre et paragraphe de l'id séléctionné. 
	$data= $req->fetch();
	$mycategorie= $data['titre'];
	

	}

if(isset($_POST['buttonmodifier']))
	
	{
	
	$mycategorie=htmlspecialchars($_POST['mycategorie']);
	

	//On modifie maintenant dans notre table avec leurs valeurs pour les ettiqueter 
	$req=$bdd->prepare('UPDATE categories SET titre=:mycategorie WHERE id_categorie=:id' );
	


	//On execute l'ajout avec les valeurs
	$req->execute(array(
		'mycategorie'=>$mycategorie,
		'id'=>$id
	));


//une fois cliqué sur le bouton modifier, ça nous redirige sur la liste des categories (categorie_read.php)
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
	<input type="text" name="mycategorie" size="65" value="<?php echo $mycategorie;?>"><br><br>
	<button type="submit" name="buttonmodifier">Modifier</button>
</form>

	
</body>
</html>