<?php
	include ("../modeles/membre.php")
	include ("../modeles/bd.php")
	if(isset($_POST['pseudo']) && isset($_POST['mdp']) && isset($_POST['email']))
	{
		$pseudo = trim($_POST['pseudo']);
  		$mdp = $_POST['mdp'];
  		$email = trim($_POST['email']);
  		$bd = new bd();
  		$requete = "SELECT pseudo,email 
  					FROM espace_membres 
  					WHERE pseudo = '$pseudo' 
  					AND email = 'email'";
  		$resultat = mysqli_query($bd->getco(),$requete) or die ("Requete invalide");
  		if (mysqli_num_rows($resultat) == 1)
  		{
  			echo "Vous êtes déja inscrit"
  		}
  		else{
  		  		$membre=new Membre($co,$pseudo,$mdp,$email);

  		header("Location:../vue/formulaire_connexion.php");
  	}
	}

?>