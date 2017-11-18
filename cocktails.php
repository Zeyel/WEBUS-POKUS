<div class = 'tree'>
		
	<?php
		function echo_hierarchie($nom, $Hierarchie){
			
			if(!array_key_exists('sous-categorie', $Hierarchie[$nom])){ 
			
				//si notre ingrédient n'a pas de ss-categorie
				//On l'affiche
				echo '<li><span class="Collapsable">'.$nom.'</span></li>';
			}
			else{				
				//sinon on affiche la categorie et ses sous categorie
				echo '<li><span class="Collapsable">'.$nom.'</span><ul>';
		
				foreach($Hierarchie[$nom]['sous-categorie'] as $indice=>$nomSSCateg){
					echo_hierarchie($nomSSCateg, $Hierarchie);
				}
		
				echo'</ul></li>';
			}		
		}		
		
		include("Donnees.inc.php");
		
		foreach($Hierarchie as $apellation=>$Categs){
			if(!array_key_exists('super-categorie', $Categs)){
				$SuperCategs[] = $apellation;
			}
		}
		
		foreach($SuperCategs as $SuperCateg){
			echo_hierarchie($SuperCateg, $Hierarchie);
		}
		
	?>
	
	<script type="text/javascript">
		$(".Collapsable").click(function () {
			$(this).parent().children().toggle();
			$(this).toggle();
		});

		$(".Collapsable").each(function(){

			$(this).parent().children().toggle();
			$(this).toggle();
		});
	</script>
</div>

<div class='content'>
	
	
	<?php
	   function afficheCocktail($Cocktail){
		   echo'
			<div class="container jumbotron">
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
				<h3> Préparation : </h3>
				'.$Cocktail['preparation'].'
			</div>';
	   }
	   	   
		foreach($Recettes as $Cocktail){
			afficheCocktail($Cocktail);
		}
	
	?>
</main>