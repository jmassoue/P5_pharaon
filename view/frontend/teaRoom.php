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
            <header>

                <nav class="navbar navbar-light navbar-expand-md">
                    <div class="container-fluid"><img id="logo-site" src="../../public/images/logo_blanc.png"
                            alt="logo"><a class="navbar-brand" href="/P5/index.php"></a>
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
        </header>
        <div class="big_titre">
            <h1>Salon de thé oriental</h1>
            <p>Le Temple du Pharaon à Brest</p>
        </div>
        <br>

        <div class="container">

            <div class="slide">
                <img class="active" src="../../public/images/page salon de thé/patisseries.png">
                <img src="../../public/images/page salon de thé/sucre.png">
                <img src="../../public/images/page salon de thé/jus_frais.png">
                <img src="../../public/images/page salon de thé/fruit_frais.png">
                <img src="../../public/images/page salon de thé/patisserie.png">
                <img src="../../public/images/page salon de thé/thé_main.png">
            </div>

            <div class="cont-btn">
                <div class="btn-nav left">←</div>
                <div class="btn-nav right">→</div>
            </div>

        </div>

        <div>
            <h3>Salon de thé à Brest</h3>

            <p>Mamdouh, propriétaire du Temple Du Pharaon, vous propose de nombreuses saveurs de thés, cocktails,
                milkshakes, boissons chaudes… . Toutes les boissons sont préparées devant vos yeux et à partir
                d’ingrédients
                100% naturels.</p>

            <p>Vous pouvez accompagner votre boisson d’un assortiment de pâtisseries orientales telles que des loukoums,
                baklavas, cheveux d’anges etc. Dégustez votre boisson ou pâtisserie sur un fond sonore de musique
                égyptienne
                et au sein d’un décor typiquement égyptien. Vous pouvez aussi commander une chicha, notre salon est
                divisé
                en une partie fumeur et non fumeur.</p>
        </div>
        <div class="la_carte">
            <h3>Quelques boissons de notre carte</h3>

            <div class="boisson">
                <h4>Thé orientals bios :</h4>

                <li>Thé vert ou noir à la menthe fraîche</li>
                <li>Thé vert, noir ou rouge au gingembre</li>
                <li>Thé vert au jasmin</li>
                <li>Thé rouge à la cardamone</li>

                <p>Nous vous proposons 30 assortiments de thé tels que cannelle, crème de rose, citron vert, jasmin etc.
                </p>
            </div>
            <div class="boisson">
                <h4>Cocktails :</h4>

                <li>Cléopatra => fraise, pomme, vanille.</li>
                <li>Héfertiti => fraise, cassonade, eau de rose, perrier.</li>

                <p>Nous avons une dizaine de cocktails à notre carte, tous à base de fruits frais, préparés devant vous.
            </div>
            <div class="boisson">
                <h4>Smoothies aux fruits frais :</h4>

                <li>Le Sphinx => Fruit de la passion.</li>
                <li>Khéops => Mangue.</li>

                <p>Nos smoothies sont réalisés avec des fruits frais et du yaourt à la grec.</p>
            </div>
            <footer>
                <?php include("../include/footer.php"); ?>
            </footer>
</body>

</html>