generate HTML output using PHP
<?php
for ($i = 1; $i <= 6; $i++) {
    echo "<br>";
    echo "<font size='$i'>";
    echo "voici une commande <b>echo</b> avec des <i>balises</i> html";
    echo "</font>"; // Ajout de la fermeture de la balise
}


?>