
<?php

	// Connexion à la base de données MySQL en LOCALHOST


$db = "filerougeasteam"; // Nom de la base de données


try
{
 
  $bdd = new PDO('mysql:host=localhost;dbname='.$db.';charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
	
// Pour veriffier si il y a une erreur et son type d'erreur

  die('ERREUR PDO dans ' . $e->getFile() . ' L.' . $e->getLine() . ' : ' . $e->getMessage());
}


?>