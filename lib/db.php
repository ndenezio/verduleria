<?php   
$host = "localhost";
$username = "root";
$passwd = "";
$dbname = "verduleria";

$db = mysqli_connect($host, $username, $passwd, $dbname);
 
if (mysqli_connect_errno())
{
echo "Connection Failed; " . mysqli_connect_error();
}
?>