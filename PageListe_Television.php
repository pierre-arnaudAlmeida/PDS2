<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="https://lh5.googleusercontent.com/-cCPFUP6eAj0/USdq5uSTKFI/AAAAAAAAAYY/3CeiAHyAiFU/s800/triboulon_white.png" type="images/png"/><link rel="stylesheet" href="style/main.css" />
	<link rel="stylesheet" href="style/header.css" />
	<link rel="stylesheet" href="style/nav.css" />
	<link rel="stylesheet" href="style/footer.css" />
	<link rel="stylesheet" href="style/liste.css" />   

	<title>Liste Télévisions</title> <!-- titre dans l'onglet -->
</head>
<body>
	<?php include("include/Header.php"); ?>
	<div id="pageListe">
		<div id="Nav2">
			<h5>Vos Télévisions</h5>
			<image class="image-liste" src="https://i.pinimg.com/originals/fd/12/c1/fd12c120b51e4b9315239f0382e450ad.jpg"></image>
			<h1>Voici la liste complete de vos télévisions, choisissez celle que vous souhaitez geré : </h1>
		</div>
		<div id="Liste">
			<?php
				try{
				$bdd = new PDO('mysql:host=localhost;dbname=pds;charset=utf8', 'root', '');}
				catch(Exception $e)
				{die('Erreur : '.$e->getMessage());}
				$type_objet='television';
				$reponse = $bdd->prepare('SELECT * FROM television WHERE id= :id AND type_objet= :type_objet');
				$reponse->execute(array(
    			'id' => $_SESSION['id'],
    			'type_objet' =>$type_objet
   				));	
				while ($donnees = $reponse->fetch())
				{
			?>
			<div id="Ligne">
				<image src="http://www.userlogos.org/files/logos/jumpordie/trakt_01.png" width="100" height="80"></image>	
				<div class="cadre">
    				<strong>Télévision  <?php echo $donnees['lieux']; ?></strong>
    			</div>		
				<div class="bouton_selectionner">
					<form action="PageTelevision.php" method="post">
      					<input type="hidden" name="id_objet" value="<?php echo $donnees['id_television']?>">
      					<?php $_SESSION['id_objet']=$donnees['id_television']?>
      					<button class="selectionner" type="submit">Selectionner</button>
      				</form>
      			</div>
			</div>
			<?php
			}
			$reponse->closeCursor(); // Termine le traitement de la requête
			?>	
		</div>
	</div>
</body>
	<?php include("include/Footer.php"); ?>
</html>