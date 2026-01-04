<?php

echo " * * * Exercici 3 * * * \n  ** A: ** \n";
/*Declara dues variables X i Y de tipus int, dues variables N i M de tipus double i assigna a cadascuna un valor.
mostra per pantalla per a X i Y.  */

$x = 6;
$y = 8;

#El valor de cada variable.
print "El valor de cada variable 'x' és: $x";
print "\nEl valor de cada variable 'y' és: $y\n";

#La suma.
$sum = $x + $y;
echo "\nLa suma de les dues variables és: $sum";

#La resta
$sub = $x - $y;
echo "\nLa resta de les dues variables és: $sub";

#El producte
$product = $x * $y;
echo "\nEl producte de multiplicar les dues variables és: $product";

#El mòdul
$mod = $x / $y;
echo "\nEl mòdul de dividir les dues variables és: $mod\n";

//Per N i M realitzaràs el mateix.
$n = 5.5;
$m = 3.6;

echo "\nEl valor de cada variable 'n' és: $n";
echo "\nEl valor de cada variable 'm' és: $m\n";
$sum2 = $n + $m;
echo "\nLa suma de les dues variables és: $sum2";
$sub2 = $n - $m;
echo "\nLa resta de les dues variables és: $sub2";
$product2 = $n * $m;
echo "\nEl producte de multiplicar les dues variables és: $product2";
$mod2 = $n % $m;
echo "\nEl mòdul de dividir les dues variables és: $mod2\n";

//per a totes les variables
# El doble de cada variable.

echo "\nEl doble de $x és: " . $x * 2;
echo "\nEl doble de $y és: " . $y * 2;
echo "\nEl doble de $n és: " . $n * 2;
echo "\nEl doble de $m és: " . $m * 2;

#La suma de totes les variables.
echo "\n\n* La suma de totes les variables: " . $x + $y + $n + $m . "\n";

#El producte de totes les variables.
echo "\n* El producte de totes les variables: " . $x * $y * $n * $m . "\n";


echo "\n* * * B \n";

/* Crea un programa que tingui una funció que rebi dos nombres per paràmetre, 
i en un tercer paràmetre que indiqui una operació aritmética(suma,resta,multiplicació o divisió dels dos nombres).*/

function calcNumbers(float $num1, float $num2, string $operator)
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
echo "\n";
calcNumbers($n, $m, '*');
