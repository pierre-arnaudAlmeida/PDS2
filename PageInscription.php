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

	<div id="pageinscription">
		<?php include("Inscription.php"); ?>
		<div id="Nav2">
			<h1>Si vous êtes ici c'est que vous ne possédez pas encore de compte sur notre magnifique site, donc nous vous invitons à remplir ce formulaire.</br></br>
			Nous avons quelques consignes à vous donner pour que vous puissiez remplir convenablement ce formulaire, tout d'abord il vous faut un prenom et un nom de préférence les vôtres.</br></br>
			Ensuite une adresse mail valide pour que vous puissiez validé votre compte et enfin on vous demandera d'indiquer un mot de passe ainsi qu'une petite confimation pour plus de securité.</br>
			Le Bloc de droite est optionnel, nous vous conseillons tout de même de le remplir mais il ne vous gênera pas lors de l'inscription.</br></br>
			Si vous avez un compte que faite vous ici, partez profiter de votre espace client en <a href="PageConnexion.php">Cliquant ici</a></h1>
		</div>
	</div>
</body>
<footer>
		<iframe id="Carte" src="https://www.google.com/maps/embed?pb=!4v1521552283461!6m8!1m7!1sYQvqLT2odncNyffTnkzO5g!2m2!1d48.79518384236498!2d2.443999342281539!3f234.59633!4f0!5f0.7820865974627469" width="600" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
	</footer>
</html>