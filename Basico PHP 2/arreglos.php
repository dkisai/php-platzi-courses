<?php
//Formas de declarar arreglos en PHP

#Primer forma
$frutas = array("pera", "manzana", "uva", 2);
#Desde este tipo podemos acceder segun el indice
echo "Acceso al arreglo es por el indice ". $frutas[3];
echo "\n"; 

#Segunda forma
$fruta = ["Uva","Pera","Sandia"];
#Desde este tipo podemos acceder segun el indice 
echo "Acceso al arreglo es por el indice ". $fruta[1];
echo "\n"; 

#Arreglo Asociativo
$joe = array(
    'name'=>'Jose',
    'age'=>25,
    'country'=>'mexico'
);
#Para acceder a este tipo debemos hacerlo de lasiguente forma $nameArray['namePropiedad']
echo "El acceso es por medio del nombre de la propiedad {$joe['age']}";
echo "\n";

#Arreglos dentro de arreglos
$estudiantes = array(
    'Diego' => array(
        'apellido' => 'Alba',
        'edad' => 33
    ),
    
    'Majo' => array(
        'apellido' => 'Lomeli',
        'edad' => 27
    )
);
#Para acceder a los datos del arreglo seria
echo "La edad de Majo es: {$estudiantes['Majo']['edad']}";
echo "\n";
?>
