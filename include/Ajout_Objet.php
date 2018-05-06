x<div id="Objet">
      
  <form action="traitement/traitement_ajout_objet.php" method="post" id="cadre-argent" class="p-3">
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

    <div id="Objet-nom"> 
      <p>Vous pouvez choisir l'objet à ajouter et son état </p>
    </div>


    <div id="Cadre-etat_objet">
      <div class="pays">
        <h>Lieux</h>
        <input type="select" name="Lieux" required /> <br/> 
      </div>
    </div>

    <div id="cadre-objet" class="row">
      <div class="image-objet col-sm-4">
        <img src="https://www.lampeberger.fr/media/catalog/product/cache/1/image/740x/9df78eab33525d08d6e5fb8d27136e95/c/n/cnpl-brun.png" alt="Avatar" class="image">
        <div class="cadre">
          <input type="radio" name="type_objet" value="lumiere" id="lumiere" required/> 
          <label for="lumiere">Lumiere 15 €</label><br/></a>
        </div>
      </div>

      <div class="image-objet col-sm-4">
        <img src="http://www.valferm.fr/wp-content/themes/valferm/images/produit/volet-bois/01-volets-bois-a-cles.png"  class="image" alt="Avatar">
        <div class="cadre">
          <input type="radio" name="type_objet" value="volet" id="volet" required/> 
          <label for="volet">Volet 75 €</label><br/>
        </div>
      </div>

      <div class="image-objet col-sm-4">
        <img src="https://vignette.wikia.nocookie.net/fictspedia/images/4/42/ITV.001_samsung_d8000_side1.png/revision/latest?cb=20140908234619" alt="Avatar" class="image">
        <div class="cadre">
          <input type="radio" name="type_objet" value="television" id="television" required/> 
          <label for="television">Television 175 €</label><br/>
        </div>
      </div>
    </div>

    <div id="Cadre-etat_objet">
      <div class="pays">
        <h4></strong>Etat de l'objet</strong></h4>
        <input type="radio" name="etat_objet" value="allumee" id="allumee" required/> 
        <label for="allumee">Allumé/Monté</label><br/>
                  
        <input type="radio" name="etat_objet" value="eteint" id="eteint" required/> 
        <label for="eteinte">Eteinte/Descendu</label><br/>
      </div>
    </div>

    <div id="Cadre-etat_objet">
      <div class="telephone"> 
        <h>Chaine Tv</h>
        <input type="number" name="chaine" />  
      </div>
    </div>
              
    <input type="hidden" name="id" value="<?php echo $_SESSION['id']?>">
		<input class="bouton_inscription" type="submit" value="Ajouter"/>
  </form>

</div>