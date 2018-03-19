<?php
	session_start();
	if($_SESSION['nom']==null){
		$_SESSION['nom']='Bel(le) inconnu(e)';
	}
?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="https://lh5.googleusercontent.com/-cCPFUP6eAj0/USdq5uSTKFI/AAAAAAAAAYY/3CeiAHyAiFU/s800/triboulon_white.png" type="images/png"/><link rel="stylesheet" href="main.css" />    

	<title>Gestionnaire d'Objets Connectés</title> <!-- titre dans l'onglet -->

<script language="javascript">
imgPath = new Array;
SiClickGoTo = new Array;
version = navigator.appVersion.substring(0,1);
if (version >= 3)
	{
	i0 = new Image;
	i0.src = 'url_image0';
	SiClickGoTo[0] = "Lien0";
	imgPath[0] = i0.src;
	i1 = new Image;
	i1.src = 'url_image1';
	SiClickGoTo[1] = "Lien1";
	imgPath[1] = i1.src;
	i2 = new Image;
	i2.src = 'url_image2';
	SiClickGoTo[2] = "Lien2";
	imgPath[2] = i2.src;
	}
a = 0;
function StartAnim()
	{
	if (version >= 3)
		{
		document.write('<a href="#" onclick="ImgDest();return(false)"><img src="url_image0" border="0" alt="Menu" name="defil" /></a>');
		defilimg()
		}
	else
		{
		document.write('<a href="Lien0"><img src="url_image0" border="0" /></a>')
		}
	}
function ImgDest()
	{
	document.location.href = SiClickGoTo[a-1];
	}
function defilimg()
	{
	if (a == 3)
		{
		a = 0;
		}
	if (version >= 3)
		{
		document.defil.src = imgPath[a];
		tempo3 = setTimeout("defilimg()",5000);
		a++;
		}
	}
</script>

</head>
<body>
	<?php include("Header.php"); ?>

		<div id="pagecentrale">
			<script language="javascript">
StartAnim();
</script>
		</div>
</body>
	<footer>
	</footer>
</html>