<?php

	$verifEmail=true;
	$verifMdp=true;
	$verifPseudo=true;

	if(isset($_POST['submit']))
	{
		//vérif email
		if(!isset($_POST['email'])){
			$verifEmail="Veuillez renseigner le champ";
		}
		else{
			$email = trim($_POST['email']);
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$verifEmail="Veuillez renseigner une adresse mail valide";
			}
		}
		
		//vérif mdp
		if(!isset($_POST['mdp'])){
			$verifMdp="Veuillez renseigner le champ";
		}
		else{
			$mdp = $_POST['mdp'];
			if(strlen($mdp) < 8){
				$verifMdp = "Le mot de passe doit faire au moins 8 caractères";
			}
		}
		
		//vérif pseudo
		if(!isset($_POST['pseudo'])){
			$verifPseudo="Veuillez renseigner le champ";
		}
		else{
			$pseudo = strtolower(trim($_POST['pseudo']));
			if(strlen($pseudo) < 6){
				$verifPseudo = "Le pseudo doit comporter au moins 6 caractères";
			}
			
			if(strlen($pseudo) > 15){
				$verifPseudo = "Le pseudo doit comporter au plus 15 caractères";
			}
			
			if(!ctype_alnum($pseudo)){
				$verifPseudo = "Le pseudo ne doit comporter que des lettres et chiffres";
			}
			
			if(file_exists('utilisateurs\\'.$pseudo.'.inc.php')){
				$verifPseudo = "Le pseudo est déjà pris";
			}
		}
		
		//si les tests sont bons
		if($verifEmail===true && $verifMdp===true && $verifPseudo===true){
			//on créer un ficher utilisateur
			$uti = array(
			"email" => $email, 
			"mdp"=> sha1($mdp), 
			"pseudo" => $pseudo		
			);
			
			$fichier = fopen('utilisateurs\\'.$pseudo.'.inc.php', 'w+');
			fputs($fichier, '
<?php
$uti = '.var_export($uti, true).';
?>'
		);
			fclose($fichier);
			//on redirige
			header('Location: index.php?page=succes');
			echo"BONJOUR";
		}
	}
?>

<div class="container">
	<h1>Inscription</h1>
	<form method="post" action="#" novalidate>
		<div class="form-group row">
			<label for="mail" class="col-sm-2 col-form-label">Adresse e-mail</label>
			<input 
				name="email"
				type="email" 
				class="col-sm-10 form-control" 
				id="mail" 
				placeholder="adresse.mail@ex.com"
				<?php
					if(isset($_POST['email'])){
						echo "value='".$_POST['email']."'";
					}
				?>
			>
			<?php
				if($verifEmail !== true){
					echo "
			<div class='col-sm-12 form-control alert-danger'>".$verifEmail."</div>
					";
			}
			?>
		</div>
		<div class="form-group row">
			<label for="mdp" class="col-sm-2">Mot de passe</label>
			<input 
				name="mdp" 
				type="password" 
				class="col-sm-10 form-control" 
				id="mdp"
			>
			<?php
				if($verifMdp !== true){
					echo "
			<div class='col-sm-12 form-control alert-danger'>".$verifMdp."</div>
					";
			}
			?>
		</div>
		<div class="form-group row">
			<label for="pseudo" class="col-sm-2">Pseudonyme</label>
			<input 
				name="pseudo" 
				type="text" 
				class="col-sm-10 form-control" 
				id="pseudo"
				<?php
					if(isset($_POST['pseudo'])){
						echo "value='".$_POST['pseudo']."'";
					}
				?>
			>
			<?php
			if($verifPseudo !== true){
					echo "
			<div class='col-sm-12 form-control alert-danger'>".$verifPseudo."</div>
					";
				}
			?>
			</div>
		<button type="submit" name="submit" value="sent" class="btn"> Valider </button>
	</form>
</div>