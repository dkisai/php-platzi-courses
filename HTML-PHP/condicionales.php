<?php
$condicion = true;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>
</head>
<body>
    <!-- Esto es incorrecto (Aunque funciona)-->
    <?php if($condicion){
        echo "<p>Hola la condicion es true</p>";
    } else {
        echo "<p>Hola la condicion es false</p>";
    }; ?>


    <!-- Esto es incorrecto (Aunque funciona)-->
    <?php if($condicion){ ?>
        <p>Hola la condicion es true</p>
    <?php } else { ?>
        <p>Hola la condicion es false</p>
    <?php }; ?>


    <!-- Esto es correcto -->
    <?php if($condicion): ?>
        <p>Hola la condicion es true</p>
    <?php else: ?>
        <p>Hola la condicion es false</p>
    <?php endif; ?>

</body>
</html>