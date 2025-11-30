<?php
echo "<h3> * * * Exercici 6 * * * <br></h3>\n";
/*Charlie em va mossegar el dit! Charlie et mossegarà el dit exactament el 50% del temps.
Escriu La funció isBitten() que retorna TRUE amb un 50% de probabilitat i FALSE en cas contrari.*/

function isBitten($num)
{
    if ($num % 2 == 1) {
        return true;
    } else {
        return false;
    }
}

$bite = rand();

if (isBitten($bite) == true) {
    echo "<h1>nyam!</h1>";
} else echo "<h1>Tas librao!</h1>";
