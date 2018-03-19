<?php
	try
	{
	$bdd = new PDO('mysql:host=localhost;dbname=pds;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
        die('Erreur : '.$e->getMessage());
	}
		// verification des champs obligatoire et affectation a une variable
	if(($_POST['nom_inscription']!= null) AND ($_POST['prenom_inscription']!= null) AND ($_POST['date_naissance']!= null) and ($_POST['email']!= null) and ($_POST['creation_mot_de_passe']== $_POST['creation_mot_de_passe2'])){
			$nom_inscription= $_POST['nom_inscription'];
			$prenom_inscription = $_POST['prenom_inscription'];
			$date_naissance_inscription = $_POST['date_naissance'];
			$email_inscription = $_POST['email'];
			$mot_de_passe_inscription = $_POST['creation_mot_de_passe'];

	if($_POST['Pays']!=null){
		$pays_inscription = $_POST['Pays'];
	}else $pays_inscription ='';
	
	if($_POST['Ville']!=null){
		$ville_inscription = $_POST['Ville'];
	}else $ville_inscription ='';
	
	if($_POST['Rue']!=null){
		$rue_inscription = $_POST['Rue'];
	}else $rue_inscription ='';

	if($_POST['telephone']!=null){
		$telephone_inscription = $_POST['telephone'];
	}else $telephone_inscription ='';

	}else header('Location: PageInscription.php');

	
	$nb_occurence =0;


$requete = $bdd->query('SELECT nom,prenom,email FROM inscription');
while ($donnees = $requete->fetch()){
if (($donnees['nom']==$nom_inscription) AND ($donnees['prenom'] == $prenom_inscription)){
	$nb_occurence=$nb_occurence+1;
}
if($donnees['email']== $email_inscription){
	$nb_occurence=$nb_occurence+1;
}
}
$requete->closeCursor();

if($nb_occurence==0){
	$req = $bdd->prepare('INSERT INTO inscription(nom,prenom,date_naissance,email,mot_de_passe,pays,ville,rue,telephone) VALUES(:nom,:prenom,:date_naissance,:email,:mot_de_passe,:pays,:ville,:rue,:telephone)');
$req->execute(array(
	'nom' =>$nom_inscription,
	'prenom' =>$prenom_inscription,
	'date_naissance'=>$date_naissance_inscription,
	'email'=>$email_inscription,
	'mot_de_passe'=>$mot_de_passe_inscription,
	'pays'=>$pays_inscription,
	'ville'=>$ville_inscription,
	'rue'=>$rue_inscription,
	'telephone'=>$telephone_inscription
));

$req2 = $bdd->prepare('SELECT id FROM inscription WHERE email = :email');
$req2->execute(array(
    'email' => $email_inscription));

$resultat = $req2->fetch();
session_start();
    $_SESSION['id'] = $resultat['id'];
    $_SESSION['nom'] = $nom_inscription;

header('Location: PagePrincipale.php');
} else header('Location: PageInscription.php');



?>
