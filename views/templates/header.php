<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestionnaire bancaire</title>
    <link rel="stylesheet" href="style.css">
    <script src="app.js" defer></script>


</head>

<body>
    <?php if (isAdmin()): ?>
        <nav class="navbar">
            <div class="container">
                <a href="?">Gestionnaire bancaire</a>
                <div id="navbarNav">
                    <ul>
                        <li>
                            <a href="?action=home">Accueil</a>
                        </li>
                        <li>
                            <a href="?action=createClient">Nouveaux client</a>
                        </li>
                        <li>
                            <a href="?action=createAccount">Nouveaux compte</a>
                        </li>
                        <li>
                            <a href="?action=createContract">Nouveaux contrat</a>
                        </li>

                    <?php if (isset($_SESSION['connected'])): ?>
                        <li>
                            <a href="?action=logout">Déconnexion</a>
                        </li>
                    <?php else: ?>
                        <li>
                            <a href="?action=login">Connexion</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    <?php endif; ?>

</body>

</html>