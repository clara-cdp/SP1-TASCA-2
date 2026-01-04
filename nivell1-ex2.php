<?php
echo "* * * Exercici 2 * * *\n";

$myString = "Hello World!";

echo $myString;

echo strtoupper($myString);

$myStringLength = strlen($myString);
echo "\nThe number of characters is: " . $myStringLength;

echo "\n" . $myString . " a l'invers és: " . strrev($myString);

$newString = "Aquest és el curs de PHP";

echo "\n" . $myString . " " . $newString;
