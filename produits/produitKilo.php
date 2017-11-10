<?php
// Déclaration de la classe

require_once('Produits.php');
class ProduitKilo extends Produits{

	//intialisation du poids du produit
	protected $poids = 1;
	
	//initialisation du prix au kilo du produit
	protected $prixkilo = 1;

	// constructeur avec parametres poids et prix au kilo
	public function __construct($poids,$prixkilo){
 		$this->poids=$poids;
		$this->prixkilo=$prixkilo;
	}

	//methode pour afficher
	public function __toString(){
		return 
			"Poids du produit : ".$this->poids." kg".
			"<br> Prix au kilo du produit : ".$this->prixkilo." €/kg";
	}

	//methode pour calculer le prix du produit en fonction du
	// poids du produit et de son prix au kilo
	public function calculPrix(){
		return ($this->poids*$this->prixkilo);
	}













	
}



