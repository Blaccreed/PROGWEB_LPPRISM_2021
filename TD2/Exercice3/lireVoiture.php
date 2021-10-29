<?php

require_once("Connexion.php");
require_once("Voiture.php");
	Connexion::connect();

	$LesVoitures = Voiture::getAllVoiture();
  

	// affichage du tableau
	echo "<pre>"; print_r($LesVoitures); echo "</pre>";



echo "<ul>";

foreach($LesVoitures as $voiture)
	{
		echo "<li>";
		echo $voiture ->afficher();
        echo "</li>";
	}


echo "</ul>";




?>
