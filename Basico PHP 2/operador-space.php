<?php

$precios_de_cafe = [12, 56, 32, 2, 1];

usort($precios_de_cafe, function($a, $b){
    return $a <=> $b;
});

print_r($precios_de_cafe);

$edad = 1;

$check = $edad <=> 18;


if ($check == 1) {
    echo "La edad es mayor a 18";
} elseif ($check == 0) {
    echo "La edad es igual a 18";
} else {
    echo "La edad es menor a 18";
}

?>