<?php
	
	require_once("Connexion.php");
	Connexion::connect();

	// une première requête
	$requete = "SELECT * FROM livre;";

	// on lance la requête par l'attribut statique $pdo 
	// de la classe Connexion et on récupère le résultat
	// dans une variable, sous forme d'objet PDOStatement
	$resultat = Connexion::pdo()->query($requete);

	// ce $resultat a besoin d'un traitement avant d'être
	// exploité. Ce traitement crée un tableau de tableaux
	// associatifs champ / valeur. Chacun de ces tableaux 
	// associatifs représente une ligne de la table
	$tableau = $resultat->fetchAll(PDO::FETCH_ASSOC);

	// affichage du tableau
	echo "<pre>"; print_r($tableau); echo "</pre>";

?>

