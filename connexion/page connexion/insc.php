<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/media/nathan/Expansion/MES PROJETS WEB/Burger_king/fontawesome-free-6.5.1-web/css/all.min.css">
    <link rel="-" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="/Billeterie/connexion/css_connexion/checkboxs.css">
    <link rel="stylesheet" href="/Billeterie/connexion/css_connexion/Animation.css">
    <title>Inscription à Kalilabs Core</title>
</head>

<body>
    <div class="wrapper">
        <form action="co.php" method="POST"> <!-- Modification de l'attribut action -->
            <h2>Inscription</h2>
            <div class="input-group">
                <span class="icon"><i class="fa-solid fa-user"></i></span>
                <input type="text" placeholder="Nom" required name="nom"> <!-- Ajout de l'attribut name -->
            </div>
            <div class="input-group">
                <span class="icon"><i class="fa-solid fa-user"></i></span>
                <input type="text" placeholder="Prénom" required name="prenom"> <!-- Ajout de l'attribut name -->
            </div>
            <div class="input-group">
                <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                <input type="email" placeholder="Email" required name="email"> <!-- Ajout de l'attribut name -->
            </div>
            <div class="input-group">
                <span class="icon"><i class="fa-solid fa-lock"></i></span>
                <input type="password" placeholder="Mots de passe" required name="motdepasse"> <!-- Ajout de l'attribut name -->
            </div>
            <label class="container">
                <input id="accept-checkbox" type="checkbox">
                <div class="checkbox-text">Acceptez-vous les conditions de confidentialité ?</div>
                <svg viewBox="0 0 64 64" height="1.5em" width="1.5em">
                    <path
                        d="M 0 16 V 56 A 8 8 90 0 0 8 64 H 56 A 8 8 90 0 0 64 56 V 8 A 8 8 90 0 0 56 0 H 8 A 8 8 90 0 0 0 8 V 16 L 32 48 L 64 16 V 8 A 8 8 90 0 0 56 0 H 8 A 8 8 90 0 0 0 8 V 56 A 8 8 90 0 0 8 64 H 56 A 8 8 90 0 0 64 56 V 16"
                        pathLength="575.0541381835938" class="path"></path>
                </svg>
            </label>
            <button type="submit" class="btn" onclick="redirectToHome()">Inscription </button>
            <div class="sign-link">
                <p>Vous avez déjà un compte <a href="/Billeterie/connexion/page connexion/connexion.html" class="register-link">Connectez-Vous</a></p>
            </div>
        </form>
    </div>
    <script>
        function redirectToHome() {
            // Rediriger l'utilisateur vers l'écran d'accueil (remplacez "home.html" par l'URL de votre page d'accueil)
            window.location.href = "e:\MES_PROJETS_WEB\Billeterie\Acceuil\page_acceuil\ billetterie.html";
        }
    </script>
</body>

</html>
