<?php
// Connexion à la base de données
$serveur = "localhost";
$utilisateur = "root";
$motdepasse = ""; // Assurez-vous d'utiliser un mot de passe sécurisé en production
$basededonnees = "bietteries";

// Connexion à la base de données MySQL
$connexion = new mysqli($serveur, $utilisateur, $motdepasse, $basededonnees);

// Vérifier la connexion
if ($connexion->connect_error) {
    die("La connexion a échoué : " . $connexion->connect_error);
}

// Récupérer et nettoyer les données du formulaire
$nom = mysqli_real_escape_string($connexion, $_POST['nom']);
$prenom = mysqli_real_escape_string($connexion, $_POST['prenom']);
$email = mysqli_real_escape_string($connexion, $_POST['email']);
$motdepasse = mysqli_real_escape_string($connexion, $_POST['motdepasse']);

// Requête d'insertion des données dans la table appropriée
$sql = "INSERT INTO utilisateur (Nom, Prenom, Adresse_Email, mots_passe) VALUES ('$nom', '$prenom', '$email', '$motdepasse')";

// Exécuter la requête et vérifier son succès
if ($connexion->query($sql) === TRUE) {
    echo "Inscription réussie !";
} else {
    echo "Erreur lors de l'inscription. Veuillez réessayer ultérieurement.";
}

// Fermer la connexion à la base de données
$connexion->close();
?>
