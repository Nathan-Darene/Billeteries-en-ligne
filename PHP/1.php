<?php
// Connexion à la base de données (à remplacer avec vos propres informations)
$servername = "localhost";
$username = "nom_utilisateur";
$password = "mot_de_passe";
$dbname = "nom_base_de_donnees";

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Récupérer les données de sélection depuis la requête POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier si une place a été sélectionnée
    if (isset($_POST['selected_seat'])) {
        $selected_seat = $_POST['selected_seat'];

        // Préparer et exécuter la requête SQL pour insérer la sélection dans la base de données
        $sql = "INSERT INTO reservations (selected_seat) VALUES ('$selected_seat')";
        if ($conn->query($sql) === TRUE) {
            echo "Sélection enregistrée avec succès.";
        } else {
            echo "Erreur: " . $sql . "<br>" . $conn->error;
        }
    }
}

// Fermer la connexion à la base de données
$conn->close();
?>
