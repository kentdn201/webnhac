<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="id14992072_music";

	$conn= mysqli_connect($servername,$username,$password,$dbname);

	if(!$conn)
	{
		die("Connect Fail". mysql_connect_error());
	}
?>