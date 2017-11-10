<?php
// Instanciation des objets



	// C'est un fichier de tests "unitaires" il sert a tester toutes les méthodes de la classe une par une

	// pour afficher les erreurs pour ce script 
	ini_set('display_errors','1');

	// inclure le fichier contenant la 
	// définition de la classe
	require_once("produitUnit.php");

	// instanciation
	$pu1 = new produitUnit(4,6);
	
	//on entre le nom du produit
	$pu1->setNom("Banane");
	
	// appelle la methode 
	//__toString()
	echo $pu1;
	
	//appelle la methode pour calculer le prix
	echo "<br>Prix= ".$pu1->calculPrix()." €";
	
	// voir ce que contient $pu1
	var_dump($pu1);
	
	//On modifie la quantité et le prix unitaire
	$pu1->setQuantite(2);
	$pu1->setPrixUnit(10);


	// appelle la methode 
	//__toString()
	echo $pu1;
    
	//appelle la methode pour calculer le prix
	echo "<br>Prix= ".$pu1->calculPrix()." €";


	// voir ce que contient $pu1
	var_dump($pu1);

?>