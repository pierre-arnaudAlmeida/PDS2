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
	$mot_de_passe= $_POST['ancien_mot_de_passe'];

	$reponse = $bdd->prepare('SELECT mot_de_passe FROM inscription WHERE id=:id');
	$reponse->execute(array(
		'id' => $id
	));
	$resultat = $reponse->fetch();   
    $mdp_original=$resultat['mot_de_passe'];
	
	if((isset($_POST['Pays'])) AND ($mdp_original == $mot_de_passe)){
		$pays_inscription = $_POST['Pays'];
		$req2 = $bdd->prepare('UPDATE inscription SET pays = :pays WHERE id = :id');
		$req2->execute(array(
		'pays' => $pays_inscription,
		'id' => $id
	));
	};

	if((isset($_POST['telephone'])) AND ($mdp_original == $mot_de_passe)){
		$new_date= $_POST['date_naissance'];
		$req = $bdd->prepare('UPDATE inscription SET date_naissance = :date_naissance WHERE id = :id');
		$req->execute(array(
		'date_naissance' => $new_date,
		'id' => $id
	));
	};
	
	if((isset($_POST['Ville'])) AND ($mdp_original == $mot_de_passe)){
		$ville_inscription = $_POST['Ville'];
		$req3 = $bdd->prepare('UPDATE inscription SET ville = :ville WHERE id = :id');
		$req3->execute(array(
		'ville' => $ville_inscription,
		'id' => $id
	));
	};
	
	if((isset($_POST['Rue'])) AND ($mdp_original == $mot_de_passe)){
		$rue_inscription = $_POST['Rue'];
		$req4 = $bdd->prepare('UPDATE inscription SET rue = :rue WHERE id = :id');
		$req4->execute(array(
		'rue' => $rue_inscription,
		'id' => $id
	));
	};

	if((isset($_POST['telephone'])) AND ($mdp_original == $mot_de_passe)){
		$telephone_inscription = $_POST['telephone'];
		$req5 = $bdd->prepare('UPDATE inscription SET telephone = :telephone WHERE id = :id');
		$req5->execute(array(
		'telephone' => $telephone_inscription,
		'id' => $id
	));
	};

	if((isset($_POST['nouveau_mot_de_passe'])) AND ($mdp_original == $mot_de_passe)){
		$nouveau_mot_de_passe = $_POST['nouveau_mot_de_passe'];
		$req5 = $bdd->prepare('UPDATE inscription SET mot_de_passe = :mot_de_passe WHERE id = :id');
		$req5->execute(array(
		'mot_de_passe' => $nouveau_mot_de_passe,
		'id' => $id
	));
	};
	header('Location: \PDS2\PagePrincipale.php');
?>