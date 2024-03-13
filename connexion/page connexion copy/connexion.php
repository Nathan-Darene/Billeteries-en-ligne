<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="/media/nathan/Expansion/MES PROJETS WEB/Burger_king/fontawesome-free-6.5.1-web/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="/Billeterie/connexion/css_connexion/Animation.css">
    <link rel="stylesheet" href="/Billeterie/connexion/css_connexion/connexion.css">
    <link rel="stylesheet" href="../css_connexion/connexion.css">
    <title>Connexion à Kalilabs Core</title>
</head>

<body>
    <div class="wrapper">
        <form action="connect.php" method="post"> <!-- Modification de l'attribut action -->
            <h2>Connexion</h2>
            <div class="input-group">
                <span class="icon"><i class="fa-solid fa-user"></i></span>
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="input-group">
                <span class="icon"><i class="fa-solid fa-lock"></i></span>
                <input type="password" name="mot_de_passe" placeholder="Mot de passe" required>
            </div>
            <div class="forgot-pass">
                <a href="#">Mot de passe oublié</a> <!-- Correction de l'orthographe -->
            </div>
            <button type="submit" class="btn">Connexion</button>
            <div class="sign-link">
                <p>Vous n'avez pas de compte ? <a href="/Billeterie/connexion/page connexion/inscription.html" class="register-link">Inscrivez-Vous</a></p> <!-- Correction du texte -->
            </div>
        </form>
    </div>
    <script>
        function redirectToHome() {
            // Rediriger l'utilisateur vers l'écran d'accueil (remplacez "home.html" par l'URL de votre page d'accueil)
            window.location.href = "/Billeterie/Acceuil/page_acceuil/billetterie.html";
        }
    </script>
</body>

</html>
