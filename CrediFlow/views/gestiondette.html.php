<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Dettes</title>
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

        .main-content {
            flex: 1;
            padding: 20px 40px;
            background-color: #f9fafc;
        }

        .gestion-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .client-info, .debt-info {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .client-info h3, .debt-info h3 {
            font-size: 1.5rem;
            color: #1b2a49;
            margin-bottom: 20px;
        }

        .client-info input, .debt-info input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .debt-info input[readonly] {
            background-color: #f4f4f4;
        }

        .debt-info button {
            background-color: #ff0000;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
        }

        .debt-info button:hover {
            background-color: #cc0000;
        }

        .table-container {
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #f4f4f4;
        }

        .action-buttons button {
            background-color: #ff0000;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            padding: 5px 10px;
        }

        .action-buttons button:hover {
            background-color: #cc0000;
        }

        .add-button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
        }

        .add-button:hover {
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
            <a href="?page=3" class="active"><i class="icon-debt"></i> Gestion dette</a>
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
        <h2>Ajouter une Nouvelle Dette</h2>
        <div class="gestion-container">
            <div class="client-info">
                <h3>Informations Client</h3>
                <input type="text" placeholder="Nom">
                <input type="text" placeholder="Prénom">
                <input type="text" placeholder="Numéro Tel">
                <input type="text" placeholder="Adresse">
                <input type="text" placeholder="Numéro CNI">
            </div>

            <div class="debt-info">
                <h3>Enregistrer Dette</h3>
                <input type="date" placeholder="Date">
                <input type="number" placeholder="Montant Versé">
                <input type="text" value="0" readonly placeholder="Montant Total">
                <input type="text" value="0" readonly placeholder="Montant Dette">
                <button class="add-button">Ajouter Produit</button>
            </div>
        </div>

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Produit</th>
                        <th>Prix</th>
                        <th>Quantité</th>
                        <th>Total</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Coca - 1.5L</td>
                        <td>800</td>
                        <td>1</td>
                        <td>800</td>
                        <td class="action-buttons">
                            <button>Supprimer</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <button class="add-button">Enregistrer</button>
    </div>
</body>

</html>