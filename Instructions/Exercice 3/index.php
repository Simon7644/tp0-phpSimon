<?php

$nomb1=rand(10,20);
$nomb2=rand(10,20);
$nomb3=rand(10,20);
echo $nomb1,  $nomb2,  $nomb3;?> <br><br>

<?php

if ($nomb1%2 == 0 AND $nomb2%2 == 1 AND $nomb3%2 == 1)
echo "Résultat valide";

else
    echo "Résultat non valide"

?>