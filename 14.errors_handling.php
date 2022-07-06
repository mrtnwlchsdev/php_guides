<?php

// El bloque try...catch se encarga de capturar posibles excepciones
// Las excepciones capturadas no evitan que la ejecucion del codigo se detenga
function inverse($x) {
    if (!$x) {
        throw new Exception('Division by zero');
    }
    return 1/$x;
}

try {
    echo inverse(5);
    echo inverse(0);
} catch (Exception $e) {
    echo 'Caught exception', $e->getMessage();
} finally {

    // El bloque finally es ejecutado independientemente de si se ha capturado un error o no
    echo 'First finally';
}

// Esta linea de codigo se ejecuta, ya que el error ha sido capturado mediante el bloque try...catch
// La ejecucion posterior del codigo no se detiene
echo 'Hello World';