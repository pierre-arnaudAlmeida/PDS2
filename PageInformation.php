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
</head>

<body>
	<?php include("/include/Header.php"); ?>
	<div id="pagecentrale">
		<div class="Information">
		<h1><strong>Informations</strong></h1></br>
		<h2>Ici, vous pouvez vous renseignez sur des points précis </h2></br>
		</div>
		
		<div class="informations">
				<li><ul>Lumière</ul></li>
				<li><ul>Télévision</ul></li>
				<li><ul>Volet</ul></li>
				<li><ul>Ajouter un objet</ul></li>
				<li><ul>Supprimer un objet</ul></li>
		</div>
	
	</div>



</body>

<?php include("/include/Footer.php"); ?>
</html>