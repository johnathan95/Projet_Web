<?php
	class Membre{
		private $bd;
		private $id;
		private $pseudo;
		private $mdp;
		private $email;
		
		function __construct(){
			$this->bd = func_get_arg(0);
			$this->pseudo = func_get_arg(1);
			$this->mdp = func_get_arg(2);
		}
		
		function connexion(){
			session_start();
			$_SESSION['membre'] = $this;
		}
		
		function modif_mdepasse($mdp){
			$this->mdp = $mdp;
			mysqli_query($bd->getco(),"update utilisateur set mdpUtilisateur=$mdp where pseudo = $pseudo and mpasse= $mdp;")
				or die("error: SignIn");
		}
		
		function deconnexion(){
			session_destroy();
			$bd->disconnect();			
		}	
	}
?>