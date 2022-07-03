<?php

// Todos los arreglos en PHP son asociativos
// Los arreglos asociativos se definen en pares clave-valor

// Un arreglo puede declararse mediante array()
$array1 = array(
    'One' => 1,
    'Two' => 2,
    'Three' => 3
);

// Desde versiones posteriores a PHP 5.4, los arreglos pueden declararse de la siguiente forma
$array2 = [
    'One' => 1,
    'Two' => 2,
    'Three' => 3
];

// Acceder a un valor del arreglo
echo $array2['One']; // 1

// Asignacion de claves implicitamente con valores enteros
$nums = [1,2,3,4,5];
echo $nums[0]; // 1

// Añadir un elemento al final del arreglo
$nums[] = 100;

// Añadir un elemento al final del arreglo mediante array_push()
array_push($nums, 200);

// Eliminar un elemento del arreglo
unset($nums[1]);