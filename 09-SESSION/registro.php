<?php

if ($_POST['user']) {
    session_start();

    $_SESSION['nombre'] = $_POST['user'];
    $_SESSION['password'] = $_POST['password'];

    echo 'Puede iniciar secion';
} else {
    echo "Rellena los espacios";
    header('location: index.php');
}

?>