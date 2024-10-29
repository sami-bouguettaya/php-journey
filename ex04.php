<?php

$phrase = readline("Entrez un mot ou une phrase : ");


$phrase = strtolower(str_replace(' ', '', $phrase));


$longueur = strlen($phrase);


$est_palindrome = true;


for ($i = 0; $i < $longueur / 2; $i++) {
    if ($phrase[$i] !== $phrase[$longueur - 1 - $i]) {
        $est_palindrome = false; 
        break; 
    }
}

// Afficher le résultat
if ($est_palindrome) {
    echo "'$phrase' est un palindrome.\n";
} else {
    echo "'$phrase' n'est pas un palindrome.\n";
}
?>
