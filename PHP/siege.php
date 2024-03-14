<?php
// Connexion à la base de données
$servername = "localhost"; // Adresse du serveur MySQL
$username = "username"; // Nom d'utilisateur MySQL
$password = "password"; // Mot de passe MySQL
$dbname = "nom_de_la_base_de_donnees"; // Nom de la base de données

// Création de la connexion
$connexion = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($connexion->connect_error) {
    die("Échec de la connexion : " . $connexion->connect_error);
}

// Vérification si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des valeurs du formulaire
    $selected_seat = $_POST["selected_seat"];

    // Requête SQL pour insérer la place sélectionnée dans la base de données
    $sql = "INSERT INTO /*choix_utilisateur*/ (selected_seat) VALUES ('$selected_seat')";

    // Exécution de la requête
    if ($connexion->query($sql) === TRUE) {
        echo "Place sélectionnée enregistrée avec succès.";
    } else {
        echo "Erreur lors de l'enregistrement de la place sélectionnée : " . $connexion->error;
    }
}

// Fermeture de la connexion à la base de données
$connexion->close();
?>
