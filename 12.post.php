<?php

// La variable superglobal $_POST permite obtener los datos que han sido enviados a traves de un formulario

echo $_POST['name'];
echo $_POST['age'];

?>

<form 
    action="<?php echo $_SERVER['PHP_SELF']; ?>"
    method="POST">
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