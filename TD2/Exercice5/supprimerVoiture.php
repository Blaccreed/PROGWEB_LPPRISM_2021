<?php
require_once("Connexion.php");
require_once("Voiture.php");

Connexion::connect();
$immatriculation = $_GET['immatriculation'];

Voiture::DeleteVoitureByImmat($immatriculation);








 ?>
