<?php

// sessions permite almacenar informacion que puede ser accedida desde multiples paginas
// A diferencia de las cookies, sessions se aloja en el servidor

$username = $_POST['username'];
$password = $_POST['password'];

if ($username === 'Martin' && $password === 'password') {
    $_SESSION['username'] = $username;
    header('Location: ./dashboard.php');
}

// Iniciar una session
session_start();

// Destruir una sesion
session_destroy();

?>

<form action="" method="POST">
    <div>
        <label>Username: </label>
        <input type="text" name="username">
    </div>
    <div>
        <label>Password: </label>
        <input type="password" name="password">
    </div>
    <input type="submit" value="Submit">
</form>

