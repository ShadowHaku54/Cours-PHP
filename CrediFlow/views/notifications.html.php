<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifications - CrediFlow</title>
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="/styles/topbar.css">
    <link rel="stylesheet" href="/styles/dashboard.css">
    <link rel="stylesheet" href="/styles/notifications.css">
    <script src="/script.js"></script>
</head>
<body>
    <div id="insert-Navmenu">Chargement en cours</div>
    <div id="container">
        <header id="insert-topbar">Chargement en cours...</header>
        <div id="contain">
            <div class="row-cols">
                <p class="title_page">Liste des dettes non payés</p>
            </div>
            <div class="row-main-contain">
                <div class="table-container">
                    <!-- Barre de recherche -->
                    <div class="search-bar">
                        <input type="text" placeholder="Rechercher...">
                        <button class="search-btn">🔍</button>
                    </div>
            
                    <!-- Tableau -->
                    <table class="custom-table">
                        <thead>
                            <tr>
                                <th><input type="checkbox"></th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Numéro</th>
                                <th>Montant</th>
                                <th>Devise</th>
                                <th>Send</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Ligne de données -->
                            <tr>
                                <td><input type="checkbox"></td>
                                <td class="name">DIONE</td>
                                <td class="firstname">Aminata</td>
                                <td class="phone">77 784 54 25</td>
                                <td class="amount">5 000</td>
                                <td class="currency">F CFA</td>
                                <td><button class="send-btn">ENVOYER</button></td>
                            </tr>
                            <!-- Dupliquer les lignes -->
                            <tr>
                                <td><input type="checkbox"></td>
                                <td class="name">DIONE</td>
                                <td class="firstname">Aminata</td>
                                <td class="phone">77 784 54 25</td>
                                <td class="amount">5 000</td>
                                <td class="currency">F CFA</td>
                                <td><button class="send-btn">ENVOYER</button></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox"></td>
                                <td class="name">DIONE</td>
                                <td class="firstname">Aminata</td>
                                <td class="phone">77 784 54 25</td>
                                <td class="amount">5 000</td>
                                <td class="currency">F CFA</td>
                                <td><button class="send-btn">ENVOYER</button></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox"></td>
                                <td class="name">DIONE</td>
                                <td class="firstname">Aminata</td>
                                <td class="phone">77 784 54 25</td>
                                <td class="amount">5 000</td>
                                <td class="currency">F CFA</td>
                                <td><button class="send-btn">ENVOYER</button></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox"></td>
                                <td class="name">DIONE</td>
                                <td class="firstname">Aminata</td>
                                <td class="phone">77 784 54 25</td>
                                <td class="amount">5 000</td>
                                <td class="currency">F CFA</td>
                                <td><button class="send-btn">ENVOYER</button></td>
                            </tr>
                        </tbody>
                    </table>
            
                    <!-- Pagination -->
                    <div class="pagination">
                        <span>Items par page :</span>
                        <select>
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="15">15</option>
                        </select>
                        <span>1-5 parmi 55 items</span>
                        <button class="page-btn">❮</button>
                        <button class="page-btn">❯</button>
                    </div>
                </div>            
            </div>
        </div>
    </div>

    <script type="module">
        import generateTopbar from "/scripts/create-components/generateTopbar.js";

        try {
            const topbarHTML = generateTopbar("Notifications");
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
