<?php
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "tunesource2";
$conn = mysqli_connect($servername, $username, $pass, $dbname);
if(!$conn){
	die(" connection error"). mysqli_connect_error();
}
echo "";
?>
