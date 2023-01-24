<?php   
require "../lib/db.php";
require "../inc/nav.php";

 
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$email = $_POST["email"];

$sql = "INSERT INTO user (FirstName, LastName, Email) VALUES ('$firstName', '$lastName', '$email')";
$result = mysqli_query($db, $sql);

header("Location: index.php");
?> 