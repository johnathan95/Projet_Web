<html>
	<head>
		<style>
			
			.form{display:block;}
			.buttom{margin-top:10px;}
			input{box-sizing:border-box;}
		</style>
	</head>
	<body>
		<form method = "POST" action="injection.php">
			<div class="input">
			   <label class = "form" for="login">login:</label> 
			   <input type="text" name="login"/>

			   <label class = "form" for="mdp">Mot de passe:</label>
			   <input type="password" name="mdp"/>
			</div>
		   <input class="buttom"type="submit" value="Se connecter"/>
		</form>
	</body>
</html>