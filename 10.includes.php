<?php

// Los ficheros PHP incluidos deben comenzaar tambien con la etiqueta <?php

include 'my_include.php';
// El codigo de my_include.php ya esta disponible en el entorno actual
// Si el archivo no puede ser incluido (inexistente) se muestra una advertencia

include_once 'my_include.php';
// Si el codigo del archivo my_include.php ya ha sido incluido previamente, no se incluira de nuevo

require 'my_include.php';
require 'my_include.php';
// Funciona igual que include, pero se causara un error si el archivo no puede ser incluido