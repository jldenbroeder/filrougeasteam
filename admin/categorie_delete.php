<?php 
	include ('verificationDeConnexion.php');

	//On récupère et identifie l'id via le GET
	if (isset($_GET['id']))

	{

		$id=$_GET['id'];


	


	
	//on selectionne  dans toutes les données(*) l'id correspondant (=) à notre GETid (celui qui nous intéresse, celui qui est juste au dessus).  
	$req = $bdd->prepare ('SELECT * FROM categories WHERE id_categorie= :id');
	$req->execute( array('id'=>$id) );


//on récupère les données correspondants au titre de l'id séléctionné. 
	$data= $req->fetch();
	$mycategorie= $data['titre'];
	

//Pour replacer le titre provenant de la DB il faut remplir la case value dans le html par les variables mais pour le textarea il faut le mettre entre les deux balise car il ne comporte pas de value

	}

//Maintenant on supprime 
if(isset($_POST['buttondelete']))
	
	{
		$req = $bdd->prepare ('DELETE FROM categories WHERE id_categorie= :id');
		$req->execute( array('id'=>$id) );

	
//une fois cliqué sur le bouton modifier, ça nous redirige sur la liste des categorie(categorie_read.php)
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
	<?php echo $mycategorie;?><br><br>
	<button type="submit" name="buttondelete">Delete</button>
</form>

	
</body>
</html>