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
			
			//test
			document.getElementById("cocktails").innerHTML = "Traitement en cours ...";
			
			var url = 'afficheCocktail.php?categ=' + $(this).html();
			
			$.post(url, function(data){
				$('#cocktails').html(data);
			})
		});

		$(".Collapsable").each(function(){
			$(this).parent().children().toggle();
			$(this).toggle();
		});
	</script>
</div>

<div class='content' id='cocktails'>
	
</main>