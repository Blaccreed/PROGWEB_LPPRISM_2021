<?php

require_once("Connexion.php");
require_once("Voiture.php");
Connexion::connect();
$immatriculation = $_GET['immatriculation'];


$requetePreparee = "SELECT* FROM voiture WHERE immatriculation = :tag_immatriculation;";
$req_prep = Connexion::pdo()->prepare($requetePreparee);

$arrayName = array("tag_immatriculation" => $immatriculation);

try {

  $req_prep->execute($arrayName);
  $req_prep -> setFetchMode(PDO::FETCH_CLASS, 'Voiture');
} catch (PDOException $e) {
       echo "erreur: ".$e ->getMessage()."</br>";
}

$result = $req_prep->fetchAll();
print_r($result);

foreach($result as $voiture)
{
  echo $voiture->afficher();
}







 ?>
