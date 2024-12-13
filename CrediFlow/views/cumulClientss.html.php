<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cumul Clients</title>
    <link rel="stylesheet" href="styles.css">
    <style>
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
            top: 0;
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

        .main-content {
            flex: 1;
            padding: 20px;
            justify-items: center;
            align-content: space-around;
            align-items: space-around;
        }

        h1 {
            font-size: 2rem;
            color: #1b2a49;
            margin-bottom: 20px;
            text-align: center;
        }

        .search-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .search-container input {
            padding: 10px;
            width: 300px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-right: 10px;
        }

        .search-container button {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .search-container button:hover {
            background-color: #0056b3;
        }

        .client-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            border-radius: 10px;
            overflow: hidden;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 15px;
            text-align: center;
        }

        th {
            background-color: #ffba08;
            color: white;
            font-size: 1.2rem;
        }

        td {
            font-size: 1rem;
            color: #333;
        }

        tr:nth-child(even) {
            background-color: #f4f4f4;
        }

        tr:hover {
            background-color: #ffba08;
            color: white;
            cursor: pointer;
        }

        .pagination {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }

        .pagination select {
            padding: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .pagination div {
            display: flex;
            align-items: center;
        }

        .pagination button {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            padding: 5px 10px;
            margin-left: 10px;
            transition: background-color 0.3s ease;
        }

        .pagination button:hover {
            background-color: #0056b3;
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
            <a href="?page=2"><i class="icon-home"></i> Dashboard</a>
            <a href="?page=3"><i class="icon-debt"></i> Gestion dette</a>
            <a href="?page=4"><i class="icon-clients"></i> Clients</a>
            <a href="?page=5"><i class="icon-notifications"></i> Notifications</a>
            <a href="?page=6" class="active"><i class="icon-stats"></i> Cumul clients</a>
        </nav>
        <div class="bottom-menu">
            <a href="?page=1"><i class="icon-logout"></i> Déconnexion</a>
            <a href="#"><i class="icon-profile"></i> Profil</a>
            <a href="#"><i class="icon-settings"></i> Paramètres</a>
        </div>
    </div>

    <div class="main-content">
        <h1>Cumul dette de chaque client</h1>

        <div class="search-container">
            <input type="text" placeholder="Rechercher un client (ex : Nom, Prénom ou Téléphone)...">
            <button>Rechercher</button>
        </div>

        <div class="client-container">
            <table>
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Numéro</th>
                        <th>Montant Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>DIONE</td>
                        <td>Aminata</td>
                        <td>77 784 54 25</td>
                        <td>25 000 F.CFA</td>
                    </tr>
                    <tr>
                        <td>NDIAYE</td>
                        <td>Modou</td>
                        <td>78 456 23 11</td>
                        <td>10 000 F.CFA</td>
                    </tr>
                    <tr>
                        <td>FALL</td>
                        <td>Fatou</td>
                        <td>76 998 11 22</td>
                        <td>15 000 F.CFA</td>
                    </tr>
                    <tr>
                        <td>DIENG</td>
                        <td>Ousmane</td>
                        <td>77 223 45 67</td>
                        <td>7 500 F.CFA</td>
                    </tr>
                    <tr>
                        <td>SECK</td>
                        <td>Khady</td>
                        <td>77 112 34 56</td>
                        <td>20 000 F.CFA</td>
                    </tr>
                </tbody>
            </table>

            <div class="pagination">
                <div>
                    <span>Items par page :</span>
                    <select>
                        <option>5</option>
                        <option>10</option>
                        <option>20</option>
                    </select>
                </div>
                <div>
                    <span>1-5 parmi 55 items</span>
                    <button>◀</button>
                    <button>▶</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>