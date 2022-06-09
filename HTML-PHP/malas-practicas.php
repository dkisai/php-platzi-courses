<?php

$tabla_9 =[];

for ($i=1; $i <=10 ; $i++) { 
    $resultado = 9 *$i;
    $texto = " 9 x $i = $resultado";
    array_push($tabla_9, $texto);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No hagas esto</title>
</head>
<body>
    
    <h1>Tabla del 9</h1>
    <h2> Mala practica </h2>
    <ul>
        <?php
        
        for ($i=0; $i < 10; $i++) { 
            echo "<li>" . "9 x 1 = " . (9 * ($i + 1)) . "</li>";
        }
        
        ?>
    </ul>

    <h2>Casi correcto</h2>
    <ul>
    <?php for ($i=1; $i <= 10; $i++):?>
        <li>9 x <?= $i ?> = <?=(9 * $i)?></li>
    <?php endfor;?>
    </ul>

    <h2>Correcto</h2>
    <ul>
        <!-- En la parte superior del documento se generan los datos y aqui solo se imprime -->
    <?php foreach ($tabla_9 as $value):?>
        <li><?=$value?></li>
    <?php endforeach;?>
    </ul>
</body>
</html>