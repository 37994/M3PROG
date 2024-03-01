<?php
    $string = "Duurzaam Huis"; 
    $upper = strtoupper($string);
    echo "Deze BO project gaat over  " . $upper;

    echo strpos($string, 'r');

    $filename = 'functions.md';
    echo file_exists("the file $filename") ? 'true' : 'false';
?>