// Récupérer toutes les places
var seats = document.querySelectorAll('.seat');

// Ajouter un événement de clic à chaque place
seats.forEach(function(seat) {
    seat.addEventListener('click', function() {
        // Ajouter la classe 'selected' pour indiquer la sélection visuellement
        seat.classList.toggle('selected');

        // Récupérer le numéro de siège sélectionné
        var selectedSeat = seat.textContent;

        // Envoyer la sélection au backend PHP
        saveSelection(selectedSeat);
    });
});

// Fonction pour envoyer la sélection au backend PHP
function saveSelection(selectedSeat) {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "save_selection.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            console.log(xhr.responseText); // Afficher la réponse du serveur (optionnel)
        }
    };
    xhr.send("selected_seat=" + encodeURIComponent(selectedSeat));
}
