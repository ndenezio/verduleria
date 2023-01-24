<?php   
require "../lib/db.php";
require "../inc/nav.php";


// ********** SI VIENE DEL POST *******
if (isset($_POST["id"])) {
    // GUARDAR LOS CAMBIOS

    $user_id = $_POST["id"];
    $Name = $_POST["Name"];
    $Price = $_POST["Price"];
    $Stock = $_POST["Stock"];

    if (isset($_POST["Disabled"]) && $_POST["Disabled"] == "on") {
        $Disabled = 1;
    } else {
        $Disabled = 0;
    }
    
    $sql = "UPDATE product
            SET Name = '$Name',
                Price = '$Price',
                Stock = '$Stock',
                Disabled = '$Disabled'
             WHERE Id = ".$user_id;
    $result = mysqli_query($db, $sql);
    
    header("Location: index.php");
}
// ********** FIN SI VIENE DEL POST *******

$user_id = $_GET["id"];
$sql = "SELECT * FROM product WHERE Id = ".$user_id;
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($result);
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar producto</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
        <form class="edit" method="POST">
            <label for="Name">Nombre:</label>
            <input type="text" name="Name" value="<?php echo $row["Name"] ?>" />
            <br>
            <label for="Price">Precio:</label>
            <input type="text" name="Price" value="<?php echo $row["Price"] ?>" />
            <br>
            <label for="Stock">Cantidad:</label>
            <input type="text" name="Stock" value="<?php echo $row["Stock"] ?>" />
            <br>
            <input type="hidden" name="id" value="<?php echo $row["Id"] ?>" />
            <br>
            <label for="Disabled">Desabilitado</label>
            <input type="checkbox" name="Disabled" <?php if($row["Disabled"]) echo("checked") ?>>
            <br>

            <input class="send_button" type="submit" value="Ingresar producto"  />
        </form>       
</body>
</html>
