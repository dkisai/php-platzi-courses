<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formularios</title>
</head>
<body>

    <p>Formulario POST</p>
    <form action="server-img.php" method="post" enctype="multipart/form-data">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre">

        <label for="image">Edad:</label>
        <input type="file" name="image" id="image">

        <input type="submit" value="Mandar datos">
    </form>

    <!-- Para enviar imagenes es importante agregar enctype="multipart/form-data" y el input debe de ser file -->
</body>
</html>