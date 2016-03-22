

<!DOCTYPE html>
<html>
	<head>
		<title>Site</title>
		<meta charset="utf-8" />
		 <link rel="stylesheet" href="style.css" />

	</head>

	<body>
		<header>
		
		</header>

		<?php include"menu.php" ?>

		<section>
			<div id="recherche">
			<h2>Tapez le nom et/ou le prénom du joueur:</h2>
			<form method="post" action="recherchejoueur.php">
					<input type="text" name="nom" placeholder="Rechercher">
					<input type="submit" value="Rechercher"/>
				</form>
			</div>
			
			
		</section>

		<footer>

		</footer>
	</body>

</html>