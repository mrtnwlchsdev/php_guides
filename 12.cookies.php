<?php

// Las cookies permiten alojar datos en el navegador
// Mediante las cookies es posible identificar el retorno de un usuario a un sitio web especifico
// No es recomendable alojar datos sensibles del usuario en cookies

// Definir una cookie
setcookie('name', 'Martin', time() + 86400);

// Verificar la existencia de una cookie
if(isset($_COOKIE['name'])) {
    echo $_COOKIE['name'];
}

// Eliminar una cookie
setcookie('name', '', time() - 86400);