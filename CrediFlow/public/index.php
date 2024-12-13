<!DOCTYPE html>
<html lang="en">

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
            include_once "../views/gestiondette.html.php";
            break;
        case 4:
            include_once "../views/Clientss.html.php";
            break;
        case 5:
            include_once "../views/Notificationss.html.php";
            break;
        case 6:
            include_once "../views/cumulClientss.html.php";
            break;
        default:
            echo "Page indisponible";
            break;
    }
    ?>
</body>

</html>