<?php
	session_start();
	if(isset($_POST['deconnexion'])){
		session_destroy();
		header('Location: index.php');
	}	
	
	if(isset($_POST['submit'])){
		if(isset($_POST['pseudo']) && isset($_POST['mdp'])){

			$pseudo = strtolower(trim($_POST['pseudo']));
			$mdp = $_POST['mdp'];
			
			if(file_exists('.\\utilisateurs\\'.$pseudo.'.inc.php')){
				include('.\\utilisateurs\\'.$pseudo.'.inc.php');
				
				if(strcmp ($uti['mdp'], sha1($mdp)) === 0){
					$_SESSION['uti'] = $pseudo;
				}
			}
		}
	}
?>
<!-- Barre de connexion-->
<div class ="row">
	<div class='col-md-4 text-center'>
		<h1>Cocktailotron</h1>
	</div>
	<?php
		if(!isset($_SESSION['uti'])){
			echo"
	<div class ='col-md-8'>
		<div class='row float-right'>
			<div class='col'>
				<form class='form-inline' action='#' method='post'>
					<input name='pseudo' type='pseudo' class='form-control' placeholder='Pseudo'>
					<input name='mdp' type='password' class='form-control' placeholder='Password'>
					<button name='submit' type='submit' class='btn btn-default'>Connexion</button>
				</form>	
				<a href='index.php?page=inscription'>Pas encore inscrit ?</a>
			</div>
		</div>
	</div>";
		}
		else{
			echo"
	<div class ='col-md-8'>
		<div class ='row float-right'>
			<div class='col'>
				<form class='form-inline' action='#' method='post'>
					<label for='deconnexion' class='col col-form-label'>Connecté en tant que : ".$_SESSION['uti']."</label>
					<button name='deconnexion' type='submit' class='btn btn-default'>Deconnexion</button>
				</form>
			</div>
		</div>
	</div>";
		}
	?>
</div>
