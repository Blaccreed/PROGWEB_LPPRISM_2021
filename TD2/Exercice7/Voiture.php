
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

	public static function DeleteVoitureByImmat($immat)
	{
		$requetePreparee = "DELETE FROM voiture WHERE immatriculation = :tag_immatriculation;";
		$req_prep = Connexion::pdo()->prepare($requetePreparee);

		$arrayName = array("tag_immatriculation" => $immat);

		try {
			$req_prep->execute($arrayName);
		} catch (PDOException $e) {
			echo "erreur: ".$e ->getMessage()."</br>";
		}
	}

	public static function addVoiture($immat, $marque, $couleur)
	{
		$requetePreparee = "INSERT INTO voiture VALUES(:tag_immatriculation, :tag_marque,:tag_couleur);";

		$req_prep = Connexion::pdo()->prepare($requetePreparee);

		$arrayName = array("tag_immatriculation" => $immat,
	                     	"tag_marque" => $marque,
		                    "tag_couleur" => $couleur);

		try {
			$req_prep->execute($arrayName);
		} catch (PDOException $e) {
			echo "erreur: ".$e ->getMessage()."</br>";
		}

	}

	public static function updateVoiture($immat, $marque, $couleur)
	{
		$requetePreparee = "UPDATE voiture SET marque = :tag_marque, couleur = :tag_couleur WHERE immatriculation = :tag_immatriculation;";

		$req_prep = Connexion::pdo()->prepare($requetePreparee);
		
		$ArrayName = array("tag_immatriculation" =>$immat,
	                      "tag_marque" => $marque,
											  "tag_couleur" => $couleur);
		try {
			$req_prep->execute($ArrayName);
		} catch (PDOException $e) {
			echo "erreur: ".$e ->getMessage()."</br>";
		}

	}





}
?>
