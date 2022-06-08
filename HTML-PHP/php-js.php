<?php
$usuarios = array(
    array(
        "id" => 0,
        "username" => "diego",
    ),
    array(
        "id" => 1,
        "username" => "iker",
    ),
    array(
        "id" => 2,
        "username" => "majo",
    ),
);

$edad_de_iker = 10;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasar variables de PHP a Javascript</title>
</head>
<body>
    <script>
        let usuarios = JSON.parse('<?= json_encode($usuarios) ?>');
        let edad_de_iker = <?= $edad_de_iker ?>;
    </script>
    <script src="./variables.js"></script>
</body>
</html>