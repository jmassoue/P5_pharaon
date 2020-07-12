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
        <h1>Restauration - Mezzes</h1>
        <p>Le Temple du Pharaon à Brest</p>
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

        <p>Mamdouh, vous propose des mezzés pour vous restaurer le soir. Ses plats sont 100% faits maison et concoctés à
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