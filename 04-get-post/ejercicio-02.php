<?php

$Horas = $_POST['Horas'];
$Sueldo = $_POST['Sueldo'];
$Resultado = $Horas * $Sueldo;

echo $Horas * $Sueldo; 
   
echo "<br>";

if ($Resultado <= 2200000) {
    echo "No se le retiene fuente";
} else {
    echo "Se le retiene fuente";
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
<form action="ejercicio-02.php" method="POST">
        <br>
        <label for="Horas"></label>
        <input id="Horas" type="text" placeholder="Horas Trabajadas..." name="Horas">
        <br> <br>
        <label for="Sueldo"></label>
        <input id="Sueldo" type="text" placeholder="Ganancias por hora..." name="Sueldo">
        <br> <br>
        <button type="submit">Enviar</button>
</body>
</html>