<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clients - CrediFlow</title>
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="/styles/topbar.css">
    <link rel="stylesheet" href="/styles/dashboard.css">
    <script src="/script.js"></script>
</head>
<body>
    <div id="insert-Navmenu">Chargement en cours</div>
    <div id="container">
        <header id="insert-topbar">Chargement en cours...</header>
        <div id="contain">
            <div class="row-cols">
                <p class="title_page">Lister les dettes et payement d’un client</p>
            </div>
            <div class="row-main-contain">
            </div>
        </div>
    </div>

    <script type="module">
        import generateTopbar from "/scripts/create-components/generateTopbar.js";

        try {
            const topbarHTML = generateTopbar("Clients");
            const inserTopbar = document.getElementById("insert-topbar");
            inserTopbar.innerHTML = topbarHTML;
        } catch (error) {
            console.error("Erreur lors de la génération de la barre supérieure :", error);
        }

        import generateNavmenu from "/scripts/create-components/generateNavmenu.js";
       
        try {
            const menuItem = generateNavmenu("Tableau de bord");
            document.getElementById("insert-Navmenu").innerHTML = menuItem;
        } catch (error) {
            console.error("Erreur lors de la génération du menu :", error);
        }
    </script>
</body>
</html>
