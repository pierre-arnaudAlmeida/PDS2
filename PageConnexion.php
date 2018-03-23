<?php
session_start()
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
		<div id="pageconnexion">
			<?php include("/include/Connexion.php"); ?>
			<div id="Nav">
				<h1>Vous avez déja un compte alors il ne vous reste plus qu'à vous connecté.</br></br>
				Vous n'avez qu'à renseigné votre nom ainsi que votre mot de passe.</br></h1>
				<h1> Dans le cas ou vous n'avez pas encore de compte sur ce site, nous vous invitons à vous inscrire via le lien suivant en <a href="PageInscription.php">Cliquant ici</a></h1>
				<h1> Dans le cas ou vous avez oublier votre mot de passe nous vous invitons à <a href="PageMdp_perdu.php"> Cliquer ici</a></h1>
			</div>
		</div>
</body>
	<?php include("/include/Footer.php"); ?>
</html>