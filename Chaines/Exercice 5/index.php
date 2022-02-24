<?php
$chaine = "Ornithorinque";
$chaine2 = "Arinfo";

echo "Chaines à classer par ordre alphabétique : $chaine, $chaine2 <br/><br/>";

$ordre = strcmp($chaine,$chaine2);
if($ordre<0) echo "$chaine, $chaine2";
elseif($ordre>0) echo "$chaine2, $chaine";

?>
