<?php

// Funciones de tipo flecha
// Las funciones de tipo flecha simplifican la declaracion de funciones convencionales
// Se abrevia el uso de la palabra function por fn
// Si el bloque de codigo de la funcion solo es de una linea, se puede omitir el uso de return y de las llaves {}
$sum = fn($n1,$n2) => $n1 + $n2;
$sum(10,20);