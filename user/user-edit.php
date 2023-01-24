<?php   
require "../lib/db.php";
require "../inc/nav.php";


// ********** SI VIENE DEL POST *******
if (isset($_POST["id"])) {
    // GUARDAR LOS CAMBIOS

    $user_id = $_POST["id"];
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    
    $sql = "UPDATE user 
            SET FirstName = '$firstName',
                LastName = '$lastName',
                Email = '$email'
             WHERE Id = ".$user_id;
    $result = mysqli_query($db, $sql);
    
    header("Location: index.php");
}
// ********** FIN SI VIENE DEL POST *******

$user_id = $_GET["id"];
$sql = "SELECT * FROM user WHERE Id = ".$user_id;
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($result);
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
    <form method="POST">
        <label for="firstName">Nombre:</label>
        <input type="text" name="firstName" value="<?php echo $row["FirstName"] ?>" />
        <br>
        <label for="firstName">Apellido:</label>
        <input type="text" name="lastName" value="<?php echo $row["LastName"] ?>" />
        <br>
        <label for="email">Email:</label>
        <input type="text" name="email" value="<?php echo $row["Email"] ?>" />
        <br>
        <input type="hidden" name="id" value="<?php echo $row["Id"] ?>" />

        <input class="send_button" type="submit" value="Ingresar usuario"  />

    </form>        
</body>
</html>
