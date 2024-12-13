<?php
function isNotEmpty($value): bool
{
    return !empty($value);
}
function checkString($chaine): bool
{
    return isNotEmpty(value: $chaine) && is_string(value: $chaine);
}

function checkArray($tableau): bool
{
    return isNotEmpty(value: $tableau) && is_array(value: $tableau);
}

function htmlSecure($chaine): string
{
    return htmlspecialchars(string: $chaine, flags: ENT_QUOTES, encoding: 'UTF-8');
}
