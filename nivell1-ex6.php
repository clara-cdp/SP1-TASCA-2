<?php
echo "* * * Exercici 6 * * * ";
/*Charlie em va mossegar el dit! Charlie et mossegarà el dit exactament el 50% del temps.
Escriu La funció isBitten() que retorna TRUE amb un 50% de probabilitat i FALSE en cas contrari.*/

function isBitten(int $num)
{
    if ($num % 2 == 1) {
        return (bool) true;
    } else {
        return (bool) false;
    }
}

$bite = rand();

echo isBitten($bite) ? "NYAM!!" : "...Tas librao!";
