<?php
#Pasamos valores por defecto a una funcion
function suma ($a = 1, $b = 1){
    echo "la suma de $a y $b es: " .$a + $b. "\n";
}

#Pasamos valores y los convierte a arreglo para poder pasarle mas de un parametro a la funcion
function suma_inf (...$params){
    $suma = 0;
    foreach ($params as $numbers) {
        $suma += $numbers;
    }
    echo "La suma es: $suma \n";
}


suma();
$numeros = [8,2];
# con ... desglosamos el array (array unpacking)
suma(...$numeros);
suma_inf(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);

?>
