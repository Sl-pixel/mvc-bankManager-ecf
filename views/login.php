<?php require_once __DIR__ . '/templates/header.php'; ?>
<main>

<form id="loginForm" action="?action=doLogin" method="POST">
            <div>
                <label>Entrez vos identifiant Administrateur :</label>
            </div>
            <div>
                <label for="email">Email :</label>
                <input id="email" type="text" name="email" value="admin@ecf.fr" required>
                <div id="emailError" class="error"></div>
            </div>
            <div>
                <label for="password">Mot de passe :</label>
                <input id="password" type="password" name="password" value="1234" required>
                <div id="passwordError" class="error"></div>
            </div>
            <div>
                <button type="submit">Se connecter</button>
            </div>
        </form>
</main>
        
        <script src="loginValidation.js"></script>