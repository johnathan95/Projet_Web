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
            <form method = "post" action="#result">
			
               <label class = "form" for="nom">Nom: </label> <input type="text" name="nom"/></br>
		
               <label class = "form" for="prenom">Prenom: <input type="text" name="prenom"/></br></label>
			   
               <label class = "form" for="mail">Adresse mail:<input type="text" name="mail"/></br></label>
			   
               <label class = "form" for="dept">
                  Dans quel département habitez-vous?: 
                  <select name="dept">
                     <option value="essone">Essone</option>
                     <option value="paris">Paris</option>
                     <option value="yveline">Yveline</option>
                     <option value="idf">Ile-de-France</option>
                  </select >
                  </br>
               </label>
			   
               <label class = "form" for="age">
                  Indiquez votre tranche d'âge: 
                  <div class = "selected">
				<input type="radio" name="age" value="inf15"/><label for="inf15"> Moins de 15ans </br></label></input>
				<input type="radio" name="age" value="15-25"/><label for="15-25">15-25 ans </br></label></input>
				<input type="radio" name="age" value="25-40"/><label for="25-40">25-40 ans </br></label></input>
				<input type="radio" name="age" value="sup40"/><label for="sup40">Plus de 40 ans </br></label></input>
				</div></label>
			   
               <label class = "form" for="dmd">
                  Quel est l'objet de votre demande? 
                  <div class = "selected">
                     <input type="checkbox" name="dmd" value="doc"/>
               <label for="doc">Demande de documents </br></label></input>
               <input type="checkbox" name="dmd" value="rdv"/><label for="rdv">Demande de rendez-vous </br></label></input>
               <input type="checkbox" name="dmd" value="etc"/><label for="etc">Autre </br></label></input>
               </div></label>
         </div>
         <label class = "form" for="dmdtext">Votre demande : </br></label>
         <textarea class= "form area" name="dmdtext"></textarea >
		<button class="form" type="submit">Valider</button>
	  <div class ="form result "id="result" >
		  <p>
			<?php
				$tab = array(0=> 'nom','prenom','mail','dept','age','dmd','dmdtext');
				echo "<table class='form'>";
				foreach($tab as $key => $name){
					if(isset($_POST[$name])){
						echo "<tr><td>";
						echo $name;
						echo "</td><td>";
						echo $_POST[$name];
						echo "</td></tr>";
					}
				}
				echo "</table>";
			?>
		</p>
	  </div>
      </div>
      </form>
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