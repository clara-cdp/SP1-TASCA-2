<?php
echo "<h3> * * * Exercici 5 * * * <br></h3>\n";
/* Escriure una funció per verificar el grau d'un/a estudiant d'acord amb la nota.
Si la nota és 60% o més, el grau hauria de ser Primera Divisió.
Si la nota està entre 45% i 59%, el grau hauria de ser Segona Divisió.
Si la nota està entre 33% to 44%, el grau hauria de ser Tercera Divisió.
Si la nota és menor a 33%, l'estudiant reprovarà. */

function calcGrade($grade)
{
    if ($grade >= 60) {
        echo "Primera Divisió<br>\n";
    } elseif ($grade >= 45 && $grade <= 59) {
        echo "Segona Divisió<br>\n";
    } elseif ($grade >= 33 && $grade <= 44) {
        echo "Tercera Divisió<br>\n";
    } else {
        echo "L'estudiant reprovarà.<br>\n";
    }
}

calcGrade(75);
calcGrade(50);
calcGrade(40);
calcGrade(70);
