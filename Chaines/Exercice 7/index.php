<?php
$age = 17;
$condition = "/^[0-9][0-9]$/";

echo "Votre âge est $age ans. <br/><br/>";

if (preg_match("/^[0-9][0-9]$/",$age)){
    echo "L'âge respecte les conditions.";
}
else{
    echo "Erreur: l'âge doit être inférieur à 100 ans.";
}

     