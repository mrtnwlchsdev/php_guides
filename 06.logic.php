<?php

// Booleanos
$a = true;
$b = false;

// Operadores de comparacion
echo 1 == 1; // true // Igualdad 
echo 1 != 2; // true // Desigualdad
echo 2 > 1; // true // mayor que
echo 2 < 1; // false // menor que
echo 2 >= 2; // true // mayor o igual que
echo 2 <= 2; // true // menor o igual que

// Las siguientes comparaciones solo seran verdaderas si el valor y el tipo coinciden
echo 1 === '1'; // false
echo 'a' !== 'b'; // true

// Operador spaceship (Desde PHP 7 y superiores)
// Retorna 0 si ambos valores son iguales
// Retorna 1 si el valor de la izquierda es mayor
// Retorna -1 si el valor de la derecha es mayor
$x = 100;
$y = 200;
echo $x <=> $y; // -1

// Las variables pueden ser convertidas entre tipos dependiendo de su uso
$integer = 1;
echo $integer + $integer; // 1

$string = '1';
echo $string + $string; // 2 (Los strings son convertidos a enteros)

// Convertir un valor entero a cadena de caracter
echo strval($string);