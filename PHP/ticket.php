<?php
// Connexion à la base de données
$servername = "localhost"; // Adresse du serveur MySQL
$username = "username"; // Nom d'utilisateur MySQL
$password = "password"; // Mot de passe MySQL
$dbname = "nom_de_la_base_de_donnees"; // Nom de la base de données

// Création de la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}

// Requête SQL pour récupérer les informations du billet
$sql = "SELECT * FROM billets";

// Exécution de la requête
$result = $conn->query($sql);

// Affichage des informations du billet
if ($result->num_rows > 0) {
    // Boucle à travers les résultats de la requête
    while ($row = $result->fetch_assoc()) {
        echo "<p>Macht : <span>" . $row["match"] . "</span></p>";
        echo "<p>Catégorie du billet : <span id='ticket-category'>" . $row["category"] . "</span></p>";
        echo "<p>Bloc : <span id='ticket-block'>" . $row["block"] . "</span></p>";
        echo "<p>Place : <span id='ticket-seat'>" . $row["seat"] . "</span></p>";
        echo "<p>Prix : <span id='ticket-price'>" . $row["price"] . "</span></p>";
    }
} else {
    echo "Aucun billet trouvé.";
}

// Fermeture de la connexion à la base de données
$conn->close();
