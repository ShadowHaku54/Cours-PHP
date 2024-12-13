<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clients</title>
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

        .client-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .profile-info,
        .debts-list {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        }

        .profile-info {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            background: linear-gradient(135deg, #1b2a49, #4a5c85);
            color: white;
        }

        .profile-info img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 4px solid #ffba08;
            margin-bottom: 15px;
        }

        .profile-info h3 {
            font-size: 1.8rem;
            margin-bottom: 10px;
        }

        .profile-info p {
            margin: 5px 0;
            font-size: 1rem;
        }

        .summary {
            margin-top: 20px;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.2);
            padding: 10px;
            border-radius: 10px;
        }

        .summary p {
            display: flex;
            justify-content: space-between;
            margin: 10px 0;
            font-size: 1rem;
            color: #f5f5f5;
        }

        .summary span {
            font-weight: bold;
        }

        .debts-list {
            background: linear-gradient(135deg, #f9fafc, #eef2f7);
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        }

        .debts-list h3 {
            font-size: 1.6rem;
            color: #1b2a49;
            margin-bottom: 15px;
            text-align: center;
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

        .action-buttons {
            position: relative;
        }

        .action-buttons button {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            padding: 5px 10px;
            transition: background-color 0.3s ease;
        }

        .action-buttons button:hover {
            background-color: #0056b3;
        }

        .action-buttons .overlay {
            display: none;
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translateX(-50%);
            background-color: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            z-index: 10;
        }

        .action-buttons .overlay button {
            display: block;
            width: 100%;
            padding: 10px;
            border: none;
            background: none;
            text-align: left;
            cursor: pointer;
            color: #333;
            transition: background-color 0.3s ease;
        }

        .action-buttons .overlay button:hover {
            background-color: #f4f4f4;
        }

        .action-buttons.active .overlay {
            display: block;
        }

        .search-bar {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            margin-bottom: 20px;
        }

        .search-bar input {
            padding: 10px;
            width: 300px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-right: 10px;
        }

        .search-bar button {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }

        .search-bar button:hover {
            background-color: #0056b3;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('.action-buttons button').forEach(button => {
                button.addEventListener('click', function(event) {
                    const parent = this.closest('.action-buttons');
                    parent.classList.toggle('active');
                    event.stopPropagation();
                });
            });

            document.addEventListener('click', () => {
                document.querySelectorAll('.action-buttons').forEach(button => {
                    button.classList.remove('active');
                });
            });
        });
    </script>
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
            <a href="?page=4" class="active"><i class="icon-clients"></i> Clients</a>
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
        <div class="search-bar">
            <input type="text" placeholder="Rechercher un client (ex : Nom, Prénom ou Téléphone)...">
            <button>Rechercher</button>
        </div>

        <div class="client-container">
            <div class="profile-info">
                <h3>Profile</h3>
                <img src="placeholder.png" alt="Profile">
                <p>Nom : <span>Mamadou Sarr</span></p>
                <p>Téléphone : <span>+221 77 123 45 67</span></p>
                <p>Adresse : <span>Dakar, Sénégal</span></p>
                <div class="summary">
                    <p>Total dette accumulée : <span>50 000 F.CFA</span></p>
                    <p>Total paiements : <span>20 000 F.CFA</span></p>
                    <p>Total dette non payée : <span>30 000 F.CFA</span></p>
                    <p>Nb dette non payée : <span>3</span></p>
                </div>
            </div>

            <div class="debts-list">
                <h3>Dettes en cours</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Date d'enregistrement</th>
                            <th>Montant Versé</th>
                            <th>Dette Restant</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2023-11-10</td>
                            <td>5 000 F.CFA</td>
                            <td>10 000 F.CFA</td>
                            <td class="action-buttons">
                                <button>...</button>
                                <div class="overlay">
                                    <button class="cancel">Annuler</button>
                                    <button>Rembourser</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2023-10-20</td>
                            <td>5 000 F.CFA</td>
                            <td>5 000 F.CFA</td>
                            <td class="action-buttons">
                                <button>...</button>
                                <div class="overlay">
                                    <button class="cancel">Annuler</button>
                                    <button>Rembourser</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2023-09-15</td>
                            <td>10 000 F.CFA</td>
                            <td>15 000 F.CFA</td>
                            <td class="action-buttons">
                                <button>...</button>
                                <div class="overlay">
                                    <button class="cancel">Annuler</button>
                                    <button>Rembourser</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>