<?php 
include ('verificationDeConnexion.php');



//on va chercher la table des categories de la database pour la mettre dans cette page

$req = $bdd->prepare ('SELECT * FROM links');
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
			<a href="link_create.php">Ajouter un lien</a>
			<div id="tableau">
				<table>
					<tr>
						<th>id</th>
						<th>URL</th>
						<th>delete</th>
					</tr>
					<?php
						while ($data = $req->fetch())
						{
					?>	
					<tr>
						<td><?php echo $data['id_links']; ?></td>
						<td><a href="link_update.php?id=<?php echo $data['id_link']; ?>"><?php echo $data['url']; ?></a></td>
						<td><a href="link_delete.php?id=<?php echo $data['id_link']; ?>">sup</a></td>
					</tr>
					<?php
		              }
		            ?>
		         </table>   
			</div>
			<a href="link_create.php">Ajouter un lien</a>


	
</body>
</html>