<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "billeteries";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Traitement de l'inscription
if(isset($_POST['register'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hashage du mot de passe (pour des raisons de sécurité)
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Requête SQL pour insérer un nouvel utilisateur dans la base de données
    $sql = "INSERT INTO utilisateur(username, email, password) VALUES ('$username', '$email', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Traitement de la connexion
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Requête SQL pour récupérer l'utilisateur avec l'e-mail donné
    $sql = "SELECT * FROM utilisateur WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Vérifier le mot de passe hashé
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            echo "Login successful";
            // Redirection vers une page après la connexion réussie
        } else {
            echo "Invalid email or password";
        }
    } else {
        echo "Invalid email or password";
    }
}

// Fermer la connexion
$conn->close();
?>
