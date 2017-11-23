<div class = "row">
	<div class = "col-md-3">
		<div id = 'tree'>
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
				
				//On cherche les super catégories
				foreach($Hierarchie as $apellation=>$Categs){
					if(!array_key_exists('super-categorie', $Categs)){
						$SuperCategs[] = $apellation;
					}
				}
				
				//On l'arbre de chaque sous-catégorie
				foreach($SuperCategs as $SuperCateg){
					echo_hierarchie($SuperCateg, $Hierarchie);
				}
				
			?>
	
			<script type="text/javascript">
				//Si on clique sur un élément de l'arbre
				$(".Collapsable").click(function () {
					//On affiche / cache les éléments
					$(this).parent().children().toggle();
					$(this).toggle();
					
					//On cherche les cocktails correspondant avec une requête AJAX
					document.getElementById("cocktails").innerHTML = "Traitement en cours ...";
					
					var url = 'afficheCocktail.php?categ=' + $(this).html();
					
					$.post(url, function(data){
						$('#cocktails').html(data);
					})
				});

				//referme toute la hierarchie de l'arbre
				$(".Collapsable").each(function(){
					$(this).parent().children().toggle();
					$(this).toggle();
				});
			</script>
		</div>
	</div>
	<div class = "col-md-9">
		<div class='content' id='cocktails'>
			Cliquez sur une catégorie pour commencer !
		</div>
	</div>
</div>

