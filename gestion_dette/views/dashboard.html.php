<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - CrediFlow</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/dashboard.css">
    <link rel="stylesheet" href="./css/navmenu.css">
    <link rel="stylesheet" href="./css/tab.css">
    <link rel="stylesheet" href="./css/topbar.css">
    <script src="./js/script.js"></script>
</head>

<body>
    <div id="insert-Navmenu">
        <div id="Navmenu">
            <div id="sous-nav">
                <div id="logo-titre">
                    <img src="./assets/logo/crediflow-logo.svg" alt="image svg" class="logo">
                    <p class="titreLogo"><span class="credi">Credi</span><span class="flow">Flow</span></p>
                </div>
                <div id="menu">
                    <div id="menu-fonc">
                        <div id="menu-contain">
                            <a href="" class="menu-item" id="active">
                                <img src="./assets/icons/home.svg" alt="image svg" class="icons first">
                                <img src="./assets/icons/home-simple.svg" alt="image svg" class="icons second">
                                <span>Dashboard</span>
                            </a>
                            <hr>
                        </div>
                        <div id="menu-contain">
                            <a href="" class="menu-item">
                                <img src="./assets/icons/gestion.svg" alt="image svg" class="icons first">
                                <img src="./assets/icons/gestion-simple.svg" alt="image svg" class="icons second">
                                <span>Gestion dette</span>
                            </a>
                            <hr>
                        </div>
                        <div id="menu-contain">
                            <a href="" class="menu-item">
                                <img src="./assets/icons/clients.svg" alt="image svg" class="icons first">
                                <img src="./assets/icons/clients-simple.svg" alt="image svg" class="icons second">
                                <span>Clients</span>
                            </a>
                            <hr>
                        </div>
                        <div id="menu-contain">
                            <a href="" class="menu-item">
                                <img src="./assets/icons/notifications.svg" alt="image svg" class="icons first">
                                <img src="./assets/icons/notifications-simple.svg" alt="image svg" class="icons second">
                                <span>Notifications</span>
                            </a>
                            <hr>
                        </div>
                        <div id="menu-contain">
                            <a href="" class="menu-item">
                                <img src="./assets/icons/notifications.svg" alt="image svg" class="icons first">
                                <img src="./assets/icons/notifications-simple.svg" alt="image svg" class="icons second">
                                <span>Cumul clients</span>
                            </a>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
            <div id="footer-menu">
                <div id="sous-footer-menu">
                    <a href="./index.html" class="buton-icon">
                        <div class="content-buton-icon">
                            <img src="./assets/icons/exit-outline.svg" alt="image svg" class="icons first">
                            <img src="./assets/icons/exit-outline-full-black.svg" alt="image svg" class="icons second">
                        </div>
                    </a>
                    <a href="#" class="buton-icon">
                        <div class="content-buton-icon">
                            <img src="./assets/icons/Profile_user.svg" alt="image svg" class="icons first">
                            <img src="./assets/icons/Profile_user-full-black.svg" alt="image svg" class="icons second">
                        </div>
                    </a>
                    <a href="#" class="buton-icon">
                        <div class="content-buton-icon">
                        <img src="./assets/icons/settings.svg" alt="image svg" class="icons first">
                        <img src="./assets/icons/settings-full-black.svg" alt="image svg" class="icons second">
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div id="container">
        <header id="insert-topbar">Chargement en cours...</header>
        <div id="contain">
            <div class="row-cols">
                <div class="col">
                    <span class="titre_ouverture">👋 Salut, Fabien.</span>
                    <p class="bienvenue">Bienvenue sur votre tableau de bord.</p>
                </div>
                <div class="col periode-container">
                    <h2 class="periode-title">Période</h2>

                    <div class="periode-options">
                        <label class="radio-button">
                            <input type="radio" name="periode" value="semaine">
                            <span class="radio-circle"></span>
                            <span class="radio-label">semaine</span>
                        </label>
                        <label class="radio-button">
                            <input type="radio" name="periode" value="mois">
                            <span class="radio-circle"></span>
                            <span class="radio-label">mois</span>
                        </label>
                        <label class="radio-button">
                            <input type="radio" name="periode" value="annee">
                            <span class="radio-circle"></span>
                            <span class="radio-label">année</span>
                        </label>
                        <label class="radio-button">
                            <input type="radio" name="periode" value="personnalise" checked>
                            <span class="radio-circle"></span>
                            <span class="radio-label">personnalisé</span>
                        </label>
                    </div>

                    <!-- Sélection des dates -->
                    <div class="periode-dates">
                        <div class="date-group">
                            <label for="date-debut">Date début</label>
                            <div class="input-group">
                                <input type="text" id="date-debut" placeholder="12/11/2024">
                                <span class="calendar-icon">📅</span>
                            </div>
                        </div>
                        <span class="arrow">→</span>
                        <div class="date-group">
                            <label for="date-fin">Date fin</label>
                            <div class="input-group">
                                <input type="text" id="date-fin" placeholder="12/12/2024">
                                <span class="calendar-icon">📅</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-main-contain">
                <img src="/assets/images/row1.png" alt="" class="insert-img">
                <img src="/assets/images/row2.png" alt="" class="insert-img">
                <img src="/assets/images/row3.png" alt="" class="insert-img">
                <div class="row-cols space-between">
                    <div class="debtor-container">
                        <h2 class="title">Clients les plus endettés</h2>
                        <ul class="debtor-list">
                            <li class="debtor-item">
                                <span class="rank">1</span>
                                <img src="/assets/images/person.png" alt="Avatar 1" class="avatar">
                                <span class="name">Kally DECK</span>
                            </li>
                            <li class="debtor-item">
                                <span class="rank">2</span>
                                <img src="/assets/images/person.png" alt="Avatar 2" class="avatar">
                                <span class="name">Kally DECK</span>
                            </li>
                            <li class="debtor-item">
                                <span class="rank">3</span>
                                <img src="/assets/images/person.png" alt="Avatar 3" class="avatar">
                                <span class="name">Kally DECK</span>
                            </li>
                            <li class="debtor-item">
                                <span class="rank">4</span>
                                <img src="/assets/images/person.png" alt="Avatar 4" class="avatar">
                                <span class="name">Kally DECK</span>
                            </li>
                            <li class="debtor-item">
                                <span class="rank">5</span>
                                <img src="/assets/images/person.png" alt="Avatar 5" class="avatar">
                                <span class="name">Kally DECK</span>
                            </li>
                        </ul>
                    </div>
                    <div class="debtor-container">
                        <h2 class="title">Clients les plus endettés</h2>
                        <ul class="debtor-list">
                            <li class="debtor-item">
                                <span class="rank">1</span>
                                <img src="/assets/images/person.png" alt="Avatar 1" class="avatar">
                                <span class="name">Kally DECK</span>
                            </li>
                            <li class="debtor-item">
                                <span class="rank">2</span>
                                <img src="/assets/images/person.png" alt="Avatar 2" class="avatar">
                                <span class="name">Kally DECK</span>
                            </li>
                            <li class="debtor-item">
                                <span class="rank">3</span>
                                <img src="/assets/images/person.png" alt="Avatar 3" class="avatar">
                                <span class="name">Kally DECK</span>
                            </li>
                            <li class="debtor-item">
                                <span class="rank">4</span>
                                <img src="/assets/images/person.png" alt="Avatar 4" class="avatar">
                                <span class="name">Kally DECK</span>
                            </li>
                            <li class="debtor-item">
                                <span class="rank">5</span>
                                <img src="/assets/images/person.png" alt="Avatar 5" class="avatar">
                                <span class="name">Kally DECK</span>
                            </li>
                        </ul>
                    </div>
                    <img src="/assets/images/rapport.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <script type="module">
        import generateTopbar from "/scripts/create-components/generateTopbar.js";

        try {
            const topbarHTML = generateTopbar("Tableau de bord");
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