<?php
$nmbfinal=666;
$nmb=rand(0,1000);
$tirage=0;
while($nmb!=$nmbfinal){
$nmb=rand(0,1000);
$tirage++;
echo $nmb;
}
echo "Tirages réalisés : $tirage";
?>
