function validateTicket() {
    // Afficher le popup
    var popup = document.getElementById("popup");
    popup.style.display = "block";

    // Fermer le popup après 3 secondes
    setTimeout(function() {
        fermerPopup(); // Appel de la fonction pour fermer le popup et rediriger
    }, 5000); // 3 secondes en millisecondes
}

function fermerPopup() {
    // Fermer le popup
    var popup = document.getElementById("popup");
    popup.style.display = "none";
    
    // Rediriger vers la page d'accueil
    window.location.href = "/Billeterie/Acceuil/page_acceuil/billetterie.html";
}
