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