<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="https://lh5.googleusercontent.com/-cCPFUP6eAj0/USdq5uSTKFI/AAAAAAAAAYY/3CeiAHyAiFU/s800/triboulon_white.png" type="images/png"/><link rel="stylesheet" href="style/main.css" />
	<link rel="stylesheet" href="style/header.css" />
	<link rel="stylesheet" href="style/inscription.css" />
	<link rel="stylesheet" href="style/connexion.css" />
	<link rel="stylesheet" href="style/nav.css" />
	<link rel="stylesheet" href="style/objet.css" />
	<link rel="stylesheet" href="style/compte.css" />
	<link rel="stylesheet" href="style/footer.css" />    

	<title>Gestionnaire d'Objets Connectés</title> <!-- titre dans l'onglet -->
</head>
<body>
	<?php include("/include/Header.php"); ?>

		<div id="pagecentrale">
			<div id="Liste_objets">
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
	
				// Si tout va bien, on peut continuer
				$type_objet='volet';
				// On récupère tout le contenu de la table jeux_video
				$reponse = $bdd->prepare('SELECT * FROM objet WHERE id= :id AND type_objet= :type_objet');
				$reponse->execute(array(
    			'id' => $_SESSION['id'],
    			'type_objet' =>$type_objet
   				));

				// On affiche chaque entrée une à une
				while ($donnees = $reponse->fetch())
				{
			?>
			<div id="Volet">
				<div class="salon_volet">
					<form action="traitement/traitement_update_objet.php" method="post">
						<h3><strong> Volet <?php echo $donnees['lieux']; ?></strong> </h3>
						<h> Indiquer quel est l'état que vous souhaitiez :<br />

       					<input type="radio" name="etat_volet" value="volet_monte" id="volet_monte" /> 
       					<label for="volet_monte">Monter le volet</label><br />

       					<input type="radio" name="etat_volet" value="volet_descendu" id="volet_descendu" /> 
       					<label for="volet_descendu">Descendre le volet</label><br />
       					
       					<input type="hidden" name="id_objet" value="<?php echo $donnees['id_objet']?>">
       					<button type="submit">OK</button>
      					</h><br/><br/>
      					<h> Les volets sont actuellement <strong><?php if($donnees['etat']==1){
      						echo 'monté';}else echo 'descendus'; ?></strong> dans : </h><?php echo $donnees['lieux']; ?><br/><br/>
					</form>
					<form action="traitement/traitement_delete_objet.php" method="post">
						<input type="hidden" name="id_objet" value="<?php echo $donnees['id_objet']?>">
      					<button type="submit">Supprimer l'objet</button>
      				</form>	
				</div>
			</div>
			<?php
			}
			$reponse->closeCursor(); // Termine le traitement de la requête
			?>	
        </div>
		</div>
</body>
	<?php include("/include/Footer.php"); ?>
</html>