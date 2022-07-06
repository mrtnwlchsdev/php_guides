<?php

// Las variables superglobales pueden ser acedidas desde cualquier parte del codigo
/*
    $_GET :: Contiene informacion de valores pasados a traves de una URL o un formulario
    $_POST :: Contiene informacion de valores pasados a traves de un formulario
*/

// echo $_GET['name'];
// echo $_GET['age'];

echo $_POST['name'];
echo $_POST['age'];
?>

<!--$_GET-->

<!--Obteniendo informacion de una URL-->
<a 
    href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Martin&age=27">
    Click
</a>

<!--Obteniendo informacion de un formulario-->
<form
    action="<?php echo $_SERVER['PHP_SELF']; ?>"
    method="POST">
    <div>
        <label>Name: </label>
        <input type="text" name="name">
    </div>
    <div>
    <label>Age: </label>
        <input type="text" name="age">
    </div>
    <input type="submit" value="Submit">
</form>