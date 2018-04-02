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
		<div id="pagecentrale">
			<div id="page_objet">
			<div class="Titre-page">
				<h1><strong>Page affichant les Objets connectés</strong></h1>
				<p>Bonjour, pour vous renseigner sur un objet ou pour obtenir une information plus précise, interragissez avec le nom de l'objet en question</p>
			</div>

			<div class ="Ajout-PageObjets">
				<?php include("include/Liste_Objets.php"); ?>
			</div>

		</div>
		</div>

</body>
	<?php include("include/Footer.php"); ?>
</html>