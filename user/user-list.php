<?php   
require "../lib/db.php";
require "../inc/nav.php";
 
$sql = "SELECT * FROM user";
$result = mysqli_query($db, $sql);
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de usuarios</title>
    <link rel="stylesheet" type="text/css" href="../styles/styles.css">
</head>
<body>
    <table class="tabla">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Mail</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row["Id"] ?></td>
            <td><?php echo $row["FirstName"] ?></td>
            <td><?php echo $row["LastName"] ?></td>
            <td><?php echo $row["Email"] ?></td>
            <td><a href="user-edit.php?id=<?php echo $row["Id"] ?>">Editar</a></td>
            <td><a href="user-delete.php?id=<?php echo $row["Id"] ?>">Eliminar</a></td>
        </tr>
        <?php } ?>        
    </table>
    <br>
    <a href="user-new.php" class="enter_prod">Nuevo usuario</a>
</body>
</html>
<?php
mysqli_free_result($result);
mysqli_close($db);
?>