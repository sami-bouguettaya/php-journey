<<<<<<< HEAD
<?php
// Initialisation des données
$nom = [
    "moh" => 14,
    "ali" => 13,
    "asma" => 9,
    "farid" => 8,
    "khalil" => 15,
    "mounir" => 7,
    "fathi" => 5,
    "makach" => 0,
    "younes" => 17,
    "zahir" => 0
];

// Calculs
$nombreEtudiants = count($nom);
$moyenneGenerale = array_sum($nom) / $nombreEtudiants;
$major = array_keys($nom, max($nom))[0];
$etudiantsExclus = array_filter($nom, fn($note) => $note < 10);

// Affichage dans un tableau HTML
echo "<h2>************* Les résultats des étudiants **************</h2>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Nom</th><th>Note</th></tr>";
foreach ($nom as $etudiant => $note) {
    echo "<tr><td>$etudiant</td><td>$note</td></tr>";
}
echo "</table>";

// Afficher les statistiques
echo "<h3>Statistiques :</h3>";
echo "Nombre d'étudiants : $nombreEtudiants<br>";
echo "Moyenne générale du groupe : " . number_format($moyenneGenerale, 2) . "<br>";
echo "Major de la promo : $major avec une note de " . max($nom) . "<br>";
echo "Étudiants exclus : <br>";

// Affichage des étudiants exclus
if (count($etudiantsExclus) > 0) {
    echo "<ul>";
    foreach ($etudiantsExclus as $etudiant => $note) {
        echo "<li>$etudiant (note : $note)</li>";
    }
    echo "</ul>";
} else {
    echo "Aucun étudiant exclu.<br>";
}
?>
=======
<?php
// Initialisation des données
$nom = [
    "moh" => 14,
    "ali" => 13,
    "asma" => 9,
    "farid" => 8,
    "khalil" => 15,
    "mounir" => 7,
    "fathi" => 5,
    "makach" => 0,
    "younes" => 17,
    "zahir" => 0
];

// Calculs
$nombreEtudiants = count($nom);
$moyenneGenerale = array_sum($nom) / $nombreEtudiants;
$major = array_keys($nom, max($nom))[0];
$etudiantsExclus = array_filter($nom, fn($note) => $note < 10);

// Affichage dans un tableau HTML
echo "<h2>************* Les résultats des étudiants **************</h2>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Nom</th><th>Note</th></tr>";
foreach ($nom as $etudiant => $note) {
    echo "<tr><td>$etudiant</td><td>$note</td></tr>";
}
echo "</table>";

// Afficher les statistiques
echo "<h3>Statistiques :</h3>";
echo "Nombre d'étudiants : $nombreEtudiants<br>";
echo "Moyenne générale du groupe : " . number_format($moyenneGenerale, 2) . "<br>";
echo "Major de la promo : $major avec une note de " . max($nom) . "<br>";
echo "Étudiants exclus : <br>";

// Affichage des étudiants exclus
if (count($etudiantsExclus) > 0) {
    echo "<ul>";
    foreach ($etudiantsExclus as $etudiant => $note) {
        echo "<li>$etudiant (note : $note)</li>";
    }
    echo "</ul>";
} else {
    echo "Aucun étudiant exclu.<br>";
}
?>
>>>>>>> 77ae915ba58d5dd260410f3e5e59b8daf9aa4042
