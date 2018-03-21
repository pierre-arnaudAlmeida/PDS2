<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=pds;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$nom_connection= $_POST['nom'];
$mot_de_passe_connection= $_POST['mot_de_passe'];


$req = $bdd->prepare('SELECT id FROM inscription WHERE nom = :nom AND mot_de_passe = :mot_de_passe');
$req->execute(array(
    'nom' => $nom_connection,
    'mot_de_passe' => $mot_de_passe_connection));

$resultat = $req->fetch();

if (!$resultat)
{   
   header('Location: \PDS2\PageConnexion.php');
}
else
{
    session_start();
    $_SESSION['id'] = $resultat['id'];
    $_SESSION['nom'] = $nom_connection;
    header('Location: \PDS2\PageObjets.php');
}
?>