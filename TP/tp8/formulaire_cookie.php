<?php
if (isset($_COOKIE['nbvisite'])){
	$nom=$_COOKIE['nom'];
	$prenom=$_COOKIE['prenom'];
}
?>
<form method="post" action="redirection.php">
	<p>
		<label for="nom">Nom : </label>
		<input type="text" name="nom" value="<?php if (isset($nom)) echo $nom ?>"/>
	</p>
	<p>
		<label for="nom">Prénom : </label>
		<input type="text" name="prenom" value="<?php if (isset($prenom)) echo $prenom ?>"/>
	</p>
	<p>
		<input type="submit" name="connection" value="connection" />
	</p>
</form>
