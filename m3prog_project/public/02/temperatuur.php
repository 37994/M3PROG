<?php

$fahrenheit = 74;
$celsius = ($fahrenheit - 32) / 1.8;
echo "{$fahrenheit} graden Fahrenheit = {$celsius} graden celsius. <br/>";

$celsius = 20;
$fahrenheit = ($celsius + 32) * 1.8;
echo "{$celsius} graden celsius = {$fahrenheit} graden fahrenheit. <br/>";

$celsius = 30;
$kelvin = ($celsius + 273.15);
echo "{$celsius} graden celsius = {$kelvin} graden kelvin. <br/>";

$kelvin = 293.15;
$celsius = ($kelvin - 273.15);
echo "{$kelvin} graden kelvin = {$celsius} graden celsius. <br/>";
