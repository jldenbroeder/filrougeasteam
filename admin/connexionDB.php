<?php
$url = "http://".$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];

if (strpos($url, "localhost/")){
  $host = "localhost";
  $db = "filerougeasteam";
  $user = "root";
  $pass = "";
}
else{
  $host = "localhost";
  $db = "id5008734_jeanluc";
  $user = "id5008734_jldenbroeder";
  $pass = "jl871245jdetmf";
}
try
{
  $bdd = new PDO('mysql:host='.$host.';dbname='.$db.';charset=utf8', ''.$user.'', ''.$pass.'', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
  die('ERREUR PDO dans ' . $e->getFile() . ' L.' . $e->getLine() . ' : ' . $e->getMessage());
}
?>