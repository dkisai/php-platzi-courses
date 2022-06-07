<?php #Si el documento es unicamente php no es necesario agregar la etiqueta de cierre

/* Comentario de 
varias lineas */

class Answer{
    /**
     * Manera correcta de 
     * describir un comentario
     * de varias lineas
     */
    protected $clients = [];//Comentario
    protected $insurers = [];# Otro comentario de una sola linea
}

//Asignacion

$num = 9;
$lang = [
    'es' => 'español',
    'en' => 'ingles'
];

//Aritmetica 
echo "suma 2 + 2 ". ((int)2 + (int)2);
echo "resta 2 - 2 ". ((int)2 - (int)2);
echo "multiplica 2 * 2 ". 2 * 2;
echo "divide 2/ 2 ". 2 / 2;
echo "modulo 2/ 2 ". 2 % 2;
echo "exponente 2/ 2 ". 2 ** 2;


//Comparación
// igual == , valor 9 == 9 es True
// igual ===,compara valor y tipo
// diferencia != , valor
// diferencia !==, valor y tipo

// <, >, <=, >=

//Variables variables
$app = 'name';
$name = 'platzi';

echo $app;  // name
echo $$app; // platzi











