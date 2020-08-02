<?php 
 session_start();
 ?>
<!DOCTYPE html> <!-- view -->
<html lang="fr">

<head>
    <?php include("../include/head.php"); ?>
</head>

<body>
    <div class="container-fluid">
        <header>

            <nav class="navbar navbar-light navbar-expand-md">
                <div class="container-fluid"><img id="logo-site" src="../../public/images/logo_blanc.png" alt="logo"><a
                        class="navbar-brand" href="/P5/index.php"></a>
                    <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item" role="presentation"><a class="nav-link"
                                    href="/P5/index.php">Accueil</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link"
                                    href="/P5/index.php?action=teaRoom">Salon de Thé</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link"
                                    href="/P5/index.php?action=chicha">Bar à chicha</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link"
                                    href="/P5/index.php?action=eat">Restauration</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link"
                                    href="/P5/index.php?action=shop">Boutique</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link"
                                    href="/P5/index.php?action=goldenBook">Livre d'Or</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

        </header>
        <div class="containerContact">
            <div class="jumbotron background-contact-list">
                <div class="newAvis">
                    <form action="/P5/index.php?action=avis" method="post">
                        <h2 class="text-center">
                            "Livre d'Or - Laissez un avis sur le Temple du Pharaon"
                        </h2>
                        <div class="form-group"><input class="form-control" type="text" name="username"
                                placeholder="Nom" required
                                value="<?= isset($_POST['username']) ? $_POST['username'] : '' ?>"></div>
                        <div class="form-group"><textarea class="form-control" name="message" placeholder="Message"
                                rows="14" required></textarea></div>
                        <div class="form-group"><button class="btn btn-primary" type="submit">Envoyer</button></div>
                    </form>
                </div>
            </div>
        </div>

        <footer>
            <?php include("../include/footer.php"); ?>
        </footer>
    </div>
</body>

</html>