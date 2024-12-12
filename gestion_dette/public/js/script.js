// Fonction pour charger une feuille de style
function loadGoogleFonts() {
    const link = document.createElement('link'); // Crée un élément <link>
    link.rel = 'stylesheet'; // Définir le type comme feuille de style
    link.href = 'https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap'; // URL de Google Fonts
    document.head.appendChild(link); // Ajouter l'élément dans le <head>
}

// Charger les polices
loadGoogleFonts();
