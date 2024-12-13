<?php
function generateImage($src, $alt = '', $width = '200px', $height = '200px') {
    // Échapper les valeurs pour éviter les problèmes de sécurité
    $src = htmlspecialchars($src, ENT_QUOTES, 'UTF-8');
    $alt = htmlspecialchars($alt, ENT_QUOTES, 'UTF-8');
    $width = htmlspecialchars($width, ENT_QUOTES, 'UTF-8');
    $height = htmlspecialchars($height, ENT_QUOTES, 'UTF-8');

    // Retourner une balise <img> formatée
    return "<img src=\"$src\" alt=\"$alt\" style=\"width: $width; height: $height;\">";
}

// Exemple d'utilisation
echo generateImage('https://via.placeholder.com/300', 'Une image générée dynamiquement', '300px', '300px');
?>
