<?php session_start();

if ($_SERVER["REQUEST_METHOD"] == 'POST') {

    $usuario = $_POST['user'];
    $password = $_POST['password'];

    $user_register = isset($_SESSION['userRegister']) ? $_SESSION['userRegister'] : null;
    $pass_register = isset($_SESSION['passRegister']) ? $_SESSION['passRegister'] : null;

    //verificacion de los datos vacion / llenos
    if (empty($usuario) or empty($password)) {
        echo 'Rellene completo el formulario';
    } else {
        try {

            $conexion = new PDO("mysql: host=localhost; dbname=focaapp", 'root', '');
            echo "Conexion OK" . "<br>";
        } catch (PDOException $e) {
            echo "Error:" . $e->getMessage() . "<br>";
        }

        $statement = $conexion->prepare("SELECT * FROM `usersapp` WHERE `Username` = :user AND `Contraseña` = :pass");

        $statement->execute(array(':user' => $usuario, ':pass' => $password));

        $result = $statement->fetch();

        print_r($result);

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
    <link rel="stylesheet" href="./CSS/index.css">
    <title>Document</title>

</head>

<body>
    <div class="todo">
        <div class="contenedor">
            <h1>Pagina de inicio</h1>
            <form action="index.php" method="post">
                <label for="user"></label>
                <input class="barra" id="user" type="text" placeholder="Nombre de usuario..." name="user">
                <br>
                <label for="password"></label>
                <input class="barra" id="password" type="password" placeholder="Contraseña de usuario..." name="password">
                <br> <br>
                <button class="boton" type="submit" class="BI">Iniciar sesion</button>
            </form>
            <br>
            <a class="boton1" href="./registro.php">Registrate</a>
        </div>
    </div>

</body>

</html>