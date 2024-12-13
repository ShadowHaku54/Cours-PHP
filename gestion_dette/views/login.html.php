<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion | CrediFlow</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/login.css">
    <script src="./js/script.js"></script>
</head>
<body>
    <header>
        <div class="logo">
            <img src="assets/logo/crediflow-logo.svg" alt="Logo CrediFlow">
            <h1>Credi<span>Flow</span></h1>
        </div>
    </header>

    <main>
        <div class="login-container">
            <h2>Connexion à CrediFlow</h2>
            <p>Veuillez vous connecter pour poursuivre !</p>

            <form id="login-form">
                <div class="form-group">
                    <label for="email">Adresse Email</label>
                    <input type="email" id="email" name="email" placeholder="Adresse Email" required>
                </div>

                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <div class="password-input">
                        <input type="password" id="password" name="password" placeholder="Mot de passe" required>
                        <button type="button" class="toggle-password">
                            <img src="assets/icons/eye.svg" alt="Afficher/Masquer">
                        </button>
                    </div>
                </div>

                <div class="form-options">
                    <div>
                        <input type="checkbox" id="remember-me" name="remember-me">
                        <label for="remember-me">Se souvenir de moi</label>
                    </div>
                    <a href="#">Mot de passe oublié ?</a>
                </div>

                <button type="submit" class="btn-primary">Se connecter</button>
            </form>

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
            event.preventDefault(); 
    
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
    
            if (email && password) {
                window.location.href = "?page=2";
            } else {
                alert("Veuillez remplir tous les champs.");
            }
        });
    </script>
</body>
</html>
