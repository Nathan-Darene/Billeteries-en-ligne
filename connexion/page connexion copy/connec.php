<?php
// Connexion à la base de données
$serveur = "localhost"; // Adresse du serveur MySQL
$utilisateur = "root"; // Nom d'utilisateur MySQL
$motdepasse = ""; // Mot de passe MySQL
$basededonnees = "bietteries"; // Nom de la base de données

// Récupérer les données du formulaire
$email = $_POST['email'];
$motdepasse = $_POST['mot_de_passe'];

// Connexion à la base de données MySQL
$connexion = new mysqli($serveur, $utilisateur, $motdepasse, $basededonnees);

// Vérifier la connexion
if ($connexion->connect_error) {
    die("La connexion a échoué : " . $connexion->connect_error);
}

// Préparer la requête SQL pour récupérer l'utilisateur correspondant à l'email fourni
$sql = "SELECT * FROM utilisateur WHERE Adresse_Email = '$email'";
$resultat = $connexion->query($sql);

// Vérifier si l'utilisateur existe
if ($resultat->num_rows > 0) {
    // Récupérer les données de l'utilisateur
    $utilisateur = $resultat->fetch_assoc();
    // Vérifier si le mot de passe correspond
    if ($motdepasse == $utilisateur['mots_passe']) {
        // Authentification réussie
        echo "Connexion réussie ! Bienvenue " . $utilisateur['Nom'] . " " . $utilisateur['Prenom'];
        // Redirection vers la page d'accueil
        header("Location: /Billeterie/Acceuil/page_acceuil/billetterie.html");
        exit();
    } else {
        // Mot de passe incorrect
        echo "Mot de passe incorrect.";
    }
} else {
    // Utilisateur non trouvé
    echo "Aucun utilisateur trouvé avec cet email.";
}

// Fermer la connexion à la base de données
$connexion->close();
?>
