<?php

// echo "<pre>";
// var_dump($_POST);
// echo "</pre>";

$nombre = $_POST["nombre"];
$edad = $_POST["edad"];

$nombre = $_GET["nombre"];
$edad = $_GET["edad"];

echo "el usuario se llama $nombre y tiene $edad años";