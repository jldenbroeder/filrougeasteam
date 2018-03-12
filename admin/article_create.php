
<?php 
	include ('verificationDeConnexion.php');

		//si il a cliqué sur le bouton 

				// LISTE DES CATEGORIES


		//on va chercher les categories pour les afficher

	$req = $bdd->prepare ('SELECT * FROM categories');
	$req->execute(array());

		//on crée une variable qui nous dit le nombre de cathégorie il y aura... pour pouvoir mettre le nombre dans la boucle

	$nbrcat = $req->rowCount();


	if(isset($_POST['buttonajouter']))

		{
			$titre=htmlspecialchars($_POST['titre']);
			$message=htmlspecialchars($_POST['message']);

				//On insert maintenant dans notre table ce qu'on a complété ainsi que leurs valeurs pour les ettiqueter 
		
			$reqinsert=$bdd->prepare('INSERT INTO articles (titre, paragraphe, date) VALUES (:titre, :paragraphe, NOW())');
				//Le NOW() permet d'indiquer automatiquement la date et l'heure


				//On execute l'ajout avec les valeurs
			
			$reqinsert->execute(array(

			'titre'=>$titre,
			'paragraphe'=>$message
		
									));

				//Pour récupérer la dernière id crée avec la création de l'article pour finalement lier l'ei de l'article crée à l'id de la catégorie dans la table de transition
			
			$newId=$bdd->lastInsertId();


				//boucle pour verifier si les checkbox sont cochées ou non

			while ($data = $req->fetch())

				{	

						//on converti le $i qui est en gros le nombre de la boucle en id_catégorie pour que ça soit bien les id qui soient contabilisées dans la boucle
	
					$i=$data['id_categorie'];

						//pour verifier si ça a été coché on utilise isset
	
					if (isset($_POST[$i]))
	
					{

						$reqinsertcat=$bdd->prepare('INSERT INTO articles_h_categories (id_article, id_categorie) VALUES (:idarticle, :idcategorie)');

							// On execute l'ajout avec les valeurs
						
						$reqinsertcat->execute(array(
		
						':idarticle'=>$newId,
						':idcategorie'=>$i
		
													));


					}
				}


					// header('Location: article_read.php');
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
			<input type="text" name="titre" placeholder="titre" size="65"><br><br>
				<textarea name="message" rows="8" cols="90" placeholder="ton article"></textarea><br><br>

					<!--On met la boucle while pour afficher les categorie recherchées dans la DB-->

					<?php

						while ($data = $req->fetch())

						{

					?>	
					
							<input type="checkbox" name="<?php echo $data['id_categorie']; ?>">
								<label for="<?php echo $data['id_categorie']; ?>"><?php echo $data['titre']; ?>
								
								</label>
					<?php
					
						}

					?>

			<br><br>

			<button type="submit" name="buttonajouter">Ajouter article</button>

		</form>
	</body>
</html>