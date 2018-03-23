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
	<div id="pageinscription">
		<?php include("/include/Inscription.php"); ?>
		<div id="Nav2">
			<h1>Si vous êtes ici c'est que vous ne possédez pas encore de compte sur notre magnifique site, donc nous vous invitons à remplir ce formulaire.</br></br>
			Nous avons quelques consignes à vous donner pour que vous puissiez remplir convenablement ce formulaire, tout d'abord il vous faut un prenom et un nom de préférence les vôtres.</br></br>
			Ensuite une adresse mail valide pour que vous puissiez validé votre compte et enfin on vous demandera d'indiquer un mot de passe ainsi qu'une petite confimation pour plus de securité.</br>
			Le Bloc de droite est optionnel, nous vous conseillons tout de même de le remplir mais il ne vous gênera pas lors de l'inscription.</br></br>
			Si vous avez un compte que faite vous ici, partez profiter de votre espace client en <a href="PageConnexion.php">Cliquant ici</a></h1>
		</div>
	</div>
</body>
	<?php include("/include/Footer.php"); ?>
</html>