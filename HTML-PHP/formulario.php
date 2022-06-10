<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formularios</title>
</head>
<body>
    <p>Formulario GET</p>
    <form action="server-data.php" method="get">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre">

        <label for="edad">Edad:</label>
        <input type="text" name="edad" id="edad">

        <input type="submit" value="Mandar datos">
    </form>

    <p>Formulario POST</p>
    <form action="server.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre">

        <label for="edad">Edad:</label>
        <input type="text" name="edad" id="edad">

        <input type="submit" value="Mandar datos">
    </form>

    <!-- El metodo get envia los datos por medio de la URL, y el metodo post los enmascara
    pero siguen siendo accesibles por medio del navegador -->
</body>
</html>