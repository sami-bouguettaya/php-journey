<?php

$carnet_adresses = [
    "sami" => "0552801109",
    "Bob" => "0787654321",
    "nada" => "0791234592",
    "billel" => "0775012674",
    "merouane" => "0541183728"
];


$nom_recherche = readline("Entrez le nom à rechercher : ");


if (array_key_exists($nom_recherche, $carnet_adresses)) {
   
    echo "Le numéro de téléphone de $nom_recherche est " . $carnet_adresses[$nom_recherche] . ".\n";
} else {
   
    echo "Le nom '$nom_recherche' n'existe pas dans le carnet d'adresses.\n";
}
?>
