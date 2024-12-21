<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire avec Sélection Multiple</title>
</head>
<body>
    <form action="#" method="post">
      
    <label for="options">Options : </label>
        <?php
        // Déclaration du tableau contenant les options
        $options = array('ISIL1', 'ISIL2', 'SI1', 'SI2');
          foreach ($options as $value) {
            echo "<option value=\"$value\">$value</option>";
      }  ?> 
        echo '</select>';
       
        <br><br>
        <button type="submit">Valider</button>
    </form>

    <?php
    // Récupération et affichage des options sélectionnées après soumission
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (!empty($_POST['options'])) {
            echo '<h2>Résultat</h2>';
            echo 'Vous avez sélectionné : <ul>';
            foreach ($_POST['options'] as $selected) {
                echo "<li>$selected</li>";
            }
            echo '</ul>';
        } else {
            echo '<h2>Résultat</h2>';
            echo 'Aucune option sélectionnée.';
        }
    }
    ?>
</body>
</html>
