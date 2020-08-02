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
        <div class="big_titre">
            <h1>Restauration - Mezzes</h1>
            <p class="h2">Le Temple du Pharaon à Brest</p>
        </div>
        <br>

        <div class="container">

            <div class="slide">
                <img class="active" src="../../public/images/page 4 restau/plats.png">
                <img src="../../public/images/page 4 restau/mezze_oriental.png">
                <img src="../../public/images/page 4 restau/mezze.png">
            </div>

            <div class="cont-btn">
                <div class="btn-nav left">←</div>
                <div class="btn-nav right">→</div>
            </div>

        </div>

        <div>
            <h3>Mezzés et tapas aux saveurs orientales</h3>

            <p>Mamdouh, vous propose des mezzés pour vous restaurer le soir. Ses plats sont 100% faits maison et
                concoctés à
                base de produits frais et bios.</p>

            <p>Les mezzés sont accompagnés d’un vin millésime rouge, rosé ou blanc, d’une bière bio ou toutes autres
                boissons à la carte.</p>

            <p>Chaque jours, nous vous proposons des mezzés différents.</p>

            <p>Pour venir manger en famille ou entre amis, n'hésitez pas à réserver au préalable.</p>
        </div>

        <div>
            <h3>Voici quelques exemples de mezzés concoctés par Mamdouh :</h3>

            <li>Viande de grison sur un lit de fromage à l'ail et fines herbes.</li>
            <li>Hachis parmentier façon égyptienne</li>
            <li>Veau au lait de coco</li>
            <li>Foie gras fait maison</li>
            <li>Calamar à la provençal</li>
            <li>Boussara (purée de fève, fines herbes fraîches, oignon et curcuma)</li>
        </div>

        <footer>
            <?php include("../include/footer.php"); ?>
        </footer>
</body>

</html>