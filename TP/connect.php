<?php
	$host = "localhost";
	$user = "root";
	$bdd = "bd_chat"; // le nom de votre base de donn�es
	$passwd = "";
	//verification connection 
	$co = mysqli_connect($host , $user , $passwd, $bdd) or die("erreur de connexion");
?>
