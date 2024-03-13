document.addEventListener('DOMContentLoaded', function () {
    const seats = document.querySelectorAll('.seat');

    seats.forEach(seat => {
        seat.addEventListener('click', function () {
            // Désélectionner toutes les autres places
            seats.forEach(otherSeat => {
                if (otherSeat !== seat) {
                    otherSeat.classList.remove('selected');
                }
            });

            // Sélectionner la place cliquée
            this.classList.toggle('selected');
        });
    });

    const confirmBtn = document.getElementById('confirmBtn');
    confirmBtn.addEventListener('click', function () {
        const selectedSeats = document.querySelectorAll('.selected');
        if (selectedSeats.length === 0) {
            alert('Veuillez sélectionner une place avant de confirmer, pour eviter les potentiels probléme sur place.');
        } 
        else {
            const selectedSeatNumbers = Array.from(selectedSeats).map(seat => seat.textContent);
            alert('Place sélectionnée : No ' + selectedSeatNumbers.join(', '));
            // Si une place est sélectionnée, vous pouvez continuer avec le processus de confirmation.
            // Ici, j'ai redirigé l'utilisateur vers la page d'achat pour l'exemple.
            window.location.href = "../page_acceuil/achat.html";
        }
    });
});
