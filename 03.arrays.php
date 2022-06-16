<?php

// Los arreglos son estructuras de datos que pueden contener multiples valores

// Arreglo simple
$nums = [1,2,3,4,5];
$fruits = array('apple','banana','orange');

// La funcion print_r() imprime el contenido de un arreglo
print_r($nums);

// Los arreglos simples son estructuras indexadas desde el numero 0 por defecto
echo $fruits[1]; // banana

// Arreglo asociativo
// Conocido como hash u objeto en otros lenguajes
// El indice de un arreglo asociativo puede ser un string
$hex = [
    'red' => '#f00',
    'blue' => '#00f',
    'green' => '#0f0'
];
echo $colors['red']; // #f00

// Los arreglos asociativos son utiles al trabajar con datos tabulados
$person = [
    'first_name' => 'Martin',
    'last_name' => 'Wilches',
    'age' => 27
];
echo $person['first_name']; // Martin

// Arreglos multidimendisionales
// Arreglos que contienen otros arreglos
$people = [
    $person = [
        'first_name' => 'Martin',
        'last_name' => 'Wilches',
        'age' => 27
    ],
    $person = [
        'first_name' => 'John',
        'last_name' => 'Doe',
        'age' => 30
    ],
    $person = [
        'first_name' => 'Dan',
        'last_name' => 'Yue',
        'age' => 20
    ]  
];
echo $people[0]['first_name']; // Martin