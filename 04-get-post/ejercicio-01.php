<?php

$Edad = $_GET['Edad'];

if($Edad <= 17) {
    echo "Eres menor de edad";
} else {
    echo "Eres mayor de edad";
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
    
    <form action="ejercicio-01.php" method="GET">
        <br>
        <label for="Edad"></label>
        <input id="Edad" type="text" placeholder="Edad del usuario..." name="Edad">
        <br> <br>
        <button type="submit">Enviar</button>
    </form>

</body>
</html>