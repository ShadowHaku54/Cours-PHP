import { generateIcon } from "./scripts/create-components/generateimg.js";
import chargerCSS from "./scripts/chargerCSS.js";

// Récupérer le chemin complet du fichier appelant
const fullPath = window.location.pathname;
// Extraire uniquement le nom de la page (le derniere chaine après '/')
const pageName = fullPath.substring(fullPath.lastIndexOf('/') + 1).replace(/_/g, ' ');


function generateTab(name, href, nameIcon1, nameIcon2){
    console.log(pageName)
    if (name+'.html' === pageName){
        return `<div class="tab">
        <a href="" class="menu-item" id = "active">
            ${generateIcon(nameIcon2, ["first"])}
            ${generateIcon(nameIcon1, ["second"])}
            <span>${name}</span>
        </a>
        <hr>
    </div>`;
    }
    else{
        return `<div class="tab">
        <a href="${href}" class="menu-item">
            ${generateIcon(nameIcon2, ["first"])}
            ${generateIcon(nameIcon1, ["second"])}
            <span>${name}</span>
        </a>
        <hr>
    </div>`;
    }
}



// Charger le CSS pour les tabs
chargerCSS('./styles/tab.css');

export default generateTab;