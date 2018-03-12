<?php 
	include ('verificationDeConnexion.php');

	//On récupère et identifie l'id via le GET
	if (isset($_GET['id']))

	{

		$id=$_GET['id'];

	
	//on selectionne  dans toutes les données(*) l'id correspondant (=) à notre GETid (celui qui nous intéresse, celui qui est juste au dessus).  
	$req = $bdd->prepare ('SELECT * FROM links WHERE id_links= :id');
	$req->execute( array('id'=>$id) );


//on récupère les données correspondants au titre et paragraphe de l'id séléctionné. 
	$data= $req->fetch();
	$mylink= $data['url'];
	

	}

if(isset($_POST['buttonmodifier']))
	
	{
	
	$mylink=htmlspecialchars($_POST['mylink']);
	

	//On modifie maintenant dans notre table avec leurs valeurs pour les ettiqueter 
	$req=$bdd->prepare('UPDATE links SET url=:mylink WHERE id_links=:id' );
	


	//On execute l'ajout avec les valeurs
	$req->execute(array(
		'mylink'=>$mylink,
		'id'=>$id
	));


//une fois cliqué sur le bouton modifier, ça nous redirige sur la liste des categories (categorie_read.php)
	header('Location: link_read.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>updatelink</title>
</head>
<body>
	<?php 
	include ('navbar.php');
	?>

<form method="post" action="">
	<input type="text" name="mylink" size="65" value="<?php echo $mylink;?>"><br><br>
	<button type="submit" name="buttonmodifier">Modifier</button>
</form>

	
</body>
</html>