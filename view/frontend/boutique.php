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
		<h1>Boutique Egyptienne</h1>
		<p>Le Temple du Pharaon à Brest</p>
	</div>
	<br>

	<div>
		<h3>Boutique artisanale égyptienne à Brest</h3>

		<p>Notre boutique artisanale égyptienne vous propose de nombreux produits importés directement d’Egypte. Nous
			vendons des décorations, des produits de beauté, de la vaisselle, des vêtements ect.</p>

		<p>Un grand choix de narguilé est disponible. Mamdouh vous donne des conseils d’utilisation, des astuces et vous
			oriente vers le produit adapté à vos besoins.</br>
			Vous trouverez également de nombreux articles pour la danse orientale.</p>

		<p>Si vous recherchez un produit spécifique que nous n’avons pas en magasin, nous pouvons effectuer une
			commande.</p>
	</div>

	<div class="container">

		<div class="slide">
			<img class="active" src="../../public/images/page 5 boutique/tenues.png">
			<img src="../../public/images/page 5 boutique/assiette.png">
			<img src="../../public/images/page 5 boutique/bijoux.png">
			<img src="../../public/images/page 5 boutique/tasse.png">
		</div>

		<div class="cont-btn">
			<div class="btn-nav left">←</div>
			<div class="btn-nav right">→</div>
		</div>

	</div>


	</div>
	<footer>
		<?php include("../include/footer.php"); ?>
	</footer>
</body>

</html>