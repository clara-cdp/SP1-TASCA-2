<?php
echo "<h3> * * * Exercici 4 * * * <br></h3>\n";

/*Fes un programa que implementi una funció on es compti fins a un nombre determinat. 
Si no s’inclou un nombre determinat, el nombre haurà de tenir un valor per defecte igual a 10. 
A més, aquesta funció ha de tenir un segon paràmetre que indiqui de quant a quant es compta(D'1 en 1, de 2 en 2…). 
El compte s’ha de mostrar per pantalla pas per pas. */

function countingNums($step, $setNum = 10,)

{
    for ($i = 0; $i <= $setNum; $i += $step) {
        echo "$i, ";
    }
    echo "<br>\n";
}

countingNums(1, 3);
countingNums(2);
countingNums(3, 20);
countingNums(10, 100);
