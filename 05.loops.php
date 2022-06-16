<?php

// Los ciclos son utilizados para repetir un bloque de codigo mientras se cumpla una condicion especifica

// Ciclo for
for ($i = 1; $i <= 10; $i++) {
    echo $i; // 12345678910
}

// Ciclo while
$x = 1;
while ($x <= 10) {
    echo $x; // 12345678910
    $x++;
}

// Ciclo do while
do {
    echo $x; // 1
    $x++;
} while ($x <= 0);

// Ciclo foreach
// Este ciclo es comunmente utilizado para recorrer los elementos contenidos en un arreglo
$nums = [1,2,3,4,5];
foreach ($nums as $num) {
    echo $num . '-'; // 1-2-3-4-5
}

// A traves del ciclo foreach es posible extraer el indice de cada elemento contenido
foreach ($nums as $index => $num) {
    echo "Index ${index}: $num <br>";
}