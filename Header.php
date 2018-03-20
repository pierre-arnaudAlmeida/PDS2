<header>

	<div id="entete">
		<image src="https://www.bevywise.com/images/device-manager.png" width="700" height="160"></image>
	</div>

	<div id="bandeau">
		<div class="onglet-accueil">
			<a href="Accueil.php"><h1>Accueil</h1></a>
		</div>
		<div class="onglet">	
			<ul>
    			<li>
      				<a href="PageObjets.php"><h1>Objets</h1></a>
      				<?php
					if ($_SESSION['nom']!='Bel(le) inconnu(e)'){
					echo '
					<ul>
        				<a href="PageLumiere.php"><h2>Lumières</h2></a></br>
        				<a href="PageVolet.php"><h2>Volets</h2></a></br>
        				<a href="PageTelevision.php"><h2>Télévisions</h2></a></br>
       					<a href="PageAjout_Objet.php"><h2>Ajouter un Objet</h2></a></br>
					</ul>';}
      				?>
    			</li>
  			</ul>
		</div>
		<?php
		if ($_SESSION['nom']!='Bel(le) inconnu(e)'){
		echo '
		<div class="onglet">
			<a href="PageCompte.php"><h1>Mon Compte</h1></a>
		</div>
		<div class="onglet">
			<a href="deconnection.php"><h1>Se Deconnecter</h1></a>
		</div>';}
		?>
		<?php
		if ($_SESSION['nom']=='Bel(le) inconnu(e)'){
		echo '
		<div class="onglet">
			<a href="PageConnexion.php"><h1>Connexion</h1></a>
		</div>	
		<div class="onglet">
			<a href="PageInscription.php"><h1>S\'inscrire</h1></a>
		</div>';}
		?>
	</div>		
</header>
