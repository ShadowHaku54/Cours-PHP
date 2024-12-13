<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Images générées dynamiquement avec PHP</h1>
    <?php

    include_once "./genImage.php";
    echo generateIcon("home");
    
    include_once "./genTopbar.php";
    echo generateTopbar("Test");
    ?>
</body>

</html>