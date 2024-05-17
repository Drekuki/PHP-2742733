<?php

$Metros = $_POST['Metros'];
$Pared = $_POST['Pared'];
$Precio1 = $Metros * 2000 + 15000;
$Precio2 = $Metros * 4000 + 15000;

if ($Metros == 'lisa') {
    echo "El precio de la pintada es $Precio1";
} else {
    echo "El precio de la pintada $Precio2";
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
    
    <form action="ejercicio-04.php" method="POST">
        <br>
        <label for="Metros"></label>
        <input id="Metros" type="text" placeholder="Ingrese los m²..." name="Metros">
        <br> <br>
        <label for="Pared"></label>
        <input id="Pared" type="text" placeholder="Lisa/No lisa..." name="Pared">
        <br> <br>
        <button type="submit">Enviar</button>
    </form>

</body>
</html>