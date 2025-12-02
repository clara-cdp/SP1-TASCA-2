<?php
echo "<h3> * * * Exercici 5 * * * <br></h3>\n";
/* Escriure una funció per verificar el grau d'un/a estudiant d'acord amb la nota.
Si la nota és 60% o més, el grau hauria de ser Primera Divisió.
Si la nota està entre 45% i 59%, el grau hauria de ser Segona Divisió.
Si la nota està entre 33% to 44%, el grau hauria de ser Tercera Divisió.
Si la nota és menor a 33%, l'estudiant reprovarà. */

function calcGrade(int $grade)
{

    switch ($grade) {
        case ($grade >= 60):
            echo "Primera Divisió";
            break;
        case ($grade >= 45 && $grade <= 59):
            echo "Segona Divisió";
            break;
        case ($grade >= 33 && $grade <= 44):
            echo "Tercera Divisió";
            break;
        default:
            echo "L'estudiant reprovarà";
    }
}



calcGrade(75);
echo PHP_EOL;
calcGrade(50);
echo PHP_EOL;
calcGrade(40);
echo PHP_EOL;
calcGrade(70);
