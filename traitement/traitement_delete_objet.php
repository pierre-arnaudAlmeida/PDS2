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
	$type_objet=$_POST['type_objet'];

	if($type_objet=='lumiere'){
	$req = $bdd->prepare('DELETE FROM lumiere WHERE id_lumiere= :id_objet');
	}
	if($type_objet=='volet'){
	$req = $bdd->prepare('DELETE FROM volet WHERE id_volet= :id_objet');
	}
	if($type_objet=='television'){
	$req = $bdd->prepare('DELETE FROM television WHERE id_television= :id_objet');
	}
		$req->execute(array(
		'id_objet' => $id_objet
	));
	header('Location: \PDS2\PageObjets.php');
?>
	