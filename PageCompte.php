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

		<div id="pagecompte">
			<?php include("Compte.php"); ?>
			<div id="Nav2">
			<h1>Pour modifier certains champs inserer vos nouvelles informations dasn les champs choisis.</br></br>
			Apres avoir entré vos nouvelles informations la seule chose qu'il ne vous a faire c'est saisir votre mot de passe puis de lacher un petit clic sur le bouton Modifier qui se trouve sous le beau formulaire que nous avons fait.</br></br>
			Bien entendu les champs que vous ne souhaitez pas changer ou que vous ne souhaitez pas renseigner nous vous invitons a les laisser vide.</h1>
			</div>
		</div>
</body>
<footer>
		<iframe id="Carte" src="https://www.google.com/maps/embed?pb=!4v1521552283461!6m8!1m7!1sYQvqLT2odncNyffTnkzO5g!2m2!1d48.79518384236498!2d2.443999342281539!3f234.59633!4f0!5f0.7820865974627469" width="600" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
	</footer>
</html>