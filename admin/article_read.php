<?php 

	include ('verificationDeConnexion.php');

		//on va chercher la table des articles de la database pour la mettre dans cette page

	$req = $bdd->prepare ('SELECT * FROM articles');
	$req->execute(array());

?>

<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="UTF-8">
			<title>Index admin</title>
			<style>
				td, th{
					border: solid 1px black;
					padding:5px;
				}
				th{
					background-color: grey;
				}
			</style>
		</head>
		<body>
			<div id="navbar">	
				<?php 
				include ('navbar.php');
				?>
			</div>
			<a href="article_create.php">Ajouter un article</a>
			<div id="tableau">
				<table>
					<tr>
						<th>id</th>
						<th>titre</th>
						<th>catégorie</th>
						<th>date</th>
						<th>delete</th>
					</tr>
					<?php
						while ($data = $req->fetch())
						{
					?>	
					<tr>
						<td><?php echo $data['id_article']; ?></td>
						<td><a href="article_update.php?id=<?php echo $data['id_article']; ?>"><?php echo $data['titre']; ?></a></td>
						<td><?php echo $data['id_categorie']; ?></td>
						<td><?php echo $data['date']; ?></td>
						<td><a href="article_delete.php?id=<?php echo $data['id_article']; ?>">sup</a></td>
					</tr>
					<?php
		              }
		            ?>
		         </table>   
			</div>
			<a href="article_create.php">Ajouter un article</a>


	
</body>
</html>