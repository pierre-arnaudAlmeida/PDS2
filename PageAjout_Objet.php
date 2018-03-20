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
			<?php include("Ajout_Objet.php"); ?>
		</div>
</body>
<footer>
		<iframe id="Carte" src="https://www.google.com/maps/embed?pb=!4v1521552283461!6m8!1m7!1sYQvqLT2odncNyffTnkzO5g!2m2!1d48.79518384236498!2d2.443999342281539!3f234.59633!4f0!5f0.7820865974627469" width="600" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
	</footer>
</html>