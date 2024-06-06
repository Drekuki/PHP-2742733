<?php session_start();

if ($_SERVER["REQUEST_METHOD"] == 'POST') {

    $usuario = $_POST['user'];
    $password = $_POST['password'];
    $correo = $_POST['correo'];

    //verificacion de los datos vacion / llenos
    if (empty($usuario) or empty($password) or empty($correo)) {
        echo 'Rellene completo el formulario';
    } else {
        //echo $usuario . ' - ' . $password;
        $_SESSION['userRegister'] = $usuario;
        $_SESSION['passRegister'] = $password;
        $_SESSION['correoRegister'] = $correo;
        //echo 'variables de sesion guardadas 🤣💋';
        //header('location: index.php');

        try {
            $conexion = new PDO("mysql: host=localhost; dbname=focaapp", 'root', '');
        } catch (PDOException $e) {
            echo "Error:  " . $e->getMessage();
        }

        echo "<br>";

        $statement = $conexion->prepare("INSERT INTO `usersapp`(`ID`, `Username`, `Correo`, `Contraseña`) VALUES (NULL, :usuario, :correo, :pass)");


        $statement->execute(array(":usuario" => $usuario, ":correo" => $correo, ":pass" => $password));

        $result = $statement->fetch();

        if ($result) {
            echo 'true';
            $_SESSION['userRegister'] = $usuario;
            $_SESSION['passRegister'] = $password;
            $_SESSION['correoRegister'] = $correo;
            header('Location: user.php');
        } else {
            echo 'false';
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/registro.css">
    <title>Document</title>
</head>

<body>
    <div class="todo">
        <div class="contenedor">
            <h1>Registrate</h1>
            <form action="registro.php" method="post">
                <label for="user"></label>
                <input class="barra" id="user" type="text" placeholder="Nombre de usuario..." name="user">
                <br>
                <input class="barra" id="correo" type="text" placeholder="Correo..." name="correo">
                <br>
                <label for="password"></label>
                <input class="barra" id="password" type="password" placeholder="Contraseña de usuario..." name="password">
                <br> <br>
                <button class="boton" type="submit">Registrate</button>
            </form>
        </div>
    </div>

    <?php if (isset($_SESSION['userRegister'])) : ?>
        <p>Tus datos han sido registrados, vuelve para iniciar sesion</p>
        <p> <?php echo $_SESSION['userRegister'] . ' - ' . $_SESSION['passRegister'] . ' - ' . $_SESSION['correoRegister']; ?> </p>
        <a href="./index.php">Iniciar sesion</a>
    <?php endif ?>


</body>

</html>