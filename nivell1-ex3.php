<?php

echo "<h3> * * * Exercici 3 * * * </h3>  ** A: ** <br>\n";
/*Declara dues variables X i Y de tipus int, dues variables N i M de tipus double i assigna a cadascuna un valor.
mostra per pantalla per a X i Y.  */

$x = 6;
$y = 8;

#El valor de cada variable.
print "El valor de cada variable 'x' és: $x\n";
print "<br> El valor de cada variable 'y' és: $y\n";

#La suma.
$sum = $x + $y;
echo "<br>La suma de les dues variables és: $sum\n";

#La resta
$sub = $x - $y;
echo "<br>La resta de les dues variables és: $sub\n";

#El producte
$product = $x * $y;
echo "<br>El producte de multiplicar les dues variables és: $product\n";

#El mòdul
$mod = $x / $y;
echo "<br>El mòdul de dividir les dues variables és: $mod<br>\n";

//Per N i M realitzaràs el mateix.
$n = 5.5;
$m = 3.6;

echo "<br>El valor de cada variable 'n' és: $n\n";
echo "<br> El valor de cada variable 'm' és: $m\n";
$sum2 = $n + $m;
echo "<br>La suma de les dues variables és: $sum2\n";
$sub2 = $n - $m;
echo "<br>La resta de les dues variables és: $sub2\n";
$product2 = $n * $m;
echo "<br>El producte de multiplicar les dues variables és: $product2\n";
$mod2 = $n % $m;
echo "<br>El mòdul de dividir les dues variables és: $mod2<br>\n";
//per a totes les variables
# El doble de cada variable.
function calcDoble($num)
{
    echo "El doble $num és:" . $num * 2 . "<br>\n";
}

echo "<br>\n";
calcDoble($x);
calcDoble($y);
calcDoble($n);
calcDoble($m);

#La suma de totes les variables.
echo "<br>La suma de totes les variables: " . $x + $y + $n + $m . "<br>\n";

#El producte de totes les variables.
echo "<br>El producte de totes les variables: " . $x * $y * $n * $m . "<br>\n";


echo "<br> ** B: ** <br>";
/* Crea un programa que tingui una funció que rebi dos nombres per paràmetre, 
i en un tercer paràmetre que indiqui una operació aritmética(suma,resta,multiplicació o divisió dels dos nombres).*/

function calcNumbers($num1, $num2, $operator)
{
    switch ($operator) {
        case '+':
            echo "La suma $num1 + $num2 és: " . ($num1 + $num2);
            break;
        case '-':
            echo "La resta $num1 - $num2 és: " . ($num1 - $num2);
            break;
        case '*':
            echo "El producte $num1 * $num2 és: " . ($num1 * $num2);
            break;
        case '/':
            echo "La divisió $num1 / $num2 és: " . ($num1 / $num2);
            break;
        default:
            return "Operació no vàlida";
    }
}


calcNumbers($x, $y, '+');
echo "<br>\n";
calcNumbers($n, $m, '*');
