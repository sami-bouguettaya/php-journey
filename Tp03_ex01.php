<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un Select</title>
</head>
<body>
    <h2>Choisissez une civilité :</h2>
    <form>
        <label for="civilite">Civilité :</label>
        <select id="civilite" name="civilite">
            <?php
            // Tableau des options
            $select = array("MR", "Mme", "Melle");

            // Générer les options avec une pré-sélection
            foreach ($select as $value) {
                // Vérifier si la valeur est "Mme" pour ajouter "selected"
                $selected = ($value === "Mme") ? "selected" : "";
                echo "<option value='$value' $selected>$value</option>";
            }
            ?>
        </select>
    </form>
</body>
</html>
