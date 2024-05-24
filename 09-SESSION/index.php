<?php

//session_start(); //inicia seción

//$_SESSION['nombre'] = 'Pepe';
//$_SESSION['pais'] = 'Chile';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Pagina de inicio</h1>


    <form action="registro.php" method="post">
        <label for="user"></label>
        <input id="user" type="text" placeholder="Nombre de usuario..." name="user">
        <br> <br>
        <label for="password"></label>
        <input id="password" type="password" placeholder="Contraseña de usuario..." name="password">
        <br> <br>
        <button type="submit">Registro</button>
    </form>
    <br>

    <a href="./user.php">User page</a>
    <a href="./cerrar.php">Cerar</a>

</body>

</html>