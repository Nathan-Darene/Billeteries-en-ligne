function redirectToHome() {
    var email = document.querySelector('input[name="email"]').value;
    var password = document.querySelector('input[name="password"]').value;
    var acceptCheckbox = document.getElementById('accept-checkbox').checked;

    if (!email || !password || !acceptCheckbox) {
        document.getElementById('error-message').style.display = 'block';
    } else {
        // Tous les champs sont remplis et le checkbox est activé, redirigez l'utilisateur
        window.location.href = "../HTML/billetterie.html";
    }
}
