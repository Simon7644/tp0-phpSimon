<?php
$nmb=2;
$tirage=0;
$entier=rand(0,100);

do{
$entier=rand(0,100);
$tirage++;
echo $entier;
}
while($entier%$nmb==1)?><br>

<?php
if($entier%$nmb==0){
echo "$entier est un multiple de $nmb ";
echo " Tirages réalisés : $tirage";
}
?>