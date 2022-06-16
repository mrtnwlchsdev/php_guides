<?php

// Tipos de datos

/*
- String :: Cadena de caracteres
- Integer :: Numeros enteros
- Float :: Numeros decimales
- Boolean :: Verdadero o falso
- Array :: Arreglos
- Object :: Una clase
- NULL :: Variable vacia
- Resource :: Un recurso
*/

// Las variables deben ir precedidas por el simbolo $
// Las variables en PHP son case sensitive
// El nombre de una variable debe iniciar con una letra o con underscore
$name = 'Martin'; // String
$age = 27; // Integer
$cash = 30.5; // Float
$has_kids = true;
$nums = [1,2,3,4,5];

// 2 o mas strings pueden concatenarse mediante el operador punto .
echo "Hello my name is " . "Martin";

// Las variables pueden interpolarse entre strings
// Los strings que contengan variables interpoladas deben estar encerrados entre comillas dobles
echo "Hello my name is ${name}";

// Operaciones aritmeticas
echo 5 + 5; // 10
echo 10 - 5; // 5
echo 10 * 2; // 20
echo 4 / 2; // 2;
echo 10 % 3; // 1

// Las variables de tipo constante no pueden variar su valor durante la ejecucion del programa
// Por convencion el nombre de las variables de tipo constante deben ir en mayusculas
define('PI', 3,14);