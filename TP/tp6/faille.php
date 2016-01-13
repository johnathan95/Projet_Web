<html>
	<head>
	</head>
	<body>
		<?php
			if(isset($_GET['mdp']) && isset($_GET['login'])){
				$mdp = trim($_GET['mdp']);
				$login = trim($_GET['login']);
				strip_tags($mdp);
				echo "<h1>Bonjour ";
				echo htmlentities($login);
				echo "</h1>";
			}
			
		?>
	</body>
</html>