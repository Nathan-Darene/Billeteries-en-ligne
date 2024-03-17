<?php
// Connexion à la base de données
$serveur = "localhost";
$utilisateur = "root";
$motdepasse = ""; // Assurez-vous d'utiliser un mot de passe sécurisé en production
$basededonnees = "billeteries";

// Connexion à la base de données MySQL
$connexion = new mysqli($serveur, $utilisateur, $motdepasse, $basededonnees);


// Vérification de la connexion
if ($connexion->connect_error) {
    die("Échec de la connexion à la base de données: " . $connexion->connect_error);
}

// Récupérer et nettoyer les données du formulaire
$nom = mysqli_real_escape_string($connexion, $_POST['nom']);
$equipe_local = mysqli_real_escape_string($connexion, $_POST['equipe_local']);
$equipe_visiteur = mysqli_real_escape_string($connexion, $_POST['equipe_visiteur']);
$date_evenement = mysqli_real_escape_string($connexion, $_POST['date']);
$lieu = mysqli_real_escape_string($connexion, $_POST['lieu']);

// Requête d'insertion des données dans la table appropriée
$sql = "INSERT INTO machts (nom, equipe_local, equipe_visiteur, Dateheure_Machts, stade) VALUES ('$nom', '$equipe_local', '$equipe_visiteur', '$date_evenement', '$lieu')";

if ($connexion->query($sql) === TRUE) {
    // Rediriger vers la page d'achat
    header("Location: achat.php");
    exit();
} else {
    echo "Erreur lors de l'insertion des données : " . $connexion->error;
}


// Fermer la connexion à la base de données
$connexion->close();
?>
