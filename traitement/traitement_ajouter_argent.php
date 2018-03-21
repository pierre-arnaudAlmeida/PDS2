<?php
try
	{
	$bdd = new PDO('mysql:host=localhost;dbname=pds;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
        die('Erreur : '.$e->getMessage());
	}
	
	$id=$_POST['id'];
	$mot_de_passe= $_POST['mot_de_passe'];
	$montant= $_POST['montant'];

	$reponse = $bdd->prepare('SELECT argent FROM inscription WHERE (id = :id) AND (mot_de_passe = :mot_de_passe)');
	$reponse->execute(array(
		'id' => $id,
		'mot_de_passe' => $mot_de_passe
	));
	$resultat = $reponse->fetch();   
    $argent=$resultat['argent'];

    $montant = $montant + $argent;

	if((isset($montant)) AND (isset($mot_de_passe))){
		$req = $bdd->prepare('UPDATE inscription SET argent = :montant WHERE (id = :id) AND (mot_de_passe = :mot_de_passe)');
		$req->execute(array(
		'montant' => $montant,
		'mot_de_passe' => $mot_de_passe,
		'id' => $id
	));
	};
	header('Location: \PDS2\PageCompte.php');
?>