<?php
echo "<h3> * * * Exercici 2 * * * </h3>";

$myString = "Hello World! ";
echo strtoupper($myString);

$myStringLength = strlen($myString);
echo "<br> The number of characters is: " . $myStringLength;

echo "<br>" . $myString . " a l'invers és: " . strrev($myString);
$newString = "Aquest és el curs de PHP";
echo "<br>" . $myString . $newString;
