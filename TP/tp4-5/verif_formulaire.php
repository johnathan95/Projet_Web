<p>
	<?php
		include("connect.php");
		
		if (isset($_POST['nom']) && isset($_POST['mail']) && isset($_POST['mdp']) && 
			isset($_POST['prenom']) && isset($_POST['dpt']) && isset($_POST['sexe'])){
				
			$nom =trim($_POST['nom']);
			$prenom = trim($_POST['prenom']);
			$mdp = $_POST(['mdp']);
			$mail = trim($_POST['mail']);
			$dpt = trim($_POST['dpt']);
			$sexe = trim($_POST['sexe']);
			
			if(!empty($nom) && !empty($prenom) && !empty($mdp) && !empty($mail) && 
			!empty($dpt) && !empty($sexe)){
					if(preg_match("#^\d{2}[a-zA-Z]{6}#","'$mdp'")){
						echo "ok";
					}
					else echo "pas ok";
			}
			else echo "ERROR:EMPTY";
		}
		else echo "ERROR:ISSET";
		
		include("disconnect.php");
		// header('Location: formulaire.php');
	?>
</p>