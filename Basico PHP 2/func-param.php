<?php
#Para pasar parametros a una funcion, se coloca el parametro a recibir entre parentesis
function is_legendary_player($rank){
    if($rank >= 2000){
        echo "Eres un legendario \n";
    }
    else {
        echo "No eres un legendario \n";
    }
}

$rank_user = (int) readline("Ingresa tu rango: ");

is_legendary_player($rank_user);