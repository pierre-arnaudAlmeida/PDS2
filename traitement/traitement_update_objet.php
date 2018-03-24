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

	if(isset($_POST['chaine_television'])){
	$chaine=$_POST['chaine_television'];
	$req = $bdd->prepare('UPDATE objet SET chaine = :chaine WHERE id_objet = :id_objet');
		$req->execute(array(
		'chaine' => $chaine,
		'id_objet' => $id_objet
	));
	$reponse = $bdd->prepare('SELECT * FROM objet WHERE id_objet= :id_objet');
				$reponse->execute(array(
    			'id_objet' => $id_objet
   				));
   			$donnees = $reponse->fetch();
			$req2 = $bdd->prepare('INSERT INTO historique(id, id_objet,type_objet,etat,lieux,chaine,date_insertion) VALUES(:id,:id_objet,:type_objet,:etat,:lieux,:chaine, NOW())');
			$req2->execute(array(
			'id' =>$donnees['id'],
			'id_objet'=>$donnees['id_objet'],
			'type_objet'=>$donnees['type_objet'],
			'etat'=>$donnees['etat'],
			'lieux'=>$donnees['lieux'],
			'chaine'=>$donnees['chaine']
			));
	header('Location: \PDS2\PageTelevision.php');
	}

	
	if($type_objet=='television'){
	if(isset($_POST['etat_television'])){
			$etat_television=1;
		}else $etat_television=0;
		$req = $bdd->prepare('UPDATE objet SET etat = :etat WHERE id_objet = :id_objet');
		$req->execute(array(
		'etat' => $etat_television,
		'id_objet' => $id_objet
	));
		$reponse = $bdd->prepare('SELECT * FROM objet WHERE id_objet= :id_objet');
				$reponse->execute(array(
    			'id_objet' => $id_objet
   				));
   			$donnees = $reponse->fetch();
			$req2 = $bdd->prepare('INSERT INTO historique(id, id_objet,type_objet,etat,lieux,chaine,date_insertion) VALUES(:id,:id_objet,:type_objet,:etat,:lieux,:chaine, NOW())');
			$req2->execute(array(
			'id' =>$donnees['id'],
			'id_objet'=>$donnees['id_objet'],
			'type_objet'=>$donnees['type_objet'],
			'etat'=>$donnees['etat'],
			'lieux'=>$donnees['lieux'],
			'chaine'=>$donnees['chaine']
			));
	header('Location: \PDS2\PageTelevision.php');
	}

	if($type_objet=='volet'){
		if(isset($_POST['etat_volet'])){
			$etat_volet=1;
		}else $etat_volet=0;
		$req = $bdd->prepare('UPDATE objet SET etat = :etat WHERE id_objet = :id_objet');
		$req->execute(array(
		'etat' => $etat_volet,
		'id_objet' => $id_objet
	));
		$reponse = $bdd->prepare('SELECT * FROM objet WHERE id_objet= :id_objet');
				$reponse->execute(array(
    			'id_objet' => $id_objet
   				));
   			$donnees = $reponse->fetch();
			$req2 = $bdd->prepare('INSERT INTO historique(id, id_objet,type_objet,etat,lieux,chaine,date_insertion) VALUES(:id,:id_objet,:type_objet,:etat,:lieux,:chaine, NOW())');
			$req2->execute(array(
			'id' =>$donnees['id'],
			'id_objet'=>$donnees['id_objet'],
			'type_objet'=>$donnees['type_objet'],
			'etat'=>$donnees['etat'],
			'lieux'=>$donnees['lieux'],
			'chaine'=>$donnees['chaine']
			));
	header('Location: \PDS2\PageVolet.php');
	}

	if($type_objet=='lumiere'){
	if(isset($_POST['etat_lumiere'])){
			$etat_lumiere=1;
		}else $etat_lumiere=0;
		$req = $bdd->prepare('UPDATE objet SET etat = :etat WHERE id_objet = :id_objet');
		$req->execute(array(
		'etat' => $etat_lumiere,
		'id_objet' => $id_objet
	));
		$reponse = $bdd->prepare('SELECT * FROM objet WHERE id_objet= :id_objet');
				$reponse->execute(array(
    			'id_objet' => $id_objet
   				));
   			$donnees = $reponse->fetch();
			$req2 = $bdd->prepare('INSERT INTO historique(id, id_objet,type_objet,etat,lieux,chaine,date_insertion) VALUES(:id,:id_objet,:type_objet,:etat,:lieux,:chaine, NOW())');
			$req2->execute(array(
			'id' =>$donnees['id'],
			'id_objet'=>$donnees['id_objet'],
			'type_objet'=>$donnees['type_objet'],
			'etat'=>$donnees['etat'],
			'lieux'=>$donnees['lieux'],
			'chaine'=>$donnees['chaine']
			));
	header('Location: \PDS2\PageLumiere.php');
	}
?>