<div id="Inscription">
      <div id="colonne">
		      <form action="traitement_inscription.php" method="post" name="inscrire"> 	       
             <div id="Cadre-Nom">
                <div class="nom">                    
                      <h>Nom <input type="text" name="nom_inscription" required/>
                      </h>                                          
                </div>
            </div>
            <div id="Cadre-prenom">
                <div class="prenom">                    
                      <h>Prénom <input type="text" name="prenom_inscription" required/>
                      </h>                                          
                </div>
            </div>
            
            <div id="Cadre-email">
                <div class="email">                    
                      <h>Email <input type="email" name="email" required/>
                      </h>                                          
                </div>
            </div>

            <div id="Cadre-date_naissance">
                <div class="date_naissance">                    
                      <h>Date de naissance <input type="date" name="date_naissance" required/>
                      </h>                                          
                </div>
            </div>

            <div id="Cadre-Mdp_inscription">
                <div class="mot_de_passe">
                    
                       <h>Mot de Passe</h>
                       <input type="password" name="creation_mot_de_passe" required/>  
                </div>
            </div>

            <div id="Cadre-Confirm_Mdp">
                <div class="mot_de_passe">
                    
                       <h>Confirmer le mot de Passe </h>
                       <input type="password" name="creation_mot_de_passe2" required/>  
                </div>
            </div>
          </div>

          <div id="colonne2">
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
			 <input class="bouton_inscription" type="submit" value="Inscription"/>
        </form>
         </div>
      </div>