<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $page_title ?></title>
        <link rel="stylesheet" href="../View/css/styles.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    </head>

    <body>
        <header>
            <nav class="navbar barre_nav navbar-expand-lg navbar-light">
                <a href="#"><img class="logo" src="../View/image/logo.png" alt="logo"></a>
                <div class="menu collapse navbar-collapse col-10" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="?accueil">ACCUEIL <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="?presentation">PRESENTATION</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?simulateur">SIMULATEUR</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?connexion">S'INSCRIRE / SE CONNECTER</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
                @yield('main')
        <footer>
            <div class="container">
                <div class="row">
                    <div class="moyen-contact col-5">
                        <h3>Contactez-nous</h3>
                        <p>Adresse : 123 Rue de la Rue, Ville</p>
                        <p>Email : contact@example.com</p>
                        <p>Téléphone : +1234567890</p>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
