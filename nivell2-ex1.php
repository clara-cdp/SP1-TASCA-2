<?php
echo " * * *NIVELL 2 Exercici 1 * * *\n";
/*Escriu una funció que determini la quantitat total a pagar per una trucada telefònica segons les següents premisses:
Tota trucada que duri menys de 3 minuts té un cost de 10 cèntims.
Cada minut addicional a partir dels 3 primers és un pas de comptador i costa 5 cèntims.*/

const FIRST_3_MINUTES = 3;
const COST_PER_MINUTE = 5;
const BASIC_RATE = 10;

function calcCallCost(int $minutes)
{


    $cost = 0;
    if ($minutes <= FIRST_3_MINUTES) {
        $cost =  BASIC_RATE;
    } else {
        $cost =  BASIC_RATE + (($minutes - FIRST_3_MINUTES) * COST_PER_MINUTE);
    }
    return (int) $cost;
}

$costTrucada = calcCallCost(4);

echo "El cost de la trucada és: " . $costTrucada . " cèntims.\n";

$costTrucada = calcCallCost(10);

echo "El cost de la trucada és: " . $costTrucada . " cèntims.\n";
