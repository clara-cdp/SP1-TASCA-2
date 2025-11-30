<?php

echo "<h3> * * * Exercici 3 * * * </h3>  ** A: ** <br>";

$x = 6;
$y = 8;

print "El valor de cada variable 'x' és: $x";
print "<br> El valor de cada variable 'y' és: $y";
$sum = $x + $y;
echo "<br>La suma de les dues variables és: $sum";
$sub = $x - $y;
echo "<br>La resta de les dues variables és: $sub";
$product = $x * $y;
echo "<br>El producte de multiplicar les dues variables és: $product";
$mod = $x / $y;
echo "<br>El mòdul de dividir les dues variables és: $mod";

$n = 5.5;
$m = 3.6;

echo "<br>El valor de cada variable 'n' és: $n";
echo "<br> El valor de cada variable 'm' és: $m";
$sum2 = $n + $m;
echo "<br>La suma de les dues variables és: $sum2";
$sub2 = $n - $m;
echo "<br>La resta de les dues variables és: $sub2";
$product2 = $n * $m;
echo "<br>El producte de multiplicar les dues variables és: $product2";
$mod2 = $n % $m;
echo "<br>El mòdul de dividir les dues variables és: " . $mod2;

// ** B: ** <br>

function sum($num1, $num2)
{
    return $num1 + $num2;
}
