<?php
include_once "../views/partials/head.php";
include_once PATH_CONTROLLERS . "/functions.php";

function generateTopbar($title = "Titre par défaut"): string|null
{
    if (checkString($title)) {
        return null;
    }

    // Retourne le HTML de la topbar
    return
        '<div id="topbar">
                <div id="in-topbar">
                    ' . generateIcon("home") . '
                    <h1 id="title">' . htmlSecure($title) . '</h1>
                    <div id="parametres">
                        ' . generateIcon("notification") . '
                        ' . generateIcon("Profile_user") . '
                        ' . generateIcon("Setting-icon") . '
                    </div>
                </div>
            </div>';
}
