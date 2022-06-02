<?php
$nodo = (int) readline("Ingrese el nodo: ");
$total = 1;
$control = 1;

for($iter = 2; $iter <= $nodo; $iter++){
    echo "Iteracion: {$iter}, Saltos: {$total} \n";
    $temp = $total;
    $total += $control;
    $control = $temp;
}
?>