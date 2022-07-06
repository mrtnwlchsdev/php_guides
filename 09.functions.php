<?php

// Definicion de una funcion mediante la palabra clave function
function my_function() {
    return 'Hello';
}
echo my_function(); // Hello

// El nombre valido de una funcion inicia con un caracter alfabetico o guion bajo
function sum($a, $b = 1) {
    // El parametro $b es opcional y por defecto es 1
    $resultado = $a + $b;
    return $resultado;
}
echo sum(11); // 12
echo sum(10,10); // 20

// La variable $result no puede ser accedida fuera del ambito de la funcion

// Desde PHP 5.3 es posible declarar funciones anonimas
$inc = function($a) {
    return $a + 1;
};
echo $inc(20); // 21

// Desde PHP 5.6 se puede obtener un numero variable de argumentos
function variable($param, ...$list) {
    echo $param . " || ";
    foreach ($list as $item) {
        echo $item . ' | ';
    }
}
variable('Test','Hello','World'); // Test || Hello | World