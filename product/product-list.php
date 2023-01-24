<?php   
require "../lib/db.php";
require "../inc/nav.php";
 
$sql = "SELECT * FROM product";
$result = mysqli_query($db, $sql);
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de productos</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script>
        function confirmDelete(id) {
            var response = confirm("Estas seguro que deseas eliminarlo?");
            if(response) {
                window.location.href = 'product-delete.php?id='+id;
            }
        }
    </script>
</head>
<body>
    <table class="tabla">
        <tr>
            <th>Id</th>
            <th>Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Deshabilitado</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row["Id"] ?></td>
            <td><?php echo $row["Name"] ?></td>
            <td><?php echo $row["Price"] ?></td>
            <td><?php echo $row["Stock"] ?></td>
            <td><?php  if($row["Disabled"]) {echo("Si");}
            else {
                echo("No");
            } ?> </td>
            <td><a class="edit" href="product-edit.php?id=<?php echo $row["Id"] ?>">Editar</a></td>
            <td><a class="delete" href="javascript:confirmDelete(<?php echo $row["Id"] ?>)">Eliminar</a></td>
        </tr>
        <?php } ?>        
    </table>
    <br>
            <a class="enter_prod" href="product-new.php">Enter product</a>
    </body>
</html>
<?php
mysqli_free_result($result);
mysqli_close($db);
?>

