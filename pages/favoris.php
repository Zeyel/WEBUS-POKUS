
<h1><u> Voici la liste de vos cocktails préférés : </u></h1>
<?php

include "Association.inc.php";
include "Donnees.inc.php";

if(isset($_SESSION['uti'])) {
  include "./utilisateurs/".$_SESSION['uti'].".inc.php";
  include "favoris.inc.php";
  foreach($Favoris as $fav) {
    foreach($Recettes as $Cocktail) {
      if ($fav == $Cocktail['titre']) {
    echo('
		<div class="container jumbotron">
			<div class="row">
				<div class = "col">
					<h1>'.$Cocktail['titre'].'</h1><br/>
					<h3>Liste des ingredients : </h3>
					<ul>
		');
		foreach($Cocktail['index'] as $ingredient){
			echo('
						<li>'.$ingredient.'</li>');
          }
		echo('
					</ul>
				</div>
			</div>
			<h3> Préparation : </h3>
			'.$Cocktail['preparation'].'
		</div>');
  }
}
}
}
else {
  printf("<br /> Désolé. Il faut être connecté pour pouvoir voir ses cocktails favoris.");
}
?>
