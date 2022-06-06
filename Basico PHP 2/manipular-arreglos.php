<?php

$edades =[18, 22, 25, 30, 35];

#contar elementos de un arreglo
echo "El arreglo tiene ". count($edades) . " elementos";
echo "\n";

#array push agrega un elemento al final del arreglo
array_push($edades, 40);
echo "\n";

#Verificar si un elemento es un array o no
$not_array = "";
var_dump( is_array($not_array) );
echo "\n";

#Explode nos permite convertir un string en un arreglo
$lista_frutas = "fresa, manzana, uva, cereza";
$lista_frutas_array = explode(",", $lista_frutas);  #explode(separador, string)
var_dump($lista_frutas_array);
echo "\n";

#implode nos permite convertir un arreglo en un string
$lista_frutas_array = ["fresa", "manzana", "uva", "cereza"];
$lista_frutas = implode(",", $lista_frutas_array);  #implode(separador, arreglo)
var_dump($lista_frutas);
echo "\n";

#array_key_exists nos permite verificar si una llave existe en un arreglo
$lista_frutas_array = ["fresa", "manzana", "uva", "cereza"];
var_dump(array_key_exists("fresa", $lista_frutas_array));
echo "\n";

#array_keys nos permite obtener las llaves de un arreglo
$lista_frutas_array = ["fresa", "manzana", "uva", "cereza"];
var_dump(array_keys($lista_frutas_array));
echo "\n";

#array_pop nos permite eliminar el ultimo elemento de un arreglo
$lista_frutas_array = ["fresa", "manzana", "uva", "cereza"];
var_dump(array_pop($lista_frutas_array));
echo "\n";

#array_shift nos permite eliminar el primer elemento de un arreglo
$lista_frutas_array = ["fresa", "manzana", "uva", "cereza"];
var_dump(array_shift($lista_frutas_array));
echo "\n";

#array_unshift nos permite agregar un elemento al inicio de un arreglo
$lista_frutas_array = ["fresa", "manzana", "uva", "cereza"];
var_dump(array_unshift($lista_frutas_array, "naranja"));
echo "\n";



?>