<?php


// à mettre automatiquement en debut de php, c'est ici que commence la lecture.
session_start(); 

// le requier inclue la page de connexion à la database

require 'connexionDB.php';




if (isset($_POST['button'])) {

	$veriflogin=false;
	$verifpassword=false;


if ( (isset($_POST['login'])) && (!empty($_POST['login'])) ){

 $login=htmlspecialchars($_POST['login']);
 $veriflogin=true;

}
if ( (isset($_POST['password'])) && (!empty($_POST['password'])) )

{
	
	$password=htmlspecialchars($_POST['password']);
	$password=sha1 ($password);
	$verifpassword=true;


	
}

	// Pour selectionner le login dans la DB
	if ($verifpassword && $veriflogin){
    $req = $bdd->prepare('SELECT * FROM login  WHERE login = :login');
    $req->execute(array(
      'login' => $login
    ));

    // Vérification si login existe
    if ( ($req->rowCount()) > 0) {
      

    // Recuperer le mot de passe correspondant au login
      $data = $req->fetch();
      $passwordDB = $data['password'];
      $req->closeCursor();

      // Si password identique
      if ($password == $passwordDB){
        $_SESSION['login'] = $login; //$_SESSION est un marqueur pour dire que l'utilisateur est bien passé par la page de connexion pour arriver à l'index de l'admin
        
        header('Location: index.php');//redirige à l'index admin

        
      }
    }
}
}



?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Connexion</title>
</head>
<body>
	<form method="post" action="">
		<input type="text" placeholder="login" name="login" value="">
		<input type="password" name="password" value="" placeholder="password">
		<button type="submit" name="button">connexion</button>
	</form>
</body>
</html>