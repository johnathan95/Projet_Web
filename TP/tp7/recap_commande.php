<?php
	include('commande.php');
	if(isset($_GET['nombre']) && isset($_GET['nom'])){
		$nom = trim($_GET['nom']);
		$nombre = $_GET['nombre'];
		$commande = new Commande($nom, $nombre);
		echo $commande.affiche();
	}
?>