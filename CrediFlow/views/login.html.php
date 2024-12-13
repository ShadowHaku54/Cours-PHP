<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion | CrediFlow</title>
    <link rel="stylesheet" href="./styles/main.css">
    <link rel="stylesheet" href="./styles/login.css">
    <script src="./script.js"></script>
</head>
<body>
    <!-- En-tête -->
    <header>
        <div class="logo">
            <img src="assets/logo/crediflow-logo.svg" alt="Logo CrediFlow">
            <h1>Credi<span>Flow</span></h1>
        </div>
    </header>

    <!-- Section principale -->
    <main>
        <div class="login-container">
            <!-- Titre -->
            <h2>Connexion à CrediFlow</h2>
            <p>Veuillez vous connecter pour poursuivre !</p>

            <!-- Formulaire de connexion -->
            <form id="login-form">
                <!-- Champ Adresse Email -->
                <div class="form-group">
                    <label for="email">Adresse Email</label>
                    <input type="email" id="email" name="email" placeholder="Adresse Email" required>
                </div>

                <!-- Champ Mot de Passe -->
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <div class="password-input">
                        <input type="password" id="password" name="password" placeholder="Mot de passe" required>
                        <button type="button" class="toggle-password">
                            <img src="assets/icons/eye.svg" alt="Afficher/Masquer">
                        </button>
                    </div>
                </div>

                <!-- Options -->
                <div class="form-options">
                    <div>
                        <input type="checkbox" id="remember-me" name="remember-me">
                        <label for="remember-me">Se souvenir de moi</label>
                    </div>
                    <a href="#">Mot de passe oublié ?</a>
                </div>

                <!-- Bouton de Connexion -->
                <button type="submit" class="btn-primary">Se connecter</button>
            </form>

            <!-- Connexion Sociale -->
            <div class="social-login">
                <p>Ou connectez-vous via :</p>
                <div class="social-buttons">
                    <button class="google"><img src="assets/icons/Google.svg" alt="Google"> Google</button>
                    <button class="apple"><img src="assets/icons/Apple.svg" alt="Apple"> Apple</button>
                    <button class="facebook"><img src="assets/icons/Facebook.svg" alt="Facebook"> Facebook</button>
                </div>
            </div>
        </div>
    </main>
    <script>
        document.getElementById('login-form').addEventListener('submit', function(event) {
            event.preventDefault(); // Empêche le comportement par défaut du formulaire
    
            // Optionnel : Ajouter une validation (exemple simple)
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
    
            if (email && password) {
                // Redirection vers la page "/pages/Dashboard.html"
                window.location.href = "?page=2";
            } else {
                alert("Veuillez remplir tous les champs.");
            }
        });
    </script>    
</body>
</html>
