<?php
try{
$bdd = new PDO('mysql:host=localhost;dbname=pds;charset=utf8', 'root', '');}
catch(Exception $e)
{die('Erreur : '.$e->getMessage());}
	if($_SESSION['nom']==null){
	$_SESSION['nom']='Bel(le) inconnu(e)';}
?>
<div id="Liste_objets">
	<div class="Objet">
		<div class="logo-objet">
		<?php
		if ($_SESSION['nom']!='Bel(le) inconnu(e)'){
		echo '<a href="PageListe_Lumiere.php" class="Lumiere-logo">
			<image src="https://www.lampeberger.fr/media/catalog/product/cache/1/image/740x/9df78eab33525d08d6e5fb8d27136e95/c/n/cnpl-brun.png" width="170" height="170"></image></a>
		';}else {echo '<image src="https://www.lampeberger.fr/media/catalog/product/cache/1/image/740x/9df78eab33525d08d6e5fb8d27136e95/c/n/cnpl-brun.png" width="170" height="170"></image>
		';}
		?>
		</div>
		<div class="lien">
			<span><?php
			if ($_SESSION['nom']!='Bel(le) inconnu(e)'){
				$type_objet='lumiere';
				$reponse = $bdd->prepare('SELECT * FROM lumiere WHERE id= :id AND type_objet= :type_objet');
				$reponse->execute(array(
    			'id' => $_SESSION['id'],
    			'type_objet' =>$type_objet));
				$nblumiere = $reponse ->rowCount();
			echo $nblumiere;
			}
			?> Lumieres</span>
   			<div class="lien-content">
    			<p>Ceci permet d'activer ou d'éteindre une lumière</p>
   				<p>Plus d'informations</p>
  			</div>
		</div>
	</div>

	<div class="Objet">
		<div class="logo-objet">
			<?php
			if ($_SESSION['nom']!='Bel(le) inconnu(e)'){
			echo '<a href="PageListe_Volet.php" class="Volet-logo" name="type_objet" value="volet"><image src="http://www.valferm.fr/wp-content/themes/valferm/images/produit/volet-bois/01-volets-bois-a-cles.png" width="170" height="170"></image></a>
	
			';}else {echo '<image src="http://www.valferm.fr/wp-content/themes/valferm/images/produit/volet-bois/01-volets-bois-a-cles.png" width="170" height="170"></image>
					
			';}
		?>
		</div>
		<div class="lien">
			<span><?php
			if ($_SESSION['nom']!='Bel(le) inconnu(e)'){
			$type_objet='volet';
			$reponse = $bdd->prepare('SELECT * FROM volet WHERE id= :id AND type_objet= :type_objet');
			$reponse->execute(array(
    		'id' => $_SESSION['id'],
    		'type_objet' =>$type_objet
   			));
			$nbvolet = $reponse ->rowCount();
			echo $nbvolet; 
			}
			?> Volets</span>
  			<div class="lien-content">
    			<p>Ceci permet de monter ou de descendre un volet</p>
   				<p>Plus d'informations</p>
  			</div>
		</div>
	</div>
		
	<div class="Objet">
		<div class="logo-objet">
		<?php
			if ($_SESSION['nom']!='Bel(le) inconnu(e)'){
			echo '<a href="PageListe_Television.php" class="Television-logo" name="type_objet" value="television"><image src="https://vignette.wikia.nocookie.net/fictspedia/images/4/42/ITV.001_samsung_d8000_side1.png/revision/latest?cb=20140908234619" width="170" height="170"></image>
				
			';}else {echo '<image src="https://vignette.wikia.nocookie.net/fictspedia/images/4/42/ITV.001_samsung_d8000_side1.png/revision/latest?cb=20140908234619" width="170" height="170"></image>
			';}
			?>
		</div>
		<div class="lien">
			<span><?php
			if ($_SESSION['nom']!='Bel(le) inconnu(e)'){
			$type_objet='television';
			$reponse = $bdd->prepare('SELECT * FROM television WHERE id= :id AND type_objet= :type_objet');
			$reponse->execute(array(
    		'id' => $_SESSION['id'],
    		'type_objet' =>$type_objet
   			));
			$nbtelevision = $reponse ->rowCount();
			echo $nbtelevision; 
			}
			?> Télévision</span>
  			<div class="lien-content">
    			<p>Ceci permet d'activer ou d'éteindre une télévision</p>
   				<p>Plus d'informations</p>
  			</div>
		</div>
	</div>
	
	<div class="Objet">
		<div class="logo-objet">
			<?php
			if ($_SESSION['nom']!='Bel(le) inconnu(e)'){
			echo '<a href="PageAjout_Objet.php" class="Television-logo"><image src="http://www.icone-png.com/png/20/19960.png" width="170" height="170"></image>
			';}
			else {echo '<image src="http://www.icone-png.com/png/20/19960.png" width="170" height="170"></image>
			';}
			?>
		</div>
		<div class="lien">
			<span>Ajouter Objet</span>
  			<div class="lien-content">
    			<p>Ceci permet d'ajouter un objet de votre choix</p>
   				<p>Plus d'informations</p>
  			</div>
		</div>
	</div>
</div>