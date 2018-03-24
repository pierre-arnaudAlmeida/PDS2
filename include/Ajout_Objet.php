<div id="Liste_objets">
  <form action="traitement/traitement_ajout_objet.php" method="post">
    <div id="Cadre-telephone">
      <div class="telephone">
        <?php
        try{
        $bdd = new PDO('mysql:host=localhost;dbname=pds;charset=utf8', 'root', '');
        }
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
        <h4></strong>Montant disponible : <?php echo $donnees['argent']; ?> €</strong></h4>
        <?php
        }
        $reponse->closeCursor();
        ?>
      </div>
    </div>

    <div id="Cadre-type_objet">
      <div class="pays">
        <h4></strong>Type de l'objet</strong></h4>
        <input type="radio" name="type_objet" value="lumiere" id="lumiere" required/> 
        <label for="lumiere">Lumiere 15 €</label><br />
                  
        <input type="radio" name="type_objet" value="volet" id="volet" required/> 
        <label for="volet">Volet 75 €</label><br />
                  
        <input type="radio" name="type_objet" value="television" id="television" required/> 
        <label for="television">Television 175 €</label><br />
      </div>
    </div>

    <div id="Cadre-etat_objet">
      <div class="pays">
        <h4></strong>Etat de l'objet</strong></h4>
        <input type="radio" name="etat_objet" value="allumee" id="allumee" required/> 
        <label for="allumee">Allumé/Monté</label><br />
                  
        <input type="radio" name="etat_objet" value="eteint" id="eteint" required/> 
        <label for="eteinte">Eteinte/Descendu</label><br />
      </div>
    </div>

    <div id="Cadre-pays">
      <div class="pays">
        <h>Lieux</h>
        <input type="select" name="Lieux" required />  
      </div>
    </div>

    <div id="Cadre-telephone">
      <div class="telephone"> 
        <h>Chaine Tv</h>
        <input type="number" name="chaine" />  
      </div>
    </div>
              
    <input type="hidden" name="id" value="<?php echo $_SESSION['id']?>">
		<input class="bouton_inscription" type="submit" value="Ajouter"/>
  </form>
</div>