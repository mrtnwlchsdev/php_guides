<?php

// Las funciones son bloques de codigo que pueden ejecutarse multiples veces
// Las funciones pueden ser definidas mediante la palabra clave function
function register() {
    echo 'User registered';
}

// Invocacion de una funcion
register();

// Las variables definidas dentro de una funcion, solo podran ser accedidas dentro de esta
function sum() {
    $a = 10;
    $b = 20;
    echo $a + $b;
}
sum();

// Una funcion puede recibir parametros, los cuales actuaran como variables locales dentro de la funcion
function greeting($name) {
    echo "Hello ${name}";
}

// Los paramatros son pasados a una funcion mediante argumentos
greeting('Martin');

// Una funcion puede invocarse multiples veces con distintos parametros.
greeting('Andrea');
greeting('Ada');

// El valor por defecto de una funcion es undefined
// La palabra clave return se utiliza para retornar un valor a la funcion
// La palabra clave return finaliza inmediatamente la ejecucion de la funcion
function product($a,$b) {
    return $a * $b;
}

// El valor retornado por una funcion puede asignarse a una variable
$result = product(25,10);
echo $result; // 250

// Una funcion puede tener establecidos parametros por defecto
function substract($n1 = 10, $n2 = 20) {
    return $n1 - $n2;
}

// Si una funcion tiene definidos parametros por defecto, es posible omitir el pasar argumentos
substract();

// Las funciones anonimas no tienen un identificar asignado
// Las funciones anonimas pueden ser asignadas a variables
$user = function($name) {
    return "Hello $name";
};

// Los argumentos son pasados a la funcion anonima a traves de la variable a la cual se ha asignado
$user('Martin');

// Funciones de tipo flecha
// Estas funciones permiten simplificar la declaracion de funciones
$sum = fn($n1,$n2) => $n1 + $n2;
$sum(10,20);

// Se abrevia el uso de la palabra function por fn
// Si el bloque de codigo de la funcion solo es de una linea, se puede omitir el uso de return y de las llaves {}