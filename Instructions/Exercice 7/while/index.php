<?php
$nmb=2;
$tirage=0;
$entier=rand(0,100);

while($entier%$nmb==1){
$entier=rand(0,100);
$tirage++;
echo $entier;
}?><br>

<?php
if($entier%$nmb==0){
echo "$entier est un multiple de $nmb ";
echo " Tirages réalisés : $tirage";
}
?>