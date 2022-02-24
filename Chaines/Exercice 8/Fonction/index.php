<?php
$chaine = "PHP 5 \n est meilleur \n que ASP \n et JSP \n réunis";
$n = array("\n");
$br = array("<br/>");

$chaine1 = str_replace($n, $br, $chaine);

echo $chaine1;