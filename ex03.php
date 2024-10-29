<?php

$n = readline("Entrez un nombre entier positif pour calculer sa factorielle : ");


if (!ctype_digit($n) || intval($n) < 0) {
    echo "Veuillez entrer un nombre entier positif.\n";
} else {
   
    $n = intval($n);
    
   
    $factorielle = 1;

 
    for ($i = 1; $i <= $n; $i++) {
        $factorielle *= $i; 
    }

    // Afficher le résultat
    echo "La factorielle de $n est $factorielle.\n";
}
?>
