<?php include"base.php" ?>
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
			<div id="c2">
			<?php

				$reponse = $bdd->query('SELECT DISTINCT Team FROM joueurs');

				while ($donnees = $reponse->fetch())
				{

					 echo $donnees['Team'] . '<br />';
				    


				}

				

			?>
			</div>
		</section>

		<footer>

		</footer>
	</body>

</html>