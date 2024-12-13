import { generateIcon } from "./scripts/create-components/generateimg.js";
import chargerCSS from "./scripts/chargerCSS.js";

/**
 * Génère le HTML pour la barre supérieure (topbar).
 * @param {string} [title="Titre par défaut"] - Titre affiché dans la barre supérieure.
 * @returns {string} HTML de la barre supérieure.
 */
function generateTopbar(title = "Titre par défaut") {
    if (!title || typeof title !== "string") throw new Error("Titre invalide.");

    return `
        <div id="topbar">
            <div id="in-topbar">
                ${generateIcon("home")}
                <h1 id="title">${title}</h1>
                <div id="parametres">
                    ${generateIcon("notification")} 
                    ${generateIcon("Profile_user")} 
                    ${generateIcon("Setting-icon")} 
                </div>
            </div>
        </div>
    `;
}

// Charger le CSS de la barre supérieure
chargerCSS("./styles/topbar.css");

// Exporter en tant que valeur par défaut pour simplifier les importations
export default generateTopbar;
