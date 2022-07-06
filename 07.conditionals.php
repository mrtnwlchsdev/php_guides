<?php

// Estructura de control if
if (true) {
    echo 'Impresion realizada';
}

if (false) {
    echo 'No se imprime';
} else {
    echo 'Se imprime';
}

if (false) {
    echo 'No se imprime';
} elseif (true) {
    echo 'Se imprime';
}

// Operador ternario
echo true ? 
    'Se imprime' : 
    'No se imprime'; // Se imprime

// Atajo para el operador ternario (PHP 5.3 y superiores)
$a = 'Imprime';
echo $a ?? 'No imprime'; // Imprime

// Estructura condicional switch
$b = 'red';
switch($b) {
    case 'yellow':
        echo "Favorite color ${b}";
        break;
    case 'red':
        echo "Favorite color ${b}";
        break;
    default:
        echo 'Sin color favorito';
        break;
}