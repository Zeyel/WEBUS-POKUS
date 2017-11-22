<?php
	include "Donnees.inc.php";
	include "Association.inc.php";
	$N = 5;
?>

<div class="container-fluid">
	<div id="carousel" class="carousel slide jumbotron" data-ride="carousel">

		<!--puces-->
		<ol class="carousel-indicators">
			<?php

				for($i = 0; $i < $N;$i++){
					if($i == 1){
					echo'
				<li data-target="#carousel" data-slide-to="'.$i.'" class="active"></li>';
					}
					else{
						echo'
				<li data-target="#carousel" data-slide-to="'.$i.'"></li>';
					}
				}
			?>
		</ol>

		<!--contenu-->
		<div class="carousel-inner" role="listbox">
			<?php
				$Cocktails = array();
				mt_srand(floor(time() / (60*60*24)));
				
				for($i = 1; $i <= $N;$i++){					
					$rnd = mt_rand(0, count($Recettes) - 1);					
					$Cocktails[] = $Recettes[$rnd];					
				}
				
				$prem = true;
				
				foreach($Cocktails as $Cocktail){
					
					$nomFichier = "Mystère.jpg";

					if(array_key_exists($Cocktail['titre'], $Association)){
						$nomFichier = $Association[$Cocktail['titre']].'.jpg';
					}
					
					if($prem){
						echo'
			<div class="carousel-item active">';
						$prem = false;
					}
					else{
						echo'
			<div class="carousel-item">';
					}

					echo'
				<div class="container jumbotron">
					<div class="row">
						<div class = "col-md-6">
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
				</div>
			</div>';
				}
			?>
		</div>

		<!--sliders-->
		<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
Abusus enim multitudine hominum, quam tranquillis in rebus diutius rexit, ex agrestibus habitaculis urbes construxit multis opibus firmas et viribus,
 quarum ad praesens pleraeque licet Graecis nominibus appellentur, quae isdem ad arbitrium inposita sunt conditoris, primigenia tamen nomina non amittunt,
 quae eis Assyria lingua institutores veteres indiderunt.
<br/><br/>
Unde Rufinus ea tempestate praefectus praetorio ad discrimen trusus est ultimum. ire enim ipse compellebatur ad militem, quem exagitabat inopia simul et feritas,
 et alioqui coalito more in ordinarias dignitates asperum semper et saevum, ut satisfaceret atque monstraret, quam ob causam annonae convectio sit impedita.
<br/><br/>
Advenit post multos Scudilo Scutariorum tribunus velamento subagrestis ingenii persuasionis opifex callidus.
qui eum adulabili sermone seriis admixto solus omnium proficisci pellexit vultu adsimulato saepius replicando quod flagrantibus votis eum videre frater cuperet patruelis,
 siquid per inprudentiam gestum est remissurus ut mitis et clemens, participemque eum suae maiestatis adscisceret, futurum laborum quoque socium, quos Arctoae provinciae diu fessae poscebant.
</div><br/>
