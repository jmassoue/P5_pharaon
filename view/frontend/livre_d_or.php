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
            <div class="row">
                <nav class="col navbar navbar-expand-lg navbar-dark">
                    <img class="navbar-brand" src="../../public/images/logo_blanc.png" alt="logo" />
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">>
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div id="navbarContent" class="collapse navbar-collapse">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a href="home.php" class="nav-link">Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a href="salon_de_thé.php" class="nav-link">Salon de Thé</a>
                            </li>
                            <li class="nav-item">
                                <a href="bar_a_chicha.php" class="nav-link">Bar à Chicha</a>
                            </li>
                            <li class="nav-item">
                                <a href="restauration.php" class="nav-link">Restauration</a>
                            </li>
                            <li class="nav-item">
                                <a href="boutique.php" class="nav-link">Boutique</a>
                            </li>
                            <li class="nav-item">
                                <a href="livre_d_or.php" class="nav-link">Livre d'or</a>
                            </li>
                            <li class="nav-item">
                                <a href="log.php" class="nav-link">Connexion</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <div _ngcontent-naw-c35 id="goldenPage" class="containerContact" style="opacity: 1;">
            <div _ngcontent-naw-c35 class="allBloc">
                <p _ngcontent-naw-c35>
                    "Livre d'Or - Laissez un avis sur le Temple du Pharaon"
                </p>
                <form _ngcontent-naw-c35 novalidate class="ng-pristine ng-invalid ng-touched">
                    <div _ngcontent-naw-c35 class="spaceBetween">
                        <input _ngcontent-naw-c35 type="text" name="nom" placeholder="*Nom" formcontrolname="name" required class="ng-untouched ng-pristine ng-invalid">
                        <input _ngcontent-naw-c35 type="email" name="email" placeholder="Email" formcontrolname="email" class="ng-untouched ng-pristine ng-invalid">
                    </div>
                    <textarea _ngcontent-naw-c35 name="message" id_cols="30" rows="10" placeholder="*Message" formcontrolname="message" required class="ng-untouched ng-pristine ng-invalid">
                    <div _ngcontent-naw-c35 class="spaceBetween">
                        <input _ngcontent-naw-c35 type="text" formcontrolname="antispam" placeholder="*1 + 1 = " required class="antispam ng-untouched ng-pristine ng-invalid">
                        <input _ngcontent-naw-c35 type="submit" name="envoyer" value="Envoyer" class="send">
                    </div>
                </form>
            </div>
        </div>

        <!--      
        <h1><?= htmlspecialchars($postViewId['title']) ?></h1>
        <div class="containerNew">
            <h3>
                <em>le <?= $postViewId['date_creation'] ?></em>
            </h3>
            <div class="contentNew offset-lg-1 col-lg-10">
                <p>
                    <?= nl2br(html_entity_decode($postViewId['content'])) ?>
                </p>
                <?php if($_SESSION['role_id'] === '1') { ?>
                <a href="index.php?action=update&amp;id_post=<?= $postViewId['id_post']?>"> Modifier</a> | <a
                    href="index.php?action=delete&amp;id_post=<?= $postViewId['id_post']?>"> Supprimer</a>
                <?php } ?>
            </div>
        </div>
        <div class="row justify-content-center containerComment">
            <div class="col-lg-3 addComment">
                <h2>Ajouter un commentaire</h2>

                <form action="index.php?action=addComment&amp;id_post=<?= $postViewId['id_post'] ?>" method="post">
                    <div>
                        <label for="user_id">Auteur</label>
                        <br />
                        <input type="text" id="author" name="author" />
                    </div>
                    <div>
                        <label for="content">Commentaire</label>
                        <br />
                        <textarea id="content" name="content" placeholder="J'adore ce chapitre..."></textarea>
                    </div>
                    <div>
                        <input type="submit" />
                    </div>
                </form>
            </div>
            <div class="offset-lg-2 comment">
                */<?php while($comment = $commentsId->fetch()):?>

                <h2>Commentaires</h2>
                <p><strong><?= htmlspecialchars($comment['author']) ?></strong></p>
                <p class="dateComment">le <?=$comment['date_creation'] ?></p>
                <p> <?= nl2br(htmlspecialchars($comment['content'])) ?></p>
                <a href="index.php?action=reported&amp;id_comment=<?= $comment['id_comment']?>"> Signaler</a>

                <?php endwhile; ?>
            </div>
        </div>-->
        <footer>
            <?php include("../include/footer.php"); ?>
        </footer>
    </div>
</body>

</html>