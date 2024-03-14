function genererQRCode() {
    // Récupérer les informations sélectionnées par l'utilisateur
    var categorie = document.getElementById("category").value;
    var block = document.getElementById("block").value;

    // Concaténer les informations dans une chaîne
    var data = "Catégorie: " + categorie + ", Bloc: " + block;

    // Créer une div pour afficher le QR code
    var qrCodeDiv = document.createElement("div");

    // Générer le QR code
    new QRCode(qrCodeDiv, {
        text: data,
        width: 128,
        height: 128,
        colorDark: "#000000",
        colorLight: "#ffffff",
        correctLevel: QRCode.CorrectLevel.H
    });

    // Ajouter la div au corps du document
    document.body.appendChild(qrCodeDiv);

    // Afficher la fenêtre modale
    qrCodeDiv.style.position = "fixed";
    qrCodeDiv.style.top = "50%";
    qrCodeDiv.style.left = "50%";
    qrCodeDiv.style.transform = "translate(-50%, -50%)";
    qrCodeDiv.style.zIndex = "9999";
    qrCodeDiv.style.background = "#fff";
    qrCodeDiv.style.padding = "20px";
    qrCodeDiv.style.boxShadow = "0 0 10px rgba(0, 0, 0, 0.3)";

    // Fermer la fenêtre modale après 1 minute
    setTimeout(function() {
        qrCodeDiv.parentNode.removeChild(qrCodeDiv);
    }, 60000); // 60000 millisecondes = 1 minute
}
