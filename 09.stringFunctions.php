<?php

$name = 'Martin';
$string = 'hello world';

// Obtener la cantidad de caracteres de un string
echo strlen($name); // 6

// Obtener la posicion de la primera ocurrencia de un substring en un string
echo strpos($name, 'a'); // 1

// Reversar un string
echo strrev($name); // nitraM

// Convertir todos los caracteres de un string a minuscula
echo strtolower($name); // martin

// Convertir todos los caracteres de un string a mayuscula
echo strtoupper($name); // MARTIN

// Convertir a mayuscula el primer caracter de cada palabra
echo ucwords($string); // Hello World

// Reemplazar un string por otro
echo str_replace('hello','bye',$string); // Bye World

// Validar si un string empieza con un substring especifico
if (str_starts_with($string,'hello')) {
    echo 'YES';
} else {
    echo 'NO';
}

// Validar si un string finaliza con un substring especifico
if (str_ends_with($string,'world')) {
    echo 'YES';
} else {
    echo 'NO';
}