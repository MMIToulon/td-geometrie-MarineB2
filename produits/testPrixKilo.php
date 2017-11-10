<?php
// Instanciation des objets



	// C'est un fichier de tests "unitaires" il sert a tester toutes les méthodes de la classe une par une

	// pour afficher les erreurs pour ce script 
	ini_set('display_errors','1');

	// inclure le fichier contenant la 
	// définition de la classe
	require_once("produitKilo.php");

	// instanciation
	$pk1 = new produitKilo(3,9);

	//on entre le nom du produit
	$pk1->setNom("Tomate");
	
	// appelle la methode 
	//__toString()
	echo($pk1);
	
	//appelle la methode pour calculer le prix du produit
	echo "<br>Prix= ".$pk1->calculPrix()." €";
	
	// voir ce que contient $pk1
	var_dump($pk1);
	
	//on modifie le poids et le prix au kilo
	$pk1->setPoids(10);
	$pk1->setPrixKilo(5);
	

	// appelle la methode 
	//__toString()
	echo $pk1;
    
	//appelle la methode pour calculer le prix du produit
	echo "<br>Prix= ".$pk1->calculPrix()." €";
	
	// voir ce que contient $pk1
	var_dump($pk1);
	
?>