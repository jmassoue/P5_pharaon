<?php 
 session_start();
 ?>
<!DOCTYPE html> <!-- view -->
<html lang="fr">

	<head>
		<?php include("../include/head.php"); ?>
	</head>

	<body>
		<!--<img src="public/images/" alt="sucredansduthé" class="sugar_tea" col-lg-12"> -->
        <h1> Le Temple du Pharaon</h1>
            <p>Un lieu atypik à Brest</p>
		<br>

		<div class="container">

			<div class="slider">
				<img class="active" src="https://images.unsplash.com/photo-1559467713-f830ec30e3e4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80">
				<img src="https://images.unsplash.com/photo-1590634875887-a6a516622e2a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1352&q=80">
				<img src="https://images.unsplash.com/photo-1590664216212-62e763768cae?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80">
			</div>

		<div class="cont-btn">
			<div class="btn-nav left">←</div>
			<div class="btn-nav right">→</div>
		</div>

		</div>
        <footer>
			<?php include("../include/footer.php"); ?>
		</footer>
	</body>
</html>