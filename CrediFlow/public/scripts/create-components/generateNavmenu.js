import generateTab from './scripts/create-components/generateTab.js';
import { generateIcon } from "./scripts/create-components/generateimg.js";
import chargerCSS from "./scripts/chargerCSS.js";


// const Names = [
//     ["Dashboard", ],
// ]

// var NamesAndFiles = {
//     "Dashboard" : "",
//     "Gestion dette": "",
//     "Clients": "",
//     "Notifications": "",
//     "Cumul clients": "",
// }



function generateNavmenu(){
    return`
<div id="Navmenu">
    <div id="sous-nav">
        <div id="logo-titre">
            ${generateIMG("crediflow-logo", "logo", "svg")}
            <p class="titreLogo"><span class="credi">Credi</span><span class="flow">Flow</span></p>
        </div>
        <div id="menu">
            <div id="menu-fonc">
                <div id="menu-contain">
                    ${generateTab("Dashboard", "/pages/Dashboard.html", "home", "gestion")}
                    ${generateTab("Gestion dette", "/pages/Gestion_dette.html", "gestion", "gestion-simple")}
                    ${generateTab("Clients", "/pages/Clients.html", "clients", "clients-simple")}
                    ${generateTab("Notifications", "/pages/Notifications.html", "notifications", "notifications-send-simple")}
                    ${generateTab("Cumul clients", "/pages/Cumul_clients.html", "cumul", "cumul-simple")}
                </div>
            </div>
        </div>
        <div id="footer-menu">
            <div id="sous-footer-menu">
                <a href="/index.html" class="buton-icon" >
                    <div class="content-buton-icon">
                        ${generateIcon("exit-outline", ["first"])}
                        ${generateIcon("exit-outline-full-black", ["second"])}
                    </div>
                </a>
                <a href="#" class="buton-icon">
                    <div class="content-buton-icon">
                        ${generateIcon("Profile_user", ["first"])}
                        ${generateIcon("Profile_user-full-black", ["second"])}
                    </div>
                </a>
                <a href="#" class="buton-icon">
                    <div class="content-buton-icon">
                        ${generateIcon("settings", ["first"])}
                        ${generateIcon("Settings-full-black", ["second"])}
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
    `
}

chargerCSS("./styles/Navmenu.css")

export default generateNavmenu;