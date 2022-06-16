<?php

// Operadores de comparacion
/*
    > Mayor que
    < Menor que
    >= Mayor o menor que
    <= Mayor o menor que
    == Igual a
    === Exactamente igual a
    != Diferente a
    !== Exactamente diferente a
*/

// Declaracion condicional if
if (true) {
    // Codigo a ejecutar si la condicion evaluada es verdadera 
}

// Declaracion condicional if else
if (false) {
    // Codigo a ejecutar si la condicion evauada es verdadera
} else {
    // Codigo a ejecutar si la condicion evaluada es falsa
}

// Las estructuras condicionales son utiles para evaluar si una variable contiene o no algun valor
$data = [1,2,3,4,5];
if (empty($data)) {
    // Codigo a ejecutar si el arreglo evaluado no contiene nungun valor
} else {
    // Codigo a ejecutar si el arreglo evaluado contiene algun valor
}

// Operador ternario
// Estructura condicional de una sola linea
$age = 27;
echo $age >= 18 ? 'Adult' : 'Kid';

// Operador ternario abreviado
$posts = ['Post1','Post2','Post3'];
$first_post = $posts[0] ?? null;

// Estructura condicional switch
switch($age) {
    case 16:
    case 17:
        echo 'Kid';
        break;
    case 18:
        echo 'Adult';
        break;
    default:
        break;
}