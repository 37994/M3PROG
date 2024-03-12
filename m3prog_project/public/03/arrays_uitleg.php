<?php

$autos = ['Lexus LFA', 'Audi rs4', 'Honda Civic', 'Ferrari Enzo', 'Lamboghini Diablo'];
print_r($autos);

echo "<br>", $autos[2], "<br>";
echo $autos[4], "<br>";
echo count($autos),"<br>";

$autos[] = 'Volkswagen Golf';

var_dump($autos);

echo implode('<br>', $autos);

echo sort($autos);