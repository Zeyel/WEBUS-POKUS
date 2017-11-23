
<h1><u> Voici la liste de vos cocktails préférés : </u></h1>
<?php

include "Association.inc.php";
include "Donnees.inc.php"

if isset($_SESSION['uti']) {
  include favoris.inc.php;
  $nomImage = "Mystère.jpg";
  foreach($favoris as $fav) {
    if array_key_exists($fav, $Association)) {

  }

}
?>
