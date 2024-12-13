<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion dette - CrediFlow</title>
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="/styles/topbar.css">
    <link rel="stylesheet" href="/styles/dashboard.css">
    <link rel="stylesheet" href="/styles/gestion-dettes.css">
    <script src="/script.js"></script>
</head>
<body>
    <div id="insert-Navmenu">Chargement en cours</div>
    <div id="container">
        <header id="insert-topbar">Chargement en cours...</header>
        <div id="contain">
            <div class="row">
                <p class="title_page">Ajouter une nouvelle dette</p>
                <div class="row-cols">
                    <div class="button-container">
                        <div id="add-button" class="button compact">
                          <span class="text">Ajouter</span>
                        </div>
                      </div>
                      <div class="button-container">
                        <div id="toggle-button" class="button compact">
                          <span class="icon">🔍</span>
                          <span class="text">Rechercher</span>
                        </div>
                      </div>
                </div>
            </div>
            <div class="row-cols">
                <!-- Section Profil -->
                <div class="profile-section">
                    <h2>Profile</h2>
                    <div class="profile-picture">
                    <img src="https://via.placeholder.com/100x100?text=?" alt="Profile">
                    </div>
                    <div class="profile-details">
                    <p><strong>Nom :</strong> TALL</p>
                    <p><strong>Prénom :</strong> Seydou</p>
                    <p><strong>Numéro Tel:</strong> 78 475 47 58</p>
                    <p><strong>Adresse :</strong> Rue 10 Médina</p>
                    <p><strong>Numéro CNI:</strong> S125483A48</p>
                    <p class="total-pay">
                        <strong>Total à payé :</strong> <span class="amount">10 000</span> F.CFA
                    </p>
                    </div>
                    <button class="view-more">Voir plus</button>
                </div>
                
                <!-- Section Enregistrement Dette -->
                <div class="debt-section">
                    <h2>Enregistrer dette</h2>
                    <form>
                    <div class="form-group">
                        <label for="date">Date :</label>
                        <div class="input-group">
                        <input type="date" id="date" value="2024-11-12">
                        <span class="calendar-icon">📅</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="montant-verse">Montant versé :</label>
                        <div class="amount-field">
                        <input type="number" id="montant-verse" value="0" readonly>
                        <span class="currency">F.CFA</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Montant Total :</label>
                        <div class="amount-field">
                        <span class="dash">--</span>
                        <span class="currency">F.CFA</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Montant Dette :</label>
                        <div class="amount-field">
                        <span class="dash">--</span>
                        <span class="currency">F.CFA</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="product-name">Nom prod :</label>
                        <select id="product-name">
                        <option>Entrez/sélectionnez</option>
                        <option>Produit 1</option>
                        <option>Produit 2</option>
                        </select>
                    </div>
                    <button type="submit" class="add-button">Ajouter</button>
                    </form>
                </div>  
            </div>
        </div>
    </div>

    <script type="module">
        import generateTopbar from "/scripts/create-components/generateTopbar.js";

        try {
            const topbarHTML = generateTopbar("Gestion dette");
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
