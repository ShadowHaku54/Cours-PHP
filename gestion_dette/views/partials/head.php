<?php
/*
    Fcichier d'inclusion d'en tête général à tous
    les composants.
    Contient :
    - Inclusion direct des fichiers necessaires
    - Définies les constantes nécessaires
*/

//  **  HEAD INCLUDE    **


//  **# CONSTANTS    **
//  **## constantes de chemins (PATHS)    **
// ref index.php in /gestion_dette/public/
// LEGENDES :
// PF : PATH_FILES
define("PATH_CSS", "./css");
define("PF_CSS", [
    "index" => PATH_CSS . "style.css",
    "main" => PATH_CSS . "main.css",
    "login" => PATH_CSS . "login.css",
]);

define("PATH_JS", "./js");
define("PF_JS", [
    "index" => PATH_JS . "script.js",
]);

define("PATH_ASSETS", "./assets");

define("PATH_CONTROLLERS", "../controllers");

define("PATH_VIEWS", "../views")
?>
