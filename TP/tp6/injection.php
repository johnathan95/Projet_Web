<html>
	<head>
	</head>
	<body>
		<?php
			if(isset($_POST['mdp']) && isset($_POST['login'])){
				
				$co = mysqli_connect("localhost" , "root" , "", "tp6") 
					or die("erreur de connexion");
					
				$login = trim($_POST['login']);
				$mdp = mysqli_real_escape_string($co,$_POST['mdp']);
				
				$exist = mysqli_query($co,"
					select *
					from utilisateurs
					where mdepasse = '$mdp'
					and login = '$login'
				")or die("sql_login_mdp_exist: error");
			if(mysqli_num_rows($exist)!=0)
			{
				echo "<h1>Bonjour ";
				echo htmlentities($login);
				echo "</h1>";
			}
			else		// "' OR 1=1#" permet mot de passe partout
				echo"<h2>vous n'etes pas inscrit</h2>";
			}
		?>
	</body>
</html>