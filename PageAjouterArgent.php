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
		<div id="pageconnexion">
			<div id="Argent-compte">
				<div class="Argent">
					<?php
            try{
            $bdd = new PDO('mysql:host=localhost;dbname=pds;charset=utf8', 'root', '');}
            catch(Exception $e)
            {die('Erreur : '.$e->getMessage());}
            $reponse = $bdd->prepare('SELECT * FROM inscription WHERE id= :id AND nom= :nom');
            $reponse->execute(array(
            'id' => $_SESSION['id'],
            'nom' =>$_SESSION['nom']
            ));
            while ($donnees = $reponse->fetch())
            {
            ?>
        		<h6>Bonjour Mr <?php $pseudo=$_SESSION['nom'];echo $pseudo;  ?></h6>
            <h6>Argent disponnible : <?php echo $donnees['argent']; ?> €</h6>
            <?php
            }
            $reponse->closeCursor(); // Termine le traitement de la requête
          ?>
				</div>
				<div>
					<form action="traitement/traitement_ajouter_argent.php" method="post" name="modifer">
						<div id="Cadre-Mdp_inscription">
              <div class="date_naissance">                    
                <h>Montant à ajouter <input type="number" name="montant"/></h>                                          
              </div>
            </div>
            <div id="Cadre-Mdp_inscription">
              <div class="mot_de_passe">
                <h>Mot de Passe </h><input type="password" name="mot_de_passe" required/>  
              </div>
            </div>
            <input type="hidden" name="id" value="<?php echo $_SESSION['id']?>"> 
			 			<input class="bouton_inscription" type="submit" value="Modifier"/>
			 		</form>
				</div>
			</div>
			<div id="Nav">
				<h1>Vous n'avez plus d'argent pour ajouter des objets ?<br><br>
					Ne vous inquietez pas, sur cette page vous pourrez ajouter le montant que vous souhaitez à votre compte.<br><br>
					Nous vous demandons donc de saisir le montant que vous souhaitez et de renseigné votre mot de passe.
				</h1>
			</div>
		</div>
</body>
	<?php include("/include/Footer.php"); ?>
</html>