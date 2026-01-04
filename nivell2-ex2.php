<?php
echo "* * *NIVELL 2 Exercici 1 * * *\n";
/* Imagina que estàs programant part de la lògica de la classificació de punts d'un joc. 
En aquest programa necessitem entrar 3 puntuacions diferents(les puntuacions són entre 0 i 9999). D'aquestes puntuacions necessitarem:

La seva suma
La seva mitjana
La classificació. Sent "Principiant" menor de 4000. "Intermedi" menor de 8000 i "Professional" la resta.
Pensa a fer més d'una funció per resoldre aquest problema.*/

$score1 = rand(0, 9999);
$score2 = rand(0, 9999);
$score3 = rand(0, 9999);

function sum(int $num1, int $num2, int $num3)
{
    return $num1 + $num2 + $num3;
}

function calcAverage(int $num1, int $num2, int $num3)
{
    $sum = sum($num1, $num2, $num3);
    return $sum / 3;
}

function checkClassification(int $num1, int $num2, int $num3)
{
    $averageScore = calcAverage($num1, $num2, $num3);

    if ($averageScore < 4000) {
        return "Principiant";
    } elseif ($averageScore <= 8000) {
        return "Intermedi";
    } else
        return "Professional";
}

$classified = checkClassification($score1, $score2, $score3);

echo "El concursant Gizmo amb notes $score1, $score2, $score3 és: $classified";
