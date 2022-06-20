<?php

$array = [1,2,3,4,5];

// Obtener la cantidad de elementos que contiene un arreglo
echo count($array); 

// Buscar un elemento dentro de un arreglo
var_dump(1,$array); // bool(true)

// Añadir elementos a un arreglo en la ultima posicion del mismo
$array[] = 6;
array_push($array,100);

// Añadir elementos al inicio de un arreglo
array_unshift($array,50);

// Eliminar el elemento ubicado en la ultima posicion del arreglo
array_pop($array);

// Eliminar el elemento ubicado en la primera posicion del arreglo
array_shift($array);

// Eliminar un elemento del arreglo ubicado en una posicion especifica
unset($array[1]);

// Agrupar los elementos de un arreglo
$chunked_array = array_chunk($array, 2);
// Mediante el ejemplo anterior el arreglo $array dividira los elementos contenidos en grupos de 2
// Cada grupo de elementos ocupara un unico indice en el arreglo

// Combinar 2 o mas arreglos
$arr1 = [1,2,3];
$arr2 = [4,5,5];
$arr3 = array_merge($arr1,$arr2);

// PHP tambien permite usar el operador spread para manipular arreglos
$arr4 = [...$arr1,...$arr2];

// Establecer los elementos de un arreglo como claves y los elementos de otro arreglo como valores
// El tamaño de ambos arreglos a combinar debe ser exactamente igual
$arr5 = array_combine($arr1,$arr2);

// Obtener las claves de un arreglo en un nuevo arreglo
$keys = array_keys($arr5);

// Obtener los valores de un arreglo en un nuevo arreglo
$values = array_values($arr5);

// Intercambiar las claves por los valores y viceversa
$flipped = array_flip($arr5);

// Crear un arreglos que contenga un rango de numeros
$range = range(1,20);

// Mapear los elementos contenidos en un arreglo
$range_map = array_map(function($number) {
    return "Number: ${number}";
}, $range);

// Filtrar los elementos contenidos en un arreglo
$less_than_10 = array_filter($range, function($number) {
    return $number <= 10;
});

// Reducir los elementos contenidos en un arreglo en un unico valor
$sum = array_reduce($range, fn($carry,$number) => $carry + $number);