<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Civilité</title>
</head>
<body>
    <form action="#" method="post">
        <?php
        // Déclaration du tableau contenant les options
        $select = array("MR", "Mme", "Melle");

        // Valeur sélectionnée
        $selectedValue = "Mme";

        // Génération du code HTML pour le <select>
        echo '<label for="civilite">Civilité : </label>';
        echo '<select name="civilite" id="civilite">';
        foreach ($select as $value) {
            // Vérifie si la valeur est celle sélectionnée
            $isSelected = ($value === $selectedValue) ? 'selected' : '';
            echo "<option value=\"$value\" $isSelected>$value</option>";
        }
        echo '</select>';
        ?>
    </form>
</body>
</html>

