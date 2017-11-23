<?php

	include("Donnees.inc.php");
	include("Association.inc.php");

	$ingredients = array();

	function getIngredients($categ){
		global $Hierarchie;
		global $ingredients;

		if(!array_key_exists('sous-categorie', $Hierarchie[$categ])){
			//si notre ingrédient n'a pas de ss-categorie
			$ingredients[$categ] = $categ;
		}
		else{
			//sinon on regarde ses sous categorie
			foreach($Hierarchie[$categ]['sous-categorie'] as $ssCateg){
				getIngredients($ssCateg, $ingredients);
			}
		}
	}

	function recoupe($t1, $t2){
		foreach($t1 as $valT1){
			foreach($t2 as $valT2){
				if( $valT1 == $valT2){
					return true;
				}
			}
		}
		return false;
	}

	$categ = $_GET['categ'];
	getIngredients($categ);

	include("Donnees.inc.php");
	$Cocktails = array();

	foreach($Recettes as $Cocktail){
		if(recoupe($Cocktail['index'], $ingredients) === true){
			$Cocktails[] = $Cocktail;
		}
	}

	foreach($Cocktails as $Cocktail){
		$nomFichier = "Mystère.jpg";

		if(array_key_exists($Cocktail['titre'], $Association)){
			$nomFichier = $Association[$Cocktail['titre']].'.jpg';
		}

		echo'
		<div class="container jumbotron">
			<div class="row">
				<div class = "col">
					<h1>'.$Cocktail['titre'].'</h1><br/>
					<h3>Liste des ingredients : </h3>
					<ul>
		';
		foreach($Cocktail['index'] as $ingredient){
			echo'
						<li>'.$ingredient.'</li>';
		}
		echo'
					</ul>
				</div>
				<div class="col-md-2">
						<img class="d-block img-fluid" src="Photos/'.$nomFichier.'">
				</div>
			</div>
			<h3> Préparation : </h3>
			'.$Cocktail['preparation'].'
		</div>';
	}


?>
