<?php 


abstract class Produits
{
 
   
   //nom du produit
   protected $nom;

	//construction du produit
	public function __construct($nom) {
		$this->nom = $nom;
		return $this;
	}
	
	//Modifieur du nom du produit
	public function setNom($nom){
		$this->nom=$nom;
	}
	
	public function setPoids($poids){
		$this->poids=$poids;
	}
	
	public function setPrixKilo($prixkilo){
		$this->prixkilo=$prixkilo;
	}
	
	public function setQuantite($quantite){
		$this->quantite=$quantite;
	}
	
	public function setPrixUnit($prixunit){
		$this->prixunit=$prixunit;
	}
	
	//methode abstraite de calcul du prix du produit
	public abstract function CalculPrix();
}

?>

