<?php
	session_start();
	if($_SESSION['nom']==null){
		$_SESSION['nom']='Bel(le) inconnu(e)';
	}
?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="https://lh5.googleusercontent.com/-cCPFUP6eAj0/USdq5uSTKFI/AAAAAAAAAYY/3CeiAHyAiFU/s800/triboulon_white.png" type="images/png"/><link rel="stylesheet" href="main.css" />
	<script type="text/javascript" src="script.js"></script>  

	<title>Gestionnaire d'Objets Connectés</title> <!-- titre dans l'onglet -->

</head>
<body>
	<?php include("Header.php"); ?>

		<div id="pagecentrale">
			<script language="javascript">StartAnim();</script>
		</div>
</body>
	<?php include("Footer.php"); ?>
</html>