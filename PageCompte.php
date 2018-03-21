<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="https://lh5.googleusercontent.com/-cCPFUP6eAj0/USdq5uSTKFI/AAAAAAAAAYY/3CeiAHyAiFU/s800/triboulon_white.png" type="images/png"/><link rel="stylesheet" href="main.css" />
	<link rel="stylesheet" href="header.css" />
	<link rel="stylesheet" href="inscription.css" />
	<link rel="stylesheet" href="connexion.css" />
	<link rel="stylesheet" href="nav.css" />
	<link rel="stylesheet" href="objet.css" />
	<link rel="stylesheet" href="compte.css" />
	<link rel="stylesheet" href="footer.css" />   

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
	<?php include("Footer.php"); ?>
</html>