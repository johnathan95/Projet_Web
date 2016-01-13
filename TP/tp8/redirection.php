<?php
if(isset($_POST['nom']) && isset($_POST['prenom'])){
  $nom = trim($_POST['nom']);
  $prenom = trim($_POST['prenom']);
  if(isset($_COOKIE['nbvisite']) 
    && $nom ==$_COOKIE['nom'] 
    && $prenom == $_COOKIE['prenom']){		
    $nbvisite ++;
}else{
 $nbvisite = 1;
 setcookie('nom',$nom,time()+600);
 setcookie('prenom',$prenom,time()+600);
 setcookie('nbvisite',$nbvisite,time()+600);
}
?>