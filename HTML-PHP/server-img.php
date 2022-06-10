<?php

 echo "<pre>";
 var_dump($_FILES);
 echo "</pre>";

$basename = $_FILES['image']['name']; //obtenemos el nombre del archivo
$image = $_FILES['image']['tmp_name']; //obtenemos la ruta temporal de almacenamiento
$upload_route = "images/$basename"; //Asignamos la ruta definitiva y el nombre que tendra el archivo

move_uploaded_file($image, $upload_route); // lo movemos desde la ruta temporal a la ruta definitiva

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="<?= $upload_route ?>" alt="<?= $basename ?>">
</body>
</html>