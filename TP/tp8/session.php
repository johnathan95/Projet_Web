
<?php 

	$co = mysqli_connect("localhost" , "root" , "", "exosession") 
		or die("erreur de connexion");

	if(isset($_POST['nom'])&&isset($_POST['prenom'])){

		if(!empty($_POST['nom'])&&!empty($_POST['prenom'])){
			$nom = trim($_POST['nom']);
			$prenom = trim($_POST['prenom']);
			$req=mysqli_query($co,"SELECT nom,prenom FROM utilisateur WHERE nom='$nom' AND prenom='$prenom'")or die("erreur de requete");
			
			if (mysqli_num_rows($req)!=0){
				echo "<h2>Bienvenue <strong>$prenom</strong></h2><a href='page_interne.php'>Cliquez ici</a>";
				session_start();
				$_SESSION['prenom'] = $prenom;
			}else {
				header('Location: formulaire_session.php');
				exit;
			}
		}else {
			header('Location: formulaire_session.php');
			exit;
		}
	}
?>