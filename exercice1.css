<?php

/*Je charge les librairies de pChart qui se trouve dans le dossier class pour qu'il puisse afficher un graphique
include("class/pData.class.php");
include("class/pDraw.class.php");
include("class/pImage.class.php");
include("class/pPie.class.php");
include("class/pIndicator.class.php");

/* Je créer un nouvel objet contenant mes données pour le graphique */
 $MyData = new pData();

/*Je présente ma série de données à utiliser pour le graphique et je détermine le titre de l'axe vertical avec setAxisName*/  
 $MyData->addPoints(array(171,73,58,75,180,200,400,500,163,152,145),"Probe 3");
 $MyData->setSerieWeight("Probe 3",2);
 $MyData->setAxisName(0,"Nombre de chômeurs");

/*J'indique les données horizontales du graphique. Il doit y avoir le même nombre que pour ma série de données précédentes (logique)*/
 $MyData->addPoints(array("2001","2002","2003","2004","2005","2006","2007","2008","2009","2010","2011"),"Labels");
 $MyData->setSerieDescription("Labels","Années");
 $MyData->setAbscissa("Labels");
 $MyData->setPalette("Probe 3",array("R"=>255,"G"=>0,"B"=>0));

/* Je crée l'image qui contiendra mon graphique précédemment crée */
 $myPicture = new pImage(900,330,$MyData);

/* Je crée une bordure à mon image */
 $myPicture->drawRectangle(0,0,899,329,array("R"=>0,"G"=>0,"B"=>0));

/* J'indique le titre de mon graphique, son positionnement sur l'image et sa police */ 
 $myPicture->setFontProperties(array("FontName"=>"fonts/Forgotte.ttf","FontSize"=>11));
 $myPicture->drawText(200,25,"Evolution du nombre de chômeurs",array("FontSize"=>20,"Align"=>TEXT_ALIGN_BOTTOMMIDDLE));

/* Je choisi le fond de mon graphique */
 $myPicture->setFontProperties(array("FontName"=>"fonts/pf_arma_five.ttf","FontSize"=>6));

/* Je détermine la taille du graphique et son emplacement dans l'image */
 $myPicture->setGraphArea(60,40,800,310);

/* Paramètres pour dessiner le graphique à partir des deux abscisses */
 $scaleSettings = array("XMargin"=>10,"YMargin"=>10,"Floating"=>TRUE,"GridR"=>200,"GridG"=>200,"GridB"=>200,"DrawSubTicks"=>TRUE,"CycleBackground"=>TRUE);
 $myPicture->drawScale($scaleSettings);

/* J'insère sur le côté droit le nom de l'auteur et les droits */ 
$myPicture->setFontProperties(array("FontName"=>"fonts/Bedizen.ttf","FontSize"=>6));
$TextSettings = array("DrawBox"=>TRUE,"BoxRounded"=>TRUE,"R"=>0,"G"=>0,"B"=>0,"Angle"=>90,"FontSize"=>10);
$myPicture->drawText(860,300,"Création : FabPlug.com - Tous droits réservés",$TextSettings);

/* Je dessine mon graphique en fonction des paramètres précédents */
$myPicture->drawAreaChart();
$myPicture->drawLineChart(); 

/* Je rajoute des points rouge (plots) en affichant par dessus les données */
$myPicture->drawPlotChart(array("DisplayValues"=>TRUE,"PlotBorder"=>TRUE,"BorderSize"=>2,"Surrounding"=>-60,"BorderAlpha"=>80));

/* J'indique le chemin où je souhaite que mon image soit créée */
 $myPicture->Render("img/evolution-du-chomage.png");
?>
