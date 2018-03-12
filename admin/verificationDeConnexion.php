<?php

// à mettre automatiquement en debut de php, c'est ici que commence la lecture.
session_start(); 

// le requier inclue la page index à la database

require 'connexionDB.php';


//on dit si il n'y à pas de $_session ça veut dire que le mec ne s'est pas connecté via la page connexion.php et donc on le redirige à cette page connexion.php

if ( !isset ($_SESSION['login']) ) {
	header('Location: connexion.php');
}

else {
	echo 'bienvenue cher ami !'; 
}
    

//pour le bouton de déconnection, si le mec clique alors ça détruit le lien $_session 
if (isset($_POST['buttonDeconnexion'])) {
	session_destroy();

//et on le redirige vers la page de connexion
	header('Location: connexion.php');
}


?>