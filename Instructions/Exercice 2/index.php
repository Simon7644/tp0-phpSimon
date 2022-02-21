<?php

$age=26;
$sexe="M";

if($sexe=="M" AND $age>=21 AND $age <= 40){
echo "Bienvenue, votre fiche est valide";
}
else{
echo "La fiche n'est pas valide, un des paramètres ne correspond pas";
}
?>