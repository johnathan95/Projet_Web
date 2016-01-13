<?php
	include ("../modeles/membre.php");
	include ("../modeles/bd.php");
	
	if(isset($_POST['pseudo']) && isset($_POST['mdp']))
	{
		$pseudo = $_POST['pseudo'];
  		$mdp = $_POST['mdp'];
		
  		$bd = new bd();
		$requete_co = mysqli_query($bd->getco(),"select * from membre where pseudo = '$pseudo' and mdpasse = '$mdp';");
		
		if(mysqli_num_rows($requete_co)==1){
			$membre = new Membre($bd,$pseudo,$mdp);
			$membre->connexion();
			header("location: ../vue/espace_membre.php");
		}
		$bd->disconnect();
	}
	header("location: ../vue/formulaire_inscription.php");
?>