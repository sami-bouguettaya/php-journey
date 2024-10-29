<?php

$nbr = intval(readline("Entrez un nombre entier positif : "));


if ($nbr <= 0) {
    echo "Veuillez entrer un nombre positif.\n";
} else {
  
    $est_premier = true;

  
    for ($i = 2; $i <= sqrt($nbr); $i++) {
        if ($nbr % $i == 0) {
            $est_premier = false; 
            break;
        }
    }

  
    if ($est_premier && $nbr > 1) {
        echo "$nbr est un nombre premier.\n";
    } else {
        echo "$nbr n'est pas un nombre premier.\n";
    }
}
?>