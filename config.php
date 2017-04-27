<?php
	$hostname = "localhost";
	$username = "root";
	$pass = "1234";
	$db = "test";

	$conn = mysqli_connect($hostname,$username,$pass,$db);
	$conn->set_charset("utf8");
?>