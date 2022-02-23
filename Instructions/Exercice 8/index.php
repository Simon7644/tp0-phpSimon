<h1>PGCD</h1>
<?php
function gcd($a, $b){ 
    if(!(is_int ($a) OR is_int ($b))){
        throw new Exception("Un des nombres n'est pas un entier");  
    }
    $r = $a % $b;
    return ($r != 0) ?
        gcd($b, $r) :
        abs($b);
}
?>

<?php
echo gcd(2.5,4.5 );
?>
