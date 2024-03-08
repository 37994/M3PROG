<?php

$getal1 = 11214.489;
$afgerond = round($getal1);
echo "Als je {$getal1} afrond dan krijg je: {$afgerond}<br/>";

$getal = 1.87321;
$afgerond1 = ceil($getal);
echo "$afgerond1 <br/>";

$getal2 = 1.12873;
$afgerond2 = floor($getal2);
echo "$afgerond2 <br/>";

$randomGetal1 = random_int(1, 999);
$randomGetal2 = random_int(1, 999);
$randomGetal3 = random_int(1, 999);

$opgeteld = $randomGetal1 + $randomGetal2;
echo "$randomGetal1 plus $randomGetal2 is $opgeteld. <br/>";

$delen = $opgeteld / $randomGetal3;
echo "$opgeteld gedeeld door $randomGetal3 is $delen";