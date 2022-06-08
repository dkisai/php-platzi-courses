<?php
$a = 0;
$usuarios = [
    'Diego', 'Iker', 'Majo'
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciclos</title>
</head>
<body>
    <ul>
        <?php for($i = 0; $i < 10; $i++): ?>
            <li>FOR <?= $i ?></li>
        <?php endfor; ?>
    </ul>

    <ul>
        <?php while ($a <= 10): ?>
            <li>WHILE <?= $a ?></li>
            <?php $a++; ?>
        <?php endwhile; ?>
    </ul>

    <ul>
        <?php foreach(range(0, 10) as $i): ?>
            <li>FOR EACH <?= $i ?></li>
        <?php endforeach; ?>
    </ul>

    <ul>
        <?php foreach ($usuarios as $i):?>
            <li>FOREACH <?= $i ?></li>
        <?php endforeach; ?>
    </ul>

</body>
</html>