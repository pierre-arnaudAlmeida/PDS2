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
				$type_objet='lumiere';
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
        	<div id="Lumiere">
				<div class="salon_lumiere">
					<form action="traitement/traitement_update_objet.php" method="post">
    					<h3><strong>Lumière  <?php echo $donnees['lieux']; ?></strong></h3>
    					<h> Indiquer quel est l'état que vous souhaitiez :<br />

       					<input type="radio" name="etat_lumiere" value="lumiere_allumee" id="lumiere_allumee" /> 
       					<label for="lumiere_allumee">Allumer la lumière</label><br />

       					<input type="radio" name="etat_lumiere" value="lumiere_eteinte" id="lumiere_eteinte" /> 
       					<label for="lumiere_eteinte">Eteindre la lumière</label><br />

       					<input type="hidden" name="id_objet" value="<?php echo $donnees['id_objet']?>">
       					<button type="submit">OK</button>
      					</h><br/><br/>
      					<h> La lumière est actuellement <strong><?php if($donnees['etat']==1){
      						echo 'allumé';}else echo 'éteinte'; ?></strong> dans : </h><?php echo $donnees['lieux']; ?> <br/><br/>
      				</form>

      				<form action="traitement_delete_objet.php" method="post">
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