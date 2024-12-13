<?php
include_once "../views/partials/head.php";
include_once PATH_CONTROLLERS . "/functions.php";

function generateImg($name, $classMainName, $format, $classes = []): String|null
{
    if (!(checkString($name) && checkString($format) && is_array($classes))) {
        return null;
    }

    $alt = sprintf("%s %s %s", $name, strtoupper($format), $classMainName);
    $classesString = implode(" ", $classes);
    $classAttribute = $classMainName . (isNotEmpty($classesString) ? $classesString : "");

    return sprintf(
        '<img src="%s/%s/%s.%s" alt="%s" class="%s">',
        PATH_ASSETS,
        htmlSecure($classMainName),
        htmlSecure($name),
        htmlSecure($format),
        htmlSecure($alt),
        htmlSecure($classAttribute),
    );
}

function generateIcon($name, $classes = [], $classMainName = "icons", $format = "svg"): string|null
{
    return generateImg($name, $classMainName, $format, $classes);
}
