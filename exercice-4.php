<?php
// On crée le tableau.
$prenoms = ["Harry", "Hilary", "Harrington", "Hagrid", "Holmes"];

// On cherche la clé centrale arrondie à l'inférieur.
$milieu = $prenoms[floor(count($prenoms)/2)];

// On la retire.
unset($prenoms[array_search($milieu, $prenoms)]);

// On réindexe le tableau de zéro pour éviter les valeurs "O, 1, 3, 4".
array_splice($prenoms, 0, 0);

// On décore.
echo nl2br("<h2>Exercice 4, Niveau 2 :</h2>\n\n"."On fait sortir l'intrus du centre :\n\n");

// On exprime chaque donnée restante.
foreach( $prenoms as $prenom){
	
	echo nl2br("- ".$prenom."\n");
}

?>