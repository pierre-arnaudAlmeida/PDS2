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
	<link rel="stylesheet" href="style/argent.css" />
	<link rel="stylesheet" href="style/liste.css" />   

	<title>Gestionnaire d'Objets Connectés</title> <!-- titre dans l'onglet -->
</head>
<body>
	<?php include("/include/Header.php"); ?>
	<div id="pageListe">
		<div id="Nav2">
			<h5>Vos Lumieres</h5>
			<image class="image-liste" src="http://www.immovons.com/wp-content/uploads/2017/10/r%C3%A9novation.jpg"></image>
			<h1>Voici la liste complete de vos lumières, choisissez celle que vous souhaitez geré : </h1>
		</div>
		<div id="Liste">
			<?php
				try{
				$bdd = new PDO('mysql:host=localhost;dbname=pds;charset=utf8', 'root', '');}
				catch(Exception $e)
				{die('Erreur : '.$e->getMessage());}
				$type_objet='lumiere';
				$reponse = $bdd->prepare('SELECT * FROM objet WHERE id= :id AND type_objet= :type_objet');
				$reponse->execute(array(
    			'id' => $_SESSION['id'],
    			'type_objet' =>$type_objet
   				));	
				while ($donnees = $reponse->fetch())
				{
			?>
			<div id="Ligne">
				<image src="http://www.idacd.com/crbst_log_20ampoule1.png?v=6op7fcffz0spk6" width="80" height="80"></image>	
				<div class="cadre">
    				<strong>Lumière  <?php echo $donnees['lieux']; ?></strong>
    			</div>		
				<div class="bouton_selectionner">
					<form action="PageLumiere.php" method="post">
      					<input type="hidden" name="id_objet" value="<?php echo $donnees['id_objet']?>">
      					<?php $_SESSION['id_objet']=$donnees['id_objet']?>
      					<button class="selectionner" type="submit">Selectionner</button>
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