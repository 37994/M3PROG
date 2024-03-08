<?php

$afstand = 1082.54; //km
$prijs = 1.89; //euro
$treinReis = 60; //euro
$tankInhoud = 50;

$literGebruik = $afstand / 15;
$hoeveelKeerTanken = ceil($literGebruik / $tankInhoud);
$totaalKosten = $literGebruik / $prijs;

if($totaalKosten < $treinReis) {
    echo 'ik ga met de auto';
}else{
    echo 'ik ga met de trein';
}