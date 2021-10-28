
<?php
class Voiture {

	private $marque;
	private $couleur;
	private $immatriculation;

	// les getter
	public function getMarque() {return $this->marque;}
	public function getCouleur() {return $this->couleur;}
	public function getImmatriculation() {return $this->immatriculation;}

	// les setter
	public function setMarque($m) {$this->marque = $m;}
	public function setCouleur($c) {$this->couleur = $c;}
	public function setImmatriculation($i) {$this->immatriculation = $i;}

	// un constructeur
	public function __construct($m = NULL, $c = NULL, $i = NULL)  {
		if (!is_null($i)) {
			$this->marque = $m;
			$this->couleur = $c;
			$this->immatriculation = $i;
		}
	}

	// une methode d'affichage.
	public function afficher() {
		echo "<p>voiture $this->immatriculation, de marque $this->marque, de couleur $this->couleur</p>";
	}

	public static function getAllVoiture()
	{
		$requete = "SELECT * FROM voiture";
		$reponse = Connexion::pdo() ->query($requete);
		$reponse -> setFetchMode(PDO::FETCH_CLASS, 'Voiture');
        $tab = $reponse ->fetchAll();
		return $tab;
	}

  public static function GetVoitureByImmat($immat)
	{
		$requetePreparee = "SELECT* FROM voiture WHERE immatriculation = :tag_immatriculation;";
		$req_prep = Connexion::pdo()->prepare($requetePreparee);

		$arrayName = array("tag_immatriculation" => $immat);

		try {
		  $req_prep->execute($arrayName);
			$req_prep -> setFetchMode(PDO::FETCH_CLASS, 'Voiture');
		} catch (PDOException $e) {
		       echo "erreur: ".$e ->getMessage()."</br>";
		}

		$result = $req_prep->fetchAll();
		return $result;
	}

}
?>
