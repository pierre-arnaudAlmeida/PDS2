<meta name="viewport" content="width=device-width, initial-scale=1">
<header>
	<div id="entete">
		<image src="https://www.bevywise.com/images/device-manager.png" width="700" height="160"></image>
	</div>

	<div id="navbar">
  		<div class = "onglet-accueil">
  			<a class="active" href="Accueil.php"><h1>Accueil</h1></a>
  		</div>

		<div class="onglet-objet">
      		<button class="onglet-boutton"><a href="PageObjets.php">Objets</a></button>
      		<div class="onglet-objet-content">
      			<?php
				if ($_SESSION['nom']!='Bel(le) inconnu(e)'){
				echo '
        			<a href="PageListe_Lumiere.php"><h2>Lumières</h2></a></br>
        			<a href="PageListe_Volet.php"><h2>Volets</h2></a></br>
        			<a href="PageListe_Television.php"><h2>Télévisions</h2></a></br>
       				<a href="PageAjout_Objet.php"><h2>Ajouter un Objet</h2></a></br>
       				<a href="PageInformation.php"<h2>Informations</h2></a></br>';}
       			else { 
       			echo '
       				<a href="PageListe_Lumiere.php"><h2>Lumières</h2></a></br>
        			<a href="PageListe_Volet.php"><h2>Volets</h2></a></br>
        			<a href="PageListe_Television.php"><h2>Télévisions</h2></a></br>
       				<a href="PageAjout_Objet.php"><h2>Ajouter un Objet</h2></a></br>
       				<a href="PageInformation.php"<h2>Informations</h2></a></br>';}
      			?>
      		</div>
  		</div>
		<?php
		if ($_SESSION['nom']!='Bel(le) inconnu(e)'){
		echo '
			<div class="onglet">
				<a href="PageCompte.php" ><h1>Mon Compte</h1></a>
			</div>
			<div class="onglet">
				<a href="traitement/deconnection.php" ><h1>Se Deconnecter</h1></a>
			</div>';}
		?>
		<?php
		if ($_SESSION['nom']=='Bel(le) inconnu(e)'){
		echo '
			<div class="onglet" >
				<a href="PageConnexion.php" ><h1>Connexion</h1></a>
			</div>	
			<div class="onglet" >
				<a href="PageInscription.php" ><h1>S\'inscrire</h1></a>
			</div>';}
		?>
	</div>
	
	<script >
		window.onscroll = function() {myFunction()};
		var navbar = document.getElementById("navbar");
		var sticky = navbar.offsetTop;

		function myFunction() {
  		if (window.pageYOffset >= sticky) {
    	navbar.classList.add("sticky")
  		} else {
    	navbar.classList.remove("sticky");
		}
		}
	</script>
</header>
