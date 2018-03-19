<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="https://lh5.googleusercontent.com/-cCPFUP6eAj0/USdq5uSTKFI/AAAAAAAAAYY/3CeiAHyAiFU/s800/triboulon_white.png" type="images/png"/><link rel="stylesheet" href="main.css" />    

	<title>Gestionnaire d'Objets Connectés</title> <!-- titre dans l'onglet -->
</head>
<body>
	<?php include("Header.php"); ?>

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
				$type_objet='television';
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
        	<div id="Television">
				<div class="television">
					<form action="traitement_update_objet.php" method="post">
						<h3><strong> Télévision <?php echo $donnees['lieux']; ?></strong> </h3>
						<h> Indiquer quel est l'état que vous souhaitiez : <br/><br/></h>
						<h> La Chaine actuelle est : <?php echo $donnees['chaine']; ?></h><br/>
						<input class="bouton_chaine" type="form" name="chaine_television" value="Entrer la chaîne choisi" id = "bouton_chaine"/><br/><br/>
						<input type="hidden" name="id_objet" value="<?php echo $donnees['id_objet']?>">
       					<button type="submit">OK</button><br/><br/>

       					<form action="traitement_update_objet.php" method="post">
       					<input type="radio" name="etat_television" value="television_allumee" id="television_allumee" /> 
       					<label for="television_allumee">Allumer la télévision</label><br />

       					<input type="radio" name="etat_television" value="television_eteinte" id="television_eteinte" /> 
       					<label for="television_eteinte">Eteindre la télevision</label><br />

       					<input type="hidden" name="id_objet" value="<?php echo $donnees['id_objet']?>">
       					<button type="submit">OK</button>
      					</h><br/><br/>
      					<h> La télévision est actuellement <strong><?php if($donnees['etat']==1){
      						echo 'allumé';}else echo 'éteinte'; ?></strong></h><br/><br/>
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
<footer>
	</footer>
</html>