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

        <div>
            <h1 class="text-center text-sm-center"> Le Temple du Pharaon</h1>
            <p class="h2 text-center text-sm-center">Salon de thé, chicha & plats à Brest</p>
        </div>

        <div class="container">

            <div class="slide">
                <img class="active" src="../../public/images/accueil/salon_the.png">
                <img src="../../public/images/accueil/vue_salon.png">
                <img src="../../public/images/accueil/salon.png">
                <img src="../../public/images/accueil/narguilés.png">
                <img src="../../public/images/accueil/mezzes.png">

            </div>

            <div class="cont-btn">
                <div class="btn-nav left">←</div>
                <div class="btn-nav right">→</div>
            </div>

        </div>

        <div class='présentation'>
            <h2 class=" text-center text-sm-center">Le Temple Du Pharaon</h2>
            <h3 class="text-center text-sm-center">Un lieu atypik à Brest</h3>

            <p>Situé depuis 15 ans au plein cœur du centre ville de Brest, Le Temple Du Pharaon est un lieu unique sur
                le
                Nord Finistère. Son propriétaire, Mamdouh, vous reçoit dans une ambiance familiale et décontractée
                inspirée
                de son pays d’origine. La décoration traditionnelle et l’aménagement intérieur vous transporte
                instantanément en Egypte.</p>

            <p>Un grand choix de narguilés, une carte de thés aux saveurs d’Orient, des mezzés … L’ensemble de la carte
                est
                concoctée par Mamdouh à partir de produits bios soigneusement sélectionnés par ses soins.</p>

            <p>Le Temple du Pharaon organise régulièrement des soirées de danses orientales, musiques ainsi que
                récitation
                de contes. Il est aussi possible d’y organiser des soirées privées pour vos anniversaires, EVJF/EVG …
            </p>
        </div>

        <div class="la_carte">

            <h3 class="text-center text-sm-center">Notre carte</h3>
            <h4 class="text-center text-sm-center">aux saveurs orientales</h4>
            <p>En cette période de déconfinement, Le Temple Du Pharaon situé à Brest se ré-invente. Vous pouvez à
                présent
                commander à emporter l’ensemble de notre carte : cocktails, thés, boissons chaudes, pâtisseries,
                narguilés …
            </p>

            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="card">
                        <img class="card-img-top" src="../../public/images/accueil/salon_the_300.png">
                        <div class="card-body">
                            <h3 class="card-title">Le salon de thé</h3>
                            <p class="card-text">Boissons chaudes ou froides à base de produit frais et bios, cocktails
                                de fruits,milkshakes…
                                Laissez-vous emporter par des saveurs orientales telles qu’un smoothie à la mangue ou un
                                thé à la crème de rose.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card">
                        <img class="card-img-top" src="../../public/images/accueil/mezzes_300.png">
                        <div class="card-body">
                            <h3 class="card-title">Les mezzés</h3>
                            <p class="card-text">Le Temple du Pharaon vous propose de vous restaurer le soir. Nous vous
                                proposons chaque jours des
                                mezzés 100% fait maison et composés de produits frais. Chacun de nos plats est agrémenté
                                de
                                saveurs
                                orientales.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card">
                        <img class="card-img-top" src="../../public/images/accueil/narguilés_300.png">
                        <div class="card-body">
                            <h3 class="card-title">Les narguilés</h3>
                            <p class="card-text">Nous vous proposons un large choix de saveurs de narguilé, nous
                                utilisons du charbon naturel pour nos chichas.
                                Vous pouvez aussi acheter votre chicha dans notre boutique.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="text-center text-sm-center">Découvrez nos soirées</h2>
        <h3 class="text-center text-sm-center">danses, musiques et contes</h3>

        <div class="container_video">
            <div class="embed-responsive-16by9 slide_video">
                <video class="embed-responsive-item"
                    src="https://www.letemple-dupharaon.fr/wp-content/uploads/2020/06/soiree-danse-oriental-le-temple-du-pharaon-Brest.mp4"
                    controls controlslist="nodownload"></video>
            </div>
            <div class="embed-responsive-16by9 slide_video">
                <video class="embed-responsive-item"
                    src="https://www.letemple-dupharaon.fr/wp-content/uploads/2020/06/soiree-musique-le-temple-du-pharaon-brest.mp4"
                    controls controlslist="nodownload"></video>
            </div>
            <div class="embed-responsive-16by9 slide_video">
                <video class="embed-responsive-item"
                    src="https://www.letemple-dupharaon.fr/wp-content/uploads/2020/06/soiree-contes-le-temple-du-pharaon-brest.mp4#t=,30"
                    controls controlslist="nodownload"></video>
            </div>
        </div>
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1324.811081637734!2d-4.4888140000000005!3d48.386994!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4816b959ee18dee3%3A0x4eac4b1af016f1aa!2s36%20Rue%20Jean%20Mac%C3%A9%2C%2029200%20Brest%2C%20France!5e0!3m2!1sfr!2sus!4v1593599346588!5m2!1sfr!2sus"
                width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>
        </div>

        <footer>
            <?php include("../include/footer.php"); ?>
        </footer>
    </div>
</body>

</html>