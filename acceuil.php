<?php
include "Donnees.inc.php";
include "Association.php"
?>

<div class="container-fluid">
	<div id="carousel" class="carousel slide" data-ride="carousel">

		<!--puces-->
		<ol class="carousel-indicators">
			<li data-target="#carousel" data-slide-to="0" class="active"></li>
			<li data-target="#carousel" data-slide-to="1"></li>
			<li data-target="#carousel" data-slide-to="2"></li>
		</ol>

<!--contenu généré PHP
			COCKTAILS DU JOUR-->

			<?php
				echo ('		<div class="carousel-inner" role="listbox">');
				for ($i=0; $i<=2; $i++) {
				if ($i==0)
					echo ('<div class="carousel-item active">');
					echo ('
								<div class="row">
									<div class="col-md-2"></div>
									<div class="col-md-2">
									<img class="d-block img-fluid" src=');
						$random = array_rand($Recettes);
						$temp = "Mystère.PNG";
						foreach($Association as $key => $nom) {
							if ($Recettes[$random]['titre'] == $nom) {
								$temp = '"Photos/'.$key.'.jpg"';
								break;
							}
						}
							echo(
									$temp.' height="150px" width="150px" alt="First slide">
									</div>
									<div class="col-md-8">
										<h1>'.$Recettes[$random]['titre'].'</h1>
										<br/>
										<p>'.$Recettes[$random]['ingredients'].'<br/><br/>'.$random['preparation'].'</p>
										</div>
									</div>
								</div>
							');
				}
				echo ('</div>');
			 ?>

		<!--contenu
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-2">
						<img class="d-block img-fluid" src="Photos/Bora_bora.jpg" alt="First slide">
					</div>
					<div class="col-md-8">
						<h1>NOM COCKTAIL</h1>
						<br/>
						<p> Ingrédients / Recette </p>
					</div>
				</div>
			</div>

			<div class="carousel-item">
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-2">
						<img class="d-block img-fluid" src="Photos/Mojito.jpg" alt="First slide">
					</div>
					<div class="col-md-8">
						<h1>Bonjour je suis un texte qui te met dans le contexte</h1>
					</div>
				</div>
			</div>

			<div class="carousel-item">
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-2">
						<img class="d-block img-fluid" src="Photos/Mojito.jpg" alt="First slide">
					</div>
					<div class="col-md-8">
						<h1>Bonjour je suis un texte qui te met dans le contexte</h1>
					</div>
				</div>
			</div>
		</div>
-->
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

	<!-- un tas d'espace-->
	<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
	<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
	<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
	test<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
	<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
	test2


</div>
