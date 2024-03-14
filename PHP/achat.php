

<?php
/*pour te facilité un peut la tache je sais que tu aime te compliquer la tache (*-*)*/
// Connexion à la base de données
$servername = "localhost"; // Adresse du serveur MySQL
$username = "root"; // Nom d'utilisateur MySQL
$password = ""; // Mot de passe MySQL
$dbname = "billeterie"; // Nom de la base de données

// Création de la connexion
$connexion = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($connexion->connect_error) {
    die("Échec de la connexion : " . $connexion->connect_error);
}

// Vérification si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des valeurs du formulaire
    $category = $_POST["category"];
    $block = $_POST["block"];

    // Requête SQL pour insérer les valeurs dans la base de données
    $sql = "INSERT INTO /*choix_utilisateur*/ (category, block) VALUES ('$category', '$block')";

    // Exécution de la requête 
    if ($conn->query($sql) === TRUE) {
        echo "Choix enregistrés avec succès.";
    } else {
        echo "Erreur lors de l'enregistrement des choix : " . $connexion->error;
    }
}

// Fermeture de la connexion à la base de données
$connexion->close();
?>
