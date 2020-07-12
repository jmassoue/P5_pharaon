<?php 

 ?>
<!DOCTYPE html> <!-- view -->
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../../index.css">
    <meta name="description"
        content="Le Temple Du Pharaon à Brest est un lieu unique. Salon de thé & narguilé, pâtisseries orientales, plats, boutique égyptienne... Dépaysement garantie !" />
    <title>Le Temple Du Pharaon</title>
</head>

<body>
    <header class="logo_menu">
        <div class="container_menu">
            <div id="logo">
                <img src="../../public/images/logo_blanc.png" id="logo" alt="logo" />
            </div>
            <nav class="nav justify-content-center nav-pills nav-justified">
                <li><a href="home.php" class="nav-link focus nav-item">Accueil</a></li>
                <li><a href="salon_de_thé.php" class="nav-link focus nav-item">Salon de Thé</a></li>
                <li><a href="bar_a_chicha.php" class="nav-link nav-item">Bar à Chicha</a></li>
                <li><a href="restauration.php" class="nav-link focus nav-item">Restauration</a></li>
                <li><a href="boutique.php" class="nav-link focus nav-item">Boutique</a></li>
                <li><a href="livre_dor.php" class="nav-link focus nav-item">Livre d'or</a></li>
                <li><a href="log.php" class="nav-link focus nav-item">Connexion</a></li>
            </nav>
        </div>
    </header>
    <div class="containerLog">
        <h1 class="justify-content-center title">Connexion</h1>
        <div class="loginPage">
            <div class="offset-md-2 col-md-4 logMember justify-content-center">
                <form action="index.php?action=log" method="post">
                    <p>
                        Espace membre
                        <br />
                    </p>
                    <label for="memberForm">Identifiant</label>
                    <br />
                    <input type="text" name="pseudo" placeholder="Utilisateur" width="30%" required>
                    <br />
                    <label for="mdpForm">Mot de passe</label>
                    <br />
                    <input type="password" name="password" placeholder="********" required>
                    <br />
                    <input type="submit" value="Connexion">
                </form>
            </div>
            <div class="logNewUser offset-md-2 col-md-4 row">
                <form action="index.php?action=newMember" method="post">
                    <p>
                        Inscription
                    </p>
                    <label for="newUser">
                        Identifiant
                        <br />
                        <input type="text" placeholder="Identifiant" name="pseudo" id="newUser" required />
                        <br />
                        <label for="newUserMdp">Mot de passe</label>
                        <br />
                        <input type="password" placeholder="********" id="newUserMdp" name="password" required />
                        <br />
                        <input type="submit" value="S'inscrire" />
                    </label>
                </form>
            </div>
        </div>
    </div>
    <footer>
        <?php include("../include/footer.php"); ?>
    </footer>
</body>

</html>