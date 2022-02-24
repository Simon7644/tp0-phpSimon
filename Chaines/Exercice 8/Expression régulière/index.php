<?php
$chaine = "PHP 5 \n est meilleur \n que ASP \n et JSP \n réunis";
$chaine1 = "/\n/";

echo preg_replace($chaine1, "<br/>", $chaine);



     