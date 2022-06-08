<?php
//creamos una variable que nos permita guardar el nombre del usuario
$nombre = "Diego";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Texto y etiquetas con PHP</title>
</head>
<body>
    <?php echo "<h1>Hola desde PHP</h1>"; ?>

    <?= "<b>otra forma de escribir una etiqueta HTML</b>" ?>

    <?= "<p>Hola $nombre</p>" ?>
    <!--se llama a la variable $nombre y se imprime en pantalla-->
</body>
</html>