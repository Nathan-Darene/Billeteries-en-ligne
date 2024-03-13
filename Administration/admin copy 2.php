<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KaliCore labs | Administration</title>
    <link rel="stylesheet" href="style.css" />
    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="e:\MES_PROJETS_WEB\Billeterie\Administration\admin.css">
</head>
<style>
    /*  import google fonts */
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");

    * {
        margin: 0;
        padding: 0;
        outline: none;
        border: none;
        text-decoration: none;
        list-style: none;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }

    body {
        background: rgb(233, 233, 233);
    }

    .container {
        display: flex;
        width: 1200px;
        margin: auto;
    }

    nav {
        position: sticky;
        top: 0;
        left: 0;
        bottom: 0;
        width: 280px;
        height: 110vh;
        background: #fff;
    }

    .navbar {
        width: 80%;
        margin: 0 auto;
    }

    .logo {
        margin: 2rem 0 1rem 0;
        padding-bottom: 3rem;
        display: flex;
        align-items: center;
    }

    .logo img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
    }

    .logo h1 {
        margin-left: 1rem;
        text-transform: uppercase;
    }

    ul {
        margin: 0 auto;
    }

    li {
        padding-bottom: 2rem;
    }

    li a {
        font-size: 16px;
        color: rgb(85, 83, 83);
    }

    nav i {
        width: 50px;
        font-size: 18px;
        text-align: center;
    }

    .logout {
        position: absolute;
        bottom: 20px;
    }

    /* Main Section */
    .main {
        width: 100%;
    }

    .main-top {
        width: 100%;
        background: #fff;
        padding: 10px;
        text-align: center;
        font-size: 18px;
        letter-spacing: 2px;
        text-transform: uppercase;
        color: rgb(43, 43, 43);
    }

    .main-body {
        padding: 10px 10px 10px 20px;
    }

    h1 {
        margin: 20px 10px;
    }

    .search_bar {
        display: flex;
        padding: 10px;
        justify-content: space-between;
    }

    .search_bar input {
        width: 50%;
        padding: 10px;
        border: 1px solid rgb(190, 190, 190);
    }

    .search_bar input:focus {
        border: 1px solid blueviolet;
    }

    .search_bar select {
        border: 1px solid rgb(190, 190, 190);
        padding: 10px;
        margin-left: 2rem;
    }

    .search_bar .filter {
        width: 300px;
    }

    .tags_bar {
        width: 55%;
        display: flex;
        padding: 10px;
        justify-content: space-between;
    }

    .tag {
        background: #fff;
        padding: 10px 15px;
        border-radius: 20px;
        display: flex;
        align-items: center;
        font-size: 13px;
        cursor: pointer;
    }

    .tag i {
        margin-right: 0.7rem;
    }

    .row {
        display: flex;
        padding: 10px;
        margin-top: 1.3rem;
        justify-content: space-between;
    }

    .row p {
        color: rgb(54, 54, 54);
        font-size: 15px;
    }

    .row p span {
        color: blueviolet;
    }

    .job_card {
        width: 100%;
        padding: 15px;
        cursor: pointer;
        display: flex;
        border-radius: 10px;
        background: #fff;
        margin-bottom: 15px;
        justify-content: space-between;
        border: 2px solid rgb(190, 190, 190);
        box-shadow: 0 20px 30px rgba(0, 0, 0, 0.1);
    }

    .job_details {
        display: flex;
    }

    .job_details .img {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .job_details .img i {
        width: 70px;
        font-size: 3rem;
        margin-left: 1rem;
        padding: 10px;
        color: rgb(82, 22, 138);
        background: rgb(216, 205, 226);
    }

    .job_details .text {
        margin-left: 2.3rem;
    }

    .job_details .text span {
        color: rgb(116, 112, 112);
    }

    .job_salary {
        text-align: right;
        color: rgb(54, 54, 54);
    }

    .job_card:active {
        border: 2px solid blueviolet;
        transition: 0.4s;
    }
</style>

<body>
    <div class="container">
        <nav>
            <div class="navbar">
                <div class="logo">
                    <img src="../Administration/kalicore labs.png" alt="">
                    <h1>KaliCore labs</h1>
                </div>
                <ul>
                    <li><a href="#"><i class="fas fa-user"></i><span class="nav-item">Client</span></a></li>
                    <li><a href="#"><i class="fas fa-ticket"></i><span class="nav-item">Billeteries</span></a></li>
                    <li><a href="#"><i class="fas fa-tasks"></i><span class="nav-item">Tache</span></a></li>
                    <li><a href="#"><i class="fas fa-cog"></i><span class="nav-item">Paramètre</span></a></li>
                    <li><a href="#"><i class="fas fa-question-circle"></i><span class="nav-item">Aide</span></a></li>
                    <li><a href="#" class="logout"><i class="fas fa-sign-out-alt"></i><span class="nav-item">Déconnexion</span></a></li>
                    <!-- Ajoutez un identifiant à l'élément a -->
                    <li><a href="#" id="usersLink"><i class="fas fa-users"></i><span class="nav-item">Utilisateurs</span></a></li>
                </ul>
            </div>
        </nav>

        <section class="main">
            <div class="main-top">
                <p>PANEAUX DE CONTROLE ADNISTRATEUR</p>
            </div>
            <div class="main-body">
                <h1>Tableau de bord</h1>

                <!-- Conteneur pour afficher la liste des utilisateurs -->
                <div id="userList">
                    <?php
                    // Connexion à la base de données
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "billeteries";

                    $conn = new mysqli($servername, $username, $password, $dbname);
                    if ($conn->connect_error) {
                        die("La connexion a échoué: " . $conn->connect_error);
                    }

                    // Requête SQL pour récupérer les utilisateurs qui ont réservé un ticket
                    $sql = "SELECT * FROM utilisateur";

                    // Exécutez la requête
                    $result = $conn->query($sql);

                    // Vérifiez s'il y a des résultats
                    if ($result->num_rows > 0) {
                        // Affichez les utilisateurs
                        while ($row = $result->fetch_assoc()) {
                            echo "<div class='user'>" . $row["nom_utilisateur"] . "</div>";
                        }
                    } else {
                        echo "Aucun utilisateur trouvé.";
                    }

                    // Fermez la connexion à la base de données
                    $conn->close();
                    ?>
                </div>
            </div>
        </section>
    </div>

    <!-- Script JavaScript pour afficher la liste des utilisateurs -->
    <script>
        // Sélectionner le lien "Utilisateurs"
        const usersLink = document.getElementById('usersLink');

        // Ajouter un écouteur d'événements pour détecter le clic sur le lien "Utilisateurs"
        usersLink.addEventListener('click', () => {
            // Récupérer le conteneur de la liste des utilisateurs
            const userList = document.getElementById('userList');

            // Exemple de liste d'utilisateurs (vous devrez remplacer cela par votre propre logique de récupération des utilisateurs)
            const users = ['Utilisateur 1', 'Utilisateur 2', 'Utilisateur 3', 'Utilisateur 4', 'Utilisateur 5'];

            // Effacer le contenu précédent du conteneur
            userList.innerHTML = '';

            // Boucle à travers la liste des utilisateurs et les ajouter au conteneur
            users.forEach(user => {
                const userItem = document.createElement('div');
                userItem.textContent = user;
                userList.appendChild(userItem);
            });
        });
    </script>
</body>

</html>