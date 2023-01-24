<?php
require "../lib/db.php";
require "../inc/nav.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar usuario</title>
    <link rel="stylesheet" type="text/css" href="../styles/styles.css">
</head>
<body>
    <form method="POST" action="save-new-user.php">
        <label for="firstName">Nombre:</label>
        <input type="text" name="firstName"/>
        <br>
        <label for="firstName">Apellido:</label>
        <input type="text" name="lastName"/>
        <br>
        <label for="email">Email:</label>
        <input type="text" name="email"/>
        <br>
        <input type="hidden" name="id"/>

        <input type="submit" value="Enviar"  />
    </form>        
</body>
</html>
