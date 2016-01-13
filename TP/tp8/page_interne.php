<?php
	session_start();
	if(isset($_SESSION['prenom'])){
		$prenom = $_SESSION['prenom'] ;
		echo "Bienvenue $prenom";
	}
	else {
		header('Location: formulaire_session.php');
		exit;
	}
?>