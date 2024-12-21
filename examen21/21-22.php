
<!-- ***********************************************exo 01 :*********************************************** -->


<!-- 1. Formulaire pour ajouter un employé -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un Employé</title>
</head>
<body>
    <h2>Ajouter un Employé</h2>
    <form action="ajouter_employe.php" method="post">
        Code Employé : <input type="number" name="code_employe" required><br>
        Nom : <input type="text" name="nom" required><br>
        Prénom : <input type="text" name="prenom" required><br>
        Poste : <input type="text" name="poste" required><br>
        <input type="submit" value="Ajouter">
    </form>
</body>
</html>


<!-- 2. Fonction pour ajouter un employé dans la base de données  -->


<?php
// Paramètres de connexion
$host = 'localhost';
$user = 'root';
$password = 'root';
$db = 'examen';

// Connexion à la base de données
$conn = new mysqli($host, $user, $password, $db);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}

// Récupérer les données du formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $code_employe = $_POST['code_employe'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $poste = $_POST['poste'];

    // Requête SQL pour insérer un employé
    $sql = "INSERT INTO employés (code_employe, nom, prenom, poste) 
            VALUES ('$code_employe', '$nom', '$prenom', '$poste')";

    if ($conn->query($sql) === TRUE) {
        echo "Nouvel employé ajouté avec succès.";
    } else {
        echo "Erreur : " . $sql . "<br>" . $conn->error;
    }
}

// Fermer la connexion
$conn->close();
?>




<!-- 3. Fonction pour retourner le nombre d'absences d'un employé -->

<?php
function compterAbsences($code_employe) {
    // Paramètres de connexion
    $host = 'localhost';
    $user = 'root';
    $password = 'root';
    $db = 'examen';

    // Connexion
    $conn = new mysqli($host, $user, $password, $db);
    if ($conn->connect_error) {
        die("Connexion échouée : " . $conn->connect_error);
    }

    // Requête pour compter les absences
    $sql = "SELECT COUNT(*) AS total_absences FROM absences WHERE code_employe = '$code_employe'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "Le nombre d'absences de l'employé avec le code $code_employe est : " . $row['total_absences'];
    } else {
        echo "Aucune absence trouvée pour cet employé.";
    }

    $conn->close();
}

// Appel de la fonction
compterAbsences(201235);
?>


<!-- ***********************************************exo 02 :*********************************************** -->

<?php


$evenement = array(
    "evt1" => array(
        "Congres_de_la_Soumman", // Le nom est une simple valeur indexée
        "type" => "congres",
        "ville" => "Ouzellaguen",
        "date" => "20_aout_1956",
        "membres" => array(
            "Ferhat_Abbas", "Mostefa_Ben_Boulaid", "Youcef_Zighoud", 
            "Krim_Belkacem", "Amar_Ouamrane", "Med_Larbi_Ben_Mhidi", 
            "Rabah_Bitat", "Mohamed_Boudiaf", "Ramdane_Abane", 
            "Mohamed_Khider", "Hocine_Ait_Ahmed"
        )
    ),
    "evt2" => array(
        "Accords_d'Evian", // Le nom est une simple valeur indexée
        "type" => "Accords",
        "ville" => "Evian-les-Bains",
        "date" => "18_mars_1962",
        "membres" => array("Krim_Belkacem", "Louis_Joxe")
    )
);




// Fonction infoEvnt()
function infoEvnt($evenement, $cle) {
    if (isset($evenement[$cle])) {
        $evt = $evenement[$cle];
        echo "Nom : " . $evt[0] . "\n"; // Accès au nom via l'indice 0
        echo "Type : " . $evt['type'] . "\n";
        echo "Ville : " . $evt['ville'] . "\n";
        echo "Date : " . $evt['date'] . "\n";
    } else {
        echo "Événement non trouvé.\n";
    }
}

// Fonction checkMembre()
function checkMembre($evenement, $cle, $membre) {
    if (isset($evenement[$cle])) {
        if (in_array($membre, $evenement[$cle]['membres'])) {
            echo "Le membre $membre fait partie de l'événement.\n";
        } else {
            echo "Le membre $membre ne fait pas partie de l'événement.\n";
        }
    } else {
        echo "Événement non trouvé.\n";
    }
}

// Exemple d'utilisation
infoEvnt($evenement, "evt1");
echo "\n";
checkMembre($evenement, "evt2", "Krim_Belkacem");
?>

