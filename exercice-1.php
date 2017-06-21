<?php

// D'abord, on crée les deux tableaux ET le tableau vide.

$cuissons = ["à point", "saignant", "bleu", "bien cuit"];
$viandes = ["poulet", "boeuf", "mouton"];
$commandes = [];

// Puis on remplit le tableau "commandes" avec chaque entrée.

//D'abord, pour chaque viande :

foreach( $viandes as $viande ){
	
	// On associe chaque cuisson :

	foreach( $cuissons as $cuisson ){
		
		// Et on pousse la combinaison à la fin du tableau.
	
		array_push($commandes, $viande." ".$cuisson);
	
	}

}

// Pour le fun : on crée un tableau indiquant s'il s'agit d'un ou d'une cliente :

$whoOrdered = ["Un client a commandé une part de ", "Une cliente a commandé une part de "];

// Et on envoie.

echo nl2br("Voici les commandes pour le buffet : \n\n");

// Pour chaque commande :

foreach( $commandes as $commande){

	// On mélange le tableau de clients...
	
   shuffle( $whoOrdered );
   
   // ... et on en sort la première clé, associée à la commande.
   
   echo nl2br($whoOrdered[0]. $commande."."."\n");
}