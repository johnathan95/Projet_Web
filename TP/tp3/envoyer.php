<p>
	<?php
		$tab = array(0=> 'nom','prenom','mail','dept','age','dmd','dmdtext');
		foreach($tab as $key => $name){
			echo "$name : $_POST[$name] <br/> ";
		}
	?>
</p>