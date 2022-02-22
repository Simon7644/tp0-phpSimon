<?php
$nmbfinal=666;
$nmb=rand(0,1000);
$tirage=0;
for($tirage=0; $nmb!=$nmbfinal; $tirage++){
$nmb=rand(0,1000);
echo $nmb;
}
echo "Tirages réalisés : $tirage";
?>