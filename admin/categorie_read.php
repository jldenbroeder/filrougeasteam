<?php 
include ('verificationDeConnexion.php');



//on va chercher la table des categories de la database pour la mettre dans cette page

$req = $bdd->prepare ('SELECT * FROM categories');
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
			<a href="categorie_create.php">Ajouter une categorie</a>
			<div id="tableau">
				<table>
					<tr>
						<th>id</th>
						<th>titre</th>
						<th>delete</th>
					</tr>
					<?php
						while ($data = $req->fetch())
						{
					?>	
					<tr>
						<td><?php echo $data['id_categorie']; ?></td>
						<td><a href="categorie_update.php?id=<?php echo $data['id_categorie']; ?>"><?php echo $data['titre']; ?></a></td>
						<td><a href="categorie_delete.php?id=<?php echo $data['id_categorie']; ?>">sup</a></td>
					</tr>
					<?php
		              }
		            ?>
		         </table>   
			</div>
			<a href="categorie_create.php">Ajouter une categorie</a>


	
</body>
</html>