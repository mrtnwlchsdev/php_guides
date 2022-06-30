<?php

// La variable superglobal $_GET permite la obtencion de datos pasados a traves de una URL o un formulario

echo $_GET['name'];
echo $_GET['age'];

?>

<a href="<?php echo $_SERVER['PHP_SELF'];?>?name=Martin&age=27">
    Click on me
</a>

<form action="<?php echo $_SERVER['PHP_SELF'];?>">
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
    </div>
    <div>
        <label for="age">Age</label>
        <input type="number" name="age" id="age">
    </div>
    <button type="submit">Submit</button>
</form>