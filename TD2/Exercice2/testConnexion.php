<?php
	// création de 4 variables pour les éléments essentiels de connexion
	$hostname = 'localhost';	// le serveur est distant pour nous, mais pour PHP il est local
  	$database = 'cyapi';		// votre id court
  	$login = 'root';			// votre id court
  	$password = 'root';	// votre mdp changé selon la procédure db_informations.txt

	// création d'un tableau associatif pour le paramétrage UTF-8.
	// avec cet argument, toutes les chaînes de caractères
	// en entrée et sortie de la base seront dans le codage UTF-8
	$tabUTF8 = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");

	try {

		// création d'un objet instance de la classe PDO qui matérialise la connexion.
		$pdo = new PDO("mysql:host=$hostname;dbname=$database",$login,$password,$tabUTF8);

		// On active le mode d'affichage des erreurs, et le lancement d'exception en cas d'erreur
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		// si la ligne suivante est exécutée, c'est que la connexion précédente s'est bien passée,
		// sinon un message d'erreur est apparu !
		echo "connexion à la base $database réussie !";

	} catch(PDOException $e) {
		echo "erreur de connexion : ".$e->getMessage()."<br>";
	}
?>
