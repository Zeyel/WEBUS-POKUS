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
	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu nulla eros. Donec fermentum id ligula eu condimentum. Nunc tincidunt est at est semper lobortis. 
	Integer massa ante, vulputate at tortor id, tempus mattis est. Nunc ac ex sed ligula rhoncus vestibulum. 
	Aenean consectetur purus eget nibh ultrices, cursus cursus justo ornare. In hac habitasse platea dictumst. 
	Quisque vulputate bibendum nunc, rutrum mollis urna venenatis eget. Sed eros odio, iaculis a efficitur a, bibendum eu velit. 
	Morbi efficitur nisl lectus. Phasellus arcu nunc, varius in sapien vitae, rhoncus placerat felis.

	Fusce quis elit lacus. Cras sollicitudin id purus eu interdum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
	Morbi molestie ipsum non aliquam dignissim. Quisque sed consequat velit. Donec rhoncus vulputate nisi, id viverra risus porta quis. 
	Phasellus tincidunt, dui sit amet congue dictum, erat ligula convallis ligula, eget feugiat enim sapien in felis. 
	Nullam tempor velit scelerisque leo consequat, nec vestibulum nisi rutrum.

	Phasellus id tempor neque. Ut mattis, ligula vel tincidunt aliquet, ipsum risus pellentesque leo, sit amet convallis nisi neque ut ex. 
	Pellentesque consectetur, felis a pulvinar elementum, odio dui mollis urna, eget pharetra nunc neque a odio. Proin vehicula nibh a tellus vehicula, quis laoreet dolor ornare.
	Aliquam malesuada lacus at augue hendrerit venenatis sed aliquam erat. Duis eu ipsum in augue vestibulum imperdiet et eget eros. In tempus consequat ipsum vel tincidunt.

	Mauris auctor libero ligula, sit amet porttitor augue posuere pretium. Aliquam vitae lacus diam. 
	Maecenas porta dignissim neque, ac tincidunt nisl tincidunt nec. Maecenas ac urna eu metus iaculis lacinia. 
	Nulla dignissim nulla in nisl sodales scelerisque. Aenean ut molestie augue. Donec faucibus, ante eget malesuada suscipit, risus orci dictum odio, vel congue lectus purus quis dui.
	Nulla finibus, arcu id sollicitudin efficitur, justo mauris condimentum risus, nec auctor leo velit in sapien. Nunc sit amet imperdiet elit.

	Proin fringilla felis nulla, vitae vulputate urna rhoncus sit amet. Proin quis auctor ligula, eget condimentum velit. 
	Integer sed venenatis quam. Quisque imperdiet feugiat nunc ut pulvinar. Duis pellentesque est fermentum enim venenatis vestibulum. 
	Fusce consequat viverra porta. Nullam at urna purus. Etiam congue lorem est, iaculis eleifend felis maximus id. Proin feugiat pellentesque aliquam.
	Suspendisse feugiat lacinia turpis, vitae sodales massa sagittis id. Donec nec neque luctus libero dictum vehicula. Nam sem justo, gravida quis nunc id, mattis aliquam neque.
	Donec pretium metus vel scelerisque iaculis. Praesent at feugiat erat. Pellentesque et enim ut augue ullamcorper dapibus vitae non mi.
	Curabitur vehicula, felis id lacinia volutpat, nisi neque aliquam odio, ut laoreet massa lectus eu lorem.
</main>