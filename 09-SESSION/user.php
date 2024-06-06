<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/user.css">
    <title>User page</title>
</head>

<body>
    <div class="todo">
        <div class="padre">

            <?php if (isset($_SESSION['userRegister'])) : ?>

                <h1>Bienvenido <?php echo $_SESSION['userRegister']; ?> </h1>
                <a class="botonindex" href="./index.php">Home</a>
                <a class="botoncerrar" href="./cerrar.php">Cerrar sesion</a>

                

            <?php else : ?>

                <h1>no has iniciado sesion</h1>
                <a  href="./index.php">Iniciar sesion</a>

            <?php endif ?>
        </div>
    </div>
</body>

</html>