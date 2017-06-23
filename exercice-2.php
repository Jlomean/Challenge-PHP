<?php

// D'abord, créer la string :

$genres = "horreur fantastique action western thriller comédie drame romance historique";

// Puis on l'explose avec la fonction appropriée à chaque espace, pour mettre chaque mot dans un array tags :

$tags = explode( " ", $genres );

// On décore :

echo nl2br("<h2>Exercice 2, Niveau 2 :</h2>\n\n"."Catégories de films présentes sur notre site : \n\n");

// Puis on affiche chaque élément bien séparé :

foreach( $tags as $tag ){
    
    echo nl2br("- ".$tag."\n");
    
}

// Pour le moment, j'utilise explode ; je m'efforcerai de coder un algo disant : chercher chaque espace, les transformer en ",", puis envoyer le résultat final dans l'array tags dans la mesure du possible.

?>