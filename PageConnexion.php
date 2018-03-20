<?php
session_start()
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
			<?php include("Connexion.php"); ?>
			<div id="Nav">
				<h1>Vous avez déja un compte alors il ne vous reste plus qu'à vous connecté.</br></br>
					Vous n'avez qu'à renseigné votre nom ainsi que votre mot de passe.</br></h1>
				<h1> Dans le cas ou vous n'avez pas encore de compte sur ce site, nous vous invitons à vous inscrire via le lien suivant en <a href="PageInscription.php">Cliquant ici</a></h1>
				<h1> Dans le cas ou vous avez oublier votre mot de passe nous vous invitons à <a href="PageMdp_perdu.php"> Cliquer ici</a></h1>
		</div>
		</div>
</body>
<footer>
		<iframe id="Carte" src="https://www.google.com/maps/embed?pb=!4v1521552283461!6m8!1m7!1sYQvqLT2odncNyffTnkzO5g!2m2!1d48.79518384236498!2d2.443999342281539!3f234.59633!4f0!5f0.7820865974627469" width="600" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
	</footer>
</html>