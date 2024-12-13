/**
 * Génère une balise <img> pour une image donnée.
 * @param {string} name - Nom du fichier image (sans extension).
 * @param {string} [classMainName] - Classe CSS de l'image.
 * @param {string} [format] - Format du fichier (par défaut SVG).
 * @returns {string} HTML de l'image.
 */
function generateIMG(name, classMainName, format, classes = []) {
    if (!name || typeof name !== "string") throw new Error("Nom d'image invalide.");
    if (!format || typeof format !== "string") throw new Error("Format d'image invalide.");
    if (!Array.isArray(classes)) throw new Error("Format de classes invalide.");

    const alt = `${name} ${format.toUpperCase()} ${classMainName}`;
    if (classes.length > 0) {
        classes = classes.join(" "); // Convertir les classes en chaîne pour l'appliquer au balise img
        return `<img src="./assets/${classMainName}/${name}.${format}" alt="${alt}" class="${classMainName} ${classes}">`;
    }
    return `<img src="./assets/${classMainName}/${name}.${format}" alt="${alt}" class="${classMainName}">`;
}

/**
 * Génère une icône (image stylisée) avec des paramètres par défaut.
 * @param {string} name - Nom de l'icône.
 * @param {string[]} [classes=[]] - Liste des classes CSS supplémentaires.
 * @param {string} [classMainName="icons"] - Classe CSS de l'icône.
 * @param {string} [format="svg"] - Format de l'icône.
 * @returns {string} HTML de l'icône.
 */
function generateIcon(name, classes = [], classMainName = "icons", format = "svg") {
    return generateIMG(name, classMainName, format, classes);
}

export { generateIMG, generateIcon };
