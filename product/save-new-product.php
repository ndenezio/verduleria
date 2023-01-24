<?php   
require "../lib/db.php";
require "../inc/nav.php";

 
$Name = $_POST["Name"];
$Price = $_POST["Price"];
$Stock = $_POST["Stock"];

$sql = "INSERT INTO product (Name, Price, Stock) VALUES ('$Name', '$Price', '$Stock')";
$result = mysqli_query($db, $sql);

header("Location: index.php");
?> 