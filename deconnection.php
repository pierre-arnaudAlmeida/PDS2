<?php
$_SESSION = array();
session_destroy();
session_start();
$_SESSION['id']= null;
$_SESSION['nom']='Bel(le) inconnu(e)';
 //mettre le numero de session qu'on a dans garder dans une table avec les personne connecter
header("Location: Accueil.php");
?>