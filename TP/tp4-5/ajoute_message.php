
<?php
	include("connect.php");
		$pseudo = trim($_POST['pseudo']);
		$message = trim($_POST['msg']);
	if($pseudo != null && $message != null){
		
		$sql_pseudo_exist ="select pseudo from pseudos where pseudo = '$pseudo'";
		$result = mysqli_query($co,$sql_pseudo_exist) or die("sql_pseudo_exist: error");
		
		if(mysqli_num_rows($result) !=0){
			echo "pseudo existe";
			$sql_recup_id_pseudo = "select id_pseudo from pseudos where '$pseudo' = pseudo";
			
			$query_id=mysqli_query($co,$sql_recup_id_pseudo)or die("sql_recup_id_pseudo: error");
			$id_pseudo = mysqli_fetch_row($query_id)[0];
		}else{
			echo "ajout du pseudo";
			
			$sql_ajout_pseudo = "insert into pseudos values (NULL,'$pseudo')";
			mysqli_query($co,$sql_ajout_pseudo)or die("sql_ajout_pseudo: error");
			
			$query_id=mysqli_insert_id($co)or die("mysqli_insert_id: error");
			$id_pseudo = $query_id;
		}
		$sql_ajout_message= "insert into messages values (NULL,'$id_pseudo','$message')";
		mysqli_query($co,$sql_ajout_message)or die("sql_ajout_message: error");
	}
	else 
		echo "no post";
	include("disconnect.php");
	header('Location: mon_chat.php');
?>