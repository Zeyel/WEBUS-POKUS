<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8"/>
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<script type="text/javascript" src="//code.jquery.com/jquery-1.8.3.js"></script>
	<title>Cocktails</title>
</head>
	<body>
		<header>
			<?php
				include "pages/header.php";
			?>
		</header>
		<nav>
			<?php
				include "pages/nav.php";
			?>
		</nav>
		<main>
			<?php
				if(isset($_GET['page'])){
					include('pages/'.$_GET['page'].'.php');
				}
				else{
					include('pages/acceuil.php');
				}
			?>
		</main>
		
		<footer>
			<?php
				include "pages/footer.php";
			?>
		</footer>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	</body>
</html>
