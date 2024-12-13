function chargerCSS(url) {
    // Vérifier si le fichier CSS est déjà chargé
    const links = Array.from(document.getElementsByTagName('link'));
    const dejaCharge = links.some(link => link.href === url);

    if (!dejaCharge) {
        const link = document.createElement('link');
        link.rel = 'stylesheet';
        link.href = url;
        document.head.appendChild(link);
    }
}


export default chargerCSS;