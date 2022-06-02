<?php

#Estructura de una sentencia if else elseif
$asientos_disponibles = 0;
$es_familia = false;

if($asientos_disponibles >0){
    echo "puedes ver la pelicula";
}
elseif($es_familia == true){
    echo "pasale familia";
}
else{
    echo "ya no hay asientos disponibles \n";
}

#Estructura de condicional switch

$variable = 5;

 switch($variable){
    case 1:
        echo "el numero es el 1";
        break;
    case 2:
        echo "el numero es el 2";
        break;
    case 3:
        echo "el numero es el 3";
        break;     
    default:
        echo "el numero no existe";
        break;
 }

?>