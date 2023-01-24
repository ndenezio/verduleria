<?php   
require "../lib/db.php";
require "../inc/nav.php";


$user_id = $_GET["id"];
$sql = "DELETE FROM product WHERE Id = ".$user_id;
$result = mysqli_query($db, $sql);

header("Location: index.php");
?> 