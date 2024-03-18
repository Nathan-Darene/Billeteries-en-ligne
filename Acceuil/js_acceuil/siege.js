document.addEventListener('DOMContentLoaded', function () {
    // Sélection de tous les éléments avec la classe 'seat' et stockage dans une variable
    const seats = document.querySelectorAll('.seat');

    // Pour chaque siège, ajoute un écouteur d'événements 'click'
    seats.forEach(seat => {
        seat.addEventListener('click', function () {
            // Désélectionne toutes les autres places sauf celle cliquée
            seats.forEach(otherSeat => {
                if (otherSeat !== seat) {
                    otherSeat.classList.remove('selected');
                }
            });

            // Bascule la classe 'selected' de la place cliquée
            this.classList.toggle('selected');
        });
    });

    // Sélection du bouton de confirmation par son ID
    const confirmBtn = document.getElementById('confirmBtn');
    // Ajout d'un écouteur d'événements 'click' au bouton de confirmation
    confirmBtn.addEventListener('click', function () {
        // Sélection de toutes les places sélectionnées
        const selectedSeats = document.querySelectorAll('.selected');
        // Vérifie s'il y a des places sélectionnées
        if (selectedSeats.length === 0) {
            // Affiche une alerte si aucune place n'est sélectionnée
            alert('Veuillez sélectionner une place avant de confirmer, pour éviter les potentiels problèmes sur place.');
        } 
        else {
            // Crée un tableau contenant les numéros des places sélectionnées
            const selectedSeatNumbers = Array.from(selectedSeats).map(seat => seat.textContent);
            // Affiche une alerte avec les numéros des places sélectionnées
            alert('Place sélectionnée : No ' + selectedSeatNumbers.join(', '));
            // Redirige l'utilisateur vers la page d'achat
            window.location.href = "../page_acceuil/achat.html";
        }
    });
});
