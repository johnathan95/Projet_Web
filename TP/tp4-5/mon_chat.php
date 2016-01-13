<?xml version="1.0" encoding="iso-8859-1"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
   <head>
      <link rel="stylesheet" href="../css/style.css" type="text/css"/>
	  <!--
      <link rel="stylesheet" media="screen and (max-width: 900px)"
         href="../css/smallscreen.css" type="text/css" />
      -->
	  <title>Page de toto</title>
   </head>
   <body>
	<?php
		$maintenant = time();
		echo date("j/m/y, h:i:s", $maintenant);
	?>
      <div class="bloc_page">
         <div class="menu">
            <ul>
               <li><a href="index.php">Accueil</a></li>
               <li><a href="cv.php">CV</a></li>
               <li><a href="contact.php">Contact</a></li>
            </ul>
         </div>
         <div class="banniere">
            <img src="../image/logo.jpg" alt="logo" />
         </div>
         <div class="section">
            <div class="article">
               <h1>Contact</h1>
            </div>
			
            <form method = "post" action="ajoute_message.php">
				<label class = "form" for="pseudo">Pseudo: 
				<input type="text" name="pseudo"/></br>
				</label>
				<textarea class= "form area" name="msg"></textarea >
				<button class="form" type="submit">Envoyer</button>
			</form>
			
			
		</div>
      </div>
      </div>
      <div class= "valid_icon">
         <p>
            <a href="https://webdev.iut-orsay.fr/w3c-validator/check?uri=referer"
               onclick="this.href=this.href.replace(/referer$/,encodeURIComponent(document.URL))"><img
               src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" /></a>
         </p>
         <p>
            <a href="http://jigsaw.w3.org/css-validator/check/referer">
            <img style="border:0;width:88px;height:31px"
               src="http://jigsaw.w3.org/css-validator/images/vcss"
               alt="CSS Valide !" />
            </a>
         </p>
         <p>
            <a href="http://jigsaw.w3.org/css-validator/check/referer">
            <img style="border:0;width:88px;height:31px"
               src="http://jigsaw.w3.org/css-validator/images/vcss-blue"
               alt="CSS Valide !" />
            </a>
         </p>
      </div>
   </body>
</html>