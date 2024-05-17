<?php

$N1 = $_POST['N1'];
$N2 = $_POST['N2'];
$N3 = $_POST['N3'];

if ($N1 >= $N2 && $N1 >= $N3) {
    echo "El numero $N1 es mayor";
} elseif ($N2 >= $N1 && $N2 >= $N3) {
    echo "El numero $N2 es mayor";
} else {
    echo "El numero $N3 es mayor";
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

<form action="ejercicio-03.php" method="POST">
        <br>
        <label for="N1"></label>
        <input id="N1" type="text" placeholder="Ingresa un numero..." name="N1">
        <br> <br>
        <label for="N2"></label>
        <input id="N2" type="text" placeholder="Ingresa un numero..." name="N2">
        <br> <br>
        <label for="N3"></label>
        <input id="N3" type="text" placeholder="Ingresa un numero..." name="N3">
        <br> <br>
        <button type="submit">Enviar</button>

</body>
</html>