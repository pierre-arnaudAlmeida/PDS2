<?php

if ( (session_status() == 0) or (session_status() == 1)){
	session_start();
	
}
?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="https://lh5.googleusercontent.com/-cCPFUP6eAj0/USdq5uSTKFI/AAAAAAAAAYY/3CeiAHyAiFU/s800/triboulon_white.png" type="images/png"/><link rel="stylesheet" href="style/main.css" />
	<link rel="stylesheet" href="style/header.css" />
	<link rel="stylesheet" href="style/nav.css" />
	<link rel="stylesheet" href="style/compte.css" />
	<link rel="stylesheet" href="style/footer.css" />
	<link rel="stylesheet" href="style/liste.css" />

	<script type="text/javascript" src="script/script.js"></script>  

	<title>Device Manager</title> <!-- titre dans l'onglet -->
</head>
<body>
	<?php include("include/Header.php"); ?>
		<div id="pageaccueil">
			<div id="Nav2">
				<h5>Bienvenue sur DEVICE MANAGER</h5>
				<h1>Vous avez envie de géré vos objets connnectés directement en ligne ?<br><br>
				Et bien vous êtes sur le premier site en France permettant de le faire en toute simplicité. Grace à notre site vous pourrez gérer différents types d'objets tels que votre télévision, vos volets ou bien pourquoi pas controlé l'integralité de votre éclairage totalement en ligne grace à nous.</h1>
			</div>
			<script language="javascript">StartAnim();</script>
		</div>
</body>
	<?php include("include/Footer.php"); ?>
</html>