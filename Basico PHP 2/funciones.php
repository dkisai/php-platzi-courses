<?php

function get_pokemon(){
    $rdm_num = rand(1,5);
    switch ($rdm_num) {
        case 1:
            echo 'Pikachu';
            break;
        
        case 2:
            echo 'Charmander';
            break;
        
        case 3:
            echo 'Mew-Two';
            break;

        default:
            echo 'No hay pokemon para ti';
            break;
    }
}

get_pokemon();

echo "\n";

?>