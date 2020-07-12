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
        <h1>Bar à Chicha</h1>
        <p>Le Temple du Pharaon à Brest</p>
    </div>
    <br>

    <div class="container">

        <div class="slide">
            <img class="active" src="../../public/images/page 3 bar a chicha/chicha_or.png">
            <img src="../../public/images/page 3 bar a chicha/tube_rose.png">
            <img src="../../public/images/page 3 bar a chicha/cheminée.png">
            <img src="../../public/images/page 3 bar a chicha/chicha_charbon.png">
            <img src="../../public/images/page 3 bar a chicha/chicha_gold.png">
            <img src="../../public/images/page 3 bar a chicha/chichas.png">
        </div>

        <div class="cont-btn">
            <div class="btn-nav left">←</div>
            <div class="btn-nav right">→</div>
        </div>

    </div>

    <div>
        <h3>Salon de narguilé à Brest</h3>

        <p>Le Temple Du Pharaon, à Brest, est un lieu incontournable pour les adeptes de chicha (aussi appelé narguilé),
            dont l’usage est très répandu en Moyen-Orient. Nous vous proposons un très vaste choix de parfums et
            utilisons du charbon naturel. C’est dans une ambiance typiquement égyptienne que Mamdouh vous reçoit seul ou
            en groupe. L’aménagement du salon vous permet de vous installer autour d’une chicha ou/et d’une boisson. Sur
            notre carte, vous pouvez aussi trouver des pâtisseries orientales et mezzés.</p>

        <p>Vous pouvez acheter votre chicha et tous ses accessoires dans notre boutique. Mamdouh, se fera un plaisir de
            vous conseiller selon vos goûts.</p>
    </div>

    <div>
        <h3>Quelques parfums de chicha</h3>

        <p>Pour les parfums de vos chichas, nous nous fournissons auprès des marques ADALYA et AL-FAKHER, toutes deux
            reconnues dans le milieu. Nos parfums changent régulièrement et nous proposons aussi des saveurs sans tabac.
            Voici quelques exemples de goûts :</p>

        <li>Love 66 "Adalya"</li>
        <li>Double pomme</li>
        <li>Menthe</li>
        <li>Raisin</li>
        <li>Myrtille</li>
        <li>Coca redbull</li>
        <li>Fraise ...</li>
        <li>Selon arrivage</li>

    </div>
    <footer>
        <?php include("../include/footer.php"); ?>
    </footer>
</body>

</html>