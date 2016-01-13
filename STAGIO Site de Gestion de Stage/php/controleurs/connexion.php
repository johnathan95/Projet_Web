<?php
	include ("../modeles/membre.php");
	include ("../modeles/bd.php");
	
	if(isset($_POST['pseudo']) && isset($_POST['mdp']))
	{
		$pseudo = $_POST['pseudo'];
  		$mdp = $_POST['mdp'];
		
  		$bd = new bd();
		$requete_co = mysqli_query($bd->getco(),"select * from membre where loginUtilisateur = '$pseudo' and mdpUtilisateur = '$mdp';");
		
		if(mysqli_num_rows($requete_co)==1){
			$membre = new Membre($bd,$pseudo,$mdp);
			$membre->connexion();
			
			switch(mysql_fetch_assoc($requete_co)['typeUtilisateur']){
				//Si l'utilisateur est un etudiant
				case 1:	header("location: ../html/etudiant.html");
				break;
				//Si l'utilisateur est un enseignant
				case 2: header("location: ../html/enseignant.html");
				break;
				//Si l'utilisateur est un tuteur d'un etudiant en entreprise
				case 3: header("location: ../html/entreprise.html");
				break;
				//Si l'utilisateur est le responsable d'annee ou l'adminisateur
				case 4: header("location: ../html/adim.html");
				break;
				//Si l'utilisateur est la secretaire
				case 5: header("location: ../html/enseignant.html");
				break;
			}
		
		}	
		$bd->disconnect();
	}
	
	header("location: ../html/index.html");
?>