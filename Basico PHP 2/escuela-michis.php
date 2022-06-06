<?php
$michis = array(
    'michi_1' => array(
        'nombre' => 'Michi',
        'ocupacion' => 'Estudiante',
        'edad' => 25,
        'comida_fav' => array(
            'comida_1' => 'dedos de queso',
            'comida_2' => 'tacos',
            'comida_3' => 'tortas'
        ),
        'comida_no_fav' => array(
            'comida_1' => 'hot dog',
            'comida_2' => 'tamales',
            'comida_3' => 'boneless'
        )
    ),

    'michi_2' => array(
        'nombre' => 'Michi_2',
        'ocupacion' => 'Empleado',
        'edad' => 35,
        'comida_fav' => array(
            'comida_1' => 'hot dog',
            'comida_2' => 'tamales',
            'comida_3' => 'papas'
        ),
        'comida_no_fav' => array(
            'comida_1' => 'pizza',
            'comida_2' => 'boneless',
            'comida_3' => 'tortas'
        )
    ),
    
    'michi_3' => array(
        'nombre' => 'Michi_3',
        'ocupacion' => 'Jubilado',
        'edad' => 55,
        'comida_fav' => array(
            'comida_1' => 'alitas',
            'comida_2' => 'boneless',
            'comida_3' => 'quesadilla'
        ),
        'comida_no_fav' => array(
            'comida_1' => 'pizza',
            'comida_2' => 'tacos',
            'comida_3' => 'dedos de queso'
        )
    )
);

$escuela = array(
    array(
        'Nombre' => 'Michijose',
        'Ocupacion' => 'Developer',
        'Color' => 'Blanco',
        'Comidas' => array(
            'Favoritas' => "Lassagna, Atun",
            'No Favoritas' => "Tacos, Papas"
        )
    ),

    array(
        'Nombre' => 'Michisancio',
        'Ocupacion' => 'Frontend',
        'Color' => 'Naranja',
        'Comidas' => array(
            'Favoritas' => "Pescado, Pollo",
            'No Favoritas' => "Fresas, Cacahuates"
        )
    ),

    array(
        'Nombre' => 'Mr. Michi',
        'Ocupacion' => 'Backend',
        'Color' => 'Negro',
        'Comidas' => array(
            'Favoritas' => "Pizza, Alitas",
            'No Favoritas' => "Atun, Hot dog"
        )
    ),
);


echo "Las comidas favoritas de Michisancio son: ".$escuela[1]['Comidas']['Favoritas'];
echo "\n";
echo "Las comidas favoritas de {$escuela[1]['Nombre']} son: {$escuela[1]['Comidas']['Favoritas']}";

foreach ($escuela as $key => $value) {
    echo "\n";
    echo "Las comidas favoritas de {$value['Nombre']} son: {$value['Comidas']['Favoritas']}";
}

?>