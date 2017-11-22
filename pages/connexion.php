<?php
	if(isset($_POST['submit'])){
		$ok = true;
		
		if(isset($_POST['pseudo']) && isset($_POST['mdp'])){
			$pseudo = $_POST['pseudo'];
			$mdp = $_POST['mdp'];
			if(file_exists($pseudo.'.inc.php')){
				include($pseudo.'.inc.php');
				
				if(!strcmp ($uti['mdp'], sha1($mdp)) ===0){
					$ok = false;
				}
			}
		}
		else{
			$ok = false;
		}
		
		if($ok){
			header("index.php?page=succesConnexion");
		}
		else{
			header("index.php?page=echecConnexion");
		}
	}
	else{
		header("index.php?page=acceuil");
	}
?>
