<?php 
	include ('verificationDeConnexion.php');

	//On récupère et identifie l'id via le GET
	if (isset($_GET['id']))

	{

		$id=$_GET['id'];


	


	
	//on selectionne  dans toutes les données(*) l'id correspondant (=) à notre GETid (celui qui nous intéresse, celui qui est juste au dessus).  
	$req = $bdd->prepare ('SELECT * FROM articles WHERE id_article= :id');
	$req->execute( array('id'=>$id) );


//on récupère les données correspondants au titre et paragraphe de l'id séléctionné. 
	$data= $req->fetch();
	$titre= $data['titre'];
	$message= $data['paragraphe'];

//Pour replacer le titre et le message provenant de la DB il faut remplir la case value dans le html par les variables mais pour le textarea il faut le mettre entre les deux balise car il ne comporte pas de value

	}

//Maintenant on supprime 
if(isset($_POST['buttondelete']))
	
	{
		$req = $bdd->prepare ('DELETE FROM articles WHERE id_article= :id');
		$req->execute( array('id'=>$id) );

	
//une fois cliqué sur le bouton modifier, ça nous redirige sur la liste des articles (article_read.php)
	header('Location: article_read.php');
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
	<?php echo $titre;?><br><br>
	<?php echo $message; ?><br><br>
	<button type="submit" name="buttondelete">Delete</button>
</form>

	
</body>
</html>