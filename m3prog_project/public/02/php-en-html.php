<?php
    $titel = "titel";
    $url = "https://images.squarespace-cdn.com/content/v1/618e7f223fb749481d23c9c1/8ad0b113-c63a-4db9-809a-4c3eb51122ba/foto+logo.jpg";
    $titelFoto = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQsszzrbImK3uDT_4BzVGUtpRY9H9RDFz6kYg&usqp=CAU';
    $auteur = '37994'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <?php echo "<img src=\"$url\" alt=\"$titel\">"; ?>
    </main>
    <section>
        <?= $auteur?>
    </section>
</body>
</html>