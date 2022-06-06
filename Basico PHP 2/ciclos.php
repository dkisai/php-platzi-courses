<?php
#Ciclo while
$a = 1;
while($a <= 10){
    echo "Vuelta while numero {$a} \n";
    $a++;
}

#Ciclo do while
$b = 1;
do{
    echo "Vuelta do-while numero {$b} \n";
    $b++;
}while($b <= 10);

#Ciclo for
for($c = 1; $c <= 10; $c++){
    echo "Vuelta for numero {$c} \n";
}

#Ciclo foreach, codigo a repetir para cada elemento de un array
$d = array(1,2,3,4,5,6,7,8,9,10);
foreach($d as $e){
    echo "Vuelta foreach numero {$e} \n";
}

#Ciclo foreach con asignacion de variables
$tienda = array(
    'Americano' => 10,
    'Latte' => 5,
    'Capuchino' => 8,
    'Mocha' => 7,
    'Expresso' => 6
);

foreach ($tienda as $cafe => $precio) {
    echo "El cafe {$cafe} vale {$precio} dolares \n";
}

#buscamos e imprimimos el valor solicitado
foreach ($tienda as $cafe => $precio) {
    if ($cafe == 'Latte') {
        echo "El cafe {$cafe} vale {$precio} dolares \n";
    }
}

?>