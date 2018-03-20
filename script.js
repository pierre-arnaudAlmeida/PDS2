
imgPath = new Array;
SiClickGoTo = new Array;
version = navigator.appVersion.substring(0,1);
if (version >= 3)
	{
	i0 = new Image;
	i0.src = 'http://www.hellopro.fr/images/produit-2/0/3/0/volet-aluminium-taos-volet-coulissant-taos-5821030.jpg';
	SiClickGoTo[0] = "Lien0";
	imgPath[0] = i0.src;
	i1 = new Image;
	i1.src = 'http://www.matelpro.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/c/o/composition_tv_murale_design_blanc-miel_delicio.jpg';
	SiClickGoTo[1] = "Lien1";
	imgPath[1] = i1.src;
	i2 = new Image;
	i2.src = 'http://carti-de-vizita.org/wp-content/uploads/2018/02/lampe-salon-sur-pied-2017-avec-beliani-lampe-de-salon-moderne-sur-concernant-lampe-de-salon-moderne.jpg';
	SiClickGoTo[2] = "Lien2";
	imgPath[2] = i2.src;
	}
a = 0;
function StartAnim()
	{
	if (version >= 3)
		{
		document.write('<a href="#" onclick="ImgDest();return(false)"><img src="url_image0" border="0" alt="Menu" name="defil" id="defilement" /></a>');
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
