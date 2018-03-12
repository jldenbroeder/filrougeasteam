<?php 
	include ('verificationDeConnexion.php');

   

								// LISTE DES CATEGORIES


//on va chercher les categories pour les afficher

$reqcat = $bdd->prepare ('SELECT * FROM categories');
$reqcat->execute(array());

//on crée une variable qui nous dit le nombre de cathégorie qu'il y aura... pour pouvoir mettre le nombre dans la boucle
$nbrcat = $reqcat->rowCount();
echo $nbrcat;

$olicount = 0;

// ____________________________________________________

	//On récupère et identifie l'id de l'article via le GET

		$id=$_GET['id'];
		$id=intval($id);

			//on fait toujours la requet avant de creer une boucle. Ici on fait les requetes pour ensuite via la coucle allé chercher L'idcategorie coresspondant à l'article qu'on est en train de modifier 

		$reqH = $bdd->prepare ('SELECT * FROM articles_h_categories WHERE id_article= '.$id.'');
			//on met le '. avant la variable id parce que le SELECT etc.. est vu comme un string 
		$dataH= $reqH->fetch();
		$reqH->execute(array());
 
			//on selectionne  dans toutes les données(*) l'id correspondant (=) à notre GETid (celui qui nous intéresse, celui qui est juste au dessus). 

		$req = $bdd->prepare ('SELECT * FROM articles WHERE id_article='.$id.'');
		$req->execute( array() );

			//on récupère les données correspondants au titre et paragraphe de l'id séléctionné. 

		
		$data= $req->fetch();
		$titre= $data['titre'];
		$message= $data['paragraphe'];
		$categorie1=$data['categorie1'];
		$categorie2=$data['categorie2'];
		$categorie3=$data['categorie3'];




			//Pour replacer le titre et le message provenant de la DB il faut remplir la case value dans le html par les variables mais pour le textarea il faut le mettre entre les deux balise car il ne comporte pas de value


		if(isset($_POST['buttonmodifier']))
	
	{
	
		$titre=htmlspecialchars($_POST['titre']);
		$message=htmlspecialchars($_POST['message']);

		while ($data = $reqcat->fetch())

				{	

						//on converti le $i qui est en gros le nombre de la boucle en id_catégorie pour que ça soit bien les id qui soient contabilisées dans la boucle
	
					$i=$data['id_categorie'];

						//pour verifier si ça a été coché on utilise isset
	
					if (isset($_POST[$i]))
	
					{
	
						echo $_POST[$i];
						
					}
				}


			//On modifie maintenant dans notre table avec leurs valeurs pour les ettiqueter 
		$req=$bdd->prepare('UPDATE articles SET titre=:titre, paragraphe=:paragraphe, date= NOW() WHERE id_article=:id' );
	//Le NOW() permet d'indiquer automatiquement la date et l'heure


	//On execute l'ajout avec les valeurs
	$req->execute(array(
		'titre'=>$titre,
		'paragraphe'=>$message,
		'id'=>$id
	));




	//une fois cliqué sur le bouton modifier, ça nous redirige sur la liste des articles (article_read.php)
	// header('Location: article_read.php');
	
	}



?>

<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="UTF-8">
			<title>update</title>
		</head>
		<body>

			<?php 
				include ('navbar.php');
			?>
						
			<form method="post" action="">
				<input type="text" name="titre" size="65" value="<?php echo $titre; ?>"><br><br>
					<textarea name="message" rows="8" cols="90"><?php echo $message; ?></textarea><br><br>


			<?php

				while ($datacat = $reqcat->fetch())
						
				{ 
					
			?>	
						
				<input type="checkbox" name="<?php echo $datacat['id_categorie']; ?>"

			<?php 
			
					if ( ($categorie1== $datacat['id_categorie']) || ($categorie2== $datacat['id_categorie']) || ($categorie3== $datacat['id_categorie']) )
					
					{

						echo 'checked';
					}
					
					

				

			?>

			>

			<label for="<?php echo $datacat['id_categorie']; ?>">
				<?php echo $datacat['titre']; ?>
			</label><br>
						
			
			<?php

				}

			?>

			<button type="submit" name="buttonmodifier">Modifier</button>

			</form>
		</body>
	</html>
