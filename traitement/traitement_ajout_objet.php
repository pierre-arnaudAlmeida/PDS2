<?php
	try
	{
	$bdd = new PDO('mysql:host=localhost;dbname=pds;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
        die('Erreur : '.$e->getMessage());
	}
	$type_objet=$_POST['type_objet'];
	$id= $_POST['id'];

	if(isset($_POST['etat_objet'])){
		$etat_objet= $_POST['etat_objet'];
		if($etat_objet=='eteint'){
			$etat_objet=0;
		} else $etat_objet=1;
	}

	$lieux=$_POST['Lieux'];
	$chaine= $_POST['chaine'];
	if ($chaine==null){
		$chaine=0;
	}

	$reponse = $bdd->prepare('SELECT * FROM inscription WHERE id= :id');
              $reponse->execute(array(
                'id' => $id
              ));

              // On affiche chaque entrée une à une
              while ($donnees = $reponse->fetch())
              {
              	$argent= $donnees['argent'];
              }
              
              $reponse->closeCursor(); // Termine le traitement de la requête

 		if($type_objet=='lumiere'){
 			$prix = 15;
 		}
 		if($type_objet=='volet'){
 			$prix = 75;
 		}
 		 if ($type_objet=='television'){
 			$prix = 175;
 		}


 		if ($argent>$prix){
		$req2 = $bdd->prepare('INSERT INTO objet(id,type_objet,etat,lieux,chaine) VALUES(:id,:type_objet,:etat,:lieux,:chaine)');
		$req2->execute(array(
		'id' =>$id,
		'type_objet'=>$type_objet,
		'etat'=>$etat_objet,
		'lieux'=>$lieux,
		'chaine'=>$chaine
		));
		header('Location: \PDS2\PageObjets.php');

		$montant = ($argent-$prix);

		$req3 = $bdd->prepare('UPDATE inscription SET argent = :argent WHERE id = :id');
		$req3->execute(array(
		'argent' =>$montant,
		'id' => $id
	));
		}
		
		
?>	