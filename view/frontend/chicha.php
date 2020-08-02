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

            <p>Le Temple Du Pharaon, à Brest, est un lieu incontournable pour les adeptes de chicha (aussi appelé
                narguilé),
                dont l’usage est très répandu en Moyen-Orient. Nous vous proposons un très vaste choix de parfums et
                utilisons du charbon naturel. C’est dans une ambiance typiquement égyptienne que Mamdouh vous reçoit
                seul ou
                en groupe. L’aménagement du salon vous permet de vous installer autour d’une chicha ou/et d’une boisson.
                Sur
                notre carte, vous pouvez aussi trouver des pâtisseries orientales et mezzés.</p>

            <p>Vous pouvez acheter votre chicha et tous ses accessoires dans notre boutique. Mamdouh, se fera un plaisir
                de
                vous conseiller selon vos goûts.</p>
        </div>

        <div>
            <h3>Quelques parfums de chicha</h3>

            <p>Pour les parfums de vos chichas, nous nous fournissons auprès des marques ADALYA et AL-FAKHER, toutes
                deux
                reconnues dans le milieu. Nos parfums changent régulièrement et nous proposons aussi des saveurs sans
                tabac.
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