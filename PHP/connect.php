<?php
// Connexion à la base de données

$serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$basededonne = "billeteries";


$conn = new mysqli($serveur, $utilisateur, $mot_de_passe, $basededonne);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Échec de la connexion à la base de données: " . $conn->connect_error);
}

// Vérification si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];

    // Requête pour vérifier l'existence de l'utilisateur dans la base de données
    $sql = "SELECT * FROM utilisateur WHERE Adresse_Email = '$email' AND mots_passe = '$mot_de_passe'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // L'utilisateur est authentifié avec succès
        session_start();
        $_SESSION['email'] = $email; // Vous pouvez stocker d'autres informations de session si nécessaire
        header("Location: billetterie.php"); // Redirection vers la page après connexion réussie
        exit();
    } else {
        // Identifiants incorrects, rediriger vers la page de connexion avec un message d'erreur
        header("Location: connexion.php?error=1");
        exit();
    }
}
?>
