<?php
include_once "../views/partials/head.php";
include_once PATH_CONTROLLERS . "/functions.php";
include_once PATH_VIEWS . "/partials/genImage.php";


function generateTab(string $name, string $icon1, string $icon2, string $href="", bool $active=false): string{
    $id = ($active) ? "active" : "";
    return sprintf(
        '<div class="tab">
            <a href="%s" class="menu-item" id = "%s">
                %s
                %s
                <span>%s</span>
            </a>
            <hr>
        </div>',
        $href, $id, $icon1, $icon2, $name,
    );
}



?>
