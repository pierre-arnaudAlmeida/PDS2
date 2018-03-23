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

		<div id="pagecentrale">
			<div id="Obj">
			<?php
				try
				{
				$bdd = new PDO('mysql:host=localhost;dbname=pds;charset=utf8', 'root', '');
				}
				catch(Exception $e)
				{
        		die('Erreur : '.$e->getMessage());
				}
				$type_objet='lumiere';
				if (isset($_POST['id_objet'])) {
					$id_objet=$_POST['id_objet'];
				}else ($id_objet=$_SESSION['id_objet']);
				
				$reponse = $bdd->prepare('SELECT * FROM objet WHERE (id= :id AND type_objet= :type_objet AND id_objet= :id_objet)');
				$reponse->execute(array(
    			'id' => $_SESSION['id'],
    			'type_objet' =>$type_objet,
    			'id_objet' =>$id_objet
   				));
				$donnees = $reponse->fetch();
			?>
        	<div id="Lumiere">
				<div class="lumiere">
					<form action="traitement/traitement_update_objet.php" method="post">
    					<div class="lieux-objet">
    						<strong>Lumière  <?php echo $donnees['lieux']; ?></strong>
    					</div>
    					<h> Indiquer quel est l'état que vous souhaitiez :<br />
    					<input type="hidden" name="id_objet" value="<?php echo $donnees['id_objet']?>">
    					<?php $_SESSION['id_objet']=$donnees['id_objet']?>
       					<input type="radio" name="etat_lumiere" value="lumiere_allumee" id="lumiere_allumee" onchange="this.form.submit()" /> 
       					<label for="lumiere_allumee">Allumer la lumière</label><br />

       					<input type="radio" name="etat_lumiere" value="lumiere_eteinte" id="lumiere_eteinte" onchange="this.form.submit()"/> 
       					<label for="lumiere_eteinte">Eteindre la lumière</label><br />

       					</h><br/><br/>
      					<h> La lumière est actuellement <strong><?php if($donnees['etat']==1){
      						echo 'allumé';}else echo 'éteinte'; ?></strong> dans : </h><?php echo $donnees['lieux']; ?> <br/><br/>
      				</form>

      				<form action="traitement_delete_objet.php" method="post">
      					<?php $_SESSION['id_objet']=$donnees['id_objet']?>
      					<input type="hidden" name="id_objet" value="<?php echo $donnees['id_objet']?>">
      					<button type="submit">Supprimer l'objet</button>
      				</form>	
      			</div>

      			<div class="illustration-lumiere">
      				
      			</div>
			</div>
		<?php
		$reponse->closeCursor(); // Termine le traitement de la requête
		?>			
							
        </div>
		</div>
</body>
	<?php include("/include/Footer.php"); ?>
</html>