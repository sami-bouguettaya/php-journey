<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table de Multiplication</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #000;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <h2 style="text-align: center;">Table de Multiplication de 8</h2>
    <table>
        <thead>
            <tr>
                <th>Calcul</th>
                <th>Résultat</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Boucle pour afficher la table de multiplication
            for ($i = 1; $i <= 10; $i++) {
                $result = $i * 8;
                echo "<tr>
                        <td>$i × 8</td>
                        <td>$result</td>
                      </tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
