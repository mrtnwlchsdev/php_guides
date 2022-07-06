<?php

// Ciclo while
$a = 1;
while ($a <= 10) {
    echo $a; // 12345678910
    $a++;
}

// Ciclo do while
do {
    echo $a; // 1
    $a++;
} while ($a <= 0);

// Ciclo for
for ($i = 1; $i <= 5; $i++) {
    echo $i; // 12345
}

// El bucle foreach es utilizado principalmente para recorrer arreglos
$nums = [1,2,3,4,5];
foreach ($nums as $num) {
    echo $num . '-';
}

// La palabra clave break finaliza la ejecucion de un ciclo
while ($a <= 10) {
    if ($a === 5) {
        break;
    }
    echo $a;
    $a++;
}

// La palabra clave continue omite la ejecucion del ciclo
while ($a <= 10) {
    if ($a === 5) {
        continue;
    }
    echo $a;
    $a++;
}