<?php

session_start();
session_destroy();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/cerrar.css">
    <title>Document</title>
</head>

<body>
    <div class="todo">
        <div class="padre">
            <h1>Secion finalizada</h1>
            <a class="botonindex" href="./user.php">User page</a>
            <a class="botoncerrar" href="./index.php">Iniciar secion</a>
        </div>
    </div>
</body>

</html>