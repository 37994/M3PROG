<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php dingen</title>
</head>
<body>
    <?php
        $namen = ['Lancelot', 'Percival', 'Gawain', 'Geraint', 'Lamorak'];
        echo count($namen), '<br>';
        echo sort($namen),'<br>';
        print_r($namen);
        array_pop($namen);
        array_push($namen,'Kay');
        $namen[] = 'Gareth';
        print_r($namen);

        $namenTekst = implode('<br>', $namen);
        echo $namenTekst;

        $namenTekst2 = explode('<br>', $namenTekst);
        print_r($namenTekst2);


    ?>
</body>
</html>