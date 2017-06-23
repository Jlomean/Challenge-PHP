<?php
// On crée le tableau.
$fruits = ["orange", "banane", "pomme", "fraise", "tomate", "framboise", "noix de coco", "ananas"];

/* Pour un entier de valeur longueurDuTableau-2, jusqu'à ce que sa valeur soit inférieure à longueurDuTableau.
Ensuite, on incrémente. */

for ( $i = count($fruits)-2; $i < count($fruits); $i++){

	//On met chaque index concerné de $fruits dans un tableau $fruits_favoris.

	$fruits_favoris[] = $fruits[$i];
		
}

echo nl2br("<h2>Exercice 3, niveau 2 :</h2>\n\n");

switch(count($fruits_favoris)) {

	// Si vous n'aimez pas les fruits, désolée pour vous.
	
	case 0:
	
	echo "Rick Astley suffit à me nourrir.\n
	<div style=\position:relative;padding-top:3em;padding-bottom:56.25%\">
		<iframe src=\"https://www.youtube.com/embed/dQw4w9WgXcQ?ecver=2\" width=\"640\" height=\"360\" frameborder=\"0\" style=\"position:absolute;left:0\" allowfullscreen>
		</iframe>
	</div>";
	break;

	// S'il n'y en a qu'un...

	case 1:
	
		echo "Je n'ai qu'un amour : ".$fruits_favoris[0]." !";
		break;

// S'il y a 2 fruits favoris comme prévu...

	case 2:
	
		echo "Mes fruits préférés sont la ".$fruits_favoris[0]." et l'".$fruits_favoris[1].".";
		break;

// Et s'il y en a plus.

	default:
	
		echo nl2br("Mes fruits préférés sont les suivants :\n\n");
		
		foreach ( $fruits_favoris as $fruit_favori ){
		
			echo nl2br("- ".$fruit_favori."\n");
		
		}
		break;

}

?>