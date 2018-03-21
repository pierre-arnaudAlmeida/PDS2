<?php
try
	{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=pds;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
	// En cas d'erreur, on affiche un message et on arrête tout
	die('Erreur : '.$e->getMessage());
	}

	$id_objet=$_POST['id_objet'];

	$req = $bdd->prepare('DELETE FROM objet WHERE id_objet= :id_objet');
		$req->execute(array(
		'id_objet' => $id_objet
	));
	header('Location: \PDS2\PageObjets.php');
?>
	