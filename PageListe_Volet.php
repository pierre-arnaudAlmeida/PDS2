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
	<?php include("include/Header.php"); ?>
	<div id="pageListe">
		<div id="Nav2">
			<h5>Vos Volets</h5>
			<image class="image-liste" src="http://www.oknoplast.fr/upload/catalogue/gamme/15/1450795389-volet-roulant-charme.jpg"></image>
			<h1>Voici la liste complete de vos volets, choisissez celle que vous souhaitez geré : </h1>
		</div>
		<div id="Liste">
			<?php
				try{
				$bdd = new PDO('mysql:host=localhost;dbname=pds;charset=utf8', 'root', '');}
				catch(Exception $e)
				{die('Erreur : '.$e->getMessage());}
				$type_objet='volet';
				$reponse = $bdd->prepare('SELECT * FROM volet WHERE id= :id AND type_objet= :type_objet');
				$reponse->execute(array(
    			'id' => $_SESSION['id'],
    			'type_objet' =>$type_objet
   				));	
				while ($donnees = $reponse->fetch())
				{
			?>
			<div id="Ligne">
				<image src="http://www.elj-fermetures.fr/images/volet.png" width="60" height="70"></image>	
				<div class="cadre">
    				<strong>Volet  <?php echo $donnees['lieux']; ?></strong>
    			</div>		
				<div class="bouton_selectionner">
					<form action="PageVolet.php" method="post">
      					<input type="hidden" name="id_objet" value="<?php echo $donnees['id_volet']?>">
      					<?php $_SESSION['id_objet']=$donnees['id_volet']?>
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
	<?php include("include/Footer.php"); ?>
</html>