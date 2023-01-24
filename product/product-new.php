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
    <title>Listado de productos</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <form method="POST" action="save-new-product.php">
        <label for="Name">Nombre:</label>
        <input type="text" name="Name" />
        <br>
        <label for="Price">Precio:</label>
        <input type="text" name="Price" />
        <br>
        <label for="Stock">Cantidad:</label>
        <input type="text" name="Stock" />
        <br>
        <input class="send_button" type="submit" value="Ingresar producto"  />
    </form>        
</body>
</html>
