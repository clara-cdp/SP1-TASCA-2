<?php
echo "<h3> * * *NIVELL 2 Exercici 1 * * * <br></h3>\n";
/*Escriu una funció que determini la quantitat total a pagar per una trucada telefònica segons les següents premisses:
Tota trucada que duri menys de 3 minuts té un cost de 10 cèntims.
Cada minut addicional a partir dels 3 primers és un pas de comptador i costa 5 cèntims.*/

function costTrucada($minuts)
{
    $cost = 0;
    if ($minuts <= 3) {
        $cost = 10;
    } else {
        $cost = 10 + (($minuts - 3) * 5);
    }
    return $cost;
}

$costTrucada = costTrucada(4);

echo "El cost de la trucada és: " . $costTrucada . " cèntims.\n";

$costTrucada = costTrucada(10);

echo "El cost de la trucada és: " . $costTrucada . " cèntims.\n";
