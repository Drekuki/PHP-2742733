<?php

// superglobals GET y POST

$username = $_POST['username'];
$useremail = $_POST['useremail'];

echo $username;
echo '<br>';
echo $useremail;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: <?php echo $_POST['color'] ?>;
        }
    </style>
</head>
<body>
    <br> <br>
    <form action="index.php" method="post">
        <label for="username">Username</label>
        <input id="username" type="text" placeholder="Username..." name="username">
        <br> <br>
        <label for="useremail" require>Useremail</label>
        <input id="useremail" type="email" placeholder="Useremail..." require name="useremail">
        <br> <br>
        <label for="color">color</label>
        <input id="color" type="text" name="color" placeholder="color para el fondo...">
        <button type="submit">Enviar</button>
    </form>

</body>
</html>