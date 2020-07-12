<?php 
 session_start();
 ?>
<!DOCTYPE html> <!-- view -->
<html lang="fr">

<head>
    <?php include("../include/head.php"); ?>
</head>

<body>
    <header class="logo_menu">
        <div class="container_menu">
            <div id="logo">
                <img src="../../public/images/logo_blanc.png" id="logo" alt="logo" />
            </div>
            <nav class="nav justify-content-center nav-pills nav-justified flex-column flex-sm-row">
                <!-- <576 px menu "hamburger" -->
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
            milkshakes, boissons chaudes… . Toutes les boissons sont préparées devant vos yeux et à partir d’ingrédients
            100% naturels.</p>

        <p>Vous pouvez accompagner votre boisson d’un assortiment de pâtisseries orientales telles que des loukoums,
            baklavas, cheveux d’anges etc. Dégustez votre boisson ou pâtisserie sur un fond sonore de musique égyptienne
            et au sein d’un décor typiquement égyptien. Vous pouvez aussi commander une chicha, notre salon est divisé
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

            <p>Nous vous proposons 30 assortiments de thé tels que cannelle, crème de rose, citron vert, jasmin etc.</p>
        </div>
        <div class="boisson">
            <h4>Cocktails :</h4>

            <li>Cléopatra => fraise,pomme, vanille.</li>
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