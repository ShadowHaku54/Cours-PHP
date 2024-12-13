<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Styles généraux */
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background-color: #eef2f7;
            color: #333;
            display: flex;
        }

        /* Barre latérale */
        .sidebar {
            width: 250px;
            background-color: #1b2a49;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            height: 100vh;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            position: sticky;
            top : 0;
            left: 0;
        }

        .logo {
            text-align: center;
        }

        .logo img {
            width: 60px;
            height: 60px;
        }

        .logo h1 {
            font-size: 1.8rem;
            color: #ffba08;
            margin-top: 10px;
        }

        .menu a {
            display: flex;
            align-items: center;
            color: white;
            text-decoration: none;
            padding: 12px 15px;
            font-size: 1.1rem;
            border-radius: 5px;
            margin-bottom: 10px;
            transition: background-color 0.3s, transform 0.2s;
        }

        .menu a i {
            margin-right: 10px;
        }

        .menu a.active,
        .menu a:hover {
            background-color: #ffba08;
            color: #1b2a49;
            transform: scale(1.05);
        }

        .bottom-menu a {
            display: flex;
            align-items: center;
            color: white;
            text-decoration: none;
            padding: 10px;
            font-size: 1rem;
            margin-top: 3px;
        }

        .bottom-menu a i {
            margin-right: 10px;
        }

        /* Contenu principal */
        .main-content {
            flex: 1;
            padding: 20px 40px;
            background-color: #f9fafc;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #ffffff;
            padding: 15px 30px;
            border-radius: 10px;
            margin-bottom: 30px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .header-left h1 {
            font-size: 1.8rem;
            color: #1b2a49;
        }

        .header-right i {
            font-size: 1.5rem;
            margin-left: 20px;
            color: #555;
            cursor: pointer;
            transition: color 0.2s;
        }

        .header-right i:hover {
            color: #ffba08;
        }

        .welcome{
            width: 100%;
        }

        .welcome h2 {
            font-size: 2.5rem;
            color: #1b2a49;
            margin-bottom: 10px;
        }

        .welcome p {
            font-size: 1.1rem;
            color: #555;
        }

        .period {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .radio-buttons label {
            margin-right: 15px;
            font-size: 1rem;
            color: #333;
            display: inline-block;
            cursor: pointer;
        }

        .date-range label {
            display: inline-block;
            margin-right: 10px;
            font-size: 1rem;
            color: #555;
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .stat {
            background-color: #ffffff;
            padding: 20px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }

        .stat:hover {
            transform: translateY(-5px);
        }

        .stat h3 {
            font-size: 1.2rem;
            color: #555;
            margin-bottom: 15px;
        }

        .stat p {
            font-size: 1.8rem;
            color: #1b2a49;
            font-weight: bold;
        }

        .clients {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .client {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.2s;
        }

        .client:hover {
            transform: scale(1.05);
        }

        .client h3 {
            font-size: 1.2rem;
            color: #555;
        }

        .client p {
            font-size: 1rem;
            color: #1b2a49;
        }

        .chart {
            margin-top: 30px;
            text-align: center;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
        }

        .chart-circle {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            margin: 20px auto;
            background: conic-gradient(red 0% 67%,
                    green 67% 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.8rem;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <div class="logo">
            <img src="logo.png" alt="Logo">
            <h1>CrediFlow</h1>
        </div>
        <nav class="menu">
            <a href="?page=2" class="active"><i class="icon-home"></i> Dashboard</a>
            <a href="?page=3"><i class="icon-debt"></i> Gestion dette</a>
            <a href="?page=4"><i class="icon-clients"></i> Clients</a>
            <a href="?page=5"><i class="icon-notifications"></i> Notifications</a>
            <a href="?page=6"><i class="icon-stats"></i> Cumul clients</a>
        </nav>
        <div class="bottom-menu">
            <a href="?page=1"><i class="icon-logout"></i> Déconnexion</a>
            <a href="#"><i class="icon-profile"></i> Profil</a>
            <a href="#"><i class="icon-settings"></i> Paramètres</a>
        </div>
    </div>

    <div class="main-content">
        <header>
            <div class="header-left">
                <i class="icon-home"></i>
                <h1>Tableau de bord</h1>
            </div>
            <div class="header-right">
                <i class="icon-bell"></i>
                <i class="icon-user"></i>
                <i class="icon-settings"></i>
            </div>
        </header>

        <section class="welcome">
            <h2>Salut, Fabien 👋</h2>
            <p>Bienvenue dans votre tableau de bord</p>
            <div class="period">
                <span>Période</span>
                <div class="radio-buttons">
                    <label><input type="radio" name="period" checked> Semaine</label>
                    <label><input type="radio" name="period"> Mois</label>
                    <label><input type="radio" name="period"> Année</label>
                    <label><input type="radio" name="period"> Personnalisé</label>
                </div>
                <div class="date-range">
                    <label>Date début: <input type="date"></label>
                    <label>Date fin: <input type="date"></label>
                </div>
            </div>
        </section>

        <section class="stats">
            <div class="stat">
                <h3>Nombre dettes enregistrées</h3>
                <p>100</p>
            </div>
            <div class="stat">
                <h3>Nombre clients endettés</h3>
                <p>25</p>
            </div>
            <div class="stat">
                <h3>Total dettes</h3>
                <p>108.5K F.CFA</p>
            </div>
            <div class="stat">
                <h3>Total paiements</h3>
                <p>62K F.CFA</p>
            </div>
        </section>

        <section class="clients">
            <div class="client">
                <h3>Client le plus endetté</h3>
                <p>Kally DECK</p>
                <p>Total dettes: 30K F.CFA</p>
            </div>
            <div class="client">
                <h3>Client le plus fréquent</h3>
                <p>Kally DECK</p>
                <p>Nombre de fois: 10</p>
            </div>
            <div class="client">
                <h3>Client le plus honoraires</h3>
                <p>Seydou TALL</p>
                <p>Total dettes: 4K F.CFA</p>
            </div>
        </section>

        <section class="chart">
            <h3>Rapport</h3>
            <div class="chart-circle">
                <div class="chart-det">67% Dettes</div>
                <div class="chart-pay">33% Paiements</div>
            </div>
        </section>
    </div>
</body>

</html>