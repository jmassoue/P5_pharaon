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
		<div class="big_titre">
			<h1>Boutique Egyptienne</h1>
			<p>Le Temple du Pharaon à Brest</p>
		</div>
		<br>

		<div>
			<h3>Boutique artisanale égyptienne à Brest</h3>

			<p>Notre boutique artisanale égyptienne vous propose de nombreux produits importés directement d’Egypte.
				Nous
				vendons des décorations, des produits de beauté, de la vaisselle, des vêtements ect.</p>

			<p>Un grand choix de narguilé est disponible. Mamdouh vous donne des conseils d’utilisation, des astuces et
				vous
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