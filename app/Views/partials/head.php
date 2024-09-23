<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORUM</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/public/css/style.css">
</head>

<body>
    <header class="navbar-fixed">
        <nav class="navbar-container">
            <div class="flexLogo">
                <div class="logo">
                    <img src="/public/img/logo-education-education-2g1620k.jpg" alt="Logo education">
                    <h1>FORUM</h1>
                </div>
                <div class="burger-menu" onclick="toggleMenu()">
                    &#9776; <!-- Icône burger -->
                </div>
                <ul>
                    <li><a href="/">Accueil</a></li>
                    <?php
                    if (isset($_SESSION['user'])) {
                    ?>
                        <li><a href="/deconnection">Déconnexion</a></li>
                        <?php
                        if ($_SESSION['user']['role'] == "Admin") {
                        ?>
                            <li><a href="/users">Utilisateurs</a></li>
                            <li><a href="/subject">Ajout sujet</a></li>
                        <?php
                        }
                    } else {
                        ?>
                        <li><a href="/register">Inscription</a></li>
                        <li><a href="/connection">Connexion</a></li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </nav>
    </header>

    <!-- JavaScript pour activer le burger menu -->
    <script>
        function toggleMenu() {
            const navMenu = document.querySelector('header ul');
            navMenu.classList.toggle('show'); /* Ajoute ou retire la classe "show" */
        }
    </script>