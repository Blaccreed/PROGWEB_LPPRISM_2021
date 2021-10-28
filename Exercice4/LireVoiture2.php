<?php

require_once("Connexion.php");
require_once("Voiture.php");
Connexion::connect();
$immatriculation = $_GET['immatriculation'];


$v = Voiture ::getVoitureByImmat($immatriculation);



foreach($v as $voiture)
{
  echo $voiture-> afficher();
}





 ?>
