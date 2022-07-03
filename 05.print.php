<?php

// Impresion estandar por pantalla
echo 'Hello World';
echo 100;

// Impresion de variables por pantalla
$name = 'Martin';
echo $name; // Martin

// Abreviacion de la declaracion echo dentro de codigo HTML
/*
    <p><?= 2 + 2 ?></p>
*/

$x = 1;
$y = 2;

// $x contendra el mismo valor que $y
$x = $y;
$z = &$y;

// $z sera una referencia a $y
// Si el valor de $z cambia, cambia el valor de $y y viceversa

// Imprimir el tipo y valor de una variable
var_dump($x); // int(2)

// Imprimir el contenido de un arreglo
$nums = [1,2,3];
print_r($nums); // Array ([0] => 1 [1] => 2 [2] => 3)