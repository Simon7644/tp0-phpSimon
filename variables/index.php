<?php
function boolvaleur($val)
{
if($val) echo "TRUE";
else echo "FALSE";
}?>

<?php
$a="0";
echo "La valeur booléenne de a est ", boolvaleur($a);?><br>

<?php
$b="TRUE";
echo "La valeur booléenne de b est ", boolvaleur($b);?><br>

<?php
$c=FALSE;
echo "La valeur booléenne de c est ", boolvaleur($c);?><br>

<?php
$d=($a OR $b);
echo "La valeur booléenne de d est ", boolvaleur($d);?><br>

<?php
$e=($a AND $c);
echo "La valeur booléenne de e est ", boolvaleur($e);?><br>

<?php
$f=($a XOR $b);
echo "La valeur booléenne de f est ", boolvaleur($f);?><br>