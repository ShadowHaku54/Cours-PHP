<?php
// constantes sur les chemins
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
define("PF_CONTROLLERS", [
    "index" => "index.php",
    "consts" => "consts.php",
    "functs" => "functions.php",
]);


?>
