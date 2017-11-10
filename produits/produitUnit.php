<?php
// Déclaration de la lcasse

require_once('Produits.php');
class ProduitUnit extends Produits{

	//intialisation de la quantité de produit
	protected $quantite = 1;

	//initialisation du prix unitaire du produit
	protected $prixunit = 1;

	// constructeur avec parametres quantité et prix unitaire
	public function __construct($quantite,$prixunit){
 		$this->quantite = $quantite;
		$this->prixunit=$prixunit;
	}

	//methode pour afficher
	public function __toString(){
		return 
			"Quantité de produit : ".$this->quantite.
			"<br> Prix à l'unité du produit : ".$this->prixunit." €/unité";
	}

	//methode pour calculer le prix du produit en fonction
	//de la quantité de produit et de son prix unitaire
	public function calculPrix(){
		return ($this->quantite*$this->prixunit);
	}













	
}



