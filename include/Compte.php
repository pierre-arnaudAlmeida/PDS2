      <div id="Compte_client">
        	<div id="Compte">
        		<image src="https://circuitmaker.com/Content/Images/Avatars/unknown_avatar180.png" width="200" height="200"></image>
        		<div>
              <?php
              try
              {
              // On se connecte à MySQL
              $bdd = new PDO('mysql:host=localhost;dbname=pds;charset=utf8', 'root', '');
              }
              catch(Exception $e)
              {
              // En cas d'erreur, on affiche un message et on arrête tout
                die('Erreur : '.$e->getMessage());
              }
              // On récupère tout le contenu de la table jeux_video
              $reponse = $bdd->prepare('SELECT * FROM inscription WHERE id= :id AND nom= :nom');
              $reponse->execute(array(
                'id' => $_SESSION['id'],
                'nom' =>$_SESSION['nom']
              ));

              // On affiche chaque entrée une à une
              while ($donnees = $reponse->fetch())
              {
              ?>
        			<h6>Bonjour Mr <?php $pseudo=$_SESSION['nom'];echo $pseudo;  ?></h6>
              <h6>Argent disponible : <?php echo $donnees['argent']; ?> €</h6>
              <?php
              }
              $reponse->closeCursor(); // Termine le traitement de la requête
              ?>

              <a href="PageAjouterArgent.php" >
                   <h6> Ajouter de l'Argent</h6></image>  
                  </a>
            </div>

    	    </div>
        		<div id="Cadre-modifier">
        	<form action="traitement/traitement_modifier.php" method="post" name="modifer">

        		<div id="Cadre-date_naissance">
                	<div class="date_naissance">                    
                      <h>Date de naissance <input type="date" name="date_naissance"/>
                      </h>                                          
                	</div>
            	</div>

            <div id="Cadre-Confirm_Mdp">
                <div class="mot_de_passe">
                    
                       <h>Le Nouveau mot de Passe </h>
                       <input type="password" name="nouveau_mot_de_passe"/>  
                </div>
            </div>

            <div id="Cadre">
                <div class="pays">
                    
                       <h>Pays</h>
                       <input type="select" name="Pays" />  
                </div>

                <div class="ville">
                    
                       <h>Ville</h>
                       <input type="texte" name="Ville" />  
                </div>

                <div class="rue">
                    
                       <h>Rue</h>
                       <input type="texte" name="Rue" />  
                </div>

                <div class="telephone">
                    
                       <h>Téléphone</h>
                       <input type="tel" name="telephone" />  
                </div>
            </div>

            <div id="Cadre-Mdp_inscription">
                <div class="mot_de_passe">
                    
                       <h>Mot de Passe</h>
                       <input type="password" name="ancien_mot_de_passe" required/>  
                </div>
            </div>
                <input type="hidden" name="id" value="<?php echo $_SESSION['id']?>"> 
			 <input class="bouton_inscription" type="submit" value="Modifier"/>
        </form>
        		</div>
        </div>