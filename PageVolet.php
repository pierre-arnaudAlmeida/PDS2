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
	<link rel="stylesheet" href="style/objet.css" />
	<link rel="stylesheet" href="style/footer.css" />
	<link rel="stylesheet" href="style/liste.css" />    

	<title>Volet</title> <!-- titre dans l'onglet -->
</head>
<body>
	<?php include("include/Header.php"); ?>
	<div id="pagecentrale">
		<div id="Obj">
        <?php
			try{
			$bdd = new PDO('mysql:host=localhost;dbname=pds;charset=utf8', 'root', '');}
			catch(Exception $e)
			{die('Erreur : '.$e->getMessage());}	
			$type_objet='volet';
			if (isset($_POST['id_objet'])) {
				$id_objet=$_POST['id_objet'];
			}else ($id_objet=$_SESSION['id_objet']);
			$reponse = $bdd->prepare('SELECT * FROM volet WHERE (id= :id AND type_objet= :type_objet AND id_volet= :id_objet)');
			$reponse->execute(array(
    		'id' => $_SESSION['id'],
    		'type_objet' =>$type_objet,
    		'id_objet' =>$id_objet
   			));
			$donnees = $reponse->fetch()
		?>
			<div id="Lumiere">
				<div class="lumiere">
					<form action="traitement/traitement_update_objet.php" method="post">
						<div class="lieux-objet">
							<strong>Volet <?php echo $donnees['lieux']; ?></strong>
						</div>
						<br>
						<h1> Vous souhaitez modifier l'etat de votre volet :</h1>
						<input type="hidden" name="id_objet" value="<?php echo $donnees['id_volet']?>">
    					<?php $_SESSION['id_objet']=$donnees['id_volet']?>
    					<input type="hidden" name="type_objet" value="volet">
    					<?php if($donnees['etat']==1){
    					echo '<div class="bouton_etat">				
								<input type="checkbox" value="None" id="bouton_etat" name="etat_volet" checked onchange="this.form.submit()"/>
								<label for="bouton_etat"></label>
							</div>';
						}else echo '<div class="bouton_etat">		
								<input type="checkbox" value="None" id="bouton_etat" name="etat_volet" onchange="this.form.submit()"/>
								<label for="bouton_etat"></label>
							</div>';
						?>
      				</form>

					<form action="traitement/traitement_delete_objet.php" method="post">
      					<h1> Supprimer l'objet :</h1>
      					<?php $_SESSION['id_objet']=$donnees['id_volet']?>
      					<input type="hidden" name="id_objet" value="<?php echo $donnees['id_volet']?>">
      					<input type="hidden" name="type_objet" value="<?php echo $donnees['type_objet']?>">
      					<div class="bouton_supp">	
							<input type="checkbox" value="None" id="bouton_supp" name="check" onchange="this.form.submit()"/>
							<label for="bouton_supp"></label>
						</div>
      				</form>
				</div>
				<div class="illustration-lumiere">
      				<?php if($donnees['etat']==1){
      				echo'<image class="image-liste" src="http://as-depannage.fr/images/fenetre-volet-roulant.png" width="150px" height="160px"></image>';
      				}else echo '<image class="image-liste" src="http://www.store-volet.com/sites/all/themes/custom/store_volet/images/lames_volet_roulant_blanc.png" width="150px" height="160px"></image>';
      				?>
      			</div>
			</div>
			<?php
			$reponse->closeCursor(); // Termine le traitement de la requête
			?>	
        </div>
	</div>
</body>
	<?php include("include/Footer.php"); ?>
</html>