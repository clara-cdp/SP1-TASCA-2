<?php
echo "<h3> * * *NIVELL 2 Exercici 1 * * * <br></h3>\n";
/*Escriu una funció que determini la quantitat total a pagar per una trucada telefònica segons les següents premisses:
Tota trucada que duri menys de 3 minuts té un cost de 10 cèntims.
Cada minut addicional a partir dels 3 primers és un pas de comptador i costa 5 cèntims.*/

function calcCallCost(int $minutes)
{
    $firstMinutes = 3;
    $costPerMinut = 5;
    $basicRate = 10;

    $cost = 0;
    if ($minutes <= $firstMinutes) {
        $cost =  $basicRate;
    } else {
        $cost =  $basicRate + (($minutes - $firstMinutes) * $costPerMinut);
    }
    return (int) $cost;
}

$costTrucada = calcCallCost(4);

echo "El cost de la trucada és: " . $costTrucada . " cèntims.\n";

$costTrucada = calcCallCost(10);

echo "El cost de la trucada és: " . $costTrucada . " cèntims.\n";
