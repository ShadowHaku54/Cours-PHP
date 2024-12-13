<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $page = isset($_GET["page"]) ? $_GET["page"] : 1;
    switch ($page) {
        case 1:
            include_once "../views/login.html.php";
            break;
        case 2:
            include_once "../views/dashboard.html.php";
            break;
        case 3:
            include_once "../";
            break;
        case 4:
            break;
        case 5:
            break;
        case 6:
            break;
        default:
            # code...
            break;
    }
    ?>
</body>

</html>