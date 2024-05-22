<?php

//SQL

//1.SQL Select
//SELECT Nombre, Materia FROM profesores;
//Selecciona los nombres y las materias de los profesores.

//2.SQL Select Distinct
//SELECT DISTINCT Materia FROM profesores;
//Selecciona materias sin repetir datos de los profesores.

//3.SQL Where
//SELECT * FROM estudiantes WHERE Grado='11';
//Filtra a todos los estudiantes en el grado 11.

//4.SQL Order by
//SELECT * FROM estudiantes ORDER BY Edad;
//Filtra a todos los estudiantes del menor al mayor por edad.

//5.SQL And
//SELECT * FROM estudiantes WHERE Grado = '10' AND Nombre LIKE 'S%';
//Filtra a los estudiantes que esten en decimo y que sus nombres empiecen por "S".

//6.SQL Or
//SELECT * FROM profesores WHERE `Estado Civil` = 'Casado' OR `Estado Civil` = 'Soltero';
//Filtra a los a los profesores por su estado civil, en este caso casados o solteros.

//7.SQL Not
//SELECT * FROM profesores WHERE NOT `Estado Civil` = 'Casado';
//Filtra a los a los profesores por su estado civil, excluyendo en este caso a los casados.

//8.SQL Insert Into
//INSERT INTO `estudiantes`(`Nombre`, `Edad`) VALUES ('Tomas','18')
//Inserta en la tabla existente una nueva columna totalmente nueva con datos suministrados.

//9.SQL Null Values
//SELECT Nombre FROM estudiantes WHERE Nombre IS NOT NULL;
//Selecciona los valores que no sean NULL.

//10.SQL Update
//UPDATE `estudiantes` SET `Edad`= '15' WHERE `ID` = 2;
//Actualiza los datos ya existentes de la tabla.

//11.SQL Delete
//DELETE FROM `estudiantes` WHERE `Nombre`= 'Yurley';
//Elimina los datos ya existentes de la tabla.

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>