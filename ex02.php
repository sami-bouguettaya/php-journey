<?php

$n = intval(readline("Entrez un nombre entier positif pour générer les n premiers nombres de la suite de Fibonacci : "));


if ($n <= 0) {
    echo "Veuillez entrer un nombre positif.\n";
} else {
  
    $a = 0; 
    $b = 1; 

    
    echo "Les $n premiers nombres de la suite de Fibonacci sont : ";

  
    for ($i = 0; $i < $n; $i++) {
        if ($i == 0) {
            echo $a; 
        } elseif ($i == 1) {
            echo ", " . $b;
        } else {
            $c = $a + $b; 
            echo ", " . $c; 
            $a = $b; 
            $b = $c; 
        }
    }

    echo "\n"; 
}
?>