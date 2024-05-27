<?php session_start();

if ($_SERVER["REQUEST_METHOD"] == 'POST') {

    $usuario = $_POST['user'];
    $password = $_POST['password'];

    $user_register = isset($_SESSION ['userRegister']) ? $_SESSION ['userRegister'] : null;
    $pass_register = isset($_SESSION ['passRegister']) ? $_SESSION ['passRegister'] : null;

    //verificacion de los datos vacion / llenos
    if (empty($usuario) or empty($password)) {
        echo 'Rellene completo el formulario';
    } else {
        echo $usuario . ' - ' . $password;
        if ($usuario == $user_register['userRegister'] && $password == $pass_register['passRegister']) {
            echo ' - Listo, sesion iniciada 😜';
            header ('location: user.php');
        }
    }
}

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


    <form action="index.php" method="post">
        <label for="user"></label>
        <input id="user" type="text" placeholder="Nombre de usuario..." name="user">
        <br> <br>
        <label for="password"></label>
        <input id="password" type="password" placeholder="Contraseña de usuario..." name="password">
        <br> <br>
        <button type="submit">Iniciar sesion</button>
    </form>
    <br>

    <a href="./registro.php">Registrate</a>
</body>

</html>