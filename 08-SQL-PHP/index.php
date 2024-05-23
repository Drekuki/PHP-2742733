<?php

try {
    $conexion = new PDO ("mysql: host=localhost; dbname=colegio",'root', '');
    echo "Conexion OK";
} catch (PDOException $e) {
    echo "Error:  " . $e->getMessage();
}

echo "<br>";

//vamos a preparar un sentencia SQL y la guardamos en una variable

$statement = $conexion->prepare("INSERT INTO `estudiantes`(`ID`, Nombre`, `Edad`) VALUES (NULL 'Tomas','18')");

//Ejercutar el statement

$statement->execute();

//fecht () regresa solo un resultado      fectAll () regresa todos los resultados

$statement = $statement->fetchAll();

//print_r($statement);

foreach ($statement as $item) {
    echo($item['ID'] . ' - ' . $item['Nombre'] . '<br>');
}

?>