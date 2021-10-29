<?php

require_once("Connexion.php");
require_once("Voiture.php");

Connexion::connect();

$immat = $_GET['immatriculation'];
$marque = $_GET['marque'];
$couleur = $_GET['couleur'];

Voiture::updateVoiture($immat, $marque, $couleur);



















 ?>
