<?php

function obtener_hora(){
    return date("h:i a");
}

echo "Hola, ¿me podrias dar la hora? \n";
echo "Claro, son las " . obtener_hora() . " \n";

?>