<?php

// Las variables inician con el caracter $
// Un nombre de variable valido inicia con una letra o guion bajo
$name = 'Martin';

// Eliminar una variable
unset($name);

// Booleanos
$boolean_1 = true;
$boolean_2 = false;

// Variables numericas

// Enteros
$int1 = 1;
$int2 = 10;

// Octales
$oct1 = 012;

// Hexadecimales
$hex1 = 0x0f;

// Operaciones aritmeticas
$suma = 1 + 1;
$resta = 1 - 1;
$producto = 1 * 1;
$division = 2 / 2;

// Operaciones aritmeticas de escritura rapida
$num1 = 0;
$num1 += 1; // Incrementa la variable en 1
echo $num1++; // Incremente luego de la evaluacion
echo ++$num1; // Incremento antes de la evaluacion

// Las cadenas de caracteres deben declararse entre comillas simples
$str_quote1 = 'Hello World';

// Si un string contiene una variable, debe encerrarse entre comillas dobles
$str_quote2 = "Hello ${name}";

// Los caracteres especiales solo son validos entre comillas dobles
$str_quote3 = "Hello \n World";

// La concatenacion de cadenas de caracteres es realizada mediante el caracter punto .
echo "Hello ". "Martin";

// echo puede recibir cadenas de caracteres como parametros
echo "Multiples","Values","PHP";