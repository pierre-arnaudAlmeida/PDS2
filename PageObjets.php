<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="https://lh5.googleusercontent.com/-cCPFUP6eAj0/USdq5uSTKFI/AAAAAAAAAYY/3CeiAHyAiFU/s800/triboulon_white.png" type="images/png"/><link rel="stylesheet" href="style/main.css" />
	<link rel="stylesheet" href="style/header.css" />
	<link rel="stylesheet" href="style/objet.css" />
	<link rel="stylesheet" href="style/footer.css" />

	<title>Objets</title> <!-- titre dans l'onglet -->
</head>
<body>
	<?php include("include/Header.php"); ?>
		<div id="pagecentrale">
			<div id="page_objet">
				<div class="Titre-page">
					<h5><strong>Objets connectés</strong></h5>
				</div>
				<div class ="Ajout-PageObjets">
					<?php include("include/Liste_Objets.php"); ?>
				</div>
			</div>
		</div>
</body>
	<?php include("include/Footer.php"); ?>
</html>